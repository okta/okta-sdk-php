<?php
/******************************************************************************
 * Copyright 2017 Okta, Inc.                                                  *
 *                                                                            *
 * Licensed under the Apache License, Version 2.0 (the "License");            *
 * you may not use this file except in compliance with the License.           *
 * You may obtain a copy of the License at                                    *
 *                                                                            *
 *      http://www.apache.org/licenses/LICENSE-2.0                            *
 *                                                                            *
 * Unless required by applicable law or agreed to in writing, software        *
 * distributed under the License is distributed on an "AS IS" BASIS,          *
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.   *
 * See the License for the specific language governing permissions and        *
 * limitations under the License.                                             *
 ******************************************************************************/

namespace Okta\Resource;

use Tightenco\Collect\Support\Arr;
use Okta\Resource\AbstractResource;
use Okta\DataStore\DefaultDataStore;
use Psr\Http\Message\ResponseInterface;
use Tightenco\Collect\Support\Collection as TCollection;

class Collection extends TCollection
{

    /**
     * The DataStore
     *
     * @var DefaultDataStore
     */
    protected $dataStore;

    /**
     * Response Model to use for items from nextSet call
     *
     * @var string
     */
    protected $responseModel;

    public function setDataStore(DefaultDataStore $ds): Collection
    {
        $this->dataStore = $ds;
        return $this;
    }

    public function setResponseModel(string $responseModel): Collection
    {
        $this->responseModel = $responseModel;
        return $this;
    }

    public function nextSet(): Collection
    {
        if(count($this->dataStore->getLastResponse()->getHeader("Link")) < 2) {
            return null;
        }

        $responseNextLink = $this->dataStore->getLastResponse()->getHeader("Link")[1];
        $nextLink = substr($responseNextLink, 1, strrpos($responseNextLink, ">") -1);
        $urlParts = parse_url($nextLink);
        parse_str($urlParts["query"], $query);

        $uri = $this->dataStore->buildUri(
            $urlParts["path"]
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($query)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new $this->responseModel(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel($this->responseModel);
        return $collection;

    }

    /**
     * Get an operator checker callback.
     *
     * @param  string  $key
     * @param  string  $operator
     * @param  mixed  $value
     * @return \Closure
     */
    protected function operatorForWhere($key, $operator = null, $value = null)
    {
        if (func_num_args() == 2) {
            $value = $operator;

            $operator = '=';
        }

        return function ($item) use ($key, $operator, $value) {

            $retrieved = $this->dataGet($item, $key);

            switch ($operator) {
                default:
                case '=':
                case '==':
                    return $retrieved == $value;
                case '!=':
                case '<>':
                    return $retrieved != $value;
                case '<':
                    return $retrieved < $value;
                case '>':
                    return $retrieved > $value;
                case '<=':
                    return $retrieved <= $value;
                case '>=':
                    return $retrieved >= $value;
                case '===':
                    return $retrieved === $value;
                case '!==':
                    return $retrieved !== $value;
            }
        };
    }

    /**
     * Get an item from an array or object using "dot" notation.
     *
     * @param  mixed   $target
     * @param  string|array  $key
     * @param  mixed   $default
     * @return mixed
     */
    protected function dataGet($target, $key, $default = null)
    {

        if (is_null($key)) {
            return $target;
        }

        $key = is_array($key) ? $key : explode('.', $key);

        while (($segment = array_shift($key)) !== null) {
            if (Arr::accessible($target) && Arr::exists($target, $segment)) {
                $target = $target[$segment];
            } elseif ((property_exists($target, $segment) &&
                    (is_object($target->{$segment}) ||
                    null !== $target->{$segment}))
            ) {
                $target = $target->{$segment};
            } elseif ($target instanceof AbstractResource) {
                $target = $target->getProperty($segment);
            } else {
                $target = value($default);
            }

            if (null === $target) {
                break;
            }
        }

        return $target;
    }
}
