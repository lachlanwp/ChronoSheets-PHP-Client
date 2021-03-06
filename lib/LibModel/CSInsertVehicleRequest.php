<?php
/**
 * CSInsertVehicleRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChronoSheets API
 *
 * <div style='font-size: 14px!important;font-family: Open Sans,sans-serif!important;color: #3b4151!important;'><p>      ChronoSheets is a flexible timesheet solution for small to medium businesses, it is free for small teams of up to 3 and there are iOS and Android apps available.  Use the ChronoSheets API to create your own custom integrations.  Before starting, sign up for a ChronoSheets account at <a target='_BLANK' href='http://tsheets.xyz/signup'>http://tsheets.xyz/signup</a>.  </p></div><div id='cs-extra-info'></div>
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.14
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChronoSheetsClient\ChronoSheetsClientLibModel;

use \ArrayAccess;
use \ChronoSheetsClient\ObjectSerializer;

/**
 * CSInsertVehicleRequest Class Doc Comment
 *
 * @category Class
 * @description Fields for inserting a new Vehicle
 * @package  ChronoSheetsClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CSInsertVehicleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InsertVehicleRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'costPerKilometer' => 'double',
        'make' => 'string',
        'model' => 'string',
        'year' => 'string',
        'licencePlateNumber' => 'string',
        'linkedOrgGroupIds' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'costPerKilometer' => 'double',
        'make' => null,
        'model' => null,
        'year' => null,
        'licencePlateNumber' => null,
        'linkedOrgGroupIds' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'Name',
        'costPerKilometer' => 'CostPerKilometer',
        'make' => 'Make',
        'model' => 'Model',
        'year' => 'Year',
        'licencePlateNumber' => 'LicencePlateNumber',
        'linkedOrgGroupIds' => 'LinkedOrgGroupIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'costPerKilometer' => 'setCostPerKilometer',
        'make' => 'setMake',
        'model' => 'setModel',
        'year' => 'setYear',
        'licencePlateNumber' => 'setLicencePlateNumber',
        'linkedOrgGroupIds' => 'setLinkedOrgGroupIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'costPerKilometer' => 'getCostPerKilometer',
        'make' => 'getMake',
        'model' => 'getModel',
        'year' => 'getYear',
        'licencePlateNumber' => 'getLicencePlateNumber',
        'linkedOrgGroupIds' => 'getLinkedOrgGroupIds'
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
        return self::$swaggerModelName;
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['costPerKilometer'] = isset($data['costPerKilometer']) ? $data['costPerKilometer'] : null;
        $this->container['make'] = isset($data['make']) ? $data['make'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
        $this->container['licencePlateNumber'] = isset($data['licencePlateNumber']) ? $data['licencePlateNumber'] : null;
        $this->container['linkedOrgGroupIds'] = isset($data['linkedOrgGroupIds']) ? $data['linkedOrgGroupIds'] : null;
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The Name of the Vehicle
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets costPerKilometer
     *
     * @return double
     */
    public function getCostPerKilometer()
    {
        return $this->container['costPerKilometer'];
    }

    /**
     * Sets costPerKilometer
     *
     * @param double $costPerKilometer The fuel cost / running cost of the Vehicle, measured per kilometer
     *
     * @return $this
     */
    public function setCostPerKilometer($costPerKilometer)
    {
        $this->container['costPerKilometer'] = $costPerKilometer;

        return $this;
    }

    /**
     * Gets make
     *
     * @return string
     */
    public function getMake()
    {
        return $this->container['make'];
    }

    /**
     * Sets make
     *
     * @param string $make The make of the Vehicle
     *
     * @return $this
     */
    public function setMake($make)
    {
        $this->container['make'] = $make;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model The model of the Vehicle
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param string $year The year the Vehicle was made
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets licencePlateNumber
     *
     * @return string
     */
    public function getLicencePlateNumber()
    {
        return $this->container['licencePlateNumber'];
    }

    /**
     * Sets licencePlateNumber
     *
     * @param string $licencePlateNumber The Licence Plate Number of the Vehicle
     *
     * @return $this
     */
    public function setLicencePlateNumber($licencePlateNumber)
    {
        $this->container['licencePlateNumber'] = $licencePlateNumber;

        return $this;
    }

    /**
     * Gets linkedOrgGroupIds
     *
     * @return int[]
     */
    public function getLinkedOrgGroupIds()
    {
        return $this->container['linkedOrgGroupIds'];
    }

    /**
     * Sets linkedOrgGroupIds
     *
     * @param int[] $linkedOrgGroupIds Optionally restrict this Vehicle to only be available to employees within these Organisation Groups
     *
     * @return $this
     */
    public function setLinkedOrgGroupIds($linkedOrgGroupIds)
    {
        $this->container['linkedOrgGroupIds'] = $linkedOrgGroupIds;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


