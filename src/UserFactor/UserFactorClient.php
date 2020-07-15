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

namespace Okta\UserFactor;

class UserFactorClient {

    /**
     * Enumerates all the enrolled factors for the specified user
     */
    function listFactors()
    {

    }

    /**
     * Enrolls a user with a supported factor.
     */
    function enrollFactor()
    {

    }

    /**
     * Enumerates all the supported factors that can be enrolled for the specified user
     */
    function listSupportedFactors()
    {

    }

    /**
     * Enumerates all available security questions for a user&#x27;s &#x60;question&#x60; factor
     */
    function listSupportedSecurityQuestions()
    {

    }

    /**
     * Unenrolls an existing factor for the specified user, allowing the user to enroll a new factor.
     */
    function deleteFactor()
    {

    }

    /**
     * Fetches a factor for the specified user
     */
    function getFactor()
    {

    }

    /**
     * The &#x60;sms&#x60; and &#x60;token:software:totp&#x60; factor types require activation to complete the enrollment process.
     */
    function activateFactor()
    {

    }

    /**
     * Polls factors verification transaction for status.
     */
    function getFactorTransactionStatus()
    {

    }

    /**
     * Verifies an OTP for a &#x60;token&#x60; or &#x60;token:hardware&#x60; factor
     */
    function verifyFactor()
    {

    }

}