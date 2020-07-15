<?php
/*********************************************************************************/
/**   Copyright 2017 - Present Okta, Inc.                                       **/
/**                                                                             **/
/**   Licensed under the Apache License, Version 2.0 (the "License");           **/
/**   you may not use this file except in compliance with the License.          **/
/**   You may obtain a copy of the License at                                   **/
/**                                                                             **/
/**        http://www.apache.org/licenses/LICENSE-2.0                           **/
/**                                                                             **/
/**   Unless required by applicable law or agreed to in writing, software       **/
/**   distributed under the License is distributed on an "AS IS" BASIS,         **/
/**   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  **/
/**   See the License for the specific language governing permissions and       **/
/**   limitations under the License.                                            **/
/*********************************************************************************/

/************************************************/
/** This file is auto-generated.  Do Not Edit! **/
/************************************************/

namespace Okta\Template;

class SmsTemplate extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const TYPE = 'type';
    const CREATED = 'created';
    const TEMPLATE = 'template';
    const LAST_UPDATED = 'lastUpdated';
    const TRANSLATIONS = 'translations';


    /**
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : SmsTemplate
    {
        $this->setProperty(
            self::NAME,
            $name
        );
    
        return $this;
    }
    
    /**
     * Set the Type.
     *
     * @param mixed $type The type to set.
     * @return self
     */
    function setType($type) : SmsTemplate
    {
        $this->setProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }
    
    /**
     * Set the Template.
     *
     * @param mixed $template The template to set.
     * @return self
     */
    function setTemplate($template) : SmsTemplate
    {
        $this->setProperty(
            self::TEMPLATE,
            $template
        );
    
        return $this;
    }
    
    /**
     * Set the Translations.
     *
     * @param mixed $translations The translations to set.
     * @return self
     */
    function setTranslations(\Okta\Template\SmsTemplateTranslations $translations) : SmsTemplate
    {
        $this->setResourceProperty(
            self::TRANSLATIONS,
            $translations
        );
    
        return $this;
    }

    /**
     * Get the Id.
     *
     * @param mixed $id The id to set.
     * @return string
     */
    function getId() : string
    {
        return $this->getProperty(
            self::ID,
        );
    }
    
    /**
     * Get the Name.
     *
     * @param mixed $name The name to set.
     * @return string
     */
    function getName() : string
    {
        return $this->getProperty(
            self::NAME,
        );
    }
    
    /**
     * Get the Type.
     *
     * @return \Okta\Template\SmsTemplateType
     */
    function getType() : \Okta\Template\SmsTemplateType
    {
        return $this->getEnumProperty(
            self::TYPE,
            \Okta\Template\SmsTemplateType::class,
        );
    }

    /**
     * Get the Created.
     *
     * @param mixed $created The created to set.
     * @return \Carbon\Carbon
     */
    function getCreated() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::CREATED
        );
    
        return $this;
    }

    /**
     * Get the Template.
     *
     * @param mixed $template The template to set.
     * @return string
     */
    function getTemplate() : string
    {
        return $this->getProperty(
            self::TEMPLATE,
        );
    }
    
    /**
     * Get the LastUpdated.
     *
     * @param mixed $lastUpdated The lastUpdated to set.
     * @return \Carbon\Carbon
     */
    function getLastUpdated() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::LAST_UPDATED
        );
    
        return $this;
    }

    /**
     * Get the Translations.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Template\SmsTemplateTranslations
     */
    function getTranslations(array $options = []) : \Okta\Template\SmsTemplateTranslations
    {
        return $this->getResourceProperty(
            self::TRANSLATIONS,
            \Okta\Template\SmsTemplateTranslations::class,
            $options
        );
    }


}