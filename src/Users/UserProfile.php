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

namespace Okta\Users;


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
     * Get the city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->getProperty(self::CITY);
    }

    /**
    * Set the city.
    *
    * @param mixed $city The value to set.
    * @return self
    */
    public function setCity($city)
    {
        $this->setProperty(
            self::CITY,
            $city
        );

        return $this;
    }

    /**
     * Get the email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->getProperty(self::EMAIL);
    }

    /**
    * Set the email.
    *
    * @param mixed $email The value to set.
    * @return self
    */
    public function setEmail($email)
    {
        $this->setProperty(
            self::EMAIL,
            $email
        );

        return $this;
    }

    /**
     * Get the login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->getProperty(self::LOGIN);
    }

    /**
    * Set the login.
    *
    * @param mixed $login The value to set.
    * @return self
    */
    public function setLogin($login)
    {
        $this->setProperty(
            self::LOGIN,
            $login
        );

        return $this;
    }

    /**
     * Get the state.
     *
     * @return string
     */
    public function getState()
    {
        return $this->getProperty(self::STATE);
    }

    /**
    * Set the state.
    *
    * @param mixed $state The value to set.
    * @return self
    */
    public function setState($state)
    {
        $this->setProperty(
            self::STATE,
            $state
        );

        return $this;
    }

    /**
     * Get the title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->getProperty(self::TITLE);
    }

    /**
    * Set the title.
    *
    * @param mixed $title The value to set.
    * @return self
    */
    public function setTitle($title)
    {
        $this->setProperty(
            self::TITLE,
            $title
        );

        return $this;
    }

    /**
     * Get the locale.
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->getProperty(self::LOCALE);
    }

    /**
    * Set the locale.
    *
    * @param mixed $locale The value to set.
    * @return self
    */
    public function setLocale($locale)
    {
        $this->setProperty(
            self::LOCALE,
            $locale
        );

        return $this;
    }

    /**
     * Get the manager.
     *
     * @return string
     */
    public function getManager()
    {
        return $this->getProperty(self::MANAGER);
    }

    /**
    * Set the manager.
    *
    * @param mixed $manager The value to set.
    * @return self
    */
    public function setManager($manager)
    {
        $this->setProperty(
            self::MANAGER,
            $manager
        );

        return $this;
    }

    /**
     * Get the zipCode.
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->getProperty(self::ZIP_CODE);
    }

    /**
    * Set the zipCode.
    *
    * @param mixed $zipCode The value to set.
    * @return self
    */
    public function setZipCode($zipCode)
    {
        $this->setProperty(
            self::ZIP_CODE,
            $zipCode
        );

        return $this;
    }

    /**
     * Get the division.
     *
     * @return string
     */
    public function getDivision()
    {
        return $this->getProperty(self::DIVISION);
    }

    /**
    * Set the division.
    *
    * @param mixed $division The value to set.
    * @return self
    */
    public function setDivision($division)
    {
        $this->setProperty(
            self::DIVISION,
            $division
        );

        return $this;
    }

    /**
     * Get the lastName.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->getProperty(self::LAST_NAME);
    }

    /**
    * Set the lastName.
    *
    * @param mixed $lastName The value to set.
    * @return self
    */
    public function setLastName($lastName)
    {
        $this->setProperty(
            self::LAST_NAME,
            $lastName
        );

        return $this;
    }

    /**
     * Get the nickName.
     *
     * @return string
     */
    public function getNickName()
    {
        return $this->getProperty(self::NICK_NAME);
    }

    /**
    * Set the nickName.
    *
    * @param mixed $nickName The value to set.
    * @return self
    */
    public function setNickName($nickName)
    {
        $this->setProperty(
            self::NICK_NAME,
            $nickName
        );

        return $this;
    }

    /**
     * Get the timezone.
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->getProperty(self::TIMEZONE);
    }

    /**
    * Set the timezone.
    *
    * @param mixed $timezone The value to set.
    * @return self
    */
    public function setTimezone($timezone)
    {
        $this->setProperty(
            self::TIMEZONE,
            $timezone
        );

        return $this;
    }

    /**
     * Get the userType.
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->getProperty(self::USER_TYPE);
    }

    /**
    * Set the userType.
    *
    * @param mixed $userType The value to set.
    * @return self
    */
    public function setUserType($userType)
    {
        $this->setProperty(
            self::USER_TYPE,
            $userType
        );

        return $this;
    }

    /**
     * Get the firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->getProperty(self::FIRST_NAME);
    }

    /**
    * Set the firstName.
    *
    * @param mixed $firstName The value to set.
    * @return self
    */
    public function setFirstName($firstName)
    {
        $this->setProperty(
            self::FIRST_NAME,
            $firstName
        );

        return $this;
    }

    /**
     * Get the managerId.
     *
     * @return string
     */
    public function getManagerId()
    {
        return $this->getProperty(self::MANAGER_ID);
    }

    /**
    * Set the managerId.
    *
    * @param mixed $managerId The value to set.
    * @return self
    */
    public function setManagerId($managerId)
    {
        $this->setProperty(
            self::MANAGER_ID,
            $managerId
        );

        return $this;
    }

    /**
     * Get the costCenter.
     *
     * @return string
     */
    public function getCostCenter()
    {
        return $this->getProperty(self::COST_CENTER);
    }

    /**
    * Set the costCenter.
    *
    * @param mixed $costCenter The value to set.
    * @return self
    */
    public function setCostCenter($costCenter)
    {
        $this->setProperty(
            self::COST_CENTER,
            $costCenter
        );

        return $this;
    }

    /**
     * Get the department.
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->getProperty(self::DEPARTMENT);
    }

    /**
    * Set the department.
    *
    * @param mixed $department The value to set.
    * @return self
    */
    public function setDepartment($department)
    {
        $this->setProperty(
            self::DEPARTMENT,
            $department
        );

        return $this;
    }

    /**
     * Get the middleName.
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->getProperty(self::MIDDLE_NAME);
    }

    /**
    * Set the middleName.
    *
    * @param mixed $middleName The value to set.
    * @return self
    */
    public function setMiddleName($middleName)
    {
        $this->setProperty(
            self::MIDDLE_NAME,
            $middleName
        );

        return $this;
    }

    /**
     * Get the profileUrl.
     *
     * @return string
     */
    public function getProfileUrl()
    {
        return $this->getProperty(self::PROFILE_URL);
    }

    /**
    * Set the profileUrl.
    *
    * @param mixed $profileUrl The value to set.
    * @return self
    */
    public function setProfileUrl($profileUrl)
    {
        $this->setProperty(
            self::PROFILE_URL,
            $profileUrl
        );

        return $this;
    }

    /**
     * Get the countryCode.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->getProperty(self::COUNTRY_CODE);
    }

    /**
    * Set the countryCode.
    *
    * @param mixed $countryCode The value to set.
    * @return self
    */
    public function setCountryCode($countryCode)
    {
        $this->setProperty(
            self::COUNTRY_CODE,
            $countryCode
        );

        return $this;
    }

    /**
     * Get the displayName.
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->getProperty(self::DISPLAY_NAME);
    }

    /**
    * Set the displayName.
    *
    * @param mixed $displayName The value to set.
    * @return self
    */
    public function setDisplayName($displayName)
    {
        $this->setProperty(
            self::DISPLAY_NAME,
            $displayName
        );

        return $this;
    }

    /**
     * Get the mobilePhone.
     *
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->getProperty(self::MOBILE_PHONE);
    }

    /**
    * Set the mobilePhone.
    *
    * @param mixed $mobilePhone The value to set.
    * @return self
    */
    public function setMobilePhone($mobilePhone)
    {
        $this->setProperty(
            self::MOBILE_PHONE,
            $mobilePhone
        );

        return $this;
    }

    /**
     * Get the secondEmail.
     *
     * @return string
     */
    public function getSecondEmail()
    {
        return $this->getProperty(self::SECOND_EMAIL);
    }

    /**
    * Set the secondEmail.
    *
    * @param mixed $secondEmail The value to set.
    * @return self
    */
    public function setSecondEmail($secondEmail)
    {
        $this->setProperty(
            self::SECOND_EMAIL,
            $secondEmail
        );

        return $this;
    }

    /**
     * Get the organization.
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->getProperty(self::ORGANIZATION);
    }

    /**
    * Set the organization.
    *
    * @param mixed $organization The value to set.
    * @return self
    */
    public function setOrganization($organization)
    {
        $this->setProperty(
            self::ORGANIZATION,
            $organization
        );

        return $this;
    }

    /**
     * Get the primaryPhone.
     *
     * @return string
     */
    public function getPrimaryPhone()
    {
        return $this->getProperty(self::PRIMARY_PHONE);
    }

    /**
    * Set the primaryPhone.
    *
    * @param mixed $primaryPhone The value to set.
    * @return self
    */
    public function setPrimaryPhone($primaryPhone)
    {
        $this->setProperty(
            self::PRIMARY_PHONE,
            $primaryPhone
        );

        return $this;
    }

    /**
     * Get the postalAddress.
     *
     * @return string
     */
    public function getPostalAddress()
    {
        return $this->getProperty(self::POSTAL_ADDRESS);
    }

    /**
    * Set the postalAddress.
    *
    * @param mixed $postalAddress The value to set.
    * @return self
    */
    public function setPostalAddress($postalAddress)
    {
        $this->setProperty(
            self::POSTAL_ADDRESS,
            $postalAddress
        );

        return $this;
    }

    /**
     * Get the streetAddress.
     *
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->getProperty(self::STREET_ADDRESS);
    }

    /**
    * Set the streetAddress.
    *
    * @param mixed $streetAddress The value to set.
    * @return self
    */
    public function setStreetAddress($streetAddress)
    {
        $this->setProperty(
            self::STREET_ADDRESS,
            $streetAddress
        );

        return $this;
    }

    /**
     * Get the employeeNumber.
     *
     * @return string
     */
    public function getEmployeeNumber()
    {
        return $this->getProperty(self::EMPLOYEE_NUMBER);
    }

    /**
    * Set the employeeNumber.
    *
    * @param mixed $employeeNumber The value to set.
    * @return self
    */
    public function setEmployeeNumber($employeeNumber)
    {
        $this->setProperty(
            self::EMPLOYEE_NUMBER,
            $employeeNumber
        );

        return $this;
    }

    /**
     * Get the honorificPrefix.
     *
     * @return string
     */
    public function getHonorificPrefix()
    {
        return $this->getProperty(self::HONORIFIC_PREFIX);
    }

    /**
    * Set the honorificPrefix.
    *
    * @param mixed $honorificPrefix The value to set.
    * @return self
    */
    public function setHonorificPrefix($honorificPrefix)
    {
        $this->setProperty(
            self::HONORIFIC_PREFIX,
            $honorificPrefix
        );

        return $this;
    }

    /**
     * Get the honorificSuffix.
     *
     * @return string
     */
    public function getHonorificSuffix()
    {
        return $this->getProperty(self::HONORIFIC_SUFFIX);
    }

    /**
    * Set the honorificSuffix.
    *
    * @param mixed $honorificSuffix The value to set.
    * @return self
    */
    public function setHonorificSuffix($honorificSuffix)
    {
        $this->setProperty(
            self::HONORIFIC_SUFFIX,
            $honorificSuffix
        );

        return $this;
    }

    /**
     * Get the preferredLanguage.
     *
     * @return string
     */
    public function getPreferredLanguage()
    {
        return $this->getProperty(self::PREFERRED_LANGUAGE);
    }

    /**
    * Set the preferredLanguage.
    *
    * @param mixed $preferredLanguage The value to set.
    * @return self
    */
    public function setPreferredLanguage($preferredLanguage)
    {
        $this->setProperty(
            self::PREFERRED_LANGUAGE,
            $preferredLanguage
        );

        return $this;
    }
}
