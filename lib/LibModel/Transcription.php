<?php
/**
 * Transcription
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
 * Transcription Class Doc Comment
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Transcription implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Transcription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'orgId' => 'int',
        'fileAttachmentId' => 'int',
        'created' => '\DateTime',
        'status' => 'string',
        'mediaType' => 'string',
        'contents' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'orgId' => 'int32',
        'fileAttachmentId' => 'int32',
        'created' => 'date-time',
        'status' => null,
        'mediaType' => null,
        'contents' => null
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
        'id' => 'Id',
        'orgId' => 'OrgId',
        'fileAttachmentId' => 'FileAttachmentId',
        'created' => 'Created',
        'status' => 'Status',
        'mediaType' => 'MediaType',
        'contents' => 'Contents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'orgId' => 'setOrgId',
        'fileAttachmentId' => 'setFileAttachmentId',
        'created' => 'setCreated',
        'status' => 'setStatus',
        'mediaType' => 'setMediaType',
        'contents' => 'setContents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'orgId' => 'getOrgId',
        'fileAttachmentId' => 'getFileAttachmentId',
        'created' => 'getCreated',
        'status' => 'getStatus',
        'mediaType' => 'getMediaType',
        'contents' => 'getContents'
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

    const STATUS_SAVED = 'Saved';
    const STATUS_PROCESSING = 'Processing';
    const STATUS_COMPLETED = 'Completed';
    const STATUS_FAILED_WITH_ERROR = 'FailedWithError';
    const MEDIA_TYPE_OTHER = 'Other';
    const MEDIA_TYPE_MP3 = 'Mp3';
    const MEDIA_TYPE_MP4 = 'Mp4';
    const MEDIA_TYPE_WAV = 'Wav';
    const MEDIA_TYPE_FLAC = 'Flac';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SAVED,
            self::STATUS_PROCESSING,
            self::STATUS_COMPLETED,
            self::STATUS_FAILED_WITH_ERROR,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMediaTypeAllowableValues()
    {
        return [
            self::MEDIA_TYPE_OTHER,
            self::MEDIA_TYPE_MP3,
            self::MEDIA_TYPE_MP4,
            self::MEDIA_TYPE_WAV,
            self::MEDIA_TYPE_FLAC,
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['orgId'] = $data['orgId'] ?? null;
        $this->container['fileAttachmentId'] = $data['fileAttachmentId'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['mediaType'] = $data['mediaType'] ?? null;
        $this->container['contents'] = $data['contents'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMediaTypeAllowableValues();
        if (!is_null($this->container['mediaType']) && !in_array($this->container['mediaType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mediaType', must be one of '%s'",
                $this->container['mediaType'],
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @return self
     */
    public function setOrgId($orgId)
    {
        $this->container['orgId'] = $orgId;

        return $this;
    }

    /**
     * Gets fileAttachmentId
     *
     * @return int|null
     */
    public function getFileAttachmentId()
    {
        return $this->container['fileAttachmentId'];
    }

    /**
     * Sets fileAttachmentId
     *
     * @param int|null $fileAttachmentId fileAttachmentId
     *
     * @return self
     */
    public function setFileAttachmentId($fileAttachmentId)
    {
        $this->container['fileAttachmentId'] = $fileAttachmentId;

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
     * @return self
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets mediaType
     *
     * @return string|null
     */
    public function getMediaType()
    {
        return $this->container['mediaType'];
    }

    /**
     * Sets mediaType
     *
     * @param string|null $mediaType mediaType
     *
     * @return self
     */
    public function setMediaType($mediaType)
    {
        $allowedValues = $this->getMediaTypeAllowableValues();
        if (!is_null($mediaType) && !in_array($mediaType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mediaType', must be one of '%s'",
                    $mediaType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mediaType'] = $mediaType;

        return $this;
    }

    /**
     * Gets contents
     *
     * @return string|null
     */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
     * Sets contents
     *
     * @param string|null $contents contents
     *
     * @return self
     */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;

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


