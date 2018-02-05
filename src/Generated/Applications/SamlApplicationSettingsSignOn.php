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

namespace Okta\Generated\Applications;


class SamlApplicationSettingsSignOn extends \Okta\Resource\AbstractResource
{
    const AUDIENCE = 'audience';
    const SP_ISSUER = 'spIssuer';
    const IDP_ISSUER = 'idpIssuer';
    const RECIPIENT = 'recipient';
    const SSO_ACS_URL = 'ssoAcsUrl';
    const DESTINATION = 'destination';
    const RESPONSE_SIGNED = 'responseSigned';
    const ASSERTION_SIGNED = 'assertionSigned';
    const DIGEST_ALGORITHM = 'digestAlgorithm';
    const HONOR_FORCE_AUTHN = 'honorForceAuthn';
    const AUDIENCE_OVERRIDE = 'audienceOverride';
    const DEFAULT_RELAY_STATE = 'defaultRelayState';
    const RECIPIENT_OVERRIDE = 'recipientOverride';
    const REQUEST_COMPRESSED = 'requestCompressed';
    const SSO_ACS_URL_OVERRIDE = 'ssoAcsUrlOverride';
    const SIGNATURE_ALGORITHM = 'signatureAlgorithm';
    const ATTRIBUTE_STATEMENTS = 'attributeStatements';
    const DESTINATION_OVERRIDE = 'destinationOverride';
    const SUBJECT_NAME_ID_FORMAT = 'subjectNameIdFormat';
    const AUTHN_CONTEXT_CLASS_REF = 'authnContextClassRef';
    const SUBJECT_NAME_ID_TEMPLATE = 'subjectNameIdTemplate';



    /**
     * Get the audience.
     *
     * @return string
     */
    public function getAudience()
    {
        return $this->getProperty(self::AUDIENCE);
    }

    /**
    * Set the audience.
    *
    * @param mixed $audience The value to set.
    * @return self
    */
    public function setAudience($audience)
    {
        $this->setProperty(
            self::AUDIENCE,
            $audience
        );

        return $this;
    }

    /**
     * Get the spIssuer.
     *
     * @return string
     */
    public function getSpIssuer()
    {
        return $this->getProperty(self::SP_ISSUER);
    }

    /**
    * Set the spIssuer.
    *
    * @param mixed $spIssuer The value to set.
    * @return self
    */
    public function setSpIssuer($spIssuer)
    {
        $this->setProperty(
            self::SP_ISSUER,
            $spIssuer
        );

        return $this;
    }

    /**
     * Get the idpIssuer.
     *
     * @return string
     */
    public function getIdpIssuer()
    {
        return $this->getProperty(self::IDP_ISSUER);
    }

    /**
    * Set the idpIssuer.
    *
    * @param mixed $idpIssuer The value to set.
    * @return self
    */
    public function setIdpIssuer($idpIssuer)
    {
        $this->setProperty(
            self::IDP_ISSUER,
            $idpIssuer
        );

        return $this;
    }

    /**
     * Get the recipient.
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->getProperty(self::RECIPIENT);
    }

    /**
    * Set the recipient.
    *
    * @param mixed $recipient The value to set.
    * @return self
    */
    public function setRecipient($recipient)
    {
        $this->setProperty(
            self::RECIPIENT,
            $recipient
        );

        return $this;
    }

    /**
     * Get the ssoAcsUrl.
     *
     * @return string
     */
    public function getSsoAcsUrl()
    {
        return $this->getProperty(self::SSO_ACS_URL);
    }

    /**
    * Set the ssoAcsUrl.
    *
    * @param mixed $ssoAcsUrl The value to set.
    * @return self
    */
    public function setSsoAcsUrl($ssoAcsUrl)
    {
        $this->setProperty(
            self::SSO_ACS_URL,
            $ssoAcsUrl
        );

        return $this;
    }

    /**
     * Get the destination.
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->getProperty(self::DESTINATION);
    }

    /**
    * Set the destination.
    *
    * @param mixed $destination The value to set.
    * @return self
    */
    public function setDestination($destination)
    {
        $this->setProperty(
            self::DESTINATION,
            $destination
        );

        return $this;
    }

