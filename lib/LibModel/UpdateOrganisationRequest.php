<?php
/**
 * UpdateOrganisationRequest
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
 * UpdateOrganisationRequest Class Doc Comment
 *
 * @category Class
 * @description Field for updating your Organisation
 * @package  ChronoSheetsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UpdateOrganisationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateOrganisationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'organsationId' => 'int',
        'organisationName' => 'string',
        'addressLine01' => 'string',
        'addressLine02' => 'string',
        'organisationSuburb' => 'string',
        'organisationState' => 'string',
        'organisationPostcode' => 'string',
        'organisationCountry' => 'string',
        'organisationPhone' => 'string',
        'organisationEmailAddress' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'organsationId' => 'int32',
        'organisationName' => null,
        'addressLine01' => null,
        'addressLine02' => null,
        'organisationSuburb' => null,
        'organisationState' => null,
        'organisationPostcode' => null,
        'organisationCountry' => null,
        'organisationPhone' => null,
        'organisationEmailAddress' => null
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
        'organsationId' => 'OrgansationId',
        'organisationName' => 'OrganisationName',
        'addressLine01' => 'AddressLine01',
        'addressLine02' => 'AddressLine02',
        'organisationSuburb' => 'OrganisationSuburb',
        'organisationState' => 'OrganisationState',
        'organisationPostcode' => 'OrganisationPostcode',
        'organisationCountry' => 'OrganisationCountry',
        'organisationPhone' => 'OrganisationPhone',
        'organisationEmailAddress' => 'OrganisationEmailAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organsationId' => 'setOrgansationId',
        'organisationName' => 'setOrganisationName',
        'addressLine01' => 'setAddressLine01',
        'addressLine02' => 'setAddressLine02',
        'organisationSuburb' => 'setOrganisationSuburb',
        'organisationState' => 'setOrganisationState',
        'organisationPostcode' => 'setOrganisationPostcode',
        'organisationCountry' => 'setOrganisationCountry',
        'organisationPhone' => 'setOrganisationPhone',
        'organisationEmailAddress' => 'setOrganisationEmailAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organsationId' => 'getOrgansationId',
        'organisationName' => 'getOrganisationName',
        'addressLine01' => 'getAddressLine01',
        'addressLine02' => 'getAddressLine02',
        'organisationSuburb' => 'getOrganisationSuburb',
        'organisationState' => 'getOrganisationState',
        'organisationPostcode' => 'getOrganisationPostcode',
        'organisationCountry' => 'getOrganisationCountry',
        'organisationPhone' => 'getOrganisationPhone',
        'organisationEmailAddress' => 'getOrganisationEmailAddress'
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
        $this->container['organsationId'] = isset($data['organsationId']) ? $data['organsationId'] : null;
        $this->container['organisationName'] = isset($data['organisationName']) ? $data['organisationName'] : null;
        $this->container['addressLine01'] = isset($data['addressLine01']) ? $data['addressLine01'] : null;
        $this->container['addressLine02'] = isset($data['addressLine02']) ? $data['addressLine02'] : null;
        $this->container['organisationSuburb'] = isset($data['organisationSuburb']) ? $data['organisationSuburb'] : null;
        $this->container['organisationState'] = isset($data['organisationState']) ? $data['organisationState'] : null;
        $this->container['organisationPostcode'] = isset($data['organisationPostcode']) ? $data['organisationPostcode'] : null;
        $this->container['organisationCountry'] = isset($data['organisationCountry']) ? $data['organisationCountry'] : null;
        $this->container['organisationPhone'] = isset($data['organisationPhone']) ? $data['organisationPhone'] : null;
        $this->container['organisationEmailAddress'] = isset($data['organisationEmailAddress']) ? $data['organisationEmailAddress'] : null;
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
     * Gets organsationId
     *
     * @return int|null
     */
    public function getOrgansationId()
    {
        return $this->container['organsationId'];
    }

    /**
     * Sets organsationId
     *
     * @param int|null $organsationId The Id of your Organisation.  This is validated based on your current Auth Token
     *
     * @return $this
     */
    public function setOrgansationId($organsationId)
    {
        $this->container['organsationId'] = $organsationId;

        return $this;
    }

    /**
     * Gets organisationName
     *
     * @return string|null
     */
    public function getOrganisationName()
    {
        return $this->container['organisationName'];
    }

    /**
     * Sets organisationName
     *
     * @param string|null $organisationName The updated organisation name
     *
     * @return $this
     */
    public function setOrganisationName($organisationName)
    {
        $this->container['organisationName'] = $organisationName;

        return $this;
    }

    /**
     * Gets addressLine01
     *
     * @return string|null
     */
    public function getAddressLine01()
    {
        return $this->container['addressLine01'];
    }

    /**
     * Sets addressLine01
     *
     * @param string|null $addressLine01 The updated Address Line 1 value
     *
     * @return $this
     */
    public function setAddressLine01($addressLine01)
    {
        $this->container['addressLine01'] = $addressLine01;

        return $this;
    }

    /**
     * Gets addressLine02
     *
     * @return string|null
     */
    public function getAddressLine02()
    {
        return $this->container['addressLine02'];
    }

    /**
     * Sets addressLine02
     *
     * @param string|null $addressLine02 The updated Address Line 2 value
     *
     * @return $this
     */
    public function setAddressLine02($addressLine02)
    {
        $this->container['addressLine02'] = $addressLine02;

        return $this;
    }

    /**
     * Gets organisationSuburb
     *
     * @return string|null
     */
    public function getOrganisationSuburb()
    {
        return $this->container['organisationSuburb'];
    }

    /**
     * Sets organisationSuburb
     *
     * @param string|null $organisationSuburb The updated address suburb
     *
     * @return $this
     */
    public function setOrganisationSuburb($organisationSuburb)
    {
        $this->container['organisationSuburb'] = $organisationSuburb;

        return $this;
    }

    /**
     * Gets organisationState
     *
     * @return string|null
     */
    public function getOrganisationState()
    {
        return $this->container['organisationState'];
    }

    /**
     * Sets organisationState
     *
     * @param string|null $organisationState The updated address state
     *
     * @return $this
     */
    public function setOrganisationState($organisationState)
    {
        $this->container['organisationState'] = $organisationState;

        return $this;
    }

    /**
     * Gets organisationPostcode
     *
     * @return string|null
     */
    public function getOrganisationPostcode()
    {
        return $this->container['organisationPostcode'];
    }

    /**
     * Sets organisationPostcode
     *
     * @param string|null $organisationPostcode The updated address postcode
     *
     * @return $this
     */
    public function setOrganisationPostcode($organisationPostcode)
    {
        $this->container['organisationPostcode'] = $organisationPostcode;

        return $this;
    }

    /**
     * Gets organisationCountry
     *
     * @return string|null
     */
    public function getOrganisationCountry()
    {
        return $this->container['organisationCountry'];
    }

    /**
     * Sets organisationCountry
     *
     * @param string|null $organisationCountry The updated address country
     *
     * @return $this
     */
    public function setOrganisationCountry($organisationCountry)
    {
        $this->container['organisationCountry'] = $organisationCountry;

        return $this;
    }

    /**
     * Gets organisationPhone
     *
     * @return string|null
     */
    public function getOrganisationPhone()
    {
        return $this->container['organisationPhone'];
    }

    /**
     * Sets organisationPhone
     *
     * @param string|null $organisationPhone The updated contact phone number
     *
     * @return $this
     */
    public function setOrganisationPhone($organisationPhone)
    {
        $this->container['organisationPhone'] = $organisationPhone;

        return $this;
    }

    /**
     * Gets organisationEmailAddress
     *
     * @return string|null
     */
    public function getOrganisationEmailAddress()
    {
        return $this->container['organisationEmailAddress'];
    }

    /**
     * Sets organisationEmailAddress
     *
     * @param string|null $organisationEmailAddress The update organisation email address
     *
     * @return $this
     */
    public function setOrganisationEmailAddress($organisationEmailAddress)
    {
        $this->container['organisationEmailAddress'] = $organisationEmailAddress;

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


