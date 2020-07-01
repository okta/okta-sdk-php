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

class WsFederationApplicationSettingsApplication extends \Okta\Application\ApplicationSettingsApplication
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
     * Set the Realm.
     *
     * @param mixed $realm The realm to set.
     * @return self
     */
    function setRealm($realm) : WsFederationApplicationSettingsApplication
    {
        $this->setProperty(
            self::REALM,
            $realm
        );
    
        return $this;
    }
    
    /**
     * Set the SiteUrl.
     *
     * @param mixed $siteURL The siteURL to set.
     * @return self
     */
    function setSiteUrl($siteURL) : WsFederationApplicationSettingsApplication
    {
        $this->setProperty(
            self::SITE_URL,
            $siteURL
        );
    
        return $this;
    }
    
    /**
     * Set the GroupName.
     *
     * @param mixed $groupName The groupName to set.
     * @return self
     */
    function setGroupName($groupName) : WsFederationApplicationSettingsApplication
    {
        $this->setProperty(
            self::GROUP_NAME,
            $groupName
        );
    
        return $this;
    }
    
    /**
     * Set the WReplyUrl.
     *
     * @param mixed $wReplyURL The wReplyURL to set.
     * @return self
     */
    function setWReplyUrl($wReplyURL) : WsFederationApplicationSettingsApplication
    {
        $this->setProperty(
            self::W_REPLY_URL,
            $wReplyURL
        );
    
        return $this;
    }
    
    /**
     * Set the GroupFilter.
     *
     * @param mixed $groupFilter The groupFilter to set.
     * @return self
     */
    function setGroupFilter($groupFilter) : WsFederationApplicationSettingsApplication
    {
        $this->setProperty(
            self::GROUP_FILTER,
            $groupFilter
        );
    
        return $this;
    }
    
    /**
     * Set the NameIdFormat.
     *
     * @param mixed $nameIDFormat The nameIDFormat to set.
     * @return self
     */
    function setNameIdFormat($nameIDFormat) : WsFederationApplicationSettingsApplication
    {
        $this->setProperty(
            self::NAME_ID_FORMAT,
            $nameIDFormat
        );
    
        return $this;
    }
    
    /**
     * Set the WReplyOverride.
     *
     * @param mixed $wReplyOverride The wReplyOverride to set.
     * @return self
     */
    function setWReplyOverride($wReplyOverride) : WsFederationApplicationSettingsApplication
    {
        $this->setProperty(
            self::W_REPLY_OVERRIDE,
            $wReplyOverride
        );
    
        return $this;
    }
    
    /**
     * Set the GroupValueFormat.
     *
     * @param mixed $groupValueFormat The groupValueFormat to set.
     * @return self
     */
    function setGroupValueFormat($groupValueFormat) : WsFederationApplicationSettingsApplication
    {
        $this->setProperty(
            self::GROUP_VALUE_FORMAT,
            $groupValueFormat
        );
    
        return $this;
    }
    
    /**
     * Set the UsernameAttribute.
     *
     * @param mixed $usernameAttribute The usernameAttribute to set.
     * @return self
     */
    function setUsernameAttribute($usernameAttribute) : WsFederationApplicationSettingsApplication
    {
        $this->setProperty(
            self::USERNAME_ATTRIBUTE,
            $usernameAttribute
        );
    
        return $this;
    }
    
    /**
     * Set the AttributeStatements.
     *
     * @param mixed $attributeStatements The attributeStatements to set.
     * @return self
     */
    function setAttributeStatements($attributeStatements) : WsFederationApplicationSettingsApplication
    {
        $this->setProperty(
            self::ATTRIBUTE_STATEMENTS,
            $attributeStatements
        );
    
        return $this;
    }
    
    /**
     * Set the AudienceRestriction.
     *
     * @param mixed $audienceRestriction The audienceRestriction to set.
     * @return self
     */
    function setAudienceRestriction($audienceRestriction) : WsFederationApplicationSettingsApplication
    {
        $this->setProperty(
            self::AUDIENCE_RESTRICTION,
            $audienceRestriction
        );
    
        return $this;
    }
    
    /**
     * Set the AuthnContextClassRef.
     *
     * @param mixed $authnContextClassRef The authnContextClassRef to set.
     * @return self
     */
    function setAuthnContextClassRef($authnContextClassRef) : WsFederationApplicationSettingsApplication
    {
        $this->setProperty(
            self::AUTHN_CONTEXT_CLASS_REF,
            $authnContextClassRef
        );
    
        return $this;
    }
    
    /**
     * Get the Realm.
     *
     * @param mixed $realm The realm to set.
     * @return string
     */
    function getRealm() : string
    {
        return $this->getProperty(
            self::REALM
        );
    }
    
    /**
     * Get the SiteUrl.
     *
     * @param mixed $siteURL The siteURL to set.
     * @return string
     */
    function getSiteUrl() : string
    {
        return $this->getProperty(
            self::SITE_URL
        );
    }
    
    /**
     * Get the GroupName.
     *
     * @param mixed $groupName The groupName to set.
     * @return string
     */
    function getGroupName() : string
    {
        return $this->getProperty(
            self::GROUP_NAME
        );
    }
    
    /**
     * Get the WReplyUrl.
     *
     * @param mixed $wReplyURL The wReplyURL to set.
     * @return string
     */
    function getWReplyUrl() : string
    {
        return $this->getProperty(
            self::W_REPLY_URL
        );
    }
    
    /**
     * Get the GroupFilter.
     *
     * @param mixed $groupFilter The groupFilter to set.
     * @return string
     */
    function getGroupFilter() : string
    {
        return $this->getProperty(
            self::GROUP_FILTER
        );
    }
    
    /**
     * Get the NameIdFormat.
     *
     * @param mixed $nameIDFormat The nameIDFormat to set.
     * @return string
     */
    function getNameIdFormat() : string
    {
        return $this->getProperty(
            self::NAME_ID_FORMAT
        );
    }
    
    /**
     * Get the WReplyOverride.
     *
     * @param mixed $wReplyOverride The wReplyOverride to set.
     * @return bool
     */
    function getWReplyOverride() : bool
    {
        return $this->getProperty(
            self::W_REPLY_OVERRIDE
        );
    }
    
    /**
     * Get the GroupValueFormat.
     *
     * @param mixed $groupValueFormat The groupValueFormat to set.
     * @return string
     */
    function getGroupValueFormat() : string
    {
        return $this->getProperty(
            self::GROUP_VALUE_FORMAT
        );
    }
    
    /**
     * Get the UsernameAttribute.
     *
     * @param mixed $usernameAttribute The usernameAttribute to set.
     * @return string
     */
    function getUsernameAttribute() : string
    {
        return $this->getProperty(
            self::USERNAME_ATTRIBUTE
        );
    }
    
    /**
     * Get the AttributeStatements.
     *
     * @param mixed $attributeStatements The attributeStatements to set.
     * @return string
     */
    function getAttributeStatements() : string
    {
        return $this->getProperty(
            self::ATTRIBUTE_STATEMENTS
        );
    }
    
    /**
     * Get the AudienceRestriction.
     *
     * @param mixed $audienceRestriction The audienceRestriction to set.
     * @return string
     */
    function getAudienceRestriction() : string
    {
        return $this->getProperty(
            self::AUDIENCE_RESTRICTION
        );
    }
    
    /**
     * Get the AuthnContextClassRef.
     *
     * @param mixed $authnContextClassRef The authnContextClassRef to set.
     * @return string
     */
    function getAuthnContextClassRef() : string
    {
        return $this->getProperty(
            self::AUTHN_CONTEXT_CLASS_REF
        );
    }
    

}