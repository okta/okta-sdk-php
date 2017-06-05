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

namespace Okta\Apps;

use Okta\Resource\AbstractResource;

class PublicAppInstance extends AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const LABEL = 'label';
    const LINKS = '_links';
    const STATUS = 'status';
    const CREATED = 'created';
    const FEATURES = 'features';
    const SETTINGS = 'settings';
    const EMBEDDED = '_embedded';
    const LICENSING = 'licensing';
    const SIGN_ON_MODE = 'signOnMode';
    const VISIBILITY = 'visibility';
    const CREDENTIALS = 'credentials';
    const LAST_UPDATED = 'lastUpdated';
    const ACCESSIBILITY = 'accessibility';


    /**
     * Get the id.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->getProperty(self::ID);
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
     * Get the label.
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->getProperty(self::LABEL);
    }
    
    /**
     * Get the _links.
     *
     * @return array
     */
    public function getLinks(): array
    {
        return $this->getProperty(self::LINKS);
    }
    
    /**
     * Get the status.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->getProperty(self::STATUS);
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
     * Get the features.
     *
     * @return array
     */
    public function getFeatures(): array
    {
        return $this->getProperty(self::FEATURES);
    }
    
    /**
     * Get the settings.
     *
     * @return PublicAppInstanceSettings
     */
    public function getSettings(array $options = []): PublicAppInstanceSettings
    {
        return $this->getResourceProperty(
                        self::SETTINGS,
                        PublicAppInstanceSettings::class,
                        $options
                    );
    }

    /**
     * Set the settings.
     *
     * @param PublicAppInstanceSettings $settings The PublicAppInstanceSettings instance.
     * @return self
     */
    public function setSettings(PublicAppInstanceSettings $settings)
    {
        $this->setResourceProperty(
                        self::SETTINGS,
                        $settings
                    );
        
        return $this;
    }
    
    /**
     * Get the _embedded.
     *
     * @return array
     */
    public function getEmbedded(): array
    {
        return $this->getProperty(self::EMBEDDED);
    }
    
    /**
     * Get the licensing.
     *
     * @return PublicAppInstanceLicensing
     */
    public function getLicensing(array $options = []): PublicAppInstanceLicensing
    {
        return $this->getResourceProperty(
                        self::LICENSING,
                        PublicAppInstanceLicensing::class,
                        $options
                    );
    }

    /**
     * Set the licensing.
     *
     * @param PublicAppInstanceLicensing $licensing The PublicAppInstanceLicensing instance.
     * @return self
     */
    public function setLicensing(PublicAppInstanceLicensing $licensing)
    {
        $this->setResourceProperty(
                        self::LICENSING,
                        $licensing
                    );
        
        return $this;
    }
    
    /**
     * Get the signOnMode.
     *
     * @return string
     */
    public function getSignOnMode(): string
    {
        return $this->getProperty(self::SIGN_ON_MODE);
    }
    
    /**
     * Get the visibility.
     *
     * @return PublicAppInstanceVisibility
     */
    public function getVisibility(array $options = []): PublicAppInstanceVisibility
    {
        return $this->getResourceProperty(
                        self::VISIBILITY,
                        PublicAppInstanceVisibility::class,
                        $options
                    );
    }

    /**
     * Set the visibility.
     *
     * @param PublicAppInstanceVisibility $visibility The PublicAppInstanceVisibility instance.
     * @return self
     */
    public function setVisibility(PublicAppInstanceVisibility $visibility)
    {
        $this->setResourceProperty(
                        self::VISIBILITY,
                        $visibility
                    );
        
        return $this;
    }
    
    /**
     * Get the credentials.
     *
     * @return PublicAppInstanceCredentials
     */
    public function getCredentials(array $options = []): PublicAppInstanceCredentials
    {
        return $this->getResourceProperty(
                        self::CREDENTIALS,
                        PublicAppInstanceCredentials::class,
                        $options
                    );
    }

    /**
     * Set the credentials.
     *
     * @param PublicAppInstanceCredentials $credentials The PublicAppInstanceCredentials instance.
     * @return self
     */
    public function setCredentials(PublicAppInstanceCredentials $credentials)
    {
        $this->setResourceProperty(
                        self::CREDENTIALS,
                        $credentials
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
     * Get the accessibility.
     *
     * @return PublicAppInstanceAccessibility
     */
    public function getAccessibility(array $options = []): PublicAppInstanceAccessibility
    {
        return $this->getResourceProperty(
                        self::ACCESSIBILITY,
                        PublicAppInstanceAccessibility::class,
                        $options
                    );
    }

    /**
     * Set the accessibility.
     *
     * @param PublicAppInstanceAccessibility $accessibility The PublicAppInstanceAccessibility instance.
     * @return self
     */
    public function setAccessibility(PublicAppInstanceAccessibility $accessibility)
    {
        $this->setResourceProperty(
                        self::ACCESSIBILITY,
                        $accessibility
                    );
        
        return $this;
    }
    
}
