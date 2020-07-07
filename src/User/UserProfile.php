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

namespace Okta\User;

class UserProfile extends \Okta\Resource\AbstractResource
{
    const CITY = 'city';
    const EMAIL = 'email';
    const LOGIN = 'login';
    const STATE = 'state';
    const TITLE = 'title';
    const LOCALE = 'locale';
    const MANAGER = 'manager';
    const ZIP_CODE = 'zipCode';
    const DIVISION = 'division';
    const LAST_NAME = 'lastName';
    const NICK_NAME = 'nickName';
    const TIMEZONE = 'timezone';
    const USER_TYPE = 'userType';
    const FIRST_NAME = 'firstName';
    const MANAGER_ID = 'managerId';
    const COST_CENTER = 'costCenter';
    const DEPARTMENT = 'department';
    const MIDDLE_NAME = 'middleName';
    const PROFILE_URL = 'profileUrl';
    const COUNTRY_CODE = 'countryCode';
    const DISPLAY_NAME = 'displayName';
    const MOBILE_PHONE = 'mobilePhone';
    const SECOND_EMAIL = 'secondEmail';
    const ORGANIZATION = 'organization';
    const PRIMARY_PHONE = 'primaryPhone';
    const POSTAL_ADDRESS = 'postalAddress';
    const STREET_ADDRESS = 'streetAddress';
    const EMPLOYEE_NUMBER = 'employeeNumber';
    const HONORIFIC_PREFIX = 'honorificPrefix';
    const HONORIFIC_SUFFIX = 'honorificSuffix';
    const PREFERRED_LANGUAGE = 'preferredLanguage';


    /**
     * Set the City.
     *
     * @param mixed $city The city to set.
     * @return self
     */
    function setCity($city) : UserProfile
    {
        $this->setProperty(
            self::CITY,
            $city
        );
    
        return $this;
    }
    
    /**
     * Set the Email.
     *
     * @param mixed $email The email to set.
     * @return self
     */
    function setEmail($email) : UserProfile
    {
        $this->setProperty(
            self::EMAIL,
            $email
        );
    
        return $this;
    }
    
    /**
     * Set the Login.
     *
     * @param mixed $login The login to set.
     * @return self
     */
    function setLogin($login) : UserProfile
    {
        $this->setProperty(
            self::LOGIN,
            $login
        );
    
        return $this;
    }
    
    /**
     * Set the State.
     *
     * @param mixed $state The state to set.
     * @return self
     */
    function setState($state) : UserProfile
    {
        $this->setProperty(
            self::STATE,
            $state
        );
    
        return $this;
    }
    
    /**
     * Set the Title.
     *
     * @param mixed $title The title to set.
     * @return self
     */
    function setTitle($title) : UserProfile
    {
        $this->setProperty(
            self::TITLE,
            $title
        );
    
        return $this;
    }
    
    /**
     * Set the Locale.
     *
     * @param mixed $locale The locale to set.
     * @return self
     */
    function setLocale($locale) : UserProfile
    {
        $this->setProperty(
            self::LOCALE,
            $locale
        );
    
        return $this;
    }
    
    /**
     * Set the Manager.
     *
     * @param mixed $manager The manager to set.
     * @return self
     */
    function setManager($manager) : UserProfile
    {
        $this->setProperty(
            self::MANAGER,
            $manager
        );
    
        return $this;
    }
    
    /**
     * Set the ZipCode.
     *
     * @param mixed $zipCode The zipCode to set.
     * @return self
     */
    function setZipCode($zipCode) : UserProfile
    {
        $this->setProperty(
            self::ZIP_CODE,
            $zipCode
        );
    
        return $this;
    }
    
    /**
     * Set the Division.
     *
     * @param mixed $division The division to set.
     * @return self
     */
    function setDivision($division) : UserProfile
    {
        $this->setProperty(
            self::DIVISION,
            $division
        );
    
        return $this;
    }
    
    /**
     * Set the LastName.
     *
     * @param mixed $lastName The lastName to set.
     * @return self
     */
    function setLastName($lastName) : UserProfile
    {
        $this->setProperty(
            self::LAST_NAME,
            $lastName
        );
    
        return $this;
    }
    
    /**
     * Set the NickName.
     *
     * @param mixed $nickName The nickName to set.
     * @return self
     */
    function setNickName($nickName) : UserProfile
    {
        $this->setProperty(
            self::NICK_NAME,
            $nickName
        );
    
        return $this;
    }
    
    /**
     * Set the Timezone.
     *
     * @param mixed $timezone The timezone to set.
     * @return self
     */
    function setTimezone($timezone) : UserProfile
    {
        $this->setProperty(
            self::TIMEZONE,
            $timezone
        );
    
        return $this;
    }
    
    /**
     * Set the UserType.
     *
     * @param mixed $userType The userType to set.
     * @return self
     */
    function setUserType($userType) : UserProfile
    {
        $this->setProperty(
            self::USER_TYPE,
            $userType
        );
    
        return $this;
    }
    
    /**
     * Set the FirstName.
     *
     * @param mixed $firstName The firstName to set.
     * @return self
     */
    function setFirstName($firstName) : UserProfile
    {
        $this->setProperty(
            self::FIRST_NAME,
            $firstName
        );
    
        return $this;
    }
    
    /**
     * Set the ManagerId.
     *
     * @param mixed $managerId The managerId to set.
     * @return self
     */
    function setManagerId($managerId) : UserProfile
    {
        $this->setProperty(
            self::MANAGER_ID,
            $managerId
        );
    
        return $this;
    }
    
    /**
     * Set the CostCenter.
     *
     * @param mixed $costCenter The costCenter to set.
     * @return self
     */
    function setCostCenter($costCenter) : UserProfile
    {
        $this->setProperty(
            self::COST_CENTER,
            $costCenter
        );
    
        return $this;
    }
    
    /**
     * Set the Department.
     *
     * @param mixed $department The department to set.
     * @return self
     */
    function setDepartment($department) : UserProfile
    {
        $this->setProperty(
            self::DEPARTMENT,
            $department
        );
    
        return $this;
    }
    
    /**
     * Set the MiddleName.
     *
     * @param mixed $middleName The middleName to set.
     * @return self
     */
    function setMiddleName($middleName) : UserProfile
    {
        $this->setProperty(
            self::MIDDLE_NAME,
            $middleName
        );
    
        return $this;
    }
    
    /**
     * Set the ProfileUrl.
     *
     * @param mixed $profileUrl The profileUrl to set.
     * @return self
     */
    function setProfileUrl($profileUrl) : UserProfile
    {
        $this->setProperty(
            self::PROFILE_URL,
            $profileUrl
        );
    
        return $this;
    }
    
    /**
     * Set the CountryCode.
     *
     * @param mixed $countryCode The countryCode to set.
     * @return self
     */
    function setCountryCode($countryCode) : UserProfile
    {
        $this->setProperty(
            self::COUNTRY_CODE,
            $countryCode
        );
    
        return $this;
    }
    
    /**
     * Set the DisplayName.
     *
     * @param mixed $displayName The displayName to set.
     * @return self
     */
    function setDisplayName($displayName) : UserProfile
    {
        $this->setProperty(
            self::DISPLAY_NAME,
            $displayName
        );
    
        return $this;
    }
    
    /**
     * Set the MobilePhone.
     *
     * @param mixed $mobilePhone The mobilePhone to set.
     * @return self
     */
    function setMobilePhone($mobilePhone) : UserProfile
    {
        $this->setProperty(
            self::MOBILE_PHONE,
            $mobilePhone
        );
    
        return $this;
    }
    
    /**
     * Set the SecondEmail.
     *
     * @param mixed $secondEmail The secondEmail to set.
     * @return self
     */
    function setSecondEmail($secondEmail) : UserProfile
    {
        $this->setProperty(
            self::SECOND_EMAIL,
            $secondEmail
        );
    
        return $this;
    }
    
    /**
     * Set the Organization.
     *
     * @param mixed $organization The organization to set.
     * @return self
     */
    function setOrganization($organization) : UserProfile
    {
        $this->setProperty(
            self::ORGANIZATION,
            $organization
        );
    
        return $this;
    }
    
    /**
     * Set the PrimaryPhone.
     *
     * @param mixed $primaryPhone The primaryPhone to set.
     * @return self
     */
    function setPrimaryPhone($primaryPhone) : UserProfile
    {
        $this->setProperty(
            self::PRIMARY_PHONE,
            $primaryPhone
        );
    
        return $this;
    }
    
    /**
     * Set the PostalAddress.
     *
     * @param mixed $postalAddress The postalAddress to set.
     * @return self
     */
    function setPostalAddress($postalAddress) : UserProfile
    {
        $this->setProperty(
            self::POSTAL_ADDRESS,
            $postalAddress
        );
    
        return $this;
    }
    
    /**
     * Set the StreetAddress.
     *
     * @param mixed $streetAddress The streetAddress to set.
     * @return self
     */
    function setStreetAddress($streetAddress) : UserProfile
    {
        $this->setProperty(
            self::STREET_ADDRESS,
            $streetAddress
        );
    
        return $this;
    }
    
    /**
     * Set the EmployeeNumber.
     *
     * @param mixed $employeeNumber The employeeNumber to set.
     * @return self
     */
    function setEmployeeNumber($employeeNumber) : UserProfile
    {
        $this->setProperty(
            self::EMPLOYEE_NUMBER,
            $employeeNumber
        );
    
        return $this;
    }
    
    /**
     * Set the HonorificPrefix.
     *
     * @param mixed $honorificPrefix The honorificPrefix to set.
     * @return self
     */
    function setHonorificPrefix($honorificPrefix) : UserProfile
    {
        $this->setProperty(
            self::HONORIFIC_PREFIX,
            $honorificPrefix
        );
    
        return $this;
    }
    
    /**
     * Set the HonorificSuffix.
     *
     * @param mixed $honorificSuffix The honorificSuffix to set.
     * @return self
     */
    function setHonorificSuffix($honorificSuffix) : UserProfile
    {
        $this->setProperty(
            self::HONORIFIC_SUFFIX,
            $honorificSuffix
        );
    
        return $this;
    }
    
    /**
     * Set the PreferredLanguage.
     *
     * @param mixed $preferredLanguage The preferredLanguage to set.
     * @return self
     */
    function setPreferredLanguage($preferredLanguage) : UserProfile
    {
        $this->setProperty(
            self::PREFERRED_LANGUAGE,
            $preferredLanguage
        );
    
        return $this;
    }
    
    /**
     * Get the City.
     *
     * @param mixed $city The city to set.
     * @return string
     */
    function getCity() : string
    {
        return $this->getProperty(
            self::CITY,
        );
    }
    
    /**
     * Get the Email.
     *
     * @param mixed $email The email to set.
     * @return string
     */
    function getEmail() : string
    {
        return $this->getProperty(
            self::EMAIL,
        );
    }
    
    /**
     * Get the Login.
     *
     * @param mixed $login The login to set.
     * @return string
     */
    function getLogin() : string
    {
        return $this->getProperty(
            self::LOGIN,
        );
    }
    
    /**
     * Get the State.
     *
     * @param mixed $state The state to set.
     * @return string
     */
    function getState() : string
    {
        return $this->getProperty(
            self::STATE,
        );
    }
    
    /**
     * Get the Title.
     *
     * @param mixed $title The title to set.
     * @return string
     */
    function getTitle() : string
    {
        return $this->getProperty(
            self::TITLE,
        );
    }
    
    /**
     * Get the Locale.
     *
     * @param mixed $locale The locale to set.
     * @return string
     */
    function getLocale() : string
    {
        return $this->getProperty(
            self::LOCALE,
        );
    }
    
    /**
     * Get the Manager.
     *
     * @param mixed $manager The manager to set.
     * @return string
     */
    function getManager() : string
    {
        return $this->getProperty(
            self::MANAGER,
        );
    }
    
    /**
     * Get the ZipCode.
     *
     * @param mixed $zipCode The zipCode to set.
     * @return string
     */
    function getZipCode() : string
    {
        return $this->getProperty(
            self::ZIP_CODE,
        );
    }
    
    /**
     * Get the Division.
     *
     * @param mixed $division The division to set.
     * @return string
     */
    function getDivision() : string
    {
        return $this->getProperty(
            self::DIVISION,
        );
    }
    
    /**
     * Get the LastName.
     *
     * @param mixed $lastName The lastName to set.
     * @return string
     */
    function getLastName() : string
    {
        return $this->getProperty(
            self::LAST_NAME,
        );
    }
    
    /**
     * Get the NickName.
     *
     * @param mixed $nickName The nickName to set.
     * @return string
     */
    function getNickName() : string
    {
        return $this->getProperty(
            self::NICK_NAME,
        );
    }
    
    /**
     * Get the Timezone.
     *
     * @param mixed $timezone The timezone to set.
     * @return string
     */
    function getTimezone() : string
    {
        return $this->getProperty(
            self::TIMEZONE,
        );
    }
    
    /**
     * Get the UserType.
     *
     * @param mixed $userType The userType to set.
     * @return string
     */
    function getUserType() : string
    {
        return $this->getProperty(
            self::USER_TYPE,
        );
    }
    
    /**
     * Get the FirstName.
     *
     * @param mixed $firstName The firstName to set.
     * @return string
     */
    function getFirstName() : string
    {
        return $this->getProperty(
            self::FIRST_NAME,
        );
    }
    
    /**
     * Get the ManagerId.
     *
     * @param mixed $managerId The managerId to set.
     * @return string
     */
    function getManagerId() : string
    {
        return $this->getProperty(
            self::MANAGER_ID,
        );
    }
    
    /**
     * Get the CostCenter.
     *
     * @param mixed $costCenter The costCenter to set.
     * @return string
     */
    function getCostCenter() : string
    {
        return $this->getProperty(
            self::COST_CENTER,
        );
    }
    
    /**
     * Get the Department.
     *
     * @param mixed $department The department to set.
     * @return string
     */
    function getDepartment() : string
    {
        return $this->getProperty(
            self::DEPARTMENT,
        );
    }
    
    /**
     * Get the MiddleName.
     *
     * @param mixed $middleName The middleName to set.
     * @return string
     */
    function getMiddleName() : string
    {
        return $this->getProperty(
            self::MIDDLE_NAME,
        );
    }
    
    /**
     * Get the ProfileUrl.
     *
     * @param mixed $profileUrl The profileUrl to set.
     * @return string
     */
    function getProfileUrl() : string
    {
        return $this->getProperty(
            self::PROFILE_URL,
        );
    }
    
    /**
     * Get the CountryCode.
     *
     * @param mixed $countryCode The countryCode to set.
     * @return string
     */
    function getCountryCode() : string
    {
        return $this->getProperty(
            self::COUNTRY_CODE,
        );
    }
    
    /**
     * Get the DisplayName.
     *
     * @param mixed $displayName The displayName to set.
     * @return string
     */
    function getDisplayName() : string
    {
        return $this->getProperty(
            self::DISPLAY_NAME,
        );
    }
    
    /**
     * Get the MobilePhone.
     *
     * @param mixed $mobilePhone The mobilePhone to set.
     * @return string
     */
    function getMobilePhone() : string
    {
        return $this->getProperty(
            self::MOBILE_PHONE,
        );
    }
    
    /**
     * Get the SecondEmail.
     *
     * @param mixed $secondEmail The secondEmail to set.
     * @return string
     */
    function getSecondEmail() : string
    {
        return $this->getProperty(
            self::SECOND_EMAIL,
        );
    }
    
    /**
     * Get the Organization.
     *
     * @param mixed $organization The organization to set.
     * @return string
     */
    function getOrganization() : string
    {
        return $this->getProperty(
            self::ORGANIZATION,
        );
    }
    
    /**
     * Get the PrimaryPhone.
     *
     * @param mixed $primaryPhone The primaryPhone to set.
     * @return string
     */
    function getPrimaryPhone() : string
    {
        return $this->getProperty(
            self::PRIMARY_PHONE,
        );
    }
    
    /**
     * Get the PostalAddress.
     *
     * @param mixed $postalAddress The postalAddress to set.
     * @return string
     */
    function getPostalAddress() : string
    {
        return $this->getProperty(
            self::POSTAL_ADDRESS,
        );
    }
    
    /**
     * Get the StreetAddress.
     *
     * @param mixed $streetAddress The streetAddress to set.
     * @return string
     */
    function getStreetAddress() : string
    {
        return $this->getProperty(
            self::STREET_ADDRESS,
        );
    }
    
    /**
     * Get the EmployeeNumber.
     *
     * @param mixed $employeeNumber The employeeNumber to set.
     * @return string
     */
    function getEmployeeNumber() : string
    {
        return $this->getProperty(
            self::EMPLOYEE_NUMBER,
        );
    }
    
    /**
     * Get the HonorificPrefix.
     *
     * @param mixed $honorificPrefix The honorificPrefix to set.
     * @return string
     */
    function getHonorificPrefix() : string
    {
        return $this->getProperty(
            self::HONORIFIC_PREFIX,
        );
    }
    
    /**
     * Get the HonorificSuffix.
     *
     * @param mixed $honorificSuffix The honorificSuffix to set.
     * @return string
     */
    function getHonorificSuffix() : string
    {
        return $this->getProperty(
            self::HONORIFIC_SUFFIX,
        );
    }
    
    /**
     * Get the PreferredLanguage.
     *
     * @param mixed $preferredLanguage The preferredLanguage to set.
     * @return string
     */
    function getPreferredLanguage() : string
    {
        return $this->getProperty(
            self::PREFERRED_LANGUAGE,
        );
    }
    

}