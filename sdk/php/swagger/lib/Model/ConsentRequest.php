<?php
/**
 * ConsentRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Hydra\SDK
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ORY Hydra
 *
 * Welcome to the ORY Hydra HTTP API documentation. You will find documentation for all HTTP APIs here.
 *
 * OpenAPI spec version: latest
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Hydra\SDK\Model;

use \ArrayAccess;

/**
 * ConsentRequest Class Doc Comment
 *
 * @category    Class
 * @package     Hydra\SDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ConsentRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'consentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'acr' => 'string',
        'challenge' => 'string',
        'client' => '\Hydra\SDK\Model\OAuth2Client',
        'context' => 'map[string,object]',
        'login_challenge' => 'string',
        'login_session_id' => 'string',
        'oidc_context' => '\Hydra\SDK\Model\OpenIDConnectContext',
        'request_url' => 'string',
        'requested_access_token_audience' => 'string[]',
        'requested_scope' => 'string[]',
        'skip' => 'bool',
        'subject' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'acr' => null,
        'challenge' => null,
        'client' => null,
        'context' => null,
        'login_challenge' => null,
        'login_session_id' => null,
        'oidc_context' => null,
        'request_url' => null,
        'requested_access_token_audience' => null,
        'requested_scope' => null,
        'skip' => null,
        'subject' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'acr' => 'acr',
        'challenge' => 'challenge',
        'client' => 'client',
        'context' => 'context',
        'login_challenge' => 'login_challenge',
        'login_session_id' => 'login_session_id',
        'oidc_context' => 'oidc_context',
        'request_url' => 'request_url',
        'requested_access_token_audience' => 'requested_access_token_audience',
        'requested_scope' => 'requested_scope',
        'skip' => 'skip',
        'subject' => 'subject'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'acr' => 'setAcr',
        'challenge' => 'setChallenge',
        'client' => 'setClient',
        'context' => 'setContext',
        'login_challenge' => 'setLoginChallenge',
        'login_session_id' => 'setLoginSessionId',
        'oidc_context' => 'setOidcContext',
        'request_url' => 'setRequestUrl',
        'requested_access_token_audience' => 'setRequestedAccessTokenAudience',
        'requested_scope' => 'setRequestedScope',
        'skip' => 'setSkip',
        'subject' => 'setSubject'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'acr' => 'getAcr',
        'challenge' => 'getChallenge',
        'client' => 'getClient',
        'context' => 'getContext',
        'login_challenge' => 'getLoginChallenge',
        'login_session_id' => 'getLoginSessionId',
        'oidc_context' => 'getOidcContext',
        'request_url' => 'getRequestUrl',
        'requested_access_token_audience' => 'getRequestedAccessTokenAudience',
        'requested_scope' => 'getRequestedScope',
        'skip' => 'getSkip',
        'subject' => 'getSubject'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['acr'] = isset($data['acr']) ? $data['acr'] : null;
        $this->container['challenge'] = isset($data['challenge']) ? $data['challenge'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['login_challenge'] = isset($data['login_challenge']) ? $data['login_challenge'] : null;
        $this->container['login_session_id'] = isset($data['login_session_id']) ? $data['login_session_id'] : null;
        $this->container['oidc_context'] = isset($data['oidc_context']) ? $data['oidc_context'] : null;
        $this->container['request_url'] = isset($data['request_url']) ? $data['request_url'] : null;
        $this->container['requested_access_token_audience'] = isset($data['requested_access_token_audience']) ? $data['requested_access_token_audience'] : null;
        $this->container['requested_scope'] = isset($data['requested_scope']) ? $data['requested_scope'] : null;
        $this->container['skip'] = isset($data['skip']) ? $data['skip'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets acr
     * @return string
     */
    public function getAcr()
    {
        return $this->container['acr'];
    }

    /**
     * Sets acr
     * @param string $acr ACR represents the Authentication AuthorizationContext Class Reference value for this authentication session. You can use it to express that, for example, a user authenticated using two factor authentication.
     * @return $this
     */
    public function setAcr($acr)
    {
        $this->container['acr'] = $acr;

        return $this;
    }

    /**
     * Gets challenge
     * @return string
     */
    public function getChallenge()
    {
        return $this->container['challenge'];
    }

    /**
     * Sets challenge
     * @param string $challenge Challenge is the identifier (\"authorization challenge\") of the consent authorization request. It is used to identify the session.
     * @return $this
     */
    public function setChallenge($challenge)
    {
        $this->container['challenge'] = $challenge;

        return $this;
    }

    /**
     * Gets client
     * @return \Hydra\SDK\Model\OAuth2Client
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     * @param \Hydra\SDK\Model\OAuth2Client $client
     * @return $this
     */
    public function setClient($client)
    {
        $this->container['client'] = $client;

        return $this;
    }

    /**
     * Gets context
     * @return map[string,object]
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     * @param map[string,object] $context Context contains arbitrary information set by the login endpoint or is empty if not set.
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets login_challenge
     * @return string
     */
    public function getLoginChallenge()
    {
        return $this->container['login_challenge'];
    }

    /**
     * Sets login_challenge
     * @param string $login_challenge LoginChallenge is the login challenge this consent challenge belongs to. It can be used to associate a login and consent request in the login & consent app.
     * @return $this
     */
    public function setLoginChallenge($login_challenge)
    {
        $this->container['login_challenge'] = $login_challenge;

        return $this;
    }

    /**
     * Gets login_session_id
     * @return string
     */
    public function getLoginSessionId()
    {
        return $this->container['login_session_id'];
    }

    /**
     * Sets login_session_id
     * @param string $login_session_id LoginSessionID is the authentication session ID. It is set if the browser had a valid authentication session at ORY Hydra during the login flow. It can be used to associate consecutive login requests by a certain user.
     * @return $this
     */
    public function setLoginSessionId($login_session_id)
    {
        $this->container['login_session_id'] = $login_session_id;

        return $this;
    }

    /**
     * Gets oidc_context
     * @return \Hydra\SDK\Model\OpenIDConnectContext
     */
    public function getOidcContext()
    {
        return $this->container['oidc_context'];
    }

    /**
     * Sets oidc_context
     * @param \Hydra\SDK\Model\OpenIDConnectContext $oidc_context
     * @return $this
     */
    public function setOidcContext($oidc_context)
    {
        $this->container['oidc_context'] = $oidc_context;

        return $this;
    }

    /**
     * Gets request_url
     * @return string
     */
    public function getRequestUrl()
    {
        return $this->container['request_url'];
    }

    /**
     * Sets request_url
     * @param string $request_url RequestURL is the original OAuth 2.0 Authorization URL requested by the OAuth 2.0 client. It is the URL which initiates the OAuth 2.0 Authorization Code or OAuth 2.0 Implicit flow. This URL is typically not needed, but might come in handy if you want to deal with additional request parameters.
     * @return $this
     */
    public function setRequestUrl($request_url)
    {
        $this->container['request_url'] = $request_url;

        return $this;
    }

    /**
     * Gets requested_access_token_audience
     * @return string[]
     */
    public function getRequestedAccessTokenAudience()
    {
        return $this->container['requested_access_token_audience'];
    }

    /**
     * Sets requested_access_token_audience
     * @param string[] $requested_access_token_audience RequestedScope contains the access token audience as requested by the OAuth 2.0 Client.
     * @return $this
     */
    public function setRequestedAccessTokenAudience($requested_access_token_audience)
    {
        $this->container['requested_access_token_audience'] = $requested_access_token_audience;

        return $this;
    }

    /**
     * Gets requested_scope
     * @return string[]
     */
    public function getRequestedScope()
    {
        return $this->container['requested_scope'];
    }

    /**
     * Sets requested_scope
     * @param string[] $requested_scope RequestedScope contains the OAuth 2.0 Scope requested by the OAuth 2.0 Client.
     * @return $this
     */
    public function setRequestedScope($requested_scope)
    {
        $this->container['requested_scope'] = $requested_scope;

        return $this;
    }

    /**
     * Gets skip
     * @return bool
     */
    public function getSkip()
    {
        return $this->container['skip'];
    }

    /**
     * Sets skip
     * @param bool $skip Skip, if true, implies that the client has requested the same scopes from the same user previously. If true, you must not ask the user to grant the requested scopes. You must however either allow or deny the consent request using the usual API call.
     * @return $this
     */
    public function setSkip($skip)
    {
        $this->container['skip'] = $skip;

        return $this;
    }

    /**
     * Gets subject
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     * @param string $subject Subject is the user ID of the end-user that authenticated. Now, that end user needs to grant or deny the scope requested by the OAuth 2.0 client.
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Hydra\SDK\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Hydra\SDK\ObjectSerializer::sanitizeForSerialization($this));
    }
}


