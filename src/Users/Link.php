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

namespace Okta\Users;

use Okta\Resource\AbstractResource;

class Link extends AbstractResource
{
    const REL = 'rel';
    const HREF = 'href';
    const NAME = 'name';
    const TYPE = 'type';
    const HINTS = 'hints';
    const TITLE = 'title';
    const METHOD = 'method';
    const TEMPLATED = 'templated';

    /**
     * @return string
     */
    public function getRel()
    {
        return $this->getProperty(self::REL);
    }
    
    /**
     * @return string
     */
    public function getHref()
    {
        return $this->getProperty(self::HREF);
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty(self::NAME);
    }
    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty(self::TYPE);
    }
    
    /**
     * @return hash
     */
    public function getHints()
    {
        return $this->getProperty(self::HINTS);
    }
    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getProperty(self::TITLE);
    }
    
    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->getProperty(self::METHOD);
    }
    
    /**
     * @return boolean
     */
    public function getTemplated()
    {
        return $this->getProperty(self::TEMPLATED);
    }
}
