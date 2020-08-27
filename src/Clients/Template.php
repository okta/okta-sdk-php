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

namespace Okta\Clients;

class Template {

    /**
     * The DataStore we are going to use for our Client
     * @var \Okta\DataStore\DefaultDataStore
     */
    protected $dataStore;

    public function __construct(\Okta\DataStore\DefaultDataStore $dataStore)
    {
        $this->dataStore = $dataStore;
    }

    /**
     * Enumerates custom SMS templates in your organization. A subset of templates can be returned that match a template type.
     */
    function listSmsTemplates(array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/templates/sms"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Template\SmsTemplate(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\Template\SmsTemplate::class);
        return $collection;
    }

    /**
     * Adds a new custom SMS template to your organization.
     */
    function createSmsTemplate(\Okta\Template\SmsTemplate $smsTemplate) : \Okta\Template\SmsTemplate 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/templates/sms"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($smsTemplate)
            ->executeRequest();

        $responseModel = new \Okta\Template\SmsTemplate(null, $body);
        return $responseModel;
    }

    /**
     * Removes an SMS template.
     */
    function deleteSmsTemplate($templateId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/templates/sms/${templateId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Fetches a specific template by &#x60;id&#x60;
     */
    function getSmsTemplate($templateId) : \Okta\Template\SmsTemplate 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/templates/sms/${templateId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\Template\SmsTemplate(null, $body);
        return $responseModel;
    }

    /**
     * Updates only some of the SMS template properties:
     */
    function partialUpdateSmsTemplate($templateId, \Okta\Template\SmsTemplate $smsTemplate) : \Okta\Template\SmsTemplate 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/templates/sms/${templateId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($smsTemplate)
            ->executeRequest();

        $responseModel = new \Okta\Template\SmsTemplate(null, $body);
        return $responseModel;
    }

    /**
     * Updates the SMS template.
     */
    function updateSmsTemplate($templateId, \Okta\Template\SmsTemplate $smsTemplate) : \Okta\Template\SmsTemplate 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/templates/sms/${templateId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->setRequestBody($smsTemplate)
            ->executeRequest();

        $responseModel = new \Okta\Template\SmsTemplate(null, $body);
        return $responseModel;
    }

}