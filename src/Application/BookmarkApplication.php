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

namespace Okta\Application;

class BookmarkApplication extends \Okta\Application\Application
{
    const NAME = 'name';
    const SETTINGS = 'settings';

    private $name = 'bookmark';

    /**
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : BookmarkApplication
    {
        $this->setProperty(
            self::NAME,
            $name
        );
    
        return $this;
    }
    
    /**
     * Set the Settings.
     *
     * @param mixed $settings The settings to set.
     * @return self
     */
    function setSettings(\Okta\Application\BookmarkApplicationSettings $settings) : BookmarkApplication
    {
        $this->setResourceProperty(
            self::SETTINGS,
            $settings
        );
    
        return $this;
    }

    /**
     * Set the Accessibility.
     *
     * @param mixed $accessibility The accessibility to set.
     * @return self
     */
    function setAccessibility(\Okta\Application\ApplicationAccessibility $accessibility) : BookmarkApplication
    {
        $this->setResourceProperty(
            self::ACCESSIBILITY,
            $accessibility
        );
    
        return $this;
    }

    /**
     * Set the Credentials.
     *
     * @param mixed $credentials The credentials to set.
     * @return self
     */
    function setCredentials(\Okta\Application\ApplicationCredentials $credentials) : BookmarkApplication
    {
        $this->setResourceProperty(
            self::CREDENTIALS,
            $credentials
        );
    
        return $this;
    }

    /**
     * Set the Features.
     *
     * @param mixed $features The features to set.
     * @return self
     */
    function setFeatures($features) : BookmarkApplication
    {
        $this->setProperty(
            self::FEATURES,
            $features
        );
    
        return $this;
    }
    
    /**
     * Set the Label.
     *
     * @param mixed $label The label to set.
     * @return self
     */
    function setLabel($label) : BookmarkApplication
    {
        $this->setProperty(
            self::LABEL,
            $label
        );
    
        return $this;
    }
    
    /**
     * Set the Licensing.
     *
     * @param mixed $licensing The licensing to set.
     * @return self
     */
    function setLicensing(\Okta\Application\ApplicationLicensing $licensing) : BookmarkApplication
    {
        $this->setResourceProperty(
            self::LICENSING,
            $licensing
        );
    
        return $this;
    }

    /**
     * Set the Profile.
     *
     * @param mixed $profile The profile to set.
     * @return self
     */
    function setProfile($profile) : BookmarkApplication
    {
        $this->setProperty(
            self::PROFILE,
            $profile
        );
    
        return $this;
    }
    
    /**
     * Set the SignOnMode.
     *
     * @return self
     */
    function setSignOnMode(\Okta\Application\ApplicationSignOnMode $signOnMode) : BookmarkApplication
    {
        $this->setEnumProperty(
            self::SIGN_ON_MODE,
            $signOnMode
        );
    
        return $this;
    }

    /**
     * Set the Visibility.
     *
     * @param mixed $visibility The visibility to set.
     * @return self
     */
    function setVisibility(\Okta\Application\ApplicationVisibility $visibility) : BookmarkApplication
    {
        $this->setResourceProperty(
            self::VISIBILITY,
            $visibility
        );
    
        return $this;
    }

    /**
     * Get the Name.
     *
     * @param mixed $name The name to set.
     * @return \stdClass
     */
    function getName() : \stdClass
    {
        return $this->getProperty(
            self::NAME,
        );
    }
    
    /**
     * Get the Settings.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\BookmarkApplicationSettings
     */
    function getSettings(array $options = []) : \Okta\Application\BookmarkApplicationSettings
    {
        return $this->getResourceProperty(
            self::SETTINGS,
            \Okta\Application\BookmarkApplicationSettings::class,
            $options
        );
    }

    /**
     * Get the Embedded.
     *
     * @param mixed $_embedded The _embedded to set.
     * @return \stdClass
     */
    function getEmbedded() : \stdClass
    {
        return $this->getProperty(
            self::EMBEDDED,
        );
    }
    
    /**
     * Get the Links.
     *
     * @param mixed $_links The _links to set.
     * @return \stdClass
     */
    function getLinks() : \stdClass
    {
        return $this->getProperty(
            self::LINKS,
        );
    }
    
    /**
     * Get the Accessibility.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\ApplicationAccessibility
     */
    function getAccessibility(array $options = []) : \Okta\Application\ApplicationAccessibility
    {
        return $this->getResourceProperty(
            self::ACCESSIBILITY,
            \Okta\Application\ApplicationAccessibility::class,
            $options
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
     * Get the Credentials.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\ApplicationCredentials
     */
    function getCredentials(array $options = []) : \Okta\Application\ApplicationCredentials
    {
        return $this->getResourceProperty(
            self::CREDENTIALS,
            \Okta\Application\ApplicationCredentials::class,
            $options
        );
    }

    /**
     * Get the Features.
     *
     * @param mixed $features The features to set.
     * @return array
     */
    function getFeatures() : array
    {
        return $this->getProperty(
            self::FEATURES,
        );
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
     * Get the Label.
     *
     * @param mixed $label The label to set.
     * @return string
     */
    function getLabel() : string
    {
        return $this->getProperty(
            self::LABEL,
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
     * Get the Licensing.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\ApplicationLicensing
     */
    function getLicensing(array $options = []) : \Okta\Application\ApplicationLicensing
    {
        return $this->getResourceProperty(
            self::LICENSING,
            \Okta\Application\ApplicationLicensing::class,
            $options
        );
    }

    /**
     * Get the Profile.
     *
     * @param mixed $profile The profile to set.
     * @return \stdClass
     */
    function getProfile() : \stdClass
    {
        return $this->getProperty(
            self::PROFILE,
        );
    }
    
    /**
     * Get the SignOnMode.
     *
     * @return \Okta\Application\ApplicationSignOnMode
     */
    function getSignOnMode() : \Okta\Application\ApplicationSignOnMode
    {
        return $this->getEnumProperty(
            self::SIGN_ON_MODE,
            \Okta\Application\ApplicationSignOnMode::class,
        );
    }

    /**
     * Get the Status.
     *
     * @param mixed $status The status to set.
     * @return string
     */
    function getStatus() : string
    {
        return $this->getProperty(
            self::STATUS,
        );
    }
    
    /**
     * Get the Visibility.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\ApplicationVisibility
     */
    function getVisibility(array $options = []) : \Okta\Application\ApplicationVisibility
    {
        return $this->getResourceProperty(
            self::VISIBILITY,
            \Okta\Application\ApplicationVisibility::class,
            $options
        );
    }


}