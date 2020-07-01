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

namespace Okta\Ion;

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
     * Set the Form.
     *
     * @param mixed $form The form to set.
     * @return self
     */
    function setForm(\Okta\Ion\IonForm $form) : IonField
    {
        $this->setResourceProperty(
            self::FORM,
            $form
        );
    
        return $this;
    }

    /**
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : IonField
    {
        $this->setProperty(
            self::NAME,
            $name
        );
    
        return $this;
    }
    
    /**
     * Set the Type.
     *
     * @param mixed $type The type to set.
     * @return self
     */
    function setType($type) : IonField
    {
        $this->setProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }
    
    /**
     * Set the Label.
     *
     * @param mixed $label The label to set.
     * @return self
     */
    function setLabel($label) : IonField
    {
        $this->setProperty(
            self::LABEL,
            $label
        );
    
        return $this;
    }
    
    /**
     * Set the Value.
     *
     * @param mixed $value The value to set.
     * @return self
     */
    function setValue($value) : IonField
    {
        $this->setProperty(
            self::VALUE,
            $value
        );
    
        return $this;
    }
    
    /**
     * Set the Secret.
     *
     * @param mixed $secret The secret to set.
     * @return self
     */
    function setSecret($secret) : IonField
    {
        $this->setProperty(
            self::SECRET,
            $secret
        );
    
        return $this;
    }
    
    /**
     * Set the Mutable.
     *
     * @param mixed $mutable The mutable to set.
     * @return self
     */
    function setMutable($mutable) : IonField
    {
        $this->setProperty(
            self::MUTABLE,
            $mutable
        );
    
        return $this;
    }
    
    /**
     * Set the Visible.
     *
     * @param mixed $visible The visible to set.
     * @return self
     */
    function setVisible($visible) : IonField
    {
        $this->setProperty(
            self::VISIBLE,
            $visible
        );
    
        return $this;
    }
    
    /**
     * Set the Required.
     *
     * @param mixed $required The required to set.
     * @return self
     */
    function setRequired($required) : IonField
    {
        $this->setProperty(
            self::REQUIRED,
            $required
        );
    
        return $this;
    }
    
    /**
     * Get the Form.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Ion\IonForm
     */
    function getForm(array $options = []) : \Okta\Ion\IonForm
    {
        return $this->getResourceProperty(
            self::FORM,
            \Okta\Ion\IonForm::class,
            $options
        );
    }

    /**
     * Get the Name.
     *
     * @param mixed $name The name to set.
     * @return string
     */
    function getName() : string
    {
        return $this->getProperty(
            self::NAME
        );
    }
    
    /**
     * Get the Type.
     *
     * @param mixed $type The type to set.
     * @return string
     */
    function getType() : string
    {
        return $this->getProperty(
            self::TYPE
        );
    }
    
    /**
     * Get the Label.
     *
     * @param mixed $label The label to set.
     * @return string
     */
    function getLabel() : string
    {
        return $this->getProperty(
            self::LABEL
        );
    }
    
    /**
     * Get the Value.
     *
     * @param mixed $value The value to set.
     * @return \stdClass
     */
    function getValue() : \stdClass
    {
        return $this->getProperty(
            self::VALUE
        );
    }
    
    /**
     * Get the Secret.
     *
     * @param mixed $secret The secret to set.
     * @return bool
     */
    function getSecret() : bool
    {
        return $this->getProperty(
            self::SECRET
        );
    }
    
    /**
     * Get the Mutable.
     *
     * @param mixed $mutable The mutable to set.
     * @return bool
     */
    function getMutable() : bool
    {
        return $this->getProperty(
            self::MUTABLE
        );
    }
    
    /**
     * Get the Visible.
     *
     * @param mixed $visible The visible to set.
     * @return bool
     */
    function getVisible() : bool
    {
        return $this->getProperty(
            self::VISIBLE
        );
    }
    
    /**
     * Get the Required.
     *
     * @param mixed $required The required to set.
     * @return bool
     */
    function getRequired() : bool
    {
        return $this->getProperty(
            self::REQUIRED
        );
    }
    

}