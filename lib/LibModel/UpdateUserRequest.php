<?php
/**
 * UpdateUserRequest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ChronoSheets API
 *
 * <div style='font-size: 14px!important;font-family: Open Sans,sans-serif!important;color: #3b4151!important;'><p>      ChronoSheets is a flexible timesheet solution for small to medium businesses, it is free for small teams of up to 3 and there are iOS and Android apps available.  Use the ChronoSheets API to create your own custom integrations.  Before starting, sign up for a ChronoSheets account at <a target='_BLANK' href='http://tsheets.xyz/signup'>http://tsheets.xyz/signup</a>.  </p></div><div id='cs-extra-info'></div>
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ChronoSheetsClient\ChronoSheetsClientLibModel;

use \ArrayAccess;
use \ChronoSheetsClient\ObjectSerializer;

/**
 * UpdateUserRequest Class Doc Comment
 *
 * @category Class
 * @description Fields for updating an employee User Account
 * @package  ChronoSheetsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class UpdateUserRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateUserRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'userId' => 'int',
        'emailAddress' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'isSubscribedToNewsletter' => 'bool',
        'isAccountActive' => 'bool',
        'roles' => 'int',
        'alertSettings' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'userId' => 'int32',
        'emailAddress' => null,
        'firstName' => null,
        'lastName' => null,
        'isSubscribedToNewsletter' => null,
        'isAccountActive' => null,
        'roles' => 'int64',
        'alertSettings' => 'int64'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'userId' => 'UserId',
        'emailAddress' => 'EmailAddress',
        'firstName' => 'FirstName',
        'lastName' => 'LastName',
        'isSubscribedToNewsletter' => 'IsSubscribedToNewsletter',
        'isAccountActive' => 'IsAccountActive',
        'roles' => 'Roles',
        'alertSettings' => 'AlertSettings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'userId' => 'setUserId',
        'emailAddress' => 'setEmailAddress',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'isSubscribedToNewsletter' => 'setIsSubscribedToNewsletter',
        'isAccountActive' => 'setIsAccountActive',
        'roles' => 'setRoles',
        'alertSettings' => 'setAlertSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'userId' => 'getUserId',
        'emailAddress' => 'getEmailAddress',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'isSubscribedToNewsletter' => 'getIsSubscribedToNewsletter',
        'isAccountActive' => 'getIsAccountActive',
        'roles' => 'getRoles',
        'alertSettings' => 'getAlertSettings'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['userId'] = $data['userId'] ?? null;
        $this->container['emailAddress'] = $data['emailAddress'] ?? null;
        $this->container['firstName'] = $data['firstName'] ?? null;
        $this->container['lastName'] = $data['lastName'] ?? null;
        $this->container['isSubscribedToNewsletter'] = $data['isSubscribedToNewsletter'] ?? null;
        $this->container['isAccountActive'] = $data['isAccountActive'] ?? null;
        $this->container['roles'] = $data['roles'] ?? null;
        $this->container['alertSettings'] = $data['alertSettings'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets userId
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param int|null $userId The Id of the User that is to be updated
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets emailAddress
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['emailAddress'];
    }

    /**
     * Sets emailAddress
     *
     * @param string|null $emailAddress The Email Address of the employee
     *
     * @return self
     */
    public function setEmailAddress($emailAddress)
    {
        $this->container['emailAddress'] = $emailAddress;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string|null $firstName The First Name of the employee
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string|null $lastName The Last Name of the employee
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets isSubscribedToNewsletter
     *
     * @return bool|null
     */
    public function getIsSubscribedToNewsletter()
    {
        return $this->container['isSubscribedToNewsletter'];
    }

    /**
     * Sets isSubscribedToNewsletter
     *
     * @param bool|null $isSubscribedToNewsletter Whether or not the employee is subscribed to ChronoSheets newsletters
     *
     * @return self
     */
    public function setIsSubscribedToNewsletter($isSubscribedToNewsletter)
    {
        $this->container['isSubscribedToNewsletter'] = $isSubscribedToNewsletter;

        return $this;
    }

    /**
     * Gets isAccountActive
     *
     * @return bool|null
     */
    public function getIsAccountActive()
    {
        return $this->container['isAccountActive'];
    }

    /**
     * Sets isAccountActive
     *
     * @param bool|null $isAccountActive Whether or not the employee account is active
     *
     * @return self
     */
    public function setIsAccountActive($isAccountActive)
    {
        $this->container['isAccountActive'] = $isAccountActive;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return int|null
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param int|null $roles A BIT field designating which Roles/Permissions the employee will have when they sign in.  See the {timesheets.types.Enums.UserRoles} Enum for more details
     *
     * @return self
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets alertSettings
     *
     * @return int|null
     */
    public function getAlertSettings()
    {
        return $this->container['alertSettings'];
    }

    /**
     * Sets alertSettings
     *
     * @param int|null $alertSettings A BIT field designating which Alerts the employee will receive.  See the {timesheets.types.Enums.AlertSettings} Enum for more details
     *
     * @return self
     */
    public function setAlertSettings($alertSettings)
    {
        $this->container['alertSettings'] = $alertSettings;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


