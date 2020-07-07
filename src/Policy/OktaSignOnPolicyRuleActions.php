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

class OktaSignOnPolicyRuleActions extends \Okta\Resource\AbstractResource
{
    const SIGNON = 'signon';


    /**
     * Set the Signon.
     *
     * @param mixed $signon The signon to set.
     * @return self
     */
    function setSignon(\Okta\Policy\OktaSignOnPolicyRuleSignonActions $signon) : OktaSignOnPolicyRuleActions
    {
        $this->setResourceProperty(
            self::SIGNON,
            $signon
        );
    
        return $this;
    }

    /**
     * Get the Signon.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\OktaSignOnPolicyRuleSignonActions
     */
    function getSignon(array $options = []) : \Okta\Policy\OktaSignOnPolicyRuleSignonActions
    {
        return $this->getResourceProperty(
            self::SIGNON,
            \Okta\Policy\OktaSignOnPolicyRuleSignonActions::class,
            $options
        );
    }


}