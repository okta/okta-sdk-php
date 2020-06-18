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

namespace Okta\Templates;

class SmsTemplate extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const TYPE = 'type';
    const CREATED = 'created';
    const TEMPLATE = 'template';
    const LAST_UPDATED = 'lastUpdated';
    const TRANSLATIONS = 'translations';


    public function create($query = [])
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->createResource(
                    "/templates",
                    $this,
                    \Okta\Templates\SmsTemplate::class,
                    $query
                );
    }

    public function get($query)
    {
        return \Okta\Client::getInstance()
                    ->getDataStore()
                    ->getResource(
                        $query,
                        \Okta\Templates\SmsTemplate::class,
                        "/templates"
                    );
    }
        
    public function save()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->saveResource(
                    "/templates",
                    $this,
                    \Okta\Templates\SmsTemplate::class
                );
    }

    public function delete()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->deleteResource(
                    "/templates",
                    $this
                );
    }
        
    /**
     * Get the id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->getProperty(self::ID);
    }

    /**
     * Get the name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->getProperty(self::NAME);
    }

    /**
    * Set the name.
    *
    * @param mixed $name The value to set.
    * @return self
    */
    public function setName($name)
    {
        $this->setProperty(
            self::NAME,
            $name
        );

        return $this;
    }

    /**
     * Get the type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->getProperty(self::TYPE);
    }

    /**
    * Set the type.
    *
    * @param mixed $type The value to set.
    * @return self
    */
    public function setType($type)
    {
        $this->setProperty(
            self::TYPE,
            $type
        );

        return $this;
    }

    /**
     * Get the created.
     *
     * @return \Carbon\Carbon|null
     */
    public function getCreated()
    {
        return $this->getDateProperty(self::CREATED);
    }

    /**
     * Get the template.
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->getProperty(self::TEMPLATE);
    }

    /**
    * Set the template.
    *
    * @param mixed $template The value to set.
    * @return self
    */
    public function setTemplate($template)
    {
        $this->setProperty(
            self::TEMPLATE,
            $template
        );

        return $this;
    }

    /**
     * Get the lastUpdated.
     *
     * @return \Carbon\Carbon|null
     */
    public function getLastUpdated()
    {
        return $this->getDateProperty(self::LAST_UPDATED);
    }

    /**
     * Get the translations.
     *
     * @return \Okta\Templates\SmsTemplateTranslations
     */
    public function getTranslations(array $options = []): \Okta\Templates\SmsTemplateTranslations
    {
        return $this->getResourceProperty(
            self::TRANSLATIONS,
            \Okta\Templates\SmsTemplateTranslations::class,
            $options
        );
    }


    /**
     * Set the translations.
     *
     * @param \Okta\Templates\SmsTemplateTranslations $translations The SmsTemplateTranslations instance.
     * @return self
     */
    public function setTranslations(\Okta\Templates\SmsTemplateTranslations $translations)
    {
        $this->setResourceProperty(
            self::TRANSLATIONS,
            $translations
        );

        return $this;
    }


    /**
    * Updates only some of the SMS template properties:
    *
    *
    * @return mixed|null
    */
    public function partialUpdate(SmsTemplate $smsTemplate)
    {
        $uri = "/api/v1/templates/sms/{$this->getId()}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $smsTemplate);

        return new \Okta\Templates\SmsTemplate(null, $body);
    }
}
