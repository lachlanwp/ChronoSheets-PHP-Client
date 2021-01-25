<?php
/**
 * CreateTripRequest
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
 * CreateTripRequest Class Doc Comment
 *
 * @category Class
 * @description Contains fields for creating a Trip
 * @package  ChronoSheetsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CreateTripRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateTripRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'timesheetId' => 'int',
        'vehicleId' => 'int',
        'pathCoordsStringCsv' => 'string',
        'distanceMeters' => 'double',
        'mobilePlatform' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'timesheetId' => 'int32',
        'vehicleId' => 'int32',
        'pathCoordsStringCsv' => null,
        'distanceMeters' => 'double',
        'mobilePlatform' => null
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
        'timesheetId' => 'TimesheetId',
        'vehicleId' => 'VehicleId',
        'pathCoordsStringCsv' => 'PathCoordsStringCsv',
        'distanceMeters' => 'DistanceMeters',
        'mobilePlatform' => 'MobilePlatform'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timesheetId' => 'setTimesheetId',
        'vehicleId' => 'setVehicleId',
        'pathCoordsStringCsv' => 'setPathCoordsStringCsv',
        'distanceMeters' => 'setDistanceMeters',
        'mobilePlatform' => 'setMobilePlatform'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timesheetId' => 'getTimesheetId',
        'vehicleId' => 'getVehicleId',
        'pathCoordsStringCsv' => 'getPathCoordsStringCsv',
        'distanceMeters' => 'getDistanceMeters',
        'mobilePlatform' => 'getMobilePlatform'
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

    const MOBILE_PLATFORM_UNKNOWN = 'Unknown';
    const MOBILE_PLATFORM_I_OS = 'iOS';
    const MOBILE_PLATFORM_ANDROID = 'Android';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMobilePlatformAllowableValues()
    {
        return [
            self::MOBILE_PLATFORM_UNKNOWN,
            self::MOBILE_PLATFORM_I_OS,
            self::MOBILE_PLATFORM_ANDROID,
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
        $this->container['timesheetId'] = $data['timesheetId'] ?? null;
        $this->container['vehicleId'] = $data['vehicleId'] ?? null;
        $this->container['pathCoordsStringCsv'] = $data['pathCoordsStringCsv'] ?? null;
        $this->container['distanceMeters'] = $data['distanceMeters'] ?? null;
        $this->container['mobilePlatform'] = $data['mobilePlatform'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMobilePlatformAllowableValues();
        if (!is_null($this->container['mobilePlatform']) && !in_array($this->container['mobilePlatform'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mobilePlatform', must be one of '%s'",
                $this->container['mobilePlatform'],
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
     * Gets timesheetId
     *
     * @return int|null
     */
    public function getTimesheetId()
    {
        return $this->container['timesheetId'];
    }

    /**
     * Sets timesheetId
     *
     * @param int|null $timesheetId The associated Timesheet record Id.  The Trip will be linked to the Timesheet with this TimesheetId
     *
     * @return self
     */
    public function setTimesheetId($timesheetId)
    {
        $this->container['timesheetId'] = $timesheetId;

        return $this;
    }

    /**
     * Gets vehicleId
     *
     * @return int|null
     */
    public function getVehicleId()
    {
        return $this->container['vehicleId'];
    }

    /**
     * Sets vehicleId
     *
     * @param int|null $vehicleId The associated Vehicle Id.  The Trip will show that this Vehicle was used
     *
     * @return self
     */
    public function setVehicleId($vehicleId)
    {
        $this->container['vehicleId'] = $vehicleId;

        return $this;
    }

    /**
     * Gets pathCoordsStringCsv
     *
     * @return string|null
     */
    public function getPathCoordsStringCsv()
    {
        return $this->container['pathCoordsStringCsv'];
    }

    /**
     * Sets pathCoordsStringCsv
     *
     * @param string|null $pathCoordsStringCsv A CSV of GPS path co-ordinates.  Format example: -37.8433562,144.7226188;[Lat1],[Long1];........[LatN],[LongN]
     *
     * @return self
     */
    public function setPathCoordsStringCsv($pathCoordsStringCsv)
    {
        $this->container['pathCoordsStringCsv'] = $pathCoordsStringCsv;

        return $this;
    }

    /**
     * Gets distanceMeters
     *
     * @return double|null
     */
    public function getDistanceMeters()
    {
        return $this->container['distanceMeters'];
    }

    /**
     * Sets distanceMeters
     *
     * @param double|null $distanceMeters The total distance of the Trip
     *
     * @return self
     */
    public function setDistanceMeters($distanceMeters)
    {
        $this->container['distanceMeters'] = $distanceMeters;

        return $this;
    }

    /**
     * Gets mobilePlatform
     *
     * @return string|null
     */
    public function getMobilePlatform()
    {
        return $this->container['mobilePlatform'];
    }

    /**
     * Sets mobilePlatform
     *
     * @param string|null $mobilePlatform The Mobile platform that the Trip was recorded on
     *
     * @return self
     */
    public function setMobilePlatform($mobilePlatform)
    {
        $allowedValues = $this->getMobilePlatformAllowableValues();
        if (!is_null($mobilePlatform) && !in_array($mobilePlatform, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mobilePlatform', must be one of '%s'",
                    $mobilePlatform,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mobilePlatform'] = $mobilePlatform;

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