    /**
     * Get the responseSigned.
     *
     * @return bool
     */
    public function getResponseSigned()
    {
        return $this->getProperty(self::RESPONSE_SIGNED);
    }

    /**
    * Set the responseSigned.
    *
    * @param mixed $responseSigned The value to set.
    * @return self
    */
    public function setResponseSigned($responseSigned)
    {
        $this->setProperty(
            self::RESPONSE_SIGNED,
            $responseSigned
        );

        return $this;
    }

    /**
     * Get the assertionSigned.
     *
     * @return bool
     */
    public function getAssertionSigned()
    {
        return $this->getProperty(self::ASSERTION_SIGNED);
    }

    /**
    * Set the assertionSigned.
    *
    * @param mixed $assertionSigned The value to set.
    * @return self
    */
    public function setAssertionSigned($assertionSigned)
    {
        $this->setProperty(
            self::ASSERTION_SIGNED,
            $assertionSigned
        );

        return $this;
    }

    /**
     * Get the digestAlgorithm.
     *
     * @return string
     */
    public function getDigestAlgorithm()
    {
        return $this->getProperty(self::DIGEST_ALGORITHM);
    }

    /**
    * Set the digestAlgorithm.
    *
    * @param mixed $digestAlgorithm The value to set.
    * @return self
    */
    public function setDigestAlgorithm($digestAlgorithm)
    {
        $this->setProperty(
            self::DIGEST_ALGORITHM,
            $digestAlgorithm
        );

        return $this;
    }

    /**
     * Get the honorForceAuthn.
     *
     * @return bool
     */
    public function getHonorForceAuthn()
    {
        return $this->getProperty(self::HONOR_FORCE_AUTHN);
    }

    /**
    * Set the honorForceAuthn.
    *
    * @param mixed $honorForceAuthn The value to set.
    * @return self
    */
    public function setHonorForceAuthn($honorForceAuthn)
    {
        $this->setProperty(
            self::HONOR_FORCE_AUTHN,
            $honorForceAuthn
        );

        return $this;
    }

    /**
     * Get the audienceOverride.
     *
     * @return string
     */
    public function getAudienceOverride()
    {
        return $this->getProperty(self::AUDIENCE_OVERRIDE);
    }

    /**
    * Set the audienceOverride.
    *
    * @param mixed $audienceOverride The value to set.
    * @return self
    */
    public function setAudienceOverride($audienceOverride)
    {
        $this->setProperty(
            self::AUDIENCE_OVERRIDE,
            $audienceOverride
        );

        return $this;
    }

    /**
     * Get the defaultRelayState.
     *
     * @return string
     */
    public function getDefaultRelayState()
    {
        return $this->getProperty(self::DEFAULT_RELAY_STATE);
    }

    /**
    * Set the defaultRelayState.
    *
    * @param mixed $defaultRelayState The value to set.
    * @return self
    */
    public function setDefaultRelayState($defaultRelayState)
    {
        $this->setProperty(
            self::DEFAULT_RELAY_STATE,
            $defaultRelayState
        );

        return $this;
    }

    /**
     * Get the recipientOverride.
     *
     * @return string
     */
    public function getRecipientOverride()
    {
        return $this->getProperty(self::RECIPIENT_OVERRIDE);
    }

    /**
    * Set the recipientOverride.
    *
    * @param mixed $recipientOverride The value to set.
    * @return self
    */
    public function setRecipientOverride($recipientOverride)
    {
        $this->setProperty(
            self::RECIPIENT_OVERRIDE,
            $recipientOverride
        );

        return $this;
    }

    /**
     * Get the requestCompressed.
     *
     * @return bool
     */
    public function getRequestCompressed()
    {
        return $this->getProperty(self::REQUEST_COMPRESSED);
    }

    /**
    * Set the requestCompressed.
    *
    * @param mixed $requestCompressed The value to set.
    * @return self
    */
    public function setRequestCompressed($requestCompressed)
    {
        $this->setProperty(
            self::REQUEST_COMPRESSED,
            $requestCompressed
        );

        return $this;
    }

