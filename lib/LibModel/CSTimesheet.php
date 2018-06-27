<?php
/**
 * CSTimesheet
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
 * ChronoSheets is a flexible timesheet solution for small to medium businesses, it is free for small teams of up to 5 and there are iOS and Android apps available.  Use the ChronoSheets API to create your own custom integrations.
 *
 * OpenAPI spec version: v1
 * Contact: lachlan@chronosheets.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
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
 * CSTimesheet Class Doc Comment
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CSTimesheet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Timesheet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'timesheetId' => 'int',
        'userId' => 'int',
        'jobId' => 'int',
        'taskId' => 'int',
        'startDateTime' => '\DateTime',
        'endDateTime' => '\DateTime',
        'description' => 'string',
        'tripId' => 'int',
        'fileAttachmentCount' => 'int',
        'payAmount' => 'double',
        'overtimePayAmount' => 'double',
        'includesOvertime' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'timesheetId' => 'int32',
        'userId' => 'int32',
        'jobId' => 'int32',
        'taskId' => 'int32',
        'startDateTime' => 'date-time',
        'endDateTime' => 'date-time',
        'description' => null,
        'tripId' => 'int32',
        'fileAttachmentCount' => 'int32',
        'payAmount' => 'double',
        'overtimePayAmount' => 'double',
        'includesOvertime' => null
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
        'timesheetId' => 'TimesheetId',
        'userId' => 'UserId',
        'jobId' => 'JobId',
        'taskId' => 'TaskId',
        'startDateTime' => 'StartDateTime',
        'endDateTime' => 'EndDateTime',
        'description' => 'Description',
        'tripId' => 'TripId',
        'fileAttachmentCount' => 'FileAttachmentCount',
        'payAmount' => 'PayAmount',
        'overtimePayAmount' => 'OvertimePayAmount',
        'includesOvertime' => 'IncludesOvertime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timesheetId' => 'setTimesheetId',
        'userId' => 'setUserId',
        'jobId' => 'setJobId',
        'taskId' => 'setTaskId',
        'startDateTime' => 'setStartDateTime',
        'endDateTime' => 'setEndDateTime',
        'description' => 'setDescription',
        'tripId' => 'setTripId',
        'fileAttachmentCount' => 'setFileAttachmentCount',
        'payAmount' => 'setPayAmount',
        'overtimePayAmount' => 'setOvertimePayAmount',
        'includesOvertime' => 'setIncludesOvertime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timesheetId' => 'getTimesheetId',
        'userId' => 'getUserId',
        'jobId' => 'getJobId',
        'taskId' => 'getTaskId',
        'startDateTime' => 'getStartDateTime',
        'endDateTime' => 'getEndDateTime',
        'description' => 'getDescription',
        'tripId' => 'getTripId',
        'fileAttachmentCount' => 'getFileAttachmentCount',
        'payAmount' => 'getPayAmount',
        'overtimePayAmount' => 'getOvertimePayAmount',
        'includesOvertime' => 'getIncludesOvertime'
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
        $this->container['timesheetId'] = isset($data['timesheetId']) ? $data['timesheetId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['startDateTime'] = isset($data['startDateTime']) ? $data['startDateTime'] : null;
        $this->container['endDateTime'] = isset($data['endDateTime']) ? $data['endDateTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tripId'] = isset($data['tripId']) ? $data['tripId'] : null;
        $this->container['fileAttachmentCount'] = isset($data['fileAttachmentCount']) ? $data['fileAttachmentCount'] : null;
        $this->container['payAmount'] = isset($data['payAmount']) ? $data['payAmount'] : null;
        $this->container['overtimePayAmount'] = isset($data['overtimePayAmount']) ? $data['overtimePayAmount'] : null;
        $this->container['includesOvertime'] = isset($data['includesOvertime']) ? $data['includesOvertime'] : null;
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

        return true;
    }


    /**
     * Gets timesheetId
     *
     * @return int
     */
    public function getTimesheetId()
    {
        return $this->container['timesheetId'];
    }

    /**
     * Sets timesheetId
     *
     * @param int $timesheetId timesheetId
     *
     * @return $this
     */
    public function setTimesheetId($timesheetId)
    {
        $this->container['timesheetId'] = $timesheetId;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param int $userId userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets jobId
     *
     * @return int
     */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
     * Sets jobId
     *
     * @param int $jobId jobId
     *
     * @return $this
     */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;

        return $this;
    }

    /**
     * Gets taskId
     *
     * @return int
     */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
     * Sets taskId
     *
     * @param int $taskId taskId
     *
     * @return $this
     */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;

        return $this;
    }

    /**
     * Gets startDateTime
     *
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->container['startDateTime'];
    }

    /**
     * Sets startDateTime
     *
     * @param \DateTime $startDateTime startDateTime
     *
     * @return $this
     */
    public function setStartDateTime($startDateTime)
    {
        $this->container['startDateTime'] = $startDateTime;

        return $this;
    }

    /**
     * Gets endDateTime
     *
     * @return \DateTime
     */
    public function getEndDateTime()
    {
        return $this->container['endDateTime'];
    }

    /**
     * Sets endDateTime
     *
     * @param \DateTime $endDateTime endDateTime
     *
     * @return $this
     */
    public function setEndDateTime($endDateTime)
    {
        $this->container['endDateTime'] = $endDateTime;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets tripId
     *
     * @return int
     */
    public function getTripId()
    {
        return $this->container['tripId'];
    }

    /**
     * Sets tripId
     *
     * @param int $tripId tripId
     *
     * @return $this
     */
    public function setTripId($tripId)
    {
        $this->container['tripId'] = $tripId;

        return $this;
    }

    /**
     * Gets fileAttachmentCount
     *
     * @return int
     */
    public function getFileAttachmentCount()
    {
        return $this->container['fileAttachmentCount'];
    }

    /**
     * Sets fileAttachmentCount
     *
     * @param int $fileAttachmentCount fileAttachmentCount
     *
     * @return $this
     */
    public function setFileAttachmentCount($fileAttachmentCount)
    {
        $this->container['fileAttachmentCount'] = $fileAttachmentCount;

        return $this;
    }

    /**
     * Gets payAmount
     *
     * @return double
     */
    public function getPayAmount()
    {
        return $this->container['payAmount'];
    }

    /**
     * Sets payAmount
     *
     * @param double $payAmount payAmount
     *
     * @return $this
     */
    public function setPayAmount($payAmount)
    {
        $this->container['payAmount'] = $payAmount;

        return $this;
    }

    /**
     * Gets overtimePayAmount
     *
     * @return double
     */
    public function getOvertimePayAmount()
    {
        return $this->container['overtimePayAmount'];
    }

    /**
     * Sets overtimePayAmount
     *
     * @param double $overtimePayAmount overtimePayAmount
     *
     * @return $this
     */
    public function setOvertimePayAmount($overtimePayAmount)
    {
        $this->container['overtimePayAmount'] = $overtimePayAmount;

        return $this;
    }

    /**
     * Gets includesOvertime
     *
     * @return bool
     */
    public function getIncludesOvertime()
    {
        return $this->container['includesOvertime'];
    }

    /**
     * Sets includesOvertime
     *
     * @param bool $includesOvertime includesOvertime
     *
     * @return $this
     */
    public function setIncludesOvertime($includesOvertime)
    {
        $this->container['includesOvertime'] = $includesOvertime;

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

