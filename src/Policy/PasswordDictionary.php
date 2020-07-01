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

class PasswordDictionary extends \Okta\Resource\AbstractResource
{
    const COMMON = 'common';

    /**
     * Set the Common.
     *
     * @param mixed $common The common to set.
     * @return self
     */
    function setCommon(\Okta\Policy\PasswordDictionaryCommon $common) : PasswordDictionary
    {
        $this->setResourceProperty(
            self::COMMON,
            $common
        );
    
        return $this;
    }

    /**
     * Get the Common.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordDictionaryCommon
     */
    function getCommon(array $options = []) : \Okta\Policy\PasswordDictionaryCommon
    {
        return $this->getResourceProperty(
            self::COMMON,
            \Okta\Policy\PasswordDictionaryCommon::class,
            $options
        );
    }


}