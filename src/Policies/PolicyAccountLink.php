<?php
/*******************************************************************************
 * Copyright 2017 Okta, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 ******************************************************************************/

namespace Okta\Policies;

class PolicyAccountLink extends \Okta\Resource\AbstractResource
{
    const ACTION = 'action';
    const FILTER = 'filter';



    /**
     * Get the action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->getProperty(self::ACTION);
    }

    /**
    * Set the action.
    *
    * @param mixed $action The value to set.
    * @return self
    */
    public function setAction($action)
    {
        $this->setProperty(
            self::ACTION,
            $action
        );

        return $this;
    }

    /**
     * Get the filter.
     *
     * @return \Okta\Policies\PolicyAccountLinkFilter
     */
    public function getFilter(array $options = []): \Okta\Policies\PolicyAccountLinkFilter
    {
        return $this->getResourceProperty(
            self::FILTER,
            \Okta\Policies\PolicyAccountLinkFilter::class,
            $options
        );
    }


    /**
     * Set the filter.
     *
     * @param \Okta\Policies\PolicyAccountLinkFilter $filter The PolicyAccountLinkFilter instance.
     * @return self
     */
    public function setFilter(\Okta\Policies\PolicyAccountLinkFilter $filter)
    {
        $this->setResourceProperty(
            self::FILTER,
            $filter
        );

        return $this;
    }
}
