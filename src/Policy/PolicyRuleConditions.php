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

namespace Okta\Policy;

class PolicyRuleConditions extends \Okta\Resource\AbstractResource
{
    const APP = 'app';
    const APPS = 'apps';
    const RISK = 'risk';
    const USERS = 'users';
    const DEVICE = 'device';
    const GROUPS = 'groups';
    const PEOPLE = 'people';
    const SCOPES = 'scopes';
    const CLIENTS = 'clients';
    const CONTEXT = 'context';
    const NETWORK = 'network';
    const PLATFORM = 'platform';
    const RISK_SCORE = 'riskScore';
    const GRANT_TYPES = 'grantTypes';
    const USER_STATUS = 'userStatus';
    const AUTH_CONTEXT = 'authContext';
    const AUTH_PROVIDER = 'authProvider';
    const MDM_ENROLLMENT = 'mdmEnrollment';
    const USER_IDENTIFIER = 'userIdentifier';
    const IDENTITY_PROVIDER = 'identityProvider';
    const BEFORE_SCHEDULED_ACTION = 'beforeScheduledAction';


    /**
     * Set the App.
     *
     * @param mixed $app The app to set.
     * @return self
     */
    function setApp(\Okta\Policy\AppAndInstancePolicyRuleCondition $app) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::APP,
            $app
        );
    
        return $this;
    }

    /**
     * Set the Apps.
     *
     * @param mixed $apps The apps to set.
     * @return self
     */
    function setApps(\Okta\Policy\AppInstancePolicyRuleCondition $apps) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::APPS,
            $apps
        );
    
        return $this;
    }

    /**
     * Set the Risk.
     *
     * @param mixed $risk The risk to set.
     * @return self
     */
    function setRisk(\Okta\Policy\RiskPolicyRuleCondition $risk) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::RISK,
            $risk
        );
    
        return $this;
    }

    /**
     * Set the Users.
     *
     * @param mixed $users The users to set.
     * @return self
     */
    function setUsers(\Okta\Policy\UserPolicyRuleCondition $users) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::USERS,
            $users
        );
    
        return $this;
    }

    /**
     * Set the Device.
     *
     * @param mixed $device The device to set.
     * @return self
     */
    function setDevice(\Okta\Policy\DevicePolicyRuleCondition $device) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::DEVICE,
            $device
        );
    
        return $this;
    }

    /**
     * Set the Groups.
     *
     * @param mixed $groups The groups to set.
     * @return self
     */
    function setGroups(\Okta\Policy\GroupPolicyRuleCondition $groups) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::GROUPS,
            $groups
        );
    
        return $this;
    }

    /**
     * Set the People.
     *
     * @param mixed $people The people to set.
     * @return self
     */
    function setPeople(\Okta\Policy\PolicyPeopleCondition $people) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::PEOPLE,
            $people
        );
    
        return $this;
    }

    /**
     * Set the Scopes.
     *
     * @param mixed $scopes The scopes to set.
     * @return self
     */
    function setScopes(\Okta\Application\OAuth2ScopesMediationPolicyRuleCondition $scopes) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::SCOPES,
            $scopes
        );
    
        return $this;
    }

    /**
     * Set the Clients.
     *
     * @param mixed $clients The clients to set.
     * @return self
     */
    function setClients(\Okta\Policy\ClientPolicyCondition $clients) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::CLIENTS,
            $clients
        );
    
        return $this;
    }

    /**
     * Set the Context.
     *
     * @param mixed $context The context to set.
     * @return self
     */
    function setContext(\Okta\Policy\ContextPolicyRuleCondition $context) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::CONTEXT,
            $context
        );
    
        return $this;
    }

    /**
     * Set the Network.
     *
     * @param mixed $network The network to set.
     * @return self
     */
    function setNetwork(\Okta\Policy\PolicyNetworkCondition $network) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::NETWORK,
            $network
        );
    
        return $this;
    }

    /**
     * Set the Platform.
     *
     * @param mixed $platform The platform to set.
     * @return self
     */
    function setPlatform(\Okta\Policy\PlatformPolicyRuleCondition $platform) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::PLATFORM,
            $platform
        );
    
        return $this;
    }

    /**
     * Set the RiskScore.
     *
     * @param mixed $riskScore The riskScore to set.
     * @return self
     */
    function setRiskScore(\Okta\Policy\RiskScorePolicyRuleCondition $riskScore) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::RISK_SCORE,
            $riskScore
        );
    
        return $this;
    }

    /**
     * Set the GrantTypes.
     *
     * @param mixed $grantTypes The grantTypes to set.
     * @return self
     */
    function setGrantTypes(\Okta\Policy\GrantTypePolicyRuleCondition $grantTypes) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::GRANT_TYPES,
            $grantTypes
        );
    
        return $this;
    }

    /**
     * Set the UserStatus.
     *
     * @param mixed $userStatus The userStatus to set.
     * @return self
     */
    function setUserStatus(\Okta\Policy\UserStatusPolicyRuleCondition $userStatus) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::USER_STATUS,
            $userStatus
        );
    
        return $this;
    }

    /**
     * Set the AuthContext.
     *
     * @param mixed $authContext The authContext to set.
     * @return self
     */
    function setAuthContext(\Okta\Policy\PolicyRuleAuthContextCondition $authContext) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::AUTH_CONTEXT,
            $authContext
        );
    
        return $this;
    }

    /**
     * Set the AuthProvider.
     *
     * @param mixed $authProvider The authProvider to set.
     * @return self
     */
    function setAuthProvider(\Okta\Policy\PasswordPolicyAuthenticationProviderCondition $authProvider) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::AUTH_PROVIDER,
            $authProvider
        );
    
        return $this;
    }

    /**
     * Set the MdmEnrollment.
     *
     * @param mixed $mdmEnrollment The mdmEnrollment to set.
     * @return self
     */
    function setMdmEnrollment(\Okta\Policy\MDMEnrollmentPolicyRuleCondition $mdmEnrollment) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::MDM_ENROLLMENT,
            $mdmEnrollment
        );
    
        return $this;
    }

    /**
     * Set the UserIdentifier.
     *
     * @param mixed $userIdentifier The userIdentifier to set.
     * @return self
     */
    function setUserIdentifier(\Okta\Policy\UserIdentifierPolicyRuleCondition $userIdentifier) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::USER_IDENTIFIER,
            $userIdentifier
        );
    
        return $this;
    }

    /**
     * Set the IdentityProvider.
     *
     * @param mixed $identityProvider The identityProvider to set.
     * @return self
     */
    function setIdentityProvider(\Okta\Policy\IdentityProviderPolicyRuleCondition $identityProvider) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::IDENTITY_PROVIDER,
            $identityProvider
        );
    
        return $this;
    }

    /**
     * Set the BeforeScheduledAction.
     *
     * @param mixed $beforeScheduledAction The beforeScheduledAction to set.
     * @return self
     */
    function setBeforeScheduledAction(\Okta\Policy\BeforeScheduledActionPolicyRuleCondition $beforeScheduledAction) : PolicyRuleConditions
    {
        $this->setResourceProperty(
            self::BEFORE_SCHEDULED_ACTION,
            $beforeScheduledAction
        );
    
        return $this;
    }

    /**
     * Get the App.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\AppAndInstancePolicyRuleCondition
     */
    function getApp(array $options = []) : \Okta\Policy\AppAndInstancePolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::APP,
            \Okta\Policy\AppAndInstancePolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Get the Apps.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\AppInstancePolicyRuleCondition
     */
    function getApps(array $options = []) : \Okta\Policy\AppInstancePolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::APPS,
            \Okta\Policy\AppInstancePolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Get the Risk.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\RiskPolicyRuleCondition
     */
    function getRisk(array $options = []) : \Okta\Policy\RiskPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::RISK,
            \Okta\Policy\RiskPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Get the Users.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\UserPolicyRuleCondition
     */
    function getUsers(array $options = []) : \Okta\Policy\UserPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::USERS,
            \Okta\Policy\UserPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Get the Device.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\DevicePolicyRuleCondition
     */
    function getDevice(array $options = []) : \Okta\Policy\DevicePolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::DEVICE,
            \Okta\Policy\DevicePolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Get the Groups.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\GroupPolicyRuleCondition
     */
    function getGroups(array $options = []) : \Okta\Policy\GroupPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::GROUPS,
            \Okta\Policy\GroupPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Get the People.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PolicyPeopleCondition
     */
    function getPeople(array $options = []) : \Okta\Policy\PolicyPeopleCondition
    {
        return $this->getResourceProperty(
            self::PEOPLE,
            \Okta\Policy\PolicyPeopleCondition::class,
            $options
        );
    }

    /**
     * Get the Scopes.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\OAuth2ScopesMediationPolicyRuleCondition
     */
    function getScopes(array $options = []) : \Okta\Application\OAuth2ScopesMediationPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::SCOPES,
            \Okta\Application\OAuth2ScopesMediationPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Get the Clients.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\ClientPolicyCondition
     */
    function getClients(array $options = []) : \Okta\Policy\ClientPolicyCondition
    {
        return $this->getResourceProperty(
            self::CLIENTS,
            \Okta\Policy\ClientPolicyCondition::class,
            $options
        );
    }

    /**
     * Get the Context.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\ContextPolicyRuleCondition
     */
    function getContext(array $options = []) : \Okta\Policy\ContextPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::CONTEXT,
            \Okta\Policy\ContextPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Get the Network.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PolicyNetworkCondition
     */
    function getNetwork(array $options = []) : \Okta\Policy\PolicyNetworkCondition
    {
        return $this->getResourceProperty(
            self::NETWORK,
            \Okta\Policy\PolicyNetworkCondition::class,
            $options
        );
    }

    /**
     * Get the Platform.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PlatformPolicyRuleCondition
     */
    function getPlatform(array $options = []) : \Okta\Policy\PlatformPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::PLATFORM,
            \Okta\Policy\PlatformPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Get the RiskScore.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\RiskScorePolicyRuleCondition
     */
    function getRiskScore(array $options = []) : \Okta\Policy\RiskScorePolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::RISK_SCORE,
            \Okta\Policy\RiskScorePolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Get the GrantTypes.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\GrantTypePolicyRuleCondition
     */
    function getGrantTypes(array $options = []) : \Okta\Policy\GrantTypePolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::GRANT_TYPES,
            \Okta\Policy\GrantTypePolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Get the UserStatus.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\UserStatusPolicyRuleCondition
     */
    function getUserStatus(array $options = []) : \Okta\Policy\UserStatusPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::USER_STATUS,
            \Okta\Policy\UserStatusPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Get the AuthContext.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PolicyRuleAuthContextCondition
     */
    function getAuthContext(array $options = []) : \Okta\Policy\PolicyRuleAuthContextCondition
    {
        return $this->getResourceProperty(
            self::AUTH_CONTEXT,
            \Okta\Policy\PolicyRuleAuthContextCondition::class,
            $options
        );
    }

    /**
     * Get the AuthProvider.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicyAuthenticationProviderCondition
     */
    function getAuthProvider(array $options = []) : \Okta\Policy\PasswordPolicyAuthenticationProviderCondition
    {
        return $this->getResourceProperty(
            self::AUTH_PROVIDER,
            \Okta\Policy\PasswordPolicyAuthenticationProviderCondition::class,
            $options
        );
    }

    /**
     * Get the MdmEnrollment.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\MDMEnrollmentPolicyRuleCondition
     */
    function getMdmEnrollment(array $options = []) : \Okta\Policy\MDMEnrollmentPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::MDM_ENROLLMENT,
            \Okta\Policy\MDMEnrollmentPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Get the UserIdentifier.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\UserIdentifierPolicyRuleCondition
     */
    function getUserIdentifier(array $options = []) : \Okta\Policy\UserIdentifierPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::USER_IDENTIFIER,
            \Okta\Policy\UserIdentifierPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Get the IdentityProvider.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\IdentityProviderPolicyRuleCondition
     */
    function getIdentityProvider(array $options = []) : \Okta\Policy\IdentityProviderPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::IDENTITY_PROVIDER,
            \Okta\Policy\IdentityProviderPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Get the BeforeScheduledAction.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\BeforeScheduledActionPolicyRuleCondition
     */
    function getBeforeScheduledAction(array $options = []) : \Okta\Policy\BeforeScheduledActionPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::BEFORE_SCHEDULED_ACTION,
            \Okta\Policy\BeforeScheduledActionPolicyRuleCondition::class,
            $options
        );
    }


}