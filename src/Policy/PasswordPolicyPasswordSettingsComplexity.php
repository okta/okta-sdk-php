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

class PasswordPolicyPasswordSettingsComplexity extends \Okta\Resource\AbstractResource
{
    const MIN_LENGTH = 'minLength';
    const MIN_NUMBER = 'minNumber';
    const MIN_SYMBOL = 'minSymbol';
    const DICTIONARY = 'dictionary';
    const MIN_LOWER_CASE = 'minLowerCase';
    const MIN_UPPER_CASE = 'minUpperCase';
    const EXCLUDE_USERNAME = 'excludeUsername';
    const EXCLUDE_ATTRIBUTES = 'excludeAttributes';

    private $minLength = '8';
    private $minNumber = '1';
    private $minSymbol = '1';
    private $minLowerCase = '1';
    private $minUpperCase = '1';
    private $excludeUsername = 'true';
    private $excludeAttributes = '1';

    /**
     * Set the MinLength.
     *
     * @param mixed $minLength The minLength to set.
     * @return self
     */
    function setMinLength($minLength) : PasswordPolicyPasswordSettingsComplexity
    {
        $this->setProperty(
            self::MIN_LENGTH,
            $minLength
        );
    
        return $this;
    }
    
    /**
     * Set the MinNumber.
     *
     * @param mixed $minNumber The minNumber to set.
     * @return self
     */
    function setMinNumber($minNumber) : PasswordPolicyPasswordSettingsComplexity
    {
        $this->setProperty(
            self::MIN_NUMBER,
            $minNumber
        );
    
        return $this;
    }
    
    /**
     * Set the MinSymbol.
     *
     * @param mixed $minSymbol The minSymbol to set.
     * @return self
     */
    function setMinSymbol($minSymbol) : PasswordPolicyPasswordSettingsComplexity
    {
        $this->setProperty(
            self::MIN_SYMBOL,
            $minSymbol
        );
    
        return $this;
    }
    
    /**
     * Set the Dictionary.
     *
     * @param mixed $dictionary The dictionary to set.
     * @return self
     */
    function setDictionary(\Okta\Policy\PasswordDictionary $dictionary) : PasswordPolicyPasswordSettingsComplexity
    {
        $this->setResourceProperty(
            self::DICTIONARY,
            $dictionary
        );
    
        return $this;
    }

    /**
     * Set the MinLowerCase.
     *
     * @param mixed $minLowerCase The minLowerCase to set.
     * @return self
     */
    function setMinLowerCase($minLowerCase) : PasswordPolicyPasswordSettingsComplexity
    {
        $this->setProperty(
            self::MIN_LOWER_CASE,
            $minLowerCase
        );
    
        return $this;
    }
    
    /**
     * Set the MinUpperCase.
     *
     * @param mixed $minUpperCase The minUpperCase to set.
     * @return self
     */
    function setMinUpperCase($minUpperCase) : PasswordPolicyPasswordSettingsComplexity
    {
        $this->setProperty(
            self::MIN_UPPER_CASE,
            $minUpperCase
        );
    
        return $this;
    }
    
    /**
     * Set the ExcludeUsername.
     *
     * @param mixed $excludeUsername The excludeUsername to set.
     * @return self
     */
    function setExcludeUsername($excludeUsername) : PasswordPolicyPasswordSettingsComplexity
    {
        $this->setProperty(
            self::EXCLUDE_USERNAME,
            $excludeUsername
        );
    
        return $this;
    }
    
    /**
     * Set the ExcludeAttributes.
     *
     * @param mixed $excludeAttributes The excludeAttributes to set.
     * @return self
     */
    function setExcludeAttributes($excludeAttributes) : PasswordPolicyPasswordSettingsComplexity
    {
        $this->setProperty(
            self::EXCLUDE_ATTRIBUTES,
            $excludeAttributes
        );
    
        return $this;
    }
    
    /**
     * Get the MinLength.
     *
     * @param mixed $minLength The minLength to set.
     * @return int
     */
    function getMinLength() : int
    {
        return $this->getProperty(
            self::MIN_LENGTH,
        );
    }
    
    /**
     * Get the MinNumber.
     *
     * @param mixed $minNumber The minNumber to set.
     * @return int
     */
    function getMinNumber() : int
    {
        return $this->getProperty(
            self::MIN_NUMBER,
        );
    }
    
    /**
     * Get the MinSymbol.
     *
     * @param mixed $minSymbol The minSymbol to set.
     * @return int
     */
    function getMinSymbol() : int
    {
        return $this->getProperty(
            self::MIN_SYMBOL,
        );
    }
    
    /**
     * Get the Dictionary.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordDictionary
     */
    function getDictionary(array $options = []) : \Okta\Policy\PasswordDictionary
    {
        return $this->getResourceProperty(
            self::DICTIONARY,
            \Okta\Policy\PasswordDictionary::class,
            $options
        );
    }

    /**
     * Get the MinLowerCase.
     *
     * @param mixed $minLowerCase The minLowerCase to set.
     * @return int
     */
    function getMinLowerCase() : int
    {
        return $this->getProperty(
            self::MIN_LOWER_CASE,
        );
    }
    
    /**
     * Get the MinUpperCase.
     *
     * @param mixed $minUpperCase The minUpperCase to set.
     * @return int
     */
    function getMinUpperCase() : int
    {
        return $this->getProperty(
            self::MIN_UPPER_CASE,
        );
    }
    
    /**
     * Get the ExcludeUsername.
     *
     * @param mixed $excludeUsername The excludeUsername to set.
     * @return bool
     */
    function getExcludeUsername() : bool
    {
        return $this->getProperty(
            self::EXCLUDE_USERNAME,
        );
    }
    
    /**
     * Get the ExcludeAttributes.
     *
     * @param mixed $excludeAttributes The excludeAttributes to set.
     * @return array
     */
    function getExcludeAttributes() : array
    {
        return $this->getProperty(
            self::EXCLUDE_ATTRIBUTES,
        );
    }
    

}