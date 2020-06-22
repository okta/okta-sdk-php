<?php
/*******************************************************************************
 * Copyright 2017-Present Okta, Inc.
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

namespace Okta\InlineHooks;

class InlineHookResponseCommandValue extends \Okta\Resource\AbstractResource
{
    const OP = 'op';
    const PATH = 'path';
    const VALUE = 'value';


    /**
     * Get the op.
     *
     * @return string
     */
    public function getOp()
    {
        return $this->getProperty(self::OP);
    }

    /**
    * Set the op.
    *
    * @param mixed $op The value to set.
    * @return self
    */
    public function setOp($op)
    {
        $this->setProperty(
            self::OP,
            $op
        );

        return $this;
    }

    /**
     * Get the path.
     *
     * @return string
     */
    public function getPath()
    {
        return $this->getProperty(self::PATH);
    }

    /**
    * Set the path.
    *
    * @param mixed $path The value to set.
    * @return self
    */
    public function setPath($path)
    {
        $this->setProperty(
            self::PATH,
            $path
        );

        return $this;
    }

    /**
     * Get the value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->getProperty(self::VALUE);
    }

    /**
    * Set the value.
    *
    * @param mixed $value The value to set.
    * @return self
    */
    public function setValue($value)
    {
        $this->setProperty(
            self::VALUE,
            $value
        );

        return $this;
    }
}
