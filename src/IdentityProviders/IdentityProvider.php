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

namespace Okta\IdentityProviders;

use Okta\Applications\Csr;
use Okta\Applications\CsrMetadata;
use Okta\Applications\JsonWebKey;
use Okta\Policies\UserIdentityProviderLinkRequest;

class IdentityProvider extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const TYPE = 'type';
    const LINKS = '_links';
    const POLICY = 'policy';
    const STATUS = 'status';
    const CREATED = 'created';
    const PROTOCOL = 'protocol';
    const ISSUER_MODE = 'issuerMode';
    const LAST_UPDATED = 'lastUpdated';


    public function create($query=[])
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->createResource(
                    "/idps",
                    $this,
                    \Okta\IdentityProviders\IdentityProvider::class,
                    $query
                );
    }

    public function get($query)
    {
        return \Okta\Client::getInstance()
                    ->getDataStore()
                    ->getResource(
                        $query,
                        \Okta\IdentityProviders\IdentityProvider::class,
                        "/idps"
                    );
    }
        
    public function save()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->saveResource(
                    "/idps",
                    $this,
                    \Okta\IdentityProviders\IdentityProvider::class
                );
    }

    public function delete()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->deleteResource(
                    "/idps",
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
     * Get the _links.
     *
     * @return \stdClass
     */
    public function getLinks()
    {
        return $this->getProperty(self::LINKS);
    }

    /**
     * Get the policy.
     *
     * @return \Okta\Policies\IdentityProviderPolicy
     */
    public function getPolicy(array $options = []): \Okta\Policies\IdentityProviderPolicy
    {
        return $this->getResourceProperty(
            self::POLICY,
            \Okta\Policies\IdentityProviderPolicy::class,
            $options
        );
    }


    /**
     * Set the policy.
     *
     * @param \Okta\Policies\IdentityProviderPolicy $policy The IdentityProviderPolicy instance.
     * @return self
     */
    public function setPolicy(\Okta\Policies\IdentityProviderPolicy $policy)
    {
        $this->setResourceProperty(
            self::POLICY,
            $policy
        );

        return $this;
    }

    /**
     * Get the status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty(self::STATUS);
    }

    /**
    * Set the status.
    *
    * @param mixed $status The value to set.
    * @return self
    */
    public function setStatus($status)
    {
        $this->setProperty(
            self::STATUS,
            $status
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
     * Get the protocol.
     *
     * @return \Okta\IdentityProviders\Protocol
     */
    public function getProtocol(array $options = []): \Okta\IdentityProviders\Protocol
    {
        return $this->getResourceProperty(
            self::PROTOCOL,
            \Okta\IdentityProviders\Protocol::class,
            $options
        );
    }


    /**
     * Set the protocol.
     *
     * @param \Okta\IdentityProviders\Protocol $protocol The Protocol instance.
     * @return self
     */
    public function setProtocol(\Okta\IdentityProviders\Protocol $protocol)
    {
        $this->setResourceProperty(
            self::PROTOCOL,
            $protocol
        );

        return $this;
    }

    /**
     * Get the issuerMode.
     *
     * @return string
     */
    public function getIssuerMode()
    {
        return $this->getProperty(self::ISSUER_MODE);
    }

    /**
    * Set the issuerMode.
    *
    * @param mixed $issuerMode The value to set.
    * @return self
    */
    public function setIssuerMode($issuerMode)
    {
        $this->setProperty(
            self::ISSUER_MODE,
            $issuerMode
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
    * Get the Csr object.
    *
    * @param array $options The options for the request.
    * @return \Okta\IdentityProviders\Collection
    */
    public function getSigningCsrs(array $options = []): \Okta\IdentityProviders\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/idps/{$this->getId()}/credentials/csrs",
                    \Okta\IdentityProviders\Csr::class,
                    \Okta\IdentityProviders\Collection::class,
                    $options
                );
    }


    /**
    * Generates a new key pair and returns a Certificate Signing Request for it.
    *
    *
    * @return mixed|null
    */
    public function generateCsr(CsrMetadata $csrMetadata)
    {
        $uri = "/api/v1/idps/{$this->getId()}/credentials/csrs";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $csrMetadata);

        return new \Okta\IdentityProviders\Csr(null, $body);
    }


    /**
    * Revoke a Certificate Signing Request and delete the key pair from the IdP
    *
    *
    * @return mixed|null
    */
    public function deleteSigningCsr($csrId)
    {
        $uri = "/api/v1/idps/{$this->getId()}/credentials/csrs/{$csrId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);

        return $body;
    }


    /**
    * Gets a specific Certificate Signing Request model by id
    *
    *
    * @return mixed|null
    */
    public function getSigningCsr($csrId)
    {
        $uri = "/api/v1/idps/{$this->getId()}/credentials/csrs/{$csrId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('GET', $uri);

        return new \Okta\IdentityProviders\Csr(null, $body);
    }


    /**
    * Get the JsonWebKey object.
    *
    * @param array $options The options for the request.
    * @return \Okta\IdentityProviders\Collection
    */
    public function getSigningKeys(array $options = []): \Okta\IdentityProviders\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/idps/{$this->getId()}/credentials/keys",
                    \Okta\IdentityProviders\JsonWebKey::class,
                    \Okta\IdentityProviders\Collection::class,
                    $options
                );
    }


    /**
    * Generates a new X.509 certificate for an IdP signing key credential to be used for signing assertions sent to the IdP
    *
    *
    * @return mixed|null
    */
    public function generateSigningKey()
    {
        $uri = "/api/v1/idps/{$this->getId()}/credentials/keys/generate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return new \Okta\IdentityProviders\JsonWebKey(null, $body);
    }


    /**
    * Gets a specific IdP Key Credential by &#x60;kid&#x60;
    *
    *
    * @return mixed|null
    */
    public function getSigningKey($keyId)
    {
        $uri = "/api/v1/idps/{$this->getId()}/credentials/keys/{$keyId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('GET', $uri);

        return new \Okta\IdentityProviders\JsonWebKey(null, $body);
    }


    /**
    * Clones a X.509 certificate for an IdP signing key credential from a source IdP to target IdP
    *
    *
    * @return mixed|null
    */
    public function cloneKey($keyId)
    {
        $uri = "/api/v1/idps/{$this->getId()}/credentials/keys/{$keyId}/clone";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return new \Okta\IdentityProviders\JsonWebKey(null, $body);
    }


    /**
    * Activates an inactive IdP.
    *
    *
    * @return mixed|null
    */
    public function activate()
    {
        $uri = "/api/v1/idps/{$this->getId()}/lifecycle/activate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return new \Okta\IdentityProviders\IdentityProvider(null, $body);
    }


    /**
    * Deactivates an active IdP.
    *
    *
    * @return mixed|null
    */
    public function deactivate()
    {
        $uri = "/api/v1/idps/{$this->getId()}/lifecycle/deactivate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return new \Okta\IdentityProviders\IdentityProvider(null, $body);
    }


    /**
    * Get the IdentityProviderApplicationUser object.
    *
    * @param array $options The options for the request.
    * @return \Okta\IdentityProviders\Collection
    */
    public function getUsers(array $options = []): \Okta\IdentityProviders\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/idps/{$this->getId()}/users",
                    \Okta\IdentityProviders\IdentityProviderApplicationUser::class,
                    \Okta\IdentityProviders\Collection::class,
                    $options
                );
    }


    /**
    * Removes the link between the Okta user and the IdP user.
    *
    *
    * @return mixed|null
    */
    public function unlinkUser($userId)
    {
        $uri = "/api/v1/idps/{$this->getId()}/users/{$userId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);

        return $body;
    }


    /**
    * Fetches a linked IdP user by ID
    *
    *
    * @return mixed|null
    */
    public function getUser($userId)
    {
        $uri = "/api/v1/idps/{$this->getId()}/users/{$userId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('GET', $uri);

        return new \Okta\IdentityProviders\IdentityProviderApplicationUser(null, $body);
    }


    /**
    * Links an Okta user to an existing Social Identity Provider. This does not support the SAML2 Identity Provider Type
    *
    *
    * @return mixed|null
    */
    public function linkUser($userId, UserIdentityProviderLinkRequest $userIdentityProviderLinkRequest)
    {
        $uri = "/api/v1/idps/{$this->getId()}/users/{$userId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $userIdentityProviderLinkRequest);

        return new \Okta\IdentityProviders\IdentityProviderApplicationUser(null, $body);
    }


    /**
    * Get the SocialAuthToken object.
    *
    * @param array $options The options for the request.
    * @return \Okta\IdentityProviders\Collection
    */
    public function getSocialAuthTokens($userId, array $options = []): \Okta\IdentityProviders\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/idps/{$this->getId()}/users/{$userId}/credentials/tokens",
                    \Okta\IdentityProviders\SocialAuthToken::class,
                    \Okta\IdentityProviders\Collection::class,
                    $options
                );
    }
}
