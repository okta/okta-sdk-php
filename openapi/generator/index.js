const _ = require('lodash');
_.mixin(require('lodash-inflection'));
const fs = require('fs');
const util = require('@okta/openapi/lib/util');
const jutil = require('util');

const php = module.exports;

// Return the full namespaced typehint for a $ref
function buildFullClassnameFromPropertyRef(propertyRef) {
  const ref = propertyRef.split("/").pop();
  const def = getDefinition(ref);

  return buildFullClassname(def['x-okta-tags'][0], ref);
}

// Get the definition from the spec by name
function getDefinition(definitionName) {
  return php.spec.definitions[definitionName]
}

function getDefinitionTag(definitionName) {
  const def = getDefinition(definitionName);
  return def['x-okta-tags'][0];
}

// Returns the full namespaced classname
function buildFullClassname(tag, cls) {
  return "\\Okta\\" + tag + "\\" + cls;
}

// Gets a list of all model properties for a model
function modelProperties(model) {
  const modelProperties = [];

  model.properties.forEach(prop => {
    modelProperties.push(prop);
  });

  if(model.extends) {
    const def = getDefinition(model.extends)
    if(def.properties !== undefined && def['x-openapi-v3-discriminator']) {
      for(let [propName, prop] of Object.entries(def.properties)) {
        prop.propertyName = propName;
        prop.commonType = util.getCommonType(prop);
        modelProperties.push(prop);
      }
    }
  }

  const seen = {};
  const output = modelProperties.filter( item => {
     if(seen[item.propertyName]) {
        return false;
     }
     seen[item.propertyName] = true;
     return true;
  } );


  return removeParentPropertyFix(output, model);
}

// Fix property for things that list a parent that shouldnt
function removeParentPropertyFix(propList, model) {
  const modelIgnoreParentProps = [
    'SchemeApplicationCredentials',
    'BasicApplicationSettings',
    'BookmarkApplicationSettings',
    'SecurePasswordStoreApplicationSettings',
    'SwaApplicationSettings',
    'SwaThreeFieldApplicationSettings',
    'WsFederationApplicationSettings',
  ]
  if(modelIgnoreParentProps.indexOf(model.modelName) >= 0) {

    const parentDef = getDefinition(model.extends);
    const parentProps = parentDef.properties;
    // if property exists on parent, remove from propList
    for(let [ind, val] of Object.entries(parentProps)) {
      propList.forEach((prop, propIndex) => {
        if(ind == prop.propertyName) {
          let test = propList.splice(propIndex, 1);
        }
      })
    }
  }
  return propList;
}

// Get the PHP safe return type for the property
function returnType(property) {
  switch (property.commonType) {
    case 'dateTime':
      return String.raw`\Carbon\Carbon`;
    case 'object':
      if(property['$ref']) {
        return buildFullClassnameFromPropertyRef(property['$ref']);
      }
      return String.raw`\stdClass`;
    case 'enum':
      if(property['$ref']) {
        return buildFullClassnameFromPropertyRef(property['$ref']);
      }
      return String.raw`string`;
    case 'hash':
      return String.raw`\stdClass`;
    case 'boolean':
      return String.raw`bool`;
    case 'integer':
      return String.raw`int`;
    default:
      return property.commonType;
  }
}

// Return the full namespaced Resource a model should extend
function modelExtends(model) {
  if (model.extends) {
    const def = getDefinition(model.extends);
    return buildFullClassname(def['x-okta-tags'][0], model.extends);
  }

  if (model.enum) {
    return String.raw`\Okta\Utilities\Enum`;
  }

  return String.raw`\Okta\Resource\AbstractResource`;
}

function isEnumProperty(prop) {
  if (prop.commonType == "enum" && prop.$ref) {
    return true;
  }

  if (prop.$ref) {
    const propref = prop.$ref.split("/").pop();
    const def = getDefinition(propref);

    if (def.enum) {
      return true;
    }
  }

  return false;
}

function methodArgumentBuilder(operation) {

  const args = [];
  let hasQueryParams = false;
  let hasHeaderParams = false;

  operation.parameters.forEach(param => {
    if(param.in == "query") {
      hasQueryParams = true;
      return;
    }
    if(param.in == "header") {
      hasHeaderParams = true;
      return;
    }

    let paramOptional = " = null";
    if(param.required) {
      paramOptional = "";
    }

    if(param.in == "body" && param.schema) {
      const resourceType = buildFullClassnameFromPropertyRef(param.schema['$ref'])

      args.push(resourceType + ' $'+param.name + paramOptional)
    } else {
        args.push('$'+param.name + paramOptional);
    }
  });

  if (hasHeaderParams) {
    args.push('array $headers = []');
  }

  if (hasQueryParams) {
    args.push('array $queryParameters = []');
  }

  return args.join(', ');

}

