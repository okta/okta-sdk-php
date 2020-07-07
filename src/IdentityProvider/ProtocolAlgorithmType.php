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

namespace Okta\IdentityProvider;

class ProtocolAlgorithmType extends \Okta\Resource\AbstractResource
{
    const SIGNATURE = 'signature';


    /**
     * Set the Signature.
     *
     * @param mixed $signature The signature to set.
     * @return self
     */
    function setSignature(\Okta\IdentityProvider\ProtocolAlgorithmTypeSignature $signature) : ProtocolAlgorithmType
    {
        $this->setResourceProperty(
            self::SIGNATURE,
            $signature
        );
    
        return $this;
    }

    /**
     * Get the Signature.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\ProtocolAlgorithmTypeSignature
     */
    function getSignature(array $options = []) : \Okta\IdentityProvider\ProtocolAlgorithmTypeSignature
    {
        return $this->getResourceProperty(
            self::SIGNATURE,
            \Okta\IdentityProvider\ProtocolAlgorithmTypeSignature::class,
            $options
        );
    }


}