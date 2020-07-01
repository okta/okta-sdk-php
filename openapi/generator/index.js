const _ = require('lodash');
_.mixin(require('lodash-inflection'));
const fs = require('fs');
const util = require('util');

const php = module.exports;

// Return the full namespaced typehint for a $ref
function buildFullClassnameFromPropertyRef(property) {
  const ref = property['$ref'].split("/").pop();
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

function buildFullClassname(tag, cls) {
  return "\\Okta\\" + tag + "\\" + cls;
}

// Get the PHP safe return type for the property
function returnType(property) {
  switch (property.commonType) {
    case 'dateTime':
      return String.raw`\Carbon\Carbon`;
    case 'object':
      if(property['$ref']) {
        return buildFullClassnameFromPropertyRef(property);
      }
      return String.raw`\stdClass`;
    case 'enum':
      if(property['$ref']) {
        return buildFullClassnameFromPropertyRef(property);
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

function methodArgumentBuilder(method) {
  const args = [];

  const operation = method.operation;

  operation.pathParams.forEach(param => {
    const matchingArgument = method.arguments.filter(argument => argument.dest === param.name)[0];
    if (!matchingArgument || !matchingArgument.src){
      args.push('$'+param.name);
    }
  });

  if (operation.queryParams.length) {
    args.push('array $queryParameters = []');
  }

  return args.join(', ');

}

function buildMethodUri(method) {
  let uri = method.operation.path;
  let replace = uri.match(/{.*?}/g);

  if(!replace) return uri;

  replace.forEach(orig => {
    const matchingArgument = method.arguments.filter(argument => argument.dest === orig.substring(1, orig.length-1))[0];
    if (!matchingArgument || !matchingArgument.src) {
      uri = uri.replace(orig, "$"+orig)
    } else {
      uri = uri.replace(orig, "\".$this->"+matchingArgument.src+".\"")
    }


  })

  return uri
}

function executeRequestBodyArgument(method) {
  const operation = method.operation;
  const arguments = method.arguments;
  let bodyArgument = null;

  operation.parameters.forEach(param => {
    const matchingArgument = arguments.filter(argument => argument.dest === param.name)[0];
    if(matchingArgument && matchingArgument.self) {
      bodyArgument = String.raw`$this`;
    }
  });
  return bodyArgument;
}


php.process = ({ spec, operations, models, handlebars }) => {
  php.spec = spec;
  const templates = [];

  for (let model of models) {
    model.properties = _.sortBy(model.properties, [p => p.propertyName.length]);

    templates.push({
      src: 'templates/model.php.hbs',
      dest: `${model.tags[0]}/${model.modelName}.php`,
      context: model
    })
  }


  handlebars.registerHelper({
    buildFullClassnameFromPropertyRef,
    getDefinition,
    returnType,
    modelExtends,
    buildFullClassname,
    getDefinitionTag,
    methodArgumentBuilder,
    executeRequestBodyArgument,
    buildMethodUri
  });

  handlebars.registerPartial('copyright', fs.readFileSync('generator/templates/partials/copyright.hbs', 'utf8'))

  /** Function Partials */
  handlebars.registerPartial('function_setProperty', fs.readFileSync('generator/templates/partials/functions/set_property.php.hbs', 'utf8'))
  handlebars.registerPartial('function_setDateTimeProperty', fs.readFileSync('generator/templates/partials/functions/set_datetime_property.php.hbs', 'utf8'))
  handlebars.registerPartial('function_setResourceProperty', fs.readFileSync('generator/templates/partials/functions/set_resource_property.php.hbs', 'utf8'))
  handlebars.registerPartial('function_getProperty', fs.readFileSync('generator/templates/partials/functions/get_property.php.hbs', 'utf8'))
  handlebars.registerPartial('function_getDateTimeProperty', fs.readFileSync('generator/templates/partials/functions/get_datetime_property.php.hbs', 'utf8'))
  handlebars.registerPartial('function_getResourceProperty', fs.readFileSync('generator/templates/partials/functions/get_resource_property.php.hbs', 'utf8'))
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
