<?php
/**
 * CSExtendedGeofence
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
 * CSExtendedGeofence Class Doc Comment
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CSExtendedGeofence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExtendedGeofence';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'jobCode' => 'string',
        'taskName' => 'string',
        'createdBy' => 'string',
        'updatedBy' => 'string',
        'alertOrganisation' => 'string',
        'geoFencingId' => 'int',
        'orgId' => 'int',
        'createdByUserId' => 'int',
        'lastUpdatedByUserId' => 'int',
        'name' => 'string',
        'locationName' => 'string',
        'coordinates' => '\ChronoSheetsClient\ChronoSheetsClientLibModel\CSBasicCoordinate[]',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'triggerJobCodeId' => 'int',
        'triggerTaskId' => 'int',
        'triggerSettings' => 'string',
        'alertToOrgGroupId' => 'int',
        'alertSettings' => 'string',
        'startTimeHour' => 'int',
        'startTimeMinute' => 'int',
        'endTimeHour' => 'int',
        'endTimeMinute' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'jobCode' => null,
        'taskName' => null,
        'createdBy' => null,
        'updatedBy' => null,
        'alertOrganisation' => null,
        'geoFencingId' => 'int32',
        'orgId' => 'int32',
        'createdByUserId' => 'int32',
        'lastUpdatedByUserId' => 'int32',
        'name' => null,
        'locationName' => null,
        'coordinates' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'triggerJobCodeId' => 'int32',
        'triggerTaskId' => 'int32',
        'triggerSettings' => null,
        'alertToOrgGroupId' => 'int32',
        'alertSettings' => null,
        'startTimeHour' => 'int32',
        'startTimeMinute' => 'int32',
        'endTimeHour' => 'int32',
        'endTimeMinute' => 'int32'
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
        'jobCode' => 'JobCode',
        'taskName' => 'TaskName',
        'createdBy' => 'CreatedBy',
        'updatedBy' => 'UpdatedBy',
        'alertOrganisation' => 'AlertOrganisation',
        'geoFencingId' => 'GeoFencingId',
        'orgId' => 'OrgId',
        'createdByUserId' => 'CreatedByUserId',
        'lastUpdatedByUserId' => 'LastUpdatedByUserId',
        'name' => 'Name',
        'locationName' => 'LocationName',
        'coordinates' => 'Coordinates',
        'createdAt' => 'CreatedAt',
        'updatedAt' => 'UpdatedAt',
        'triggerJobCodeId' => 'TriggerJobCodeId',
        'triggerTaskId' => 'TriggerTaskId',
        'triggerSettings' => 'TriggerSettings',
        'alertToOrgGroupId' => 'AlertToOrgGroupId',
        'alertSettings' => 'AlertSettings',
        'startTimeHour' => 'StartTimeHour',
        'startTimeMinute' => 'StartTimeMinute',
        'endTimeHour' => 'EndTimeHour',
        'endTimeMinute' => 'EndTimeMinute'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'jobCode' => 'setJobCode',
        'taskName' => 'setTaskName',
        'createdBy' => 'setCreatedBy',
        'updatedBy' => 'setUpdatedBy',
        'alertOrganisation' => 'setAlertOrganisation',
        'geoFencingId' => 'setGeoFencingId',
        'orgId' => 'setOrgId',
        'createdByUserId' => 'setCreatedByUserId',
        'lastUpdatedByUserId' => 'setLastUpdatedByUserId',
        'name' => 'setName',
        'locationName' => 'setLocationName',
        'coordinates' => 'setCoordinates',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'triggerJobCodeId' => 'setTriggerJobCodeId',
        'triggerTaskId' => 'setTriggerTaskId',
        'triggerSettings' => 'setTriggerSettings',
        'alertToOrgGroupId' => 'setAlertToOrgGroupId',
        'alertSettings' => 'setAlertSettings',
        'startTimeHour' => 'setStartTimeHour',
        'startTimeMinute' => 'setStartTimeMinute',
        'endTimeHour' => 'setEndTimeHour',
        'endTimeMinute' => 'setEndTimeMinute'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'jobCode' => 'getJobCode',
        'taskName' => 'getTaskName',
        'createdBy' => 'getCreatedBy',
        'updatedBy' => 'getUpdatedBy',
        'alertOrganisation' => 'getAlertOrganisation',
        'geoFencingId' => 'getGeoFencingId',
        'orgId' => 'getOrgId',
        'createdByUserId' => 'getCreatedByUserId',
        'lastUpdatedByUserId' => 'getLastUpdatedByUserId',
        'name' => 'getName',
        'locationName' => 'getLocationName',
        'coordinates' => 'getCoordinates',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'triggerJobCodeId' => 'getTriggerJobCodeId',
        'triggerTaskId' => 'getTriggerTaskId',
        'triggerSettings' => 'getTriggerSettings',
        'alertToOrgGroupId' => 'getAlertToOrgGroupId',
        'alertSettings' => 'getAlertSettings',
        'startTimeHour' => 'getStartTimeHour',
        'startTimeMinute' => 'getStartTimeMinute',
        'endTimeHour' => 'getEndTimeHour',
        'endTimeMinute' => 'getEndTimeMinute'
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

    const CS_TRIGGER_SETTINGS_NONE = 'None';
    const CS_TRIGGER_SETTINGS_START_TIMESHEET_WHEN_ENTERING = 'StartTimesheetWhenEntering';
    const CS_TRIGGER_SETTINGS_STOP_TIMESHEET_WHEN_ENTERING = 'StopTimesheetWhenEntering';
    const CS_TRIGGER_SETTINGS_START_ON_ENTER_STOP_ON_LEAVE = 'StartOnEnterStopOnLeave';
    const CS_ALERT_SETTINGS_NONE = 'None';
    const CS_ALERT_SETTINGS_SEND_WHEN_ENTERING = 'SendWhenEntering';
    const CS_ALERT_SETTINGS_SEND_WHEN_EXITING = 'SendWhenExiting';
    const CS_ALERT_SETTINGS_SEND_WHEN_ENTERING_OR_EXITING = 'SendWhenEnteringOrExiting';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTriggerSettingsAllowableValues()
    {
        return [
            self::CS_TRIGGER_SETTINGS_NONE,
            self::CS_TRIGGER_SETTINGS_START_TIMESHEET_WHEN_ENTERING,
            self::CS_TRIGGER_SETTINGS_STOP_TIMESHEET_WHEN_ENTERING,
            self::CS_TRIGGER_SETTINGS_START_ON_ENTER_STOP_ON_LEAVE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAlertSettingsAllowableValues()
    {
        return [
            self::CS_ALERT_SETTINGS_NONE,
            self::CS_ALERT_SETTINGS_SEND_WHEN_ENTERING,
            self::CS_ALERT_SETTINGS_SEND_WHEN_EXITING,
            self::CS_ALERT_SETTINGS_SEND_WHEN_ENTERING_OR_EXITING,
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
        $this->container['jobCode'] = isset($data['jobCode']) ? $data['jobCode'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['updatedBy'] = isset($data['updatedBy']) ? $data['updatedBy'] : null;
        $this->container['alertOrganisation'] = isset($data['alertOrganisation']) ? $data['alertOrganisation'] : null;
        $this->container['geoFencingId'] = isset($data['geoFencingId']) ? $data['geoFencingId'] : null;
        $this->container['orgId'] = isset($data['orgId']) ? $data['orgId'] : null;
        $this->container['createdByUserId'] = isset($data['createdByUserId']) ? $data['createdByUserId'] : null;
        $this->container['lastUpdatedByUserId'] = isset($data['lastUpdatedByUserId']) ? $data['lastUpdatedByUserId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['locationName'] = isset($data['locationName']) ? $data['locationName'] : null;
        $this->container['coordinates'] = isset($data['coordinates']) ? $data['coordinates'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['triggerJobCodeId'] = isset($data['triggerJobCodeId']) ? $data['triggerJobCodeId'] : null;
        $this->container['triggerTaskId'] = isset($data['triggerTaskId']) ? $data['triggerTaskId'] : null;
        $this->container['triggerSettings'] = isset($data['triggerSettings']) ? $data['triggerSettings'] : null;
        $this->container['alertToOrgGroupId'] = isset($data['alertToOrgGroupId']) ? $data['alertToOrgGroupId'] : null;
        $this->container['alertSettings'] = isset($data['alertSettings']) ? $data['alertSettings'] : null;
        $this->container['startTimeHour'] = isset($data['startTimeHour']) ? $data['startTimeHour'] : null;
        $this->container['startTimeMinute'] = isset($data['startTimeMinute']) ? $data['startTimeMinute'] : null;
        $this->container['endTimeHour'] = isset($data['endTimeHour']) ? $data['endTimeHour'] : null;
        $this->container['endTimeMinute'] = isset($data['endTimeMinute']) ? $data['endTimeMinute'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTriggerSettingsAllowableValues();
        if (!is_null($this->container['triggerSettings']) && !in_array($this->container['triggerSettings'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'triggerSettings', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAlertSettingsAllowableValues();
        if (!is_null($this->container['alertSettings']) && !in_array($this->container['alertSettings'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'alertSettings', must be one of '%s'",
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
     * Gets jobCode
     *
     * @return string
     */
    public function getJobCode()
    {
        return $this->container['jobCode'];
    }

    /**
     * Sets jobCode
     *
     * @param string $jobCode jobCode
     *
     * @return $this
     */
    public function setJobCode($jobCode)
    {
        $this->container['jobCode'] = $jobCode;

        return $this;
    }

    /**
     * Gets taskName
     *
     * @return string
     */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
     * Sets taskName
     *
     * @param string $taskName taskName
     *
     * @return $this
     */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;

        return $this;
    }

    /**
     * Gets createdBy
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param string $createdBy createdBy
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

        return $this;
    }

    /**
     * Gets updatedBy
     *
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->container['updatedBy'];
    }

    /**
     * Sets updatedBy
     *
     * @param string $updatedBy updatedBy
     *
     * @return $this
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->container['updatedBy'] = $updatedBy;

        return $this;
    }

    /**
     * Gets alertOrganisation
     *
     * @return string
     */
    public function getAlertOrganisation()
    {
        return $this->container['alertOrganisation'];
    }

    /**
     * Sets alertOrganisation
     *
     * @param string $alertOrganisation alertOrganisation
     *
     * @return $this
     */
    public function setAlertOrganisation($alertOrganisation)
    {
        $this->container['alertOrganisation'] = $alertOrganisation;

        return $this;
    }

    /**
     * Gets geoFencingId
     *
     * @return int
     */
    public function getGeoFencingId()
    {
        return $this->container['geoFencingId'];
    }

    /**
     * Sets geoFencingId
     *
     * @param int $geoFencingId geoFencingId
     *
     * @return $this
     */
    public function setGeoFencingId($geoFencingId)
    {
        $this->container['geoFencingId'] = $geoFencingId;

        return $this;
    }

    /**
     * Gets orgId
     *
     * @return int
     */
    public function getOrgId()
    {
        return $this->container['orgId'];
    }

    /**
     * Sets orgId
     *
     * @param int $orgId orgId
     *
     * @return $this
     */
    public function setOrgId($orgId)
    {
        $this->container['orgId'] = $orgId;

        return $this;
    }

    /**
     * Gets createdByUserId
     *
     * @return int
     */
    public function getCreatedByUserId()
    {
        return $this->container['createdByUserId'];
    }

    /**
     * Sets createdByUserId
     *
     * @param int $createdByUserId createdByUserId
     *
     * @return $this
     */
    public function setCreatedByUserId($createdByUserId)
    {
        $this->container['createdByUserId'] = $createdByUserId;

        return $this;
    }

    /**
     * Gets lastUpdatedByUserId
     *
     * @return int
     */
    public function getLastUpdatedByUserId()
    {
        return $this->container['lastUpdatedByUserId'];
    }

    /**
     * Sets lastUpdatedByUserId
     *
     * @param int $lastUpdatedByUserId lastUpdatedByUserId
     *
     * @return $this
     */
    public function setLastUpdatedByUserId($lastUpdatedByUserId)
    {
        $this->container['lastUpdatedByUserId'] = $lastUpdatedByUserId;

        return $this;
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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets locationName
     *
     * @return string
     */
    public function getLocationName()
    {
        return $this->container['locationName'];
    }

    /**
     * Sets locationName
     *
     * @param string $locationName locationName
     *
     * @return $this
     */
    public function setLocationName($locationName)
    {
        $this->container['locationName'] = $locationName;

        return $this;
    }

    /**
     * Gets coordinates
     *
     * @return \ChronoSheetsClient\ChronoSheetsClientLibModel\CSBasicCoordinate[]
     */
    public function getCoordinates()
    {
        return $this->container['coordinates'];
    }

    /**
     * Sets coordinates
     *
     * @param \ChronoSheetsClient\ChronoSheetsClientLibModel\CSBasicCoordinate[] $coordinates coordinates
     *
     * @return $this
     */
    public function setCoordinates($coordinates)
    {
        $this->container['coordinates'] = $coordinates;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime $createdAt createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime $updatedAt updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets triggerJobCodeId
     *
     * @return int
     */
    public function getTriggerJobCodeId()
    {
        return $this->container['triggerJobCodeId'];
    }

    /**
     * Sets triggerJobCodeId
     *
     * @param int $triggerJobCodeId triggerJobCodeId
     *
     * @return $this
     */
    public function setTriggerJobCodeId($triggerJobCodeId)
    {
        $this->container['triggerJobCodeId'] = $triggerJobCodeId;

        return $this;
    }

    /**
     * Gets triggerTaskId
     *
     * @return int
     */
    public function getTriggerTaskId()
    {
        return $this->container['triggerTaskId'];
    }

    /**
     * Sets triggerTaskId
     *
     * @param int $triggerTaskId triggerTaskId
     *
     * @return $this
     */
    public function setTriggerTaskId($triggerTaskId)
    {
        $this->container['triggerTaskId'] = $triggerTaskId;

        return $this;
    }

    /**
     * Gets triggerSettings
     *
     * @return string
     */
    public function getTriggerSettings()
    {
        return $this->container['triggerSettings'];
    }

    /**
     * Sets triggerSettings
     *
     * @param string $triggerSettings triggerSettings
     *
     * @return $this
     */
    public function setTriggerSettings($triggerSettings)
    {
        $allowedValues = $this->getTriggerSettingsAllowableValues();
        if (!is_null($triggerSettings) && !in_array($triggerSettings, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'triggerSettings', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['triggerSettings'] = $triggerSettings;

        return $this;
    }

    /**
     * Gets alertToOrgGroupId
     *
     * @return int
     */
    public function getAlertToOrgGroupId()
    {
        return $this->container['alertToOrgGroupId'];
    }

    /**
     * Sets alertToOrgGroupId
     *
     * @param int $alertToOrgGroupId alertToOrgGroupId
     *
     * @return $this
     */
    public function setAlertToOrgGroupId($alertToOrgGroupId)
    {
        $this->container['alertToOrgGroupId'] = $alertToOrgGroupId;

        return $this;
    }

    /**
     * Gets alertSettings
     *
     * @return string
     */
    public function getAlertSettings()
    {
        return $this->container['alertSettings'];
    }

    /**
     * Sets alertSettings
     *
     * @param string $alertSettings alertSettings
     *
     * @return $this
     */
    public function setAlertSettings($alertSettings)
    {
        $allowedValues = $this->getAlertSettingsAllowableValues();
        if (!is_null($alertSettings) && !in_array($alertSettings, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'alertSettings', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['alertSettings'] = $alertSettings;

        return $this;
    }

    /**
     * Gets startTimeHour
     *
     * @return int
     */
    public function getStartTimeHour()
    {
        return $this->container['startTimeHour'];
    }

    /**
     * Sets startTimeHour
     *
     * @param int $startTimeHour startTimeHour
     *
     * @return $this
     */
    public function setStartTimeHour($startTimeHour)
    {
        $this->container['startTimeHour'] = $startTimeHour;

        return $this;
    }

    /**
     * Gets startTimeMinute
     *
     * @return int
     */
    public function getStartTimeMinute()
    {
        return $this->container['startTimeMinute'];
    }

    /**
     * Sets startTimeMinute
     *
     * @param int $startTimeMinute startTimeMinute
     *
     * @return $this
     */
    public function setStartTimeMinute($startTimeMinute)
    {
        $this->container['startTimeMinute'] = $startTimeMinute;

        return $this;
    }

    /**
     * Gets endTimeHour
     *
     * @return int
     */
    public function getEndTimeHour()
    {
        return $this->container['endTimeHour'];
    }

    /**
     * Sets endTimeHour
     *
     * @param int $endTimeHour endTimeHour
     *
     * @return $this
     */
    public function setEndTimeHour($endTimeHour)
    {
        $this->container['endTimeHour'] = $endTimeHour;

        return $this;
    }

    /**
     * Gets endTimeMinute
     *
     * @return int
     */
    public function getEndTimeMinute()
    {
        return $this->container['endTimeMinute'];
    }

    /**
     * Sets endTimeMinute
     *
     * @param int $endTimeMinute endTimeMinute
     *
     * @return $this
     */
    public function setEndTimeMinute($endTimeMinute)
    {
        $this->container['endTimeMinute'] = $endTimeMinute;

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