function responseModelRequiresResolution(responseModel) {
  def = getDefinition(responseModel)
  return !!def['x-openapi-v3-discriminator']
}

function getMethodReturnType(operation) {
  if(operation.isArray) {
    return String.raw`\Okta\Resource\Collection`;
  }
  return buildFullClassname(getDefinitionTag(operation.responseModel), operation.responseModel);
}

// Builds the URI for the api call
function buildMethodUri(operation) {
  let uri = operation.path;
  let replace = uri.match(/{.*?}/g);

  if(!replace) return uri;

  replace.forEach(orig => {
      uri = uri.replace(orig, "$"+orig)
  })

  return uri
}

function executeRequestBodyArgument(operation) {
  const arguments = operation.arguments;
  let bodyArgument = null;

  operation.parameters.forEach(param => {
      if(param.in == "body") {
        bodyArgument = '$'+param.name
      }
  });
  return bodyArgument;
}

function safeProperty(property) {
  if(property == "x5t#S256") {
    property = "x5tS256"
  }
  return property
}


php.process = ({ spec, operations, models, handlebars }) => {
  php.spec = spec;
  const templates = [];
  const taggedOps = [];

  for (let model of models) {
    model.properties = _.sortBy(model.properties, [p => p.propertyName.length]);
    templates.push({
      src: 'templates/model.php.hbs',
      dest: `${model.tags[0]}/${model.modelName}.php`,
      context: model
    })
  }

  for (let operation of operations) {
    taggedOps[operation.tags[0]] = taggedOps[operation.tags[0]] || []

    for (let model of models) {
      if(model.crud) {
        for (let crud of model.crud) {
          if(operation.operationId == crud.operation.operationId) {
            operation['alias'] = crud;
          }
        }
      }

      if(model.methods) {
        for (let method of model.methods) {
          if(operation.operationId == method.operation.operationId) {
            operation['alias'] = method;
          }
        }
      }
    }

    taggedOps[operation.tags[0]].push(operation);

  }

  for (let op in taggedOps) {
    templates.push({
      src: 'templates/opClient.php.hbs',
      dest: `Clients/${op}.php`,
      context: {
        name: op,
        operation: taggedOps[op]
      }
    })
  }

  templates.push({
    src: 'templates/okta.php.hbs',
    dest: `Okta.php`,
    context: {
      ops: Object.keys(taggedOps)
    }
  })



  handlebars.registerHelper({
    buildFullClassnameFromPropertyRef,
    getDefinition,
    returnType,
    modelExtends,
    buildFullClassname,
    getDefinitionTag,
    methodArgumentBuilder,
    executeRequestBodyArgument,
    buildMethodUri,
    modelProperties,
    getMethodReturnType,
    responseModelRequiresResolution,
    isEnumProperty,
    safeProperty
  });

  handlebars.registerPartial('copyright', fs.readFileSync('generator/templates/partials/copyright.hbs', 'utf8'))

  /** Function Partials */
  handlebars.registerPartial('function_setProperty', fs.readFileSync('generator/templates/partials/functions/set_property.php.hbs', 'utf8'))
  handlebars.registerPartial('function_setDateTimeProperty', fs.readFileSync('generator/templates/partials/functions/set_datetime_property.php.hbs', 'utf8'))
  handlebars.registerPartial('function_setResourceProperty', fs.readFileSync('generator/templates/partials/functions/set_resource_property.php.hbs', 'utf8'))
  handlebars.registerPartial('function_setEnumProperty', fs.readFileSync('generator/templates/partials/functions/set_enum_property.php.hbs', 'utf8'))
  handlebars.registerPartial('function_getProperty', fs.readFileSync('generator/templates/partials/functions/get_property.php.hbs', 'utf8'))
  handlebars.registerPartial('function_getDateTimeProperty', fs.readFileSync('generator/templates/partials/functions/get_datetime_property.php.hbs', 'utf8'))
  handlebars.registerPartial('function_getResourceProperty', fs.readFileSync('generator/templates/partials/functions/get_resource_property.php.hbs', 'utf8'))
  handlebars.registerPartial('function_getEnumProperty', fs.readFileSync('generator/templates/partials/functions/get_enum_property.php.hbs', 'utf8'))
  handlebars.registerPartial('function_default_operation', fs.readFileSync('generator/templates/partials/functions/default_operation.php.hbs', 'utf8'))


  createdFiles = []
  for (let template of templates) {
    createdFiles.push(template['dest']);
  }

  fs.writeFile("generator/createdFiles.json", JSON.stringify(createdFiles), function(error) {
    console.log(error);
  });

  return templates;
};
