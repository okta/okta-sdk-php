<?php

namespace Okta\Utilities;

use Lcobucci\JWT\Signer;
use Okta\Exceptions\Error;
use Lcobucci\JWT\Signer\Key;
use Lcobucci\JWT\Token\Plain;
use Okta\Cache\MemoryManager;
use Lcobucci\JWT\Configuration;
use Cache\Adapter\Common\CacheItem;
use Okta\Exceptions\ResourceException;
use Lcobucci\JWT\Validation\Constraint\ValidAt;

class PrivateKeyAuthentication {

    /**
     * @var MemoryManager
     */
    private $memory;

    /**
     * Client Id for authentication driver
     *
     * @var string
     */
    protected $clientId = '';

    /**
     * Scopes for authentication driver
     *
     * @var string
     */
    protected $scopes = [];

    /**
     * PrivateKey for authentication driver
     *
     * @var Key
     */
    protected $privateKey = '';

    /**
     * @var string
     */
    protected $orgUrl = '';

    /**
     * @var Configuration
     */
    protected $jwtConfig;


    public function __construct($clientId, $scopes, $privateKey, $orgUrl) {
        $this->memory = new MemoryManager();
        $this->clientId = $clientId;
        $this->scopes = $scopes;
        $this->privateKey = new Key($privateKey);
        $this->orgUrl = $orgUrl;

        $this->jwtConfig = Configuration::forAsymmetricSigner(
            new Signer\RSA\Sha256(),
            $this->privateKey,
            $this->privateKey
        );
    }

    public function getBearerToken() {
        
        if(array_key_exists('Okta_Oauth_Token', $_COOKIE)) {
            $token = $_COOKIE['Okta_Oauth_Token'];
            $constraint = new ValidAt($this->clock);
            try {
                $constraint->assert($token);
                return $token;
            } catch(\Exception $e) {
                $_COOKIE['Okta_Oauth_Token'] = null;
            }

        }

        $now = \DateTimeImmutable::createFromFormat("Y-m-d H:i:s", date('Y-m-d H:i:s'));
        $clientAssertion = $this->jwtConfig->createBuilder()
            ->issuedBy($this->clientId)
            ->permittedFor($this->orgUrl . '/oauth2/v1/token')
            ->issuedAt($now->sub(new \DateInterval('PT1M')))
            ->expiresAt($now->add(new \DateInterval('PT50M')))
            ->relatedTo($this->clientId)
            ->getToken($this->jwtConfig->getSigner(), $this->jwtConfig->getSigningKey());

        $token = $this->tokenRequest($clientAssertion);
       
        setcookie("Okta_Oauth_Token", $token, time()+3600);
        return $token;

    }

    private function tokenRequest($clientAssertion) 
    {
        $curl = curl_init();
        $query = http_build_query([
            'grant_type' => 'client_credentials',
            'scope' => $this->scopes,
            'client_assertion_type' => 'urn:ietf:params:oauth:client-assertion-type:jwt-bearer',
            'client_assertion' => (string)$clientAssertion
        ]);
        curl_setopt($curl,CURLOPT_URL, $this->orgUrl . '/oauth2/v1/token?'.$query);
        curl_setopt($curl,CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Accept: application/json',
            'Content-Type: application/x-www-form-urlencoded'
        ]);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER, true); 
        
        $token = json_decode(curl_exec($curl));
        $info = curl_getinfo($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if ($httpcode < 200 || $httpcode > 299) {
            $error = new Error($token);
            throw new ResourceException($error);
        }
        
        return $token->access_token;

    }
}