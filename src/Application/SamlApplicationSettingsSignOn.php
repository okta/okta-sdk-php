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
     * Set the Audience.
     *
     * @param mixed $audience The audience to set.
     * @return self
     */
    function setAudience($audience) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::AUDIENCE,
            $audience
        );
    
        return $this;
    }
    
    /**
     * Set the SpIssuer.
     *
     * @param mixed $spIssuer The spIssuer to set.
     * @return self
     */
    function setSpIssuer($spIssuer) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::SP_ISSUER,
            $spIssuer
        );
    
        return $this;
    }
    
    /**
     * Set the IdpIssuer.
     *
     * @param mixed $idpIssuer The idpIssuer to set.
     * @return self
     */
    function setIdpIssuer($idpIssuer) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::IDP_ISSUER,
            $idpIssuer
        );
    
        return $this;
    }
    
    /**
     * Set the Recipient.
     *
     * @param mixed $recipient The recipient to set.
     * @return self
     */
    function setRecipient($recipient) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::RECIPIENT,
            $recipient
        );
    
        return $this;
    }
    
    /**
     * Set the SsoAcsUrl.
     *
     * @param mixed $ssoAcsUrl The ssoAcsUrl to set.
     * @return self
     */
    function setSsoAcsUrl($ssoAcsUrl) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::SSO_ACS_URL,
            $ssoAcsUrl
        );
    
        return $this;
    }
    
    /**
     * Set the Destination.
     *
     * @param mixed $destination The destination to set.
     * @return self
     */
    function setDestination($destination) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::DESTINATION,
            $destination
        );
    
        return $this;
    }
    
    /**
     * Set the ResponseSigned.
     *
     * @param mixed $responseSigned The responseSigned to set.
     * @return self
     */
    function setResponseSigned($responseSigned) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::RESPONSE_SIGNED,
            $responseSigned
        );
    
        return $this;
    }
    
    /**
     * Set the AssertionSigned.
     *
     * @param mixed $assertionSigned The assertionSigned to set.
     * @return self
     */
    function setAssertionSigned($assertionSigned) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::ASSERTION_SIGNED,
            $assertionSigned
        );
    
        return $this;
    }
    
    /**
     * Set the DigestAlgorithm.
     *
     * @param mixed $digestAlgorithm The digestAlgorithm to set.
     * @return self
     */
    function setDigestAlgorithm($digestAlgorithm) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::DIGEST_ALGORITHM,
            $digestAlgorithm
        );
    
        return $this;
    }
    
    /**
     * Set the HonorForceAuthn.
     *
     * @param mixed $honorForceAuthn The honorForceAuthn to set.
     * @return self
     */
    function setHonorForceAuthn($honorForceAuthn) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::HONOR_FORCE_AUTHN,
            $honorForceAuthn
        );
    
        return $this;
    }
    
    /**
     * Set the AudienceOverride.
     *
     * @param mixed $audienceOverride The audienceOverride to set.
     * @return self
     */
    function setAudienceOverride($audienceOverride) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::AUDIENCE_OVERRIDE,
            $audienceOverride
        );
    
        return $this;
    }
    
    /**
     * Set the DefaultRelayState.
     *
     * @param mixed $defaultRelayState The defaultRelayState to set.
     * @return self
     */
    function setDefaultRelayState($defaultRelayState) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::DEFAULT_RELAY_STATE,
            $defaultRelayState
        );
    
        return $this;
    }
    
    /**
     * Set the RecipientOverride.
     *
     * @param mixed $recipientOverride The recipientOverride to set.
     * @return self
     */
    function setRecipientOverride($recipientOverride) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::RECIPIENT_OVERRIDE,
            $recipientOverride
        );
    
        return $this;
    }
    
    /**
     * Set the RequestCompressed.
     *
     * @param mixed $requestCompressed The requestCompressed to set.
     * @return self
     */
    function setRequestCompressed($requestCompressed) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::REQUEST_COMPRESSED,
            $requestCompressed
        );
    
        return $this;
    }
    
    /**
     * Set the SsoAcsUrlOverride.
     *
     * @param mixed $ssoAcsUrlOverride The ssoAcsUrlOverride to set.
     * @return self
     */
    function setSsoAcsUrlOverride($ssoAcsUrlOverride) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::SSO_ACS_URL_OVERRIDE,
            $ssoAcsUrlOverride
        );
    
        return $this;
    }
    
    /**
     * Set the SignatureAlgorithm.
     *
     * @param mixed $signatureAlgorithm The signatureAlgorithm to set.
     * @return self
     */
    function setSignatureAlgorithm($signatureAlgorithm) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::SIGNATURE_ALGORITHM,
            $signatureAlgorithm
        );
    
        return $this;
    }
    
    /**
     * Set the AttributeStatements.
     *
     * @param mixed $attributeStatements The attributeStatements to set.
     * @return self
     */
    function setAttributeStatements($attributeStatements) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::ATTRIBUTE_STATEMENTS,
            $attributeStatements
        );
    
        return $this;
    }
    
    /**
     * Set the DestinationOverride.
     *
     * @param mixed $destinationOverride The destinationOverride to set.
     * @return self
     */
    function setDestinationOverride($destinationOverride) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::DESTINATION_OVERRIDE,
            $destinationOverride
        );
    
        return $this;
    }
    
    /**
     * Set the SubjectNameIdFormat.
     *
     * @param mixed $subjectNameIdFormat The subjectNameIdFormat to set.
     * @return self
     */
    function setSubjectNameIdFormat($subjectNameIdFormat) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::SUBJECT_NAME_ID_FORMAT,
            $subjectNameIdFormat
        );
    
        return $this;
    }
    
    /**
     * Set the AuthnContextClassRef.
     *
     * @param mixed $authnContextClassRef The authnContextClassRef to set.
     * @return self
     */
    function setAuthnContextClassRef($authnContextClassRef) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::AUTHN_CONTEXT_CLASS_REF,
            $authnContextClassRef
        );
    
        return $this;
    }
    
    /**
     * Set the SubjectNameIdTemplate.
     *
     * @param mixed $subjectNameIdTemplate The subjectNameIdTemplate to set.
     * @return self
     */
    function setSubjectNameIdTemplate($subjectNameIdTemplate) : SamlApplicationSettingsSignOn
    {
        $this->setProperty(
            self::SUBJECT_NAME_ID_TEMPLATE,
            $subjectNameIdTemplate
        );
    
        return $this;
    }
    
    /**
     * Get the Audience.
     *
     * @param mixed $audience The audience to set.
     * @return string
     */
    function getAudience() : string
    {
        return $this->getProperty(
            self::AUDIENCE,
        );
    }
    
    /**
     * Get the SpIssuer.
     *
     * @param mixed $spIssuer The spIssuer to set.
     * @return string
     */
    function getSpIssuer() : string
    {
        return $this->getProperty(
            self::SP_ISSUER,
        );
    }
    
    /**
     * Get the IdpIssuer.
     *
     * @param mixed $idpIssuer The idpIssuer to set.
     * @return string
     */
    function getIdpIssuer() : string
    {
        return $this->getProperty(
            self::IDP_ISSUER,
        );
    }
    
    /**
     * Get the Recipient.
     *
     * @param mixed $recipient The recipient to set.
     * @return string
     */
    function getRecipient() : string
    {
        return $this->getProperty(
            self::RECIPIENT,
        );
    }
    
    /**
     * Get the SsoAcsUrl.
     *
     * @param mixed $ssoAcsUrl The ssoAcsUrl to set.
     * @return string
     */
    function getSsoAcsUrl() : string
    {
        return $this->getProperty(
            self::SSO_ACS_URL,
        );
    }
    
    /**
     * Get the Destination.
     *
     * @param mixed $destination The destination to set.
     * @return string
     */
    function getDestination() : string
    {
        return $this->getProperty(
            self::DESTINATION,
        );
    }
    
    /**
     * Get the ResponseSigned.
     *
     * @param mixed $responseSigned The responseSigned to set.
     * @return bool
     */
    function getResponseSigned() : bool
    {
        return $this->getProperty(
            self::RESPONSE_SIGNED,
        );
    }
    
    /**
     * Get the AssertionSigned.
     *
     * @param mixed $assertionSigned The assertionSigned to set.
     * @return bool
     */
    function getAssertionSigned() : bool
    {
        return $this->getProperty(
            self::ASSERTION_SIGNED,
        );
    }
    
    /**
     * Get the DigestAlgorithm.
     *
     * @param mixed $digestAlgorithm The digestAlgorithm to set.
     * @return string
     */
    function getDigestAlgorithm() : string
    {
        return $this->getProperty(
            self::DIGEST_ALGORITHM,
        );
    }
    
    /**
     * Get the HonorForceAuthn.
     *
     * @param mixed $honorForceAuthn The honorForceAuthn to set.
     * @return bool
     */
    function getHonorForceAuthn() : bool
    {
        return $this->getProperty(
            self::HONOR_FORCE_AUTHN,
        );
    }
    
    /**
     * Get the AudienceOverride.
     *
     * @param mixed $audienceOverride The audienceOverride to set.
     * @return string
     */
    function getAudienceOverride() : string
    {
        return $this->getProperty(
            self::AUDIENCE_OVERRIDE,
        );
    }
    
    /**
     * Get the DefaultRelayState.
     *
     * @param mixed $defaultRelayState The defaultRelayState to set.
     * @return string
     */
    function getDefaultRelayState() : string
    {
        return $this->getProperty(
            self::DEFAULT_RELAY_STATE,
        );
    }
    
    /**
     * Get the RecipientOverride.
     *
     * @param mixed $recipientOverride The recipientOverride to set.
     * @return string
     */
    function getRecipientOverride() : string
    {
        return $this->getProperty(
            self::RECIPIENT_OVERRIDE,
        );
    }
    
    /**
     * Get the RequestCompressed.
     *
     * @param mixed $requestCompressed The requestCompressed to set.
     * @return bool
     */
    function getRequestCompressed() : bool
    {
        return $this->getProperty(
            self::REQUEST_COMPRESSED,
        );
    }
    
    /**
     * Get the SsoAcsUrlOverride.
     *
     * @param mixed $ssoAcsUrlOverride The ssoAcsUrlOverride to set.
     * @return string
     */
    function getSsoAcsUrlOverride() : string
    {
        return $this->getProperty(
            self::SSO_ACS_URL_OVERRIDE,
        );
    }
    
    /**
     * Get the SignatureAlgorithm.
     *
     * @param mixed $signatureAlgorithm The signatureAlgorithm to set.
     * @return string
     */
    function getSignatureAlgorithm() : string
    {
        return $this->getProperty(
            self::SIGNATURE_ALGORITHM,
        );
    }
    
    /**
     * Get the AttributeStatements.
     *
     * @param mixed $attributeStatements The attributeStatements to set.
     * @return array
     */
    function getAttributeStatements() : array
    {
        return $this->getProperty(
            self::ATTRIBUTE_STATEMENTS,
        );
    }
    
    /**
     * Get the DestinationOverride.
     *
     * @param mixed $destinationOverride The destinationOverride to set.
     * @return string
     */
    function getDestinationOverride() : string
    {
        return $this->getProperty(
            self::DESTINATION_OVERRIDE,
        );
    }
    
    /**
     * Get the SubjectNameIdFormat.
     *
     * @param mixed $subjectNameIdFormat The subjectNameIdFormat to set.
     * @return string
     */
    function getSubjectNameIdFormat() : string
    {
        return $this->getProperty(
            self::SUBJECT_NAME_ID_FORMAT,
        );
    }
    
    /**
     * Get the AuthnContextClassRef.
     *
     * @param mixed $authnContextClassRef The authnContextClassRef to set.
     * @return string
     */
    function getAuthnContextClassRef() : string
    {
        return $this->getProperty(
            self::AUTHN_CONTEXT_CLASS_REF,
        );
    }
    
    /**
     * Get the SubjectNameIdTemplate.
     *
     * @param mixed $subjectNameIdTemplate The subjectNameIdTemplate to set.
     * @return string
     */
    function getSubjectNameIdTemplate() : string
    {
        return $this->getProperty(
            self::SUBJECT_NAME_ID_TEMPLATE,
        );
    }
    

}