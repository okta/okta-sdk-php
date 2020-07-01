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
            self::ID
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
            self::NAME
        );
    }
    
    /**
     * Get the Type.
     *
     * @param mixed $type The type to set.
     * @return \Okta\Template\SmsTemplateType
     */
    function getType() : \Okta\Template\SmsTemplateType
    {
        return $this->getProperty(
            self::TYPE
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
            self::TEMPLATE
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

    /**
     * Adds a new custom SMS template to your organization.
     */
    function create() : \Okta\Template\SmsTemplate 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/templates/sms"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($this)
                ->executeRequest();
        return new \Okta\Template\SmsTemplate(null, $body);
    }
    /**
     * Fetches a specific template by `id`
     */
    function read($templateId) : \Okta\Template\SmsTemplate 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/templates/sms/${templateId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Template\SmsTemplate(null, $body);
    }
    /**
     * Updates the SMS template.
     */
    function update() : \Okta\Template\SmsTemplate 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/templates/sms/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->setRequestBody($this)
                ->executeRequest();
        return new \Okta\Template\SmsTemplate(null, $body);
    }
    /**
     * Removes an SMS template.
     */
    function delete()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/templates/sms/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Updates only some of the SMS template properties:
     */
    function partialUpdate() : \Okta\Template\SmsTemplate 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/templates/sms/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($this)
                ->executeRequest();
        return new \Okta\Template\SmsTemplate(null, $body);
    }

}