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

namespace Okta\Application;

class CsrMetadata extends \Okta\Resource\AbstractResource
{
    const SUBJECT = 'subject';
    const SUBJECT_ALT_NAMES = 'subjectAltNames';


    /**
     * Set the Subject.
     *
     * @param mixed $subject The subject to set.
     * @return self
     */
    function setSubject(\Okta\Application\CsrMetadataSubject $subject) : CsrMetadata
    {
        $this->setResourceProperty(
            self::SUBJECT,
            $subject
        );
    
        return $this;
    }

    /**
     * Set the SubjectAltNames.
     *
     * @param mixed $subjectAltNames The subjectAltNames to set.
     * @return self
     */
    function setSubjectAltNames(\Okta\Application\CsrMetadataSubjectAltNames $subjectAltNames) : CsrMetadata
    {
        $this->setResourceProperty(
            self::SUBJECT_ALT_NAMES,
            $subjectAltNames
        );
    
        return $this;
    }

    /**
     * Get the Subject.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\CsrMetadataSubject
     */
    function getSubject(array $options = []) : \Okta\Application\CsrMetadataSubject
    {
        return $this->getResourceProperty(
            self::SUBJECT,
            \Okta\Application\CsrMetadataSubject::class,
            $options
        );
    }

    /**
     * Get the SubjectAltNames.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\CsrMetadataSubjectAltNames
     */
    function getSubjectAltNames(array $options = []) : \Okta\Application\CsrMetadataSubjectAltNames
    {
        return $this->getResourceProperty(
            self::SUBJECT_ALT_NAMES,
            \Okta\Application\CsrMetadataSubjectAltNames::class,
            $options
        );
    }


}