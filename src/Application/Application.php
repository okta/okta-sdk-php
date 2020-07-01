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

class Application extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const LABEL = 'label';
    const LINKS = '_links';
    const STATUS = 'status';
    const CREATED = 'created';
    const PROFILE = 'profile';
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
     * Set the Label.
     *
     * @param mixed $label The label to set.
     * @return self
     */
    function setLabel($label) : Application
    {
        $this->setProperty(
            self::LABEL,
            $label
        );
    
        return $this;
    }
    
    /**
     * Set the Profile.
     *
     * @param mixed $profile The profile to set.
     * @return self
     */
    function setProfile($profile) : Application
    {
        $this->setProperty(
            self::PROFILE,
            $profile
        );
    
        return $this;
    }
    
    /**
     * Set the Features.
     *
     * @param mixed $features The features to set.
     * @return self
     */
    function setFeatures($features) : Application
    {
        $this->setProperty(
            self::FEATURES,
            $features
        );
    
        return $this;
    }
    
    /**
     * Set the Settings.
     *
     * @param mixed $settings The settings to set.
     * @return self
     */
    function setSettings(\Okta\Application\ApplicationSettings $settings) : Application
    {
        $this->setResourceProperty(
            self::SETTINGS,
            $settings
        );
    
        return $this;
    }

    /**
     * Set the Licensing.
     *
     * @param mixed $licensing The licensing to set.
     * @return self
     */
    function setLicensing(\Okta\Application\ApplicationLicensing $licensing) : Application
    {
        $this->setResourceProperty(
            self::LICENSING,
            $licensing
        );
    
        return $this;
    }

    /**
     * Set the SignOnMode.
     *
     * @param mixed $signOnMode The signOnMode to set.
     * @return self
     */
    function setSignOnMode($signOnMode) : Application
    {
        $this->setProperty(
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
    function setVisibility(\Okta\Application\ApplicationVisibility $visibility) : Application
    {
        $this->setResourceProperty(
            self::VISIBILITY,
            $visibility
        );
    
        return $this;
    }

    /**
     * Set the Credentials.
     *
     * @param mixed $credentials The credentials to set.
     * @return self
     */
    function setCredentials(\Okta\Application\ApplicationCredentials $credentials) : Application
    {
        $this->setResourceProperty(
            self::CREDENTIALS,
            $credentials
        );
    
        return $this;
    }

    /**
     * Set the Accessibility.
     *
     * @param mixed $accessibility The accessibility to set.
     * @return self
     */
    function setAccessibility(\Okta\Application\ApplicationAccessibility $accessibility) : Application
    {
        $this->setResourceProperty(
            self::ACCESSIBILITY,
            $accessibility
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
     * Get the Label.
     *
     * @param mixed $label The label to set.
     * @return string
     */
    function getLabel() : string
    {
        return $this->getProperty(
            self::LABEL
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
            self::LINKS
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
            self::STATUS
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
     * Get the Profile.
     *
     * @param mixed $profile The profile to set.
     * @return \stdClass
     */
    function getProfile() : \stdClass
    {
        return $this->getProperty(
            self::PROFILE
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
            self::FEATURES
        );
    }
    
    /**
     * Get the Settings.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\ApplicationSettings
     */
    function getSettings(array $options = []) : \Okta\Application\ApplicationSettings
    {
        return $this->getResourceProperty(
            self::SETTINGS,
            \Okta\Application\ApplicationSettings::class,
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
            self::EMBEDDED
        );
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
     * Get the SignOnMode.
     *
     * @param mixed $signOnMode The signOnMode to set.
     * @return \Okta\Application\ApplicationSignOnMode
     */
    function getSignOnMode() : \Okta\Application\ApplicationSignOnMode
    {
        return $this->getProperty(
            self::SIGN_ON_MODE
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
     * Fetches an application from your Okta organization by `id`.
     */
    function read(array $queryParameters = []) : \Okta\Application\Application 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\Application(null, $body);
    }
    /**
     * Updates an application in your organization.
     */
    function update() : \Okta\Application\Application 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->setRequestBody($this)
                ->executeRequest();
        return new \Okta\Application\Application(null, $body);
    }
    /**
     * Removes an inactive application.
     */
    function delete()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Activates an inactive application.
     */
    function activate()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/lifecycle/activate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Deactivates an active application.
     */
    function deactivate()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/lifecycle/deactivate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Enumerates all assigned [application users](#application-user-model) for an application.
     */
    function listApplicationUsers(array $queryParameters = []) : \Okta\Application\AppUser 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/users"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\AppUser(null, $body);
    }
    /**
     * Assigns an user to an application with [credentials](#application-user-credentials-object) and an app-specific [profile](#application-user-profile-object). Profile mappings defined for the application are first applied before applying any profile properties specified in the request.
     */
    function assignUserToApplication() : \Okta\Application\AppUser 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/users"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody()
                ->executeRequest();
        return new \Okta\Application\AppUser(null, $body);
    }
    /**
     * Fetches a specific user assignment for application by `id`.
     */
    function getApplicationUser($userId, array $queryParameters = []) : \Okta\Application\AppUser 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/users/${userId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\AppUser(null, $body);
    }
    /**
     * Assigns a group to an application
     */
    function createApplicationGroupAssignment($groupId) : \Okta\Application\ApplicationGroupAssignment 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/groups/${groupId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->setRequestBody()
                ->executeRequest();
        return new \Okta\Application\ApplicationGroupAssignment(null, $body);
    }
    /**
     * Fetches an application group assignment
     */
    function getApplicationGroupAssignment($groupId, array $queryParameters = []) : \Okta\Application\ApplicationGroupAssignment 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/groups/${groupId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\ApplicationGroupAssignment(null, $body);
    }
    /**
     * Clones a X.509 certificate for an application key credential from a source application to target application.
     */
    function cloneApplicationKey($keyId, array $queryParameters = []) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/keys/${keyId}/clone"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * Gets a specific application key credential by kid
     */
    function getApplicationKey($keyId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/keys/${keyId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * Enumerates group assignments for an application.
     */
    function listGroupAssignments(array $queryParameters = []) : \Okta\Application\ApplicationGroupAssignment 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/groups"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\ApplicationGroupAssignment(null, $body);
    }
    /**
     * Enumerates key credentials for an application
     */
    function listKeys() : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/keys"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * Generates a new X.509 certificate for an application key credential
     */
    function generateKey(array $queryParameters = []) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/keys/generate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * Generates a new key pair and returns the Certificate Signing Request for it.
     */
    function generateCsr() : \Okta\Application\Csr 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/csrs"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody()
                ->executeRequest();
        return new \Okta\Application\Csr(null, $body);
    }
    /**
     * 
     */
    function getCsr($csrId) : \Okta\Application\Csr 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/csrs/${csrId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Application\Csr(null, $body);
    }
    /**
     * 
     */
    function revokeCsr($csrId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/csrs/${csrId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Enumerates Certificate Signing Requests for an application
     */
    function listCsrs() : \Okta\Application\Csr 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/csrs"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Application\Csr(null, $body);
    }
    /**
     * 
     */
    function publishCerCert($csrId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/csrs/${csrId}/lifecycle/publish"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody()
                ->setContentTypeHeader(application/x-x509-ca-cert)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * 
     */
    function publishBinaryCerCert($csrId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/csrs/${csrId}/lifecycle/publish"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody()
                ->setContentTypeHeader(application/x-x509-ca-cert)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * 
     */
    function publishDerCert($csrId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/csrs/${csrId}/lifecycle/publish"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody()
                ->setContentTypeHeader(application/pkix-cert)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * 
     */
    function publishBinaryDerCert($csrId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/csrs/${csrId}/lifecycle/publish"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody()
                ->setContentTypeHeader(application/pkix-cert)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * 
     */
    function publishBinaryPemCert($csrId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/csrs/${csrId}/lifecycle/publish"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody()
                ->setContentTypeHeader(application/x-pem-file)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * Lists all tokens for the application
     */
    function listOAuth2Tokens(array $queryParameters = []) : \Okta\Application\OAuth2Token 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/tokens"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\OAuth2Token(null, $body);
    }
    /**
     * Revokes the specified token for the specified application
     */
    function revokeOAuth2TokenForApplication($tokenId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/tokens/${tokenId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Gets a token for the specified application
     */
    function getOAuth2Token($tokenId, array $queryParameters = []) : \Okta\Application\OAuth2Token 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/tokens/${tokenId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\OAuth2Token(null, $body);
    }
    /**
     * Revokes all tokens for the specified application
     */
    function revokeOAuth2Tokens()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/tokens"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Lists all scope consent grants for the application
     */
    function listScopeConsentGrants(array $queryParameters = []) : \Okta\Application\OAuth2ScopeConsentGrant 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/grants"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\OAuth2ScopeConsentGrant(null, $body);
    }
    /**
     * Grants consent for the application to request an OAuth 2.0 Okta scope
     */
    function grantConsentToScope() : \Okta\Application\OAuth2ScopeConsentGrant 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/grants"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody()
                ->executeRequest();
        return new \Okta\Application\OAuth2ScopeConsentGrant(null, $body);
    }
    /**
     * Revokes permission for the application to request the given scope
     */
    function revokeScopeConsentGrant($grantId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/grants/${grantId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Fetches a single scope consent grant for the application
     */
    function getScopeConsentGrant($grantId, array $queryParameters = []) : \Okta\Application\OAuth2ScopeConsentGrant 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/grants/${grantId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\OAuth2ScopeConsentGrant(null, $body);
    }

}