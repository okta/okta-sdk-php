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

namespace Okta\Generated\Applications;


class WsFederationApplicationSettingsApplication extends \Okta\Applications\ApplicationSettingsApplication
{
    const REALM = 'realm';
    const SITE_URL = 'siteURL';
    const GROUP_NAME = 'groupName';
    const W_REPLY_URL = 'wReplyURL';
    const GROUP_FILTER = 'groupFilter';
    const NAME_ID_FORMAT = 'nameIDFormat';
    const W_REPLY_OVERRIDE = 'wReplyOverride';
    const GROUP_VALUE_FORMAT = 'groupValueFormat';
    const USERNAME_ATTRIBUTE = 'usernameAttribute';
    const ATTRIBUTE_STATEMENTS = 'attributeStatements';
    const AUDIENCE_RESTRICTION = 'audienceRestriction';
    const AUTHN_CONTEXT_CLASS_REF = 'authnContextClassRef';



    /**
     * Get the realm.
     *
     * @return string
     */
    public function getRealm()
    {
        return $this->getProperty(self::REALM);
    }

    /**
    * Set the realm.
    *
    * @param mixed $realm The value to set.
    * @return self
    */
    public function setRealm($realm)
    {
        $this->setProperty(
            self::REALM,
            $realm
        );

        return $this;
    }

    /**
     * Get the siteURL.
     *
     * @return string
     */
    public function getSiteUrl()
    {
        return $this->getProperty(self::SITE_URL);
    }

    /**
    * Set the siteURL.
    *
    * @param mixed $siteURL The value to set.
    * @return self
    */
    public function setSiteUrl($siteURL)
    {
        $this->setProperty(
            self::SITE_URL,
            $siteURL
        );

        return $this;
    }

    /**
     * Get the groupName.
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->getProperty(self::GROUP_NAME);
    }

    /**
    * Set the groupName.
    *
    * @param mixed $groupName The value to set.
    * @return self
    */
    public function setGroupName($groupName)
    {
        $this->setProperty(
            self::GROUP_NAME,
            $groupName
        );

        return $this;
    }

    /**
     * Get the wReplyURL.
     *
     * @return string
     */
    public function getWReplyUrl()
    {
        return $this->getProperty(self::W_REPLY_URL);
    }

    /**
    * Set the wReplyURL.
    *
    * @param mixed $wReplyURL The value to set.
    * @return self
    */
    public function setWReplyUrl($wReplyURL)
    {
        $this->setProperty(
            self::W_REPLY_URL,
            $wReplyURL
        );

        return $this;
    }

    /**
     * Get the groupFilter.
     *
     * @return string
     */
    public function getGroupFilter()
    {
        return $this->getProperty(self::GROUP_FILTER);
    }

    /**
    * Set the groupFilter.
    *
    * @param mixed $groupFilter The value to set.
    * @return self
    */
    public function setGroupFilter($groupFilter)
    {
        $this->setProperty(
            self::GROUP_FILTER,
            $groupFilter
        );

        return $this;
    }

    /**
     * Get the nameIDFormat.
     *
     * @return string
     */
    public function getNameIdFormat()
    {
        return $this->getProperty(self::NAME_ID_FORMAT);
    }

    /**
    * Set the nameIDFormat.
    *
    * @param mixed $nameIDFormat The value to set.
    * @return self
    */
    public function setNameIdFormat($nameIDFormat)
    {
        $this->setProperty(
            self::NAME_ID_FORMAT,
            $nameIDFormat
        );

        return $this;
    }

    /**
     * Get the wReplyOverride.
     *
     * @return bool
     */
    public function getWReplyOverride()
    {
        return $this->getProperty(self::W_REPLY_OVERRIDE);
    }

    /**
    * Set the wReplyOverride.
    *
    * @param mixed $wReplyOverride The value to set.
    * @return self
    */
    public function setWReplyOverride($wReplyOverride)
    {
        $this->setProperty(
            self::W_REPLY_OVERRIDE,
            $wReplyOverride
        );

        return $this;
    }

    /**
     * Get the groupValueFormat.
     *
     * @return string
     */
    public function getGroupValueFormat()
    {
        return $this->getProperty(self::GROUP_VALUE_FORMAT);
    }

    /**
    * Set the groupValueFormat.
    *
    * @param mixed $groupValueFormat The value to set.
    * @return self
    */
    public function setGroupValueFormat($groupValueFormat)
    {
        $this->setProperty(
            self::GROUP_VALUE_FORMAT,
            $groupValueFormat
        );

        return $this;
    }

    /**
     * Get the usernameAttribute.
     *
     * @return string
     */
    public function getUsernameAttribute()
    {
        return $this->getProperty(self::USERNAME_ATTRIBUTE);
    }

    /**
    * Set the usernameAttribute.
    *
    * @param mixed $usernameAttribute The value to set.
    * @return self
    */
    public function setUsernameAttribute($usernameAttribute)
    {
        $this->setProperty(
            self::USERNAME_ATTRIBUTE,
            $usernameAttribute
        );

        return $this;
    }

    /**
     * Get the attributeStatements.
     *
     * @return string
     */
    public function getAttributeStatements()
    {
        return $this->getProperty(self::ATTRIBUTE_STATEMENTS);
    }

    /**
    * Set the attributeStatements.
    *
    * @param mixed $attributeStatements The value to set.
    * @return self
    */
    public function setAttributeStatements($attributeStatements)
    {
        $this->setProperty(
            self::ATTRIBUTE_STATEMENTS,
            $attributeStatements
        );

        return $this;
    }

    /**
     * Get the audienceRestriction.
     *
     * @return string
     */
    public function getAudienceRestriction()
    {
        return $this->getProperty(self::AUDIENCE_RESTRICTION);
    }

    /**
    * Set the audienceRestriction.
    *
    * @param mixed $audienceRestriction The value to set.
    * @return self
    */
    public function setAudienceRestriction($audienceRestriction)
    {
        $this->setProperty(
            self::AUDIENCE_RESTRICTION,
            $audienceRestriction
        );

        return $this;
    }

    /**
     * Get the authnContextClassRef.
     *
     * @return string
     */
    public function getAuthnContextClassRef()
    {
        return $this->getProperty(self::AUTHN_CONTEXT_CLASS_REF);
    }

    /**
    * Set the authnContextClassRef.
    *
    * @param mixed $authnContextClassRef The value to set.
    * @return self
    */
    public function setAuthnContextClassRef($authnContextClassRef)
    {
        $this->setProperty(
            self::AUTHN_CONTEXT_CLASS_REF,
            $authnContextClassRef
        );

        return $this;
    }
}
