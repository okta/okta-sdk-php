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

namespace Okta\Policies;

class MDMEnrollmentPolicyRuleCondition extends \Okta\Resource\AbstractResource
{
    const ENROLLMENT = 'enrollment';
    const BLOCK_NON_SAFE_ANDROID = 'blockNonSafeAndroid';



    /**
     * Get the enrollment.
     *
     * @return string
     */
    public function getEnrollment()
    {
        return $this->getProperty(self::ENROLLMENT);
    }

    /**
    * Set the enrollment.
    *
    * @param mixed $enrollment The value to set.
    * @return self
    */
    public function setEnrollment($enrollment)
    {
        $this->setProperty(
            self::ENROLLMENT,
            $enrollment
        );

        return $this;
    }

    /**
     * Get the blockNonSafeAndroid.
     *
     * @return bool
     */
    public function getBlockNonSafeAndroid()
    {
        return $this->getProperty(self::BLOCK_NON_SAFE_ANDROID);
    }

    /**
    * Set the blockNonSafeAndroid.
    *
    * @param mixed $blockNonSafeAndroid The value to set.
    * @return self
    */
    public function setBlockNonSafeAndroid($blockNonSafeAndroid)
    {
        $this->setProperty(
            self::BLOCK_NON_SAFE_ANDROID,
            $blockNonSafeAndroid
        );

        return $this;
    }
}
