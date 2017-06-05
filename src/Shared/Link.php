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

namespace Okta\Shared;

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
     * Get the rel.
     *
     * @return string
     */
    public function getRel(): string
    {
        return $this->getProperty(self::REL);
    }
    
    /**
     * Get the href.
     *
     * @return string
     */
    public function getHref(): string
    {
        return $this->getProperty(self::HREF);
    }
    
    /**
     * Get the name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->getProperty(self::NAME);
    }
    
    /**
     * Get the type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->getProperty(self::TYPE);
    }
    
    /**
     * Get the hints.
     *
     * @return array
     */
    public function getHints(): array
    {
        return $this->getProperty(self::HINTS);
    }
    
    /**
     * Get the title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->getProperty(self::TITLE);
    }
    
    /**
     * Get the method.
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->getProperty(self::METHOD);
    }
    
    /**
     * Get the templated.
     *
     * @return boolean
     */
    public function getTemplated(): boolean
    {
        return $this->getProperty(self::TEMPLATED);
    }
}
