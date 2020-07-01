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

class MDMEnrollmentPolicyRuleCondition extends \Okta\Resource\AbstractResource
{
    const ENROLLMENT = 'enrollment';
    const BLOCK_NON_SAFE_ANDROID = 'blockNonSafeAndroid';

    /**
     * Set the Enrollment.
     *
     * @param mixed $enrollment The enrollment to set.
     * @return self
     */
    function setEnrollment($enrollment) : MDMEnrollmentPolicyRuleCondition
    {
        $this->setProperty(
            self::ENROLLMENT,
            $enrollment
        );
    
        return $this;
    }
    
    /**
     * Set the BlockNonSafeAndroid.
     *
     * @param mixed $blockNonSafeAndroid The blockNonSafeAndroid to set.
     * @return self
     */
    function setBlockNonSafeAndroid($blockNonSafeAndroid) : MDMEnrollmentPolicyRuleCondition
    {
        $this->setProperty(
            self::BLOCK_NON_SAFE_ANDROID,
            $blockNonSafeAndroid
        );
    
        return $this;
    }
    
    /**
     * Get the Enrollment.
     *
     * @param mixed $enrollment The enrollment to set.
     * @return string
     */
    function getEnrollment() : string
    {
        return $this->getProperty(
            self::ENROLLMENT
        );
    }
    
    /**
     * Get the BlockNonSafeAndroid.
     *
     * @param mixed $blockNonSafeAndroid The blockNonSafeAndroid to set.
     * @return bool
     */
    function getBlockNonSafeAndroid() : bool
    {
        return $this->getProperty(
            self::BLOCK_NON_SAFE_ANDROID
        );
    }
    

}