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

namespace Okta\Applications;


class CsrMetadata extends \Okta\Resource\AbstractResource
{
    const SUBJECT = 'subject';
    const SUBJECT_ALT_NAMES = 'subjectAltNames';



    /**
     * Get the subject.
     *
     * @return \Okta\Applications\CsrMetadataSubject
     */
    public function getSubject(array $options = []): \Okta\Applications\CsrMetadataSubject
    {
        return $this->getResourceProperty(
            self::SUBJECT,
            \Okta\Applications\CsrMetadataSubject::class,
            $options
        );
    }


    /**
     * Set the subject.
     *
     * @param \Okta\Applications\CsrMetadataSubject $subject The CsrMetadataSubject instance.
     * @return self
     */
    public function setSubject(\Okta\Applications\CsrMetadataSubject $subject)
    {
        $this->setResourceProperty(
            self::SUBJECT,
            $subject
        );

        return $this;
    }

    /**
     * Get the subjectAltNames.
     *
     * @return \Okta\Applications\CsrMetadataSubjectAltNames
     */
    public function getSubjectAltNames(array $options = []): \Okta\Applications\CsrMetadataSubjectAltNames
    {
        return $this->getResourceProperty(
            self::SUBJECT_ALT_NAMES,
            \Okta\Applications\CsrMetadataSubjectAltNames::class,
            $options
        );
    }


    /**
     * Set the subjectAltNames.
     *
     * @param \Okta\Applications\CsrMetadataSubjectAltNames $subjectAltNames The CsrMetadataSubjectAltNames instance.
     * @return self
     */
    public function setSubjectAltNames(\Okta\Applications\CsrMetadataSubjectAltNames $subjectAltNames)
    {
        $this->setResourceProperty(
            self::SUBJECT_ALT_NAMES,
            $subjectAltNames
        );

        return $this;
    }
}
