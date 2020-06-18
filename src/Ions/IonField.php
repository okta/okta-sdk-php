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

namespace Okta\Ions;

class IonField extends \Okta\Resource\AbstractResource
{
    const FORM = 'form';
    const NAME = 'name';
    const TYPE = 'type';
    const LABEL = 'label';
    const VALUE = 'value';
    const SECRET = 'secret';
    const MUTABLE = 'mutable';
    const VISIBLE = 'visible';
    const REQUIRED = 'required';



    /**
     * Get the form.
     *
     * @return \Okta\Ions\IonForm
     */
    public function getForm(array $options = []): \Okta\Ions\IonForm
    {
        return $this->getResourceProperty(
            self::FORM,
            \Okta\Ions\IonForm::class,
            $options
        );
    }


    /**
     * Set the form.
     *
     * @param \Okta\Ions\IonForm $form The IonForm instance.
     * @return self
     */
    public function setForm(\Okta\Ions\IonForm $form)
    {
        $this->setResourceProperty(
            self::FORM,
            $form
        );

        return $this;
    }

    /**
     * Get the name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->getProperty(self::NAME);
    }

    /**
    * Set the name.
    *
    * @param mixed $name The value to set.
    * @return self
    */
    public function setName($name)
    {
        $this->setProperty(
            self::NAME,
            $name
        );

        return $this;
    }

    /**
     * Get the type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->getProperty(self::TYPE);
    }

    /**
    * Set the type.
    *
    * @param mixed $type The value to set.
    * @return self
    */
    public function setType($type)
    {
        $this->setProperty(
            self::TYPE,
            $type
        );

        return $this;
    }

    /**
     * Get the label.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->getProperty(self::LABEL);
    }

    /**
    * Set the label.
    *
    * @param mixed $label The value to set.
    * @return self
    */
    public function setLabel($label)
    {
        $this->setProperty(
            self::LABEL,
            $label
        );

        return $this;
    }

    /**
     * Get the value.
     *
     * @return \stdClass
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

    /**
     * Get the secret.
     *
     * @return bool
     */
    public function getSecret()
    {
        return $this->getProperty(self::SECRET);
    }

    /**
    * Set the secret.
    *
    * @param mixed $secret The value to set.
    * @return self
    */
    public function setSecret($secret)
    {
        $this->setProperty(
            self::SECRET,
            $secret
        );

        return $this;
    }

    /**
     * Get the mutable.
     *
     * @return bool
     */
    public function getMutable()
    {
        return $this->getProperty(self::MUTABLE);
    }

    /**
    * Set the mutable.
    *
    * @param mixed $mutable The value to set.
    * @return self
    */
    public function setMutable($mutable)
    {
        $this->setProperty(
            self::MUTABLE,
            $mutable
        );

        return $this;
    }

    /**
     * Get the visible.
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->getProperty(self::VISIBLE);
    }

    /**
    * Set the visible.
    *
    * @param mixed $visible The value to set.
    * @return self
    */
    public function setVisible($visible)
    {
        $this->setProperty(
            self::VISIBLE,
            $visible
        );

        return $this;
    }

    /**
     * Get the required.
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->getProperty(self::REQUIRED);
    }

    /**
    * Set the required.
    *
    * @param mixed $required The value to set.
    * @return self
    */
    public function setRequired($required)
    {
        $this->setProperty(
            self::REQUIRED,
            $required
        );

        return $this;
    }
}
