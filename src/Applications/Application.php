<?php
/******************************************************************************
 * Copyright 2017 Okta, Inc.                                                  *
 *                                                                            *
 * Licensed under the Apache License, Version 2.0 (the "License");            *
 * you may not use this file except in compliance with the License.           *
 * You may obtain a copy of the License at                                    *
 *                                                                            *
 *      http://www.apache.org/licenses/LICENSE-2.0                            *
 *                                                                            *
 * Unless required by applicable law or agreed to in writing, software        *
 * distributed under the License is distributed on an "AS IS" BASIS,          *
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.   *
 * See the License for the specific language governing permissions and        *
 * limitations under the License.                                             *
 ******************************************************************************/

namespace Okta\Applications;

class Application extends \Okta\Generated\Applications\Application
{
    public function convertFromGenericApplication()
    {
        switch ($this->getSignOnMode()) {
            case "BOOKMARK":
                $appClass = \Okta\Applications\BookmarkApplication::class;
                break;
            case "BASIC_AUTH":
                $appClass = \Okta\Applications\BasicAuthApplication::class;
                break;
            case "BROWSER_PLUGIN":
                switch ($this->getName()) {
                    case "template_swa":
                        $appClass = \Okta\Applications\SwaApplication::class;
                        break;
                    case "template_swa3field":
                        $appClass = \Okta\Applications\SwaThreeFieldApplication::class;
                        break;
                }
                break;
            case "SECURE_PASSWORD_STORE":
                $appClass = \Okta\Applications\SecurePasswordStoreApplication::class;
                break;
            case "AUTO_LOGIN":
                $appClass = \Okta\Applications\AutoLoginApplication::class;
                break;
            case "WS_FEDERATION":
                $appClass = \Okta\Applications\WsFederationApplication::class;
                break;
            case "SAML_2_0":
                $appClass = \Okta\Applications\SamlApplication::class;
                break;
            case "OPENID_CONNECT":
                $appClass = \Okta\Applications\OpenIdConnectApplication::class;
                break;
        }

        $properties = new \stdClass();
        foreach ($this->getPropertyNames() as $name) {
            $properties->$name = $this->getProperty($name);
        }

        return new $appClass(null, $properties);
    }
}