    /**
     * Get the ssoAcsUrlOverride.
     *
     * @return string
     */
    public function getSsoAcsUrlOverride()
    {
        return $this->getProperty(self::SSO_ACS_URL_OVERRIDE);
    }

    /**
    * Set the ssoAcsUrlOverride.
    *
    * @param mixed $ssoAcsUrlOverride The value to set.
    * @return self
    */
    public function setSsoAcsUrlOverride($ssoAcsUrlOverride)
    {
        $this->setProperty(
            self::SSO_ACS_URL_OVERRIDE,
            $ssoAcsUrlOverride
        );

        return $this;
    }

    /**
     * Get the signatureAlgorithm.
     *
     * @return string
     */
    public function getSignatureAlgorithm()
    {
        return $this->getProperty(self::SIGNATURE_ALGORITHM);
    }

    /**
    * Set the signatureAlgorithm.
    *
    * @param mixed $signatureAlgorithm The value to set.
    * @return self
    */
    public function setSignatureAlgorithm($signatureAlgorithm)
    {
        $this->setProperty(
            self::SIGNATURE_ALGORITHM,
            $signatureAlgorithm
        );

        return $this;
    }

    /**
     * Get the attributeStatements.
     *
     * @return array
     */
    public function getAttributeStatements()
    {
        return $this->getProperty(self::ATTRIBUTE_STATEMENTS);
    }

    /**
    * Set the attributeStatements.
    *
    * @param mixed $attributeStatements The value to set.
    * @return self
    */
    public function setAttributeStatements($attributeStatements)
    {
        $this->setProperty(
            self::ATTRIBUTE_STATEMENTS,
            $attributeStatements
        );

        return $this;
    }

    /**
     * Get the destinationOverride.
     *
     * @return string
     */
    public function getDestinationOverride()
    {
        return $this->getProperty(self::DESTINATION_OVERRIDE);
    }

    /**
    * Set the destinationOverride.
    *
    * @param mixed $destinationOverride The value to set.
    * @return self
    */
    public function setDestinationOverride($destinationOverride)
    {
        $this->setProperty(
            self::DESTINATION_OVERRIDE,
            $destinationOverride
        );

        return $this;
    }

    /**
     * Get the subjectNameIdFormat.
     *
     * @return string
     */
    public function getSubjectNameIdFormat()
    {
        return $this->getProperty(self::SUBJECT_NAME_ID_FORMAT);
    }

    /**
    * Set the subjectNameIdFormat.
    *
    * @param mixed $subjectNameIdFormat The value to set.
    * @return self
    */
    public function setSubjectNameIdFormat($subjectNameIdFormat)
    {
        $this->setProperty(
            self::SUBJECT_NAME_ID_FORMAT,
            $subjectNameIdFormat
        );

        return $this;
    }

    /**
     * Get the authnContextClassRef.
     *
     * @return string
     */
    public function getAuthnContextClassRef()
    {
        return $this->getProperty(self::AUTHN_CONTEXT_CLASS_REF);
    }

    /**
    * Set the authnContextClassRef.
    *
    * @param mixed $authnContextClassRef The value to set.
    * @return self
    */
    public function setAuthnContextClassRef($authnContextClassRef)
    {
        $this->setProperty(
            self::AUTHN_CONTEXT_CLASS_REF,
            $authnContextClassRef
        );

        return $this;
    }

    /**
     * Get the subjectNameIdTemplate.
     *
     * @return string
     */
    public function getSubjectNameIdTemplate()
    {
        return $this->getProperty(self::SUBJECT_NAME_ID_TEMPLATE);
    }

    /**
    * Set the subjectNameIdTemplate.
    *
    * @param mixed $subjectNameIdTemplate The value to set.
    * @return self
    */
    public function setSubjectNameIdTemplate($subjectNameIdTemplate)
    {
        $this->setProperty(
            self::SUBJECT_NAME_ID_TEMPLATE,
            $subjectNameIdTemplate
        );

        return $this;
    }
}
