<?php
/*******************************************************************************
 * Copyright 2017-Present Okta, Inc.
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

namespace Okta\Policies;

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
     * Get the app.
     *
     * @return \Okta\Policies\AppAndInstancePolicyRuleCondition
     */
    public function getApp(array $options = []): \Okta\Policies\AppAndInstancePolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::APP,
            \Okta\Policies\AppAndInstancePolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Set the app.
     *
     * @param \Okta\Policies\AppAndInstancePolicyRuleCondition $app The AppAndInstancePolicyRuleCondition instance.
     * @return self
     */
    public function setApp(\Okta\Policies\AppAndInstancePolicyRuleCondition $app)
    {
        $this->setResourceProperty(
            self::APP,
            $app
        );

        return $this;
    }

    /**
     * Get the apps.
     *
     * @return \Okta\Policies\AppInstancePolicyRuleCondition
     */
    public function getApps(array $options = []): \Okta\Policies\AppInstancePolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::APPS,
            \Okta\Policies\AppInstancePolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Set the apps.
     *
     * @param \Okta\Policies\AppInstancePolicyRuleCondition $apps The AppInstancePolicyRuleCondition instance.
     * @return self
     */
    public function setApps(\Okta\Policies\AppInstancePolicyRuleCondition $apps)
    {
        $this->setResourceProperty(
            self::APPS,
            $apps
        );

        return $this;
    }

    /**
     * Get the risk.
     *
     * @return \Okta\Policies\RiskPolicyRuleCondition
     */
    public function getRisk(array $options = []): \Okta\Policies\RiskPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::RISK,
            \Okta\Policies\RiskPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Set the risk.
     *
     * @param \Okta\Policies\RiskPolicyRuleCondition $risk The RiskPolicyRuleCondition instance.
     * @return self
     */
    public function setRisk(\Okta\Policies\RiskPolicyRuleCondition $risk)
    {
        $this->setResourceProperty(
            self::RISK,
            $risk
        );

        return $this;
    }

    /**
     * Get the users.
     *
     * @return \Okta\Policies\UserPolicyRuleCondition
     */
    public function getUsers(array $options = []): \Okta\Policies\UserPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::USERS,
            \Okta\Policies\UserPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Set the users.
     *
     * @param \Okta\Policies\UserPolicyRuleCondition $users The UserPolicyRuleCondition instance.
     * @return self
     */
    public function setUsers(\Okta\Policies\UserPolicyRuleCondition $users)
    {
        $this->setResourceProperty(
            self::USERS,
            $users
        );

        return $this;
    }

    /**
     * Get the device.
     *
     * @return \Okta\Policies\DevicePolicyRuleCondition
     */
    public function getDevice(array $options = []): \Okta\Policies\DevicePolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::DEVICE,
            \Okta\Policies\DevicePolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Set the device.
     *
     * @param \Okta\Policies\DevicePolicyRuleCondition $device The DevicePolicyRuleCondition instance.
     * @return self
     */
    public function setDevice(\Okta\Policies\DevicePolicyRuleCondition $device)
    {
        $this->setResourceProperty(
            self::DEVICE,
            $device
        );

        return $this;
    }

    /**
     * Get the groups.
     *
     * @return \Okta\Policies\GroupPolicyRuleCondition
     */
    public function getGroups(array $options = []): \Okta\Policies\GroupPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::GROUPS,
            \Okta\Policies\GroupPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Set the groups.
     *
     * @param \Okta\Policies\GroupPolicyRuleCondition $groups The GroupPolicyRuleCondition instance.
     * @return self
     */
    public function setGroups(\Okta\Policies\GroupPolicyRuleCondition $groups)
    {
        $this->setResourceProperty(
            self::GROUPS,
            $groups
        );

        return $this;
    }

    /**
     * Get the people.
     *
     * @return \Okta\Policies\PolicyPeopleCondition
     */
    public function getPeople(array $options = []): \Okta\Policies\PolicyPeopleCondition
    {
        return $this->getResourceProperty(
            self::PEOPLE,
            \Okta\Policies\PolicyPeopleCondition::class,
            $options
        );
    }

    /**
     * Set the people.
     *
     * @param \Okta\Policies\PolicyPeopleCondition $people The PolicyPeopleCondition instance.
     * @return self
     */
    public function setPeople(\Okta\Policies\PolicyPeopleCondition $people)
    {
        $this->setResourceProperty(
            self::PEOPLE,
            $people
        );

        return $this;
    }

    /**
     * Get the scopes.
     *
     * @return \Okta\Applications\OAuth2ScopesMediationPolicyRuleCondition
     */
    public function getScopes(array $options = []): \Okta\Applications\OAuth2ScopesMediationPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::SCOPES,
            \Okta\Applications\OAuth2ScopesMediationPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Set the scopes.
     *
     * @param \Okta\Applications\OAuth2ScopesMediationPolicyRuleCondition $scopes The OAuth2ScopesMediationPolicyRuleCondition instance.
     * @return self
     */
    public function setScopes(\Okta\Applications\OAuth2ScopesMediationPolicyRuleCondition $scopes)
    {
        $this->setResourceProperty(
            self::SCOPES,
            $scopes
        );

        return $this;
    }

    /**
     * Get the clients.
     *
     * @return \Okta\Policies\ClientPolicyCondition
     */
    public function getClients(array $options = []): \Okta\Policies\ClientPolicyCondition
    {
        return $this->getResourceProperty(
            self::CLIENTS,
            \Okta\Policies\ClientPolicyCondition::class,
            $options
        );
    }

    /**
     * Set the clients.
     *
     * @param \Okta\Policies\ClientPolicyCondition $clients The ClientPolicyCondition instance.
     * @return self
     */
    public function setClients(\Okta\Policies\ClientPolicyCondition $clients)
    {
        $this->setResourceProperty(
            self::CLIENTS,
            $clients
        );

        return $this;
    }

    /**
     * Get the context.
     *
     * @return \Okta\Policies\ContextPolicyRuleCondition
     */
    public function getContext(array $options = []): \Okta\Policies\ContextPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::CONTEXT,
            \Okta\Policies\ContextPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Set the context.
     *
     * @param \Okta\Policies\ContextPolicyRuleCondition $context The ContextPolicyRuleCondition instance.
     * @return self
     */
    public function setContext(\Okta\Policies\ContextPolicyRuleCondition $context)
    {
        $this->setResourceProperty(
            self::CONTEXT,
            $context
        );

        return $this;
    }

    /**
     * Get the network.
     *
     * @return \Okta\Policies\PolicyNetworkCondition
     */
    public function getNetwork(array $options = []): \Okta\Policies\PolicyNetworkCondition
    {
        return $this->getResourceProperty(
            self::NETWORK,
            \Okta\Policies\PolicyNetworkCondition::class,
            $options
        );
    }

    /**
     * Set the network.
     *
     * @param \Okta\Policies\PolicyNetworkCondition $network The PolicyNetworkCondition instance.
     * @return self
     */
    public function setNetwork(\Okta\Policies\PolicyNetworkCondition $network)
    {
        $this->setResourceProperty(
            self::NETWORK,
            $network
        );

        return $this;
    }

    /**
     * Get the platform.
     *
     * @return \Okta\Policies\PlatformPolicyRuleCondition
     */
    public function getPlatform(array $options = []): \Okta\Policies\PlatformPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::PLATFORM,
            \Okta\Policies\PlatformPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Set the platform.
     *
     * @param \Okta\Policies\PlatformPolicyRuleCondition $platform The PlatformPolicyRuleCondition instance.
     * @return self
     */
    public function setPlatform(\Okta\Policies\PlatformPolicyRuleCondition $platform)
    {
        $this->setResourceProperty(
            self::PLATFORM,
            $platform
        );

        return $this;
    }

    /**
     * Get the riskScore.
     *
     * @return \Okta\Policies\RiskScorePolicyRuleCondition
     */
    public function getRiskScore(array $options = []): \Okta\Policies\RiskScorePolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::RISK_SCORE,
            \Okta\Policies\RiskScorePolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Set the riskScore.
     *
     * @param \Okta\Policies\RiskScorePolicyRuleCondition $riskScore The RiskScorePolicyRuleCondition instance.
     * @return self
     */
    public function setRiskScore(\Okta\Policies\RiskScorePolicyRuleCondition $riskScore)
    {
        $this->setResourceProperty(
            self::RISK_SCORE,
            $riskScore
        );

        return $this;
    }

    /**
     * Get the grantTypes.
     *
     * @return \Okta\Policies\GrantTypePolicyRuleCondition
     */
    public function getGrantTypes(array $options = []): \Okta\Policies\GrantTypePolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::GRANT_TYPES,
            \Okta\Policies\GrantTypePolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Set the grantTypes.
     *
     * @param \Okta\Policies\GrantTypePolicyRuleCondition $grantTypes The GrantTypePolicyRuleCondition instance.
     * @return self
     */
    public function setGrantTypes(\Okta\Policies\GrantTypePolicyRuleCondition $grantTypes)
    {
        $this->setResourceProperty(
            self::GRANT_TYPES,
            $grantTypes
        );

        return $this;
    }

    /**
     * Get the userStatus.
     *
     * @return \Okta\Policies\UserStatusPolicyRuleCondition
     */
    public function getUserStatus(array $options = []): \Okta\Policies\UserStatusPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::USER_STATUS,
            \Okta\Policies\UserStatusPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Set the userStatus.
     *
     * @param \Okta\Policies\UserStatusPolicyRuleCondition $userStatus The UserStatusPolicyRuleCondition instance.
     * @return self
     */
    public function setUserStatus(\Okta\Policies\UserStatusPolicyRuleCondition $userStatus)
    {
        $this->setResourceProperty(
            self::USER_STATUS,
            $userStatus
        );

        return $this;
    }

    /**
     * Get the authContext.
     *
     * @return \Okta\Policies\PolicyRuleAuthContextCondition
     */
    public function getAuthContext(array $options = []): \Okta\Policies\PolicyRuleAuthContextCondition
    {
        return $this->getResourceProperty(
            self::AUTH_CONTEXT,
            \Okta\Policies\PolicyRuleAuthContextCondition::class,
            $options
        );
    }

    /**
     * Set the authContext.
     *
     * @param \Okta\Policies\PolicyRuleAuthContextCondition $authContext The PolicyRuleAuthContextCondition instance.
     * @return self
     */
    public function setAuthContext(\Okta\Policies\PolicyRuleAuthContextCondition $authContext)
    {
        $this->setResourceProperty(
            self::AUTH_CONTEXT,
            $authContext
        );

        return $this;
    }

    /**
     * Get the authProvider.
     *
     * @return \Okta\Policies\PasswordPolicyAuthenticationProviderCondition
     */
    public function getAuthProvider(array $options = []): \Okta\Policies\PasswordPolicyAuthenticationProviderCondition
    {
        return $this->getResourceProperty(
            self::AUTH_PROVIDER,
            \Okta\Policies\PasswordPolicyAuthenticationProviderCondition::class,
            $options
        );
    }

    /**
     * Set the authProvider.
     *
     * @param \Okta\Policies\PasswordPolicyAuthenticationProviderCondition $authProvider The PasswordPolicyAuthenticationProviderCondition instance.
     * @return self
     */
    public function setAuthProvider(\Okta\Policies\PasswordPolicyAuthenticationProviderCondition $authProvider)
    {
        $this->setResourceProperty(
            self::AUTH_PROVIDER,
            $authProvider
        );

        return $this;
    }

    /**
     * Get the mdmEnrollment.
     *
     * @return \Okta\Policies\MDMEnrollmentPolicyRuleCondition
     */
    public function getMdmEnrollment(array $options = []): \Okta\Policies\MDMEnrollmentPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::MDM_ENROLLMENT,
            \Okta\Policies\MDMEnrollmentPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Set the mdmEnrollment.
     *
     * @param \Okta\Policies\MDMEnrollmentPolicyRuleCondition $mdmEnrollment The MDMEnrollmentPolicyRuleCondition instance.
     * @return self
     */
    public function setMdmEnrollment(\Okta\Policies\MDMEnrollmentPolicyRuleCondition $mdmEnrollment)
    {
        $this->setResourceProperty(
            self::MDM_ENROLLMENT,
            $mdmEnrollment
        );

        return $this;
    }

    /**
     * Get the userIdentifier.
     *
     * @return \Okta\Policies\UserIdentifierPolicyRuleCondition
     */
    public function getUserIdentifier(array $options = []): \Okta\Policies\UserIdentifierPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::USER_IDENTIFIER,
            \Okta\Policies\UserIdentifierPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Set the userIdentifier.
     *
     * @param \Okta\Policies\UserIdentifierPolicyRuleCondition $userIdentifier The UserIdentifierPolicyRuleCondition instance.
     * @return self
     */
    public function setUserIdentifier(\Okta\Policies\UserIdentifierPolicyRuleCondition $userIdentifier)
    {
        $this->setResourceProperty(
            self::USER_IDENTIFIER,
            $userIdentifier
        );

        return $this;
    }

    /**
     * Get the identityProvider.
     *
     * @return \Okta\Policies\IdentityProviderPolicyRuleCondition
     */
    public function getIdentityProvider(array $options = []): \Okta\Policies\IdentityProviderPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::IDENTITY_PROVIDER,
            \Okta\Policies\IdentityProviderPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Set the identityProvider.
     *
     * @param \Okta\Policies\IdentityProviderPolicyRuleCondition $identityProvider The IdentityProviderPolicyRuleCondition instance.
     * @return self
     */
    public function setIdentityProvider(\Okta\Policies\IdentityProviderPolicyRuleCondition $identityProvider)
    {
        $this->setResourceProperty(
            self::IDENTITY_PROVIDER,
            $identityProvider
        );

        return $this;
    }

    /**
     * Get the beforeScheduledAction.
     *
     * @return \Okta\Policies\BeforeScheduledActionPolicyRuleCondition
     */
    public function getBeforeScheduledAction(array $options = []): \Okta\Policies\BeforeScheduledActionPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::BEFORE_SCHEDULED_ACTION,
            \Okta\Policies\BeforeScheduledActionPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Set the beforeScheduledAction.
     *
     * @param \Okta\Policies\BeforeScheduledActionPolicyRuleCondition $beforeScheduledAction The BeforeScheduledActionPolicyRuleCondition instance.
     * @return self
     */
    public function setBeforeScheduledAction(\Okta\Policies\BeforeScheduledActionPolicyRuleCondition $beforeScheduledAction)
    {
        $this->setResourceProperty(
            self::BEFORE_SCHEDULED_ACTION,
            $beforeScheduledAction
        );

        return $this;
    }
}
