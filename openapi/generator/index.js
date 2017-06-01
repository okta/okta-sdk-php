const _ = require('lodash');
_.mixin(require("lodash-inflection"));

const php = module.exports;

function getType(obj) {
  switch (obj.commonType) {
    case 'dateTime':
      return String.raw`\Carbon\Carbon|null`;
    case 'object':
      return obj.model;
    default:
      return obj.commonType;
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
    const ref = '$this->get' + _.upperFirst(_.camelCase(argPair.src)) + '()';
    path = path.replace(`{${argPair.dest}}`, `{${ref}}`);
  }
  return `${path}`;
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

php.process = ({spec, operations, models, handlebars}) => {
  const templates = [];

  for (let model of models) {

    // Order the properties by length
    model.properties = _.sortBy(model.properties, [p => p.propertyName.length]);



    if(model.tags[0]) {
        tag = _.pluralize(model.tags[0]);
    }
    model.namespace = tag || 'Shared';

    templates.push({
      src: 'templates/model.php.hbs',
      dest: `${model.namespace}/${model.modelName}.php`,
      context: model
    });
  }

  handlebars.registerHelper({
    getType,
    getAccessMethodType,
    getMethodPath,
    getMethodParams,
    getMethodRequestParams,
    getMethodArrayName
  });

  return templates;
};
