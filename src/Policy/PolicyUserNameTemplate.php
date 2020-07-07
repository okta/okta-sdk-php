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

class PolicyUserNameTemplate extends \Okta\Resource\AbstractResource
{
    const TEMPLATE = 'template';


    /**
     * Set the Template.
     *
     * @param mixed $template The template to set.
     * @return self
     */
    function setTemplate($template) : PolicyUserNameTemplate
    {
        $this->setProperty(
            self::TEMPLATE,
            $template
        );
    
        return $this;
    }
    
    /**
     * Get the Template.
     *
     * @param mixed $template The template to set.
     * @return string
     */
    function getTemplate() : string
    {
        return $this->getProperty(
            self::TEMPLATE,
        );
    }
    

}