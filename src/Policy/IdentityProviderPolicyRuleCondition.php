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

class IdentityProviderPolicyRuleCondition extends \Okta\Resource\AbstractResource
{
    const IDP_IDS = 'idpIds';
    const PROVIDER = 'provider';


    /**
     * Set the IdpIds.
     *
     * @param mixed $idpIds The idpIds to set.
     * @return self
     */
    function setIdpIds($idpIds) : IdentityProviderPolicyRuleCondition
    {
        $this->setProperty(
            self::IDP_IDS,
            $idpIds
        );
    
        return $this;
    }
    
    /**
     * Set the Provider.
     *
     * @param mixed $provider The provider to set.
     * @return self
     */
    function setProvider($provider) : IdentityProviderPolicyRuleCondition
    {
        $this->setProperty(
            self::PROVIDER,
            $provider
        );
    
        return $this;
    }
    
    /**
     * Get the IdpIds.
     *
     * @param mixed $idpIds The idpIds to set.
     * @return array
     */
    function getIdpIds() : array
    {
        return $this->getProperty(
            self::IDP_IDS,
        );
    }
    
    /**
     * Get the Provider.
     *
     * @param mixed $provider The provider to set.
     * @return string
     */
    function getProvider() : string
    {
        return $this->getProperty(
            self::PROVIDER,
        );
    }
    

}