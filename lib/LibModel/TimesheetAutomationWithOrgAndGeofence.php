<?php
/**
 * TimesheetAutomationWithOrgAndGeofence
 *
 * PHP version 5
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
 * OpenAPI Generator version: 4.3.1
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
 * TimesheetAutomationWithOrgAndGeofence Class Doc Comment
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TimesheetAutomationWithOrgAndGeofence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TimesheetAutomationWithOrgAndGeofence';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'orgId' => 'int',
        'geofenceName' => 'string',
        'coordinates' => '\ChronoSheetsClient\ChronoSheetsClientLibModel\BasicCoordinate[]',
        'userId' => 'int',
        'userName' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'automationId' => 'int',
        'automationActionType' => 'string',
        'created' => '\DateTime',
        'latitude' => 'double',
        'longitude' => 'double',
        'isProcessed' => 'bool',
        'expires' => '\DateTime',
        'clientDateTime' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'orgId' => 'int32',
        'geofenceName' => null,
        'coordinates' => null,
        'userId' => 'int32',
        'userName' => null,
        'firstName' => null,
        'lastName' => null,
        'automationId' => 'int32',
        'automationActionType' => null,
        'created' => 'date-time',
        'latitude' => 'double',
        'longitude' => 'double',
        'isProcessed' => null,
        'expires' => 'date-time',
        'clientDateTime' => 'date-time'
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
        'orgId' => 'OrgId',
        'geofenceName' => 'GeofenceName',
        'coordinates' => 'Coordinates',
        'userId' => 'UserId',
        'userName' => 'UserName',
        'firstName' => 'FirstName',
        'lastName' => 'LastName',
        'automationId' => 'AutomationId',
        'automationActionType' => 'AutomationActionType',
        'created' => 'Created',
        'latitude' => 'Latitude',
        'longitude' => 'Longitude',
        'isProcessed' => 'IsProcessed',
        'expires' => 'Expires',
        'clientDateTime' => 'ClientDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orgId' => 'setOrgId',
        'geofenceName' => 'setGeofenceName',
        'coordinates' => 'setCoordinates',
        'userId' => 'setUserId',
        'userName' => 'setUserName',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'automationId' => 'setAutomationId',
        'automationActionType' => 'setAutomationActionType',
        'created' => 'setCreated',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'isProcessed' => 'setIsProcessed',
        'expires' => 'setExpires',
        'clientDateTime' => 'setClientDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orgId' => 'getOrgId',
        'geofenceName' => 'getGeofenceName',
        'coordinates' => 'getCoordinates',
        'userId' => 'getUserId',
        'userName' => 'getUserName',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'automationId' => 'getAutomationId',
        'automationActionType' => 'getAutomationActionType',
        'created' => 'getCreated',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'isProcessed' => 'getIsProcessed',
        'expires' => 'getExpires',
        'clientDateTime' => 'getClientDateTime'
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

    const AUTOMATION_ACTION_TYPE_ENTER_GEOFENCE = 'EnterGeofence';
    const AUTOMATION_ACTION_TYPE_EXIT_GEOFENCE = 'ExitGeofence';
    const AUTOMATION_ACTION_TYPE_TAP_ON_NFC = 'TapOnNfc';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAutomationActionTypeAllowableValues()
    {
        return [
            self::AUTOMATION_ACTION_TYPE_ENTER_GEOFENCE,
            self::AUTOMATION_ACTION_TYPE_EXIT_GEOFENCE,
            self::AUTOMATION_ACTION_TYPE_TAP_ON_NFC,
        ];
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
        $this->container['orgId'] = isset($data['orgId']) ? $data['orgId'] : null;
        $this->container['geofenceName'] = isset($data['geofenceName']) ? $data['geofenceName'] : null;
        $this->container['coordinates'] = isset($data['coordinates']) ? $data['coordinates'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['automationId'] = isset($data['automationId']) ? $data['automationId'] : null;
        $this->container['automationActionType'] = isset($data['automationActionType']) ? $data['automationActionType'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['isProcessed'] = isset($data['isProcessed']) ? $data['isProcessed'] : null;
        $this->container['expires'] = isset($data['expires']) ? $data['expires'] : null;
        $this->container['clientDateTime'] = isset($data['clientDateTime']) ? $data['clientDateTime'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAutomationActionTypeAllowableValues();
        if (!is_null($this->container['automationActionType']) && !in_array($this->container['automationActionType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'automationActionType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets orgId
     *
     * @return int|null
     */
    public function getOrgId()
    {
        return $this->container['orgId'];
    }

    /**
     * Sets orgId
     *
     * @param int|null $orgId orgId
     *
     * @return $this
     */
    public function setOrgId($orgId)
    {
        $this->container['orgId'] = $orgId;

        return $this;
    }

    /**
     * Gets geofenceName
     *
     * @return string|null
     */
    public function getGeofenceName()
    {
        return $this->container['geofenceName'];
    }

    /**
     * Sets geofenceName
     *
     * @param string|null $geofenceName geofenceName
     *
     * @return $this
     */
    public function setGeofenceName($geofenceName)
    {
        $this->container['geofenceName'] = $geofenceName;

        return $this;
    }

    /**
     * Gets coordinates
     *
     * @return \ChronoSheetsClient\ChronoSheetsClientLibModel\BasicCoordinate[]|null
     */
    public function getCoordinates()
    {
        return $this->container['coordinates'];
    }

    /**
     * Sets coordinates
     *
     * @param \ChronoSheetsClient\ChronoSheetsClientLibModel\BasicCoordinate[]|null $coordinates coordinates
     *
     * @return $this
     */
    public function setCoordinates($coordinates)
    {
        $this->container['coordinates'] = $coordinates;

        return $this;
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
     * @param int|null $userId userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets userName
     *
     * @return string|null
     */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
     * Sets userName
     *
     * @param string|null $userName userName
     *
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;

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
     * @param string|null $firstName firstName
     *
     * @return $this
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
     * @param string|null $lastName lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets automationId
     *
     * @return int|null
     */
    public function getAutomationId()
    {
        return $this->container['automationId'];
    }

    /**
     * Sets automationId
     *
     * @param int|null $automationId automationId
     *
     * @return $this
     */
    public function setAutomationId($automationId)
    {
        $this->container['automationId'] = $automationId;

        return $this;
    }

    /**
     * Gets automationActionType
     *
     * @return string|null
     */
    public function getAutomationActionType()
    {
        return $this->container['automationActionType'];
    }

    /**
     * Sets automationActionType
     *
     * @param string|null $automationActionType automationActionType
     *
     * @return $this
     */
    public function setAutomationActionType($automationActionType)
    {
        $allowedValues = $this->getAutomationActionTypeAllowableValues();
        if (!is_null($automationActionType) && !in_array($automationActionType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'automationActionType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['automationActionType'] = $automationActionType;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime|null $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return double|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param double|null $latitude latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return double|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param double|null $longitude longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets isProcessed
     *
     * @return bool|null
     */
    public function getIsProcessed()
    {
        return $this->container['isProcessed'];
    }

    /**
     * Sets isProcessed
     *
     * @param bool|null $isProcessed isProcessed
     *
     * @return $this
     */
    public function setIsProcessed($isProcessed)
    {
        $this->container['isProcessed'] = $isProcessed;

        return $this;
    }

    /**
     * Gets expires
     *
     * @return \DateTime|null
     */
    public function getExpires()
    {
        return $this->container['expires'];
    }

    /**
     * Sets expires
     *
     * @param \DateTime|null $expires expires
     *
     * @return $this
     */
    public function setExpires($expires)
    {
        $this->container['expires'] = $expires;

        return $this;
    }

    /**
     * Gets clientDateTime
     *
     * @return \DateTime|null
     */
    public function getClientDateTime()
    {
        return $this->container['clientDateTime'];
    }

    /**
     * Sets clientDateTime
     *
     * @param \DateTime|null $clientDateTime clientDateTime
     *
     * @return $this
     */
    public function setClientDateTime($clientDateTime)
    {
        $this->container['clientDateTime'] = $clientDateTime;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


