const _ = require('lodash');
_.mixin(require('lodash-inflection'));

const php = module.exports;

function getType(obj) {
  switch (obj.commonType) {
    case 'dateTime':
      return String.raw`\Carbon\Carbon|null`;
    case 'object':
      return obj.model;
    case 'hash':
      return 'array';
    default:
      return obj.commonType;
  }
}

function getSafeType(obj) {
  switch (obj.commonType) {
    case 'dateTime':
      return '';
    case 'object':
      return `: ${obj.model}`;
    case 'hash':
      return ': array';
    default:
      return `: ${obj.commonType}`;
  }
}

function getAccessMethodType(obj) {
  switch (obj.commonType) {
    case 'dateTime':
      return 'getDateProperty';
    default:
      return 'getProperty';
  }
}

function getMethodPath(method) {
  let path = method.operation.path;
  for (let argPair of method.arguments) {
    const ref = `$this->get${_.upperFirst(_.camelCase(argPair.src))}()`;
    path = path.replace(`{${argPair.dest}}`, `{${ref}}`);
  }
  return path;
}

function getMethodParams(method) {
  // Get all query params with defaults
  let defaultQueryParams = method.operation.queryParams.filter(param => !!param.default);
  defaultQueryParams = _.sortBy(defaultQueryParams, 'name');

  const queryParamsStr = defaultQueryParams.reduce((acc, curr) => {
    let param = `$${curr.name} = ${curr.default}`;
    if (acc) {
      return `${acc} ${param}`;
    }
    return param;
  }, '');

  return queryParamsStr;
}

function getMethodParamsComment(method) {
  // Get all query params with defaults
  let defaultQueryParams = method.operation.queryParams.filter(param => !!param.default);
  defaultQueryParams = _.sortBy(defaultQueryParams, 'name');

  if (_.size(defaultQueryParams) > 0) {
    const queryParamsCommentStr = defaultQueryParams.reduce((acc, curr) => {
      let comment = '';

      switch (curr.default) {
        case true:
        case false:
          comment = `* @param bool $${curr.name} Sets the ${curr.name} flag.`;
      }

      return comment;
    }, '');

    return queryParamsCommentStr;
  }

  return '*';
}

function getMethodRequestParams(method) {
  let defaultQueryParams = method.operation.queryParams.filter(param => !!param.default);

  const path = method.operation.method.toUpperCase();

  if (!defaultQueryParams.length) {
    return `'${path}', $uri`;
  }

  const queryParamsStr = defaultQueryParams.reduce((acc, curr) => {
    let param = `'${curr.name}' => $${curr.name}`;
    if (acc) {
      return `${acc} ${param}`;
    }
    return param;
  }, '');

  return `'${path}', $uri, '', ['query' => [${queryParamsStr}]]`;
}

function getMethodArrayName(str) {
  return str.replace('list', 'get');
}

function getOperationReturnType(model) {
  if (model.operation.responseModel) {
    return model.operation.responseModel;
  }

  return 'void';
}

function getCrudMethodName(alias) {
  switch (alias) {
    case 'create':
      return 'create';
    case 'read':
      return 'find';
    case 'update':
      return 'save';
    case 'delete':
      return 'delete';
  }
}

function getCrudOperationPath(method) {
  let parts = _.split(method.operation.path, '/');
  return '/' + parts[3];
}

php.process = ({ spec, operations, models, handlebars }) => {
  const templates = [];

  const modelMap = {};
  const namespaces = [];

  for (let model of models) {
    // Order the properties by length
    model.properties = _.sortBy(model.properties, [p => p.propertyName.length]);

    model.namespace = 'Shared';

    if (model.tags[0]) {
      model.namespace = _.pluralize(model.tags[0]);
      namespaces.push(model.namespace);
    }

    modelMap[model.modelName] = model;
  }

  for (let model of models) {

    model.namespacedModels = [];
    model.crudOperations = [];

    if (model.methods) {
      for (let method of model.methods) {
        const responseModel = method.operation.responseModel;

        if (modelMap[responseModel] && model.namespace !== modelMap[responseModel].namespace) {
          model.namespacedModels.push(modelMap[responseModel]);
        }
      }
    }

    if (model.crud) {
      for (let crud of model.crud) {
        model.crudOperations.push(crud);
      }
    }

    templates.push({
      src: 'templates/model.php.hbs',
      dest: `${model.namespace}/${model.modelName}.php`,
      context: model
    });
  }

  for (let namespace of _.uniqBy(namespaces)) {
    templates.push({
      src: 'templates/collection.php.hbs',
      dest: `${namespace}/Collection.php`,
      context: { namespace: `${namespace}` }
    });
  }

  handlebars.registerHelper({
    getType,
    getSafeType,
    getAccessMethodType,
    getMethodPath,
    getMethodParams,
    getMethodRequestParams,
    getMethodArrayName,
    getOperationReturnType,
    getMethodParamsComment,
    getCrudMethodName,
    getCrudOperationPath
  });

  return templates;
};
