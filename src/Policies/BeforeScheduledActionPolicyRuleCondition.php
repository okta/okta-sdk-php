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

class BeforeScheduledActionPolicyRuleCondition extends \Okta\Resource\AbstractResource
{
    const DURATION = 'duration';
    const LIFECYCLE_ACTION = 'lifecycleAction';



    /**
     * Get the duration.
     *
     * @return \Okta\Policies\Duration
     */
    public function getDuration(array $options = []): \Okta\Policies\Duration
    {
        return $this->getResourceProperty(
            self::DURATION,
            \Okta\Policies\Duration::class,
            $options
        );
    }


    /**
     * Set the duration.
     *
     * @param \Okta\Policies\Duration $duration The Duration instance.
     * @return self
     */
    public function setDuration(\Okta\Policies\Duration $duration)
    {
        $this->setResourceProperty(
            self::DURATION,
            $duration
        );

        return $this;
    }

    /**
     * Get the lifecycleAction.
     *
     * @return \Okta\Policies\ScheduledUserLifecycleAction
     */
    public function getLifecycleAction(array $options = []): \Okta\Policies\ScheduledUserLifecycleAction
    {
        return $this->getResourceProperty(
            self::LIFECYCLE_ACTION,
            \Okta\Policies\ScheduledUserLifecycleAction::class,
            $options
        );
    }


    /**
     * Set the lifecycleAction.
     *
     * @param \Okta\Policies\ScheduledUserLifecycleAction $lifecycleAction The ScheduledUserLifecycleAction instance.
     * @return self
     */
    public function setLifecycleAction(\Okta\Policies\ScheduledUserLifecycleAction $lifecycleAction)
    {
        $this->setResourceProperty(
            self::LIFECYCLE_ACTION,
            $lifecycleAction
        );

        return $this;
    }
}
