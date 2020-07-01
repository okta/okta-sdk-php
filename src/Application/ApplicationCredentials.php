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

class ApplicationCredentials extends \Okta\Resource\AbstractResource
{
    const SIGNING = 'signing';
    const USER_NAME_TEMPLATE = 'userNameTemplate';

    /**
     * Set the Signing.
     *
     * @param mixed $signing The signing to set.
     * @return self
     */
    function setSigning(\Okta\Application\ApplicationCredentialsSigning $signing) : ApplicationCredentials
    {
        $this->setResourceProperty(
            self::SIGNING,
            $signing
        );
    
        return $this;
    }

    /**
     * Set the UserNameTemplate.
     *
     * @param mixed $userNameTemplate The userNameTemplate to set.
     * @return self
     */
    function setUserNameTemplate(\Okta\Application\ApplicationCredentialsUsernameTemplate $userNameTemplate) : ApplicationCredentials
    {
        $this->setResourceProperty(
            self::USER_NAME_TEMPLATE,
            $userNameTemplate
        );
    
        return $this;
    }

    /**
     * Get the Signing.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\ApplicationCredentialsSigning
     */
    function getSigning(array $options = []) : \Okta\Application\ApplicationCredentialsSigning
    {
        return $this->getResourceProperty(
            self::SIGNING,
            \Okta\Application\ApplicationCredentialsSigning::class,
            $options
        );
    }

    /**
     * Get the UserNameTemplate.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\ApplicationCredentialsUsernameTemplate
     */
    function getUserNameTemplate(array $options = []) : \Okta\Application\ApplicationCredentialsUsernameTemplate
    {
        return $this->getResourceProperty(
            self::USER_NAME_TEMPLATE,
            \Okta\Application\ApplicationCredentialsUsernameTemplate::class,
            $options
        );
    }


}