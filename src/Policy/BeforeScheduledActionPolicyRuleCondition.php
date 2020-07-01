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

class BeforeScheduledActionPolicyRuleCondition extends \Okta\Resource\AbstractResource
{
    const DURATION = 'duration';
    const LIFECYCLE_ACTION = 'lifecycleAction';

    /**
     * Set the Duration.
     *
     * @param mixed $duration The duration to set.
     * @return self
     */
    function setDuration(\Okta\Policy\Duration $duration) : BeforeScheduledActionPolicyRuleCondition
    {
        $this->setResourceProperty(
            self::DURATION,
            $duration
        );
    
        return $this;
    }

    /**
     * Set the LifecycleAction.
     *
     * @param mixed $lifecycleAction The lifecycleAction to set.
     * @return self
     */
    function setLifecycleAction(\Okta\Policy\ScheduledUserLifecycleAction $lifecycleAction) : BeforeScheduledActionPolicyRuleCondition
    {
        $this->setResourceProperty(
            self::LIFECYCLE_ACTION,
            $lifecycleAction
        );
    
        return $this;
    }

    /**
     * Get the Duration.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\Duration
     */
    function getDuration(array $options = []) : \Okta\Policy\Duration
    {
        return $this->getResourceProperty(
            self::DURATION,
            \Okta\Policy\Duration::class,
            $options
        );
    }

    /**
     * Get the LifecycleAction.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\ScheduledUserLifecycleAction
     */
    function getLifecycleAction(array $options = []) : \Okta\Policy\ScheduledUserLifecycleAction
    {
        return $this->getResourceProperty(
            self::LIFECYCLE_ACTION,
            \Okta\Policy\ScheduledUserLifecycleAction::class,
            $options
        );
    }


}