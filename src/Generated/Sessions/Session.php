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

namespace Okta\Generated\Sessions;


class Session extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const AMR = 'amr';
    const IDP = 'idp';
    const LOGIN = 'login';
    const LINKS = '_links';
    const STATUS = 'status';
    const USER_ID = 'userId';
    const CREATED_AT = 'createdAt';
    const EXPIRES_AT = 'expiresAt';
    const LAST_FACTOR_VERIFICATION = 'lastFactorVerification';
    const LAST_PASSWORD_VERIFICATION = 'lastPasswordVerification';


    public function get($query)
    {
        return \Okta\Client::getInstance()
                    ->getDataStore()
                    ->getResource(
                        $query,
                        \Okta\Sessions\Session::class,
                        "/sessions"
                    );
    }
            public function delete()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->deleteResource(
                    "/sessions",
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
     * Get the amr.
     *
     * @return array
     */
    public function getAmr()
    {
        return $this->getProperty(self::AMR);
    }

    /**
     * Get the idp.
     *
     * @return \Okta\Sessions\SessionIdentityProvider
     */
    public function getIdp(array $options = []): \Okta\Sessions\SessionIdentityProvider
    {
        return $this->getResourceProperty(
            self::IDP,
            \Okta\Sessions\SessionIdentityProvider::class,
            $options
        );
    }


    /**
     * Get the login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->getProperty(self::LOGIN);
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
     * Get the status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty(self::STATUS);
    }

    /**
     * Get the userId.
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->getProperty(self::USER_ID);
    }

    /**
     * Get the createdAt.
     *
     * @return \Carbon\Carbon|null
     */
    public function getCreatedAt()
    {
        return $this->getDateProperty(self::CREATED_AT);
    }

    /**
     * Get the expiresAt.
     *
     * @return \Carbon\Carbon|null
     */
    public function getExpiresAt()
    {
        return $this->getDateProperty(self::EXPIRES_AT);
    }

    /**
     * Get the lastFactorVerification.
     *
     * @return \Carbon\Carbon|null
     */
    public function getLastFactorVerification()
    {
        return $this->getDateProperty(self::LAST_FACTOR_VERIFICATION);
    }

    /**
     * Get the lastPasswordVerification.
     *
     * @return \Carbon\Carbon|null
     */
    public function getLastPasswordVerification()
    {
        return $this->getDateProperty(self::LAST_PASSWORD_VERIFICATION);
    }


    /**
    * 
    *
    *
    * @return mixed|null
    */
    public function refresh()
    {
        $uri = "/api/v1/sessions/{$this->getId()}/lifecycle/refresh";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return new \Okta\Sessions\Session(null, $body);
    }
}
