<?php
/**
 * CSTimesheetFileAttachment
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
 * <div style='font-size: 14px!important;font-family: Open Sans,sans-serif!important;color: #3b4151!important;'><p>      ChronoSheets is a flexible timesheet solution for small to medium businesses, it is free for small teams of up to 5 and there are iOS and Android apps available.  Use the ChronoSheets API to create your own custom integrations.  Before starting, sign up for a ChronoSheets account at <a target='_BLANK' href='http://tsheets.xyz/signup'>http://tsheets.xyz/signup</a>.  </p></div><div id='cs-extra-info'></div>
 *
 * OpenAPI spec version: v1
 * 
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
 * CSTimesheetFileAttachment Class Doc Comment
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CSTimesheetFileAttachment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TimesheetFileAttachment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'timesheetId' => 'int',
        'documentS3SignedUrl' => 'string',
        'imageLargeS3SignedUrl' => 'string',
        'imageMediumS3SignedUrl' => 'string',
        'imageSmallS3SignedUrl' => 'string',
        'timesheetStart' => '\DateTime',
        'timesheetEnd' => '\DateTime',
        'fileAttachmentId' => 'int',
        'userId' => 'int',
        'orgId' => 'int',
        'mobilePlatform' => 'string',
        'attachmentType' => 'string',
        'notes' => 'string',
        'nonImageFilePath' => 'string',
        'imageLargeFilePath' => 'string',
        'imageMediumFilePath' => 'string',
        'imageSmallFilePath' => 'string',
        'originalFileName' => 'string',
        'latitude' => 'double',
        'longitude' => 'double',
        'dateUploaded' => '\DateTime',
        'dateImageCaptured' => '\DateTime',
        'storageAllocationBytes' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'timesheetId' => 'int32',
        'documentS3SignedUrl' => null,
        'imageLargeS3SignedUrl' => null,
        'imageMediumS3SignedUrl' => null,
        'imageSmallS3SignedUrl' => null,
        'timesheetStart' => 'date-time',
        'timesheetEnd' => 'date-time',
        'fileAttachmentId' => 'int32',
        'userId' => 'int32',
        'orgId' => 'int32',
        'mobilePlatform' => null,
        'attachmentType' => null,
        'notes' => null,
        'nonImageFilePath' => null,
        'imageLargeFilePath' => null,
        'imageMediumFilePath' => null,
        'imageSmallFilePath' => null,
        'originalFileName' => null,
        'latitude' => 'double',
        'longitude' => 'double',
        'dateUploaded' => 'date-time',
        'dateImageCaptured' => 'date-time',
        'storageAllocationBytes' => 'int64'
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
        'documentS3SignedUrl' => 'DocumentS3SignedUrl',
        'imageLargeS3SignedUrl' => 'ImageLargeS3SignedUrl',
        'imageMediumS3SignedUrl' => 'ImageMediumS3SignedUrl',
        'imageSmallS3SignedUrl' => 'ImageSmallS3SignedUrl',
        'timesheetStart' => 'TimesheetStart',
        'timesheetEnd' => 'TimesheetEnd',
        'fileAttachmentId' => 'FileAttachmentId',
        'userId' => 'UserId',
        'orgId' => 'OrgId',
        'mobilePlatform' => 'MobilePlatform',
        'attachmentType' => 'AttachmentType',
        'notes' => 'Notes',
        'nonImageFilePath' => 'NonImageFilePath',
        'imageLargeFilePath' => 'ImageLargeFilePath',
        'imageMediumFilePath' => 'ImageMediumFilePath',
        'imageSmallFilePath' => 'ImageSmallFilePath',
        'originalFileName' => 'OriginalFileName',
        'latitude' => 'Latitude',
        'longitude' => 'Longitude',
        'dateUploaded' => 'DateUploaded',
        'dateImageCaptured' => 'DateImageCaptured',
        'storageAllocationBytes' => 'StorageAllocationBytes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timesheetId' => 'setTimesheetId',
        'documentS3SignedUrl' => 'setDocumentS3SignedUrl',
        'imageLargeS3SignedUrl' => 'setImageLargeS3SignedUrl',
        'imageMediumS3SignedUrl' => 'setImageMediumS3SignedUrl',
        'imageSmallS3SignedUrl' => 'setImageSmallS3SignedUrl',
        'timesheetStart' => 'setTimesheetStart',
        'timesheetEnd' => 'setTimesheetEnd',
        'fileAttachmentId' => 'setFileAttachmentId',
        'userId' => 'setUserId',
        'orgId' => 'setOrgId',
        'mobilePlatform' => 'setMobilePlatform',
        'attachmentType' => 'setAttachmentType',
        'notes' => 'setNotes',
        'nonImageFilePath' => 'setNonImageFilePath',
        'imageLargeFilePath' => 'setImageLargeFilePath',
        'imageMediumFilePath' => 'setImageMediumFilePath',
        'imageSmallFilePath' => 'setImageSmallFilePath',
        'originalFileName' => 'setOriginalFileName',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'dateUploaded' => 'setDateUploaded',
        'dateImageCaptured' => 'setDateImageCaptured',
        'storageAllocationBytes' => 'setStorageAllocationBytes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timesheetId' => 'getTimesheetId',
        'documentS3SignedUrl' => 'getDocumentS3SignedUrl',
        'imageLargeS3SignedUrl' => 'getImageLargeS3SignedUrl',
        'imageMediumS3SignedUrl' => 'getImageMediumS3SignedUrl',
        'imageSmallS3SignedUrl' => 'getImageSmallS3SignedUrl',
        'timesheetStart' => 'getTimesheetStart',
        'timesheetEnd' => 'getTimesheetEnd',
        'fileAttachmentId' => 'getFileAttachmentId',
        'userId' => 'getUserId',
        'orgId' => 'getOrgId',
        'mobilePlatform' => 'getMobilePlatform',
        'attachmentType' => 'getAttachmentType',
        'notes' => 'getNotes',
        'nonImageFilePath' => 'getNonImageFilePath',
        'imageLargeFilePath' => 'getImageLargeFilePath',
        'imageMediumFilePath' => 'getImageMediumFilePath',
        'imageSmallFilePath' => 'getImageSmallFilePath',
        'originalFileName' => 'getOriginalFileName',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'dateUploaded' => 'getDateUploaded',
        'dateImageCaptured' => 'getDateImageCaptured',
        'storageAllocationBytes' => 'getStorageAllocationBytes'
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

    const CS_MOBILE_PLATFORM_UNKNOWN = 'Unknown';
    const CS_MOBILE_PLATFORM_I_OS = 'iOS';
    const CS_MOBILE_PLATFORM_ANDROID = 'Android';
    const CS_ATTACHMENT_TYPE_IMAGE = 'Image';
    const CS_ATTACHMENT_TYPE_WORD_DOC = 'WordDoc';
    const CS_ATTACHMENT_TYPE_PDF = 'Pdf';
    const CS_ATTACHMENT_TYPE_MS_SPREAD_SHEET = 'MSSpreadSheet';
    const CS_ATTACHMENT_TYPE_MS_POWER_POINT = 'MSPowerPoint';
    const CS_ATTACHMENT_TYPE_RICH_TEXT_FORMAT = 'RichTextFormat';
    const CS_ATTACHMENT_TYPE_ZIP_FILE = 'ZipFile';
    const CS_ATTACHMENT_TYPE_OTHER = 'Other';
    const CS_ATTACHMENT_TYPE_AUDIO = 'Audio';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMobilePlatformAllowableValues()
    {
        return [
            self::CS_MOBILE_PLATFORM_UNKNOWN,
            self::CS_MOBILE_PLATFORM_I_OS,
            self::CS_MOBILE_PLATFORM_ANDROID,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAttachmentTypeAllowableValues()
    {
        return [
            self::CS_ATTACHMENT_TYPE_IMAGE,
            self::CS_ATTACHMENT_TYPE_WORD_DOC,
            self::CS_ATTACHMENT_TYPE_PDF,
            self::CS_ATTACHMENT_TYPE_MS_SPREAD_SHEET,
            self::CS_ATTACHMENT_TYPE_MS_POWER_POINT,
            self::CS_ATTACHMENT_TYPE_RICH_TEXT_FORMAT,
            self::CS_ATTACHMENT_TYPE_ZIP_FILE,
            self::CS_ATTACHMENT_TYPE_OTHER,
            self::CS_ATTACHMENT_TYPE_AUDIO,
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
        $this->container['timesheetId'] = isset($data['timesheetId']) ? $data['timesheetId'] : null;
        $this->container['documentS3SignedUrl'] = isset($data['documentS3SignedUrl']) ? $data['documentS3SignedUrl'] : null;
        $this->container['imageLargeS3SignedUrl'] = isset($data['imageLargeS3SignedUrl']) ? $data['imageLargeS3SignedUrl'] : null;
        $this->container['imageMediumS3SignedUrl'] = isset($data['imageMediumS3SignedUrl']) ? $data['imageMediumS3SignedUrl'] : null;
        $this->container['imageSmallS3SignedUrl'] = isset($data['imageSmallS3SignedUrl']) ? $data['imageSmallS3SignedUrl'] : null;
        $this->container['timesheetStart'] = isset($data['timesheetStart']) ? $data['timesheetStart'] : null;
        $this->container['timesheetEnd'] = isset($data['timesheetEnd']) ? $data['timesheetEnd'] : null;
        $this->container['fileAttachmentId'] = isset($data['fileAttachmentId']) ? $data['fileAttachmentId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['orgId'] = isset($data['orgId']) ? $data['orgId'] : null;
        $this->container['mobilePlatform'] = isset($data['mobilePlatform']) ? $data['mobilePlatform'] : null;
        $this->container['attachmentType'] = isset($data['attachmentType']) ? $data['attachmentType'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['nonImageFilePath'] = isset($data['nonImageFilePath']) ? $data['nonImageFilePath'] : null;
        $this->container['imageLargeFilePath'] = isset($data['imageLargeFilePath']) ? $data['imageLargeFilePath'] : null;
        $this->container['imageMediumFilePath'] = isset($data['imageMediumFilePath']) ? $data['imageMediumFilePath'] : null;
        $this->container['imageSmallFilePath'] = isset($data['imageSmallFilePath']) ? $data['imageSmallFilePath'] : null;
        $this->container['originalFileName'] = isset($data['originalFileName']) ? $data['originalFileName'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['dateUploaded'] = isset($data['dateUploaded']) ? $data['dateUploaded'] : null;
        $this->container['dateImageCaptured'] = isset($data['dateImageCaptured']) ? $data['dateImageCaptured'] : null;
        $this->container['storageAllocationBytes'] = isset($data['storageAllocationBytes']) ? $data['storageAllocationBytes'] : null;
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
        if (!in_array($this->container['mobilePlatform'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mobilePlatform', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAttachmentTypeAllowableValues();
        if (!in_array($this->container['attachmentType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'attachmentType', must be one of '%s'",
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

        $allowedValues = $this->getMobilePlatformAllowableValues();
        if (!in_array($this->container['mobilePlatform'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getAttachmentTypeAllowableValues();
        if (!in_array($this->container['attachmentType'], $allowedValues)) {
            return false;
        }
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
     * Gets documentS3SignedUrl
     *
     * @return string
     */
    public function getDocumentS3SignedUrl()
    {
        return $this->container['documentS3SignedUrl'];
    }

    /**
     * Sets documentS3SignedUrl
     *
     * @param string $documentS3SignedUrl documentS3SignedUrl
     *
     * @return $this
     */
    public function setDocumentS3SignedUrl($documentS3SignedUrl)
    {
        $this->container['documentS3SignedUrl'] = $documentS3SignedUrl;

        return $this;
    }

    /**
     * Gets imageLargeS3SignedUrl
     *
     * @return string
     */
    public function getImageLargeS3SignedUrl()
    {
        return $this->container['imageLargeS3SignedUrl'];
    }

    /**
     * Sets imageLargeS3SignedUrl
     *
     * @param string $imageLargeS3SignedUrl imageLargeS3SignedUrl
     *
     * @return $this
     */
    public function setImageLargeS3SignedUrl($imageLargeS3SignedUrl)
    {
        $this->container['imageLargeS3SignedUrl'] = $imageLargeS3SignedUrl;

        return $this;
    }

    /**
     * Gets imageMediumS3SignedUrl
     *
     * @return string
     */
    public function getImageMediumS3SignedUrl()
    {
        return $this->container['imageMediumS3SignedUrl'];
    }

    /**
     * Sets imageMediumS3SignedUrl
     *
     * @param string $imageMediumS3SignedUrl imageMediumS3SignedUrl
     *
     * @return $this
     */
    public function setImageMediumS3SignedUrl($imageMediumS3SignedUrl)
    {
        $this->container['imageMediumS3SignedUrl'] = $imageMediumS3SignedUrl;

        return $this;
    }

    /**
     * Gets imageSmallS3SignedUrl
     *
     * @return string
     */
    public function getImageSmallS3SignedUrl()
    {
        return $this->container['imageSmallS3SignedUrl'];
    }

    /**
     * Sets imageSmallS3SignedUrl
     *
     * @param string $imageSmallS3SignedUrl imageSmallS3SignedUrl
     *
     * @return $this
     */
    public function setImageSmallS3SignedUrl($imageSmallS3SignedUrl)
    {
        $this->container['imageSmallS3SignedUrl'] = $imageSmallS3SignedUrl;

        return $this;
    }

    /**
     * Gets timesheetStart
     *
     * @return \DateTime
     */
    public function getTimesheetStart()
    {
        return $this->container['timesheetStart'];
    }

    /**
     * Sets timesheetStart
     *
     * @param \DateTime $timesheetStart timesheetStart
     *
     * @return $this
     */
    public function setTimesheetStart($timesheetStart)
    {
        $this->container['timesheetStart'] = $timesheetStart;

        return $this;
    }

    /**
     * Gets timesheetEnd
     *
     * @return \DateTime
     */
    public function getTimesheetEnd()
    {
        return $this->container['timesheetEnd'];
    }

    /**
     * Sets timesheetEnd
     *
     * @param \DateTime $timesheetEnd timesheetEnd
     *
     * @return $this
     */
    public function setTimesheetEnd($timesheetEnd)
    {
        $this->container['timesheetEnd'] = $timesheetEnd;

        return $this;
    }

    /**
     * Gets fileAttachmentId
     *
     * @return int
     */
    public function getFileAttachmentId()
    {
        return $this->container['fileAttachmentId'];
    }

    /**
     * Sets fileAttachmentId
     *
     * @param int $fileAttachmentId fileAttachmentId
     *
     * @return $this
     */
    public function setFileAttachmentId($fileAttachmentId)
    {
        $this->container['fileAttachmentId'] = $fileAttachmentId;

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
     * Gets mobilePlatform
     *
     * @return string
     */
    public function getMobilePlatform()
    {
        return $this->container['mobilePlatform'];
    }

    /**
     * Sets mobilePlatform
     *
     * @param string $mobilePlatform mobilePlatform
     *
     * @return $this
     */
    public function setMobilePlatform($mobilePlatform)
    {
        $allowedValues = $this->getMobilePlatformAllowableValues();
        if (!is_null($mobilePlatform) && !in_array($mobilePlatform, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mobilePlatform', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mobilePlatform'] = $mobilePlatform;

        return $this;
    }

    /**
     * Gets attachmentType
     *
     * @return string
     */
    public function getAttachmentType()
    {
        return $this->container['attachmentType'];
    }

    /**
     * Sets attachmentType
     *
     * @param string $attachmentType attachmentType
     *
     * @return $this
     */
    public function setAttachmentType($attachmentType)
    {
        $allowedValues = $this->getAttachmentTypeAllowableValues();
        if (!is_null($attachmentType) && !in_array($attachmentType, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'attachmentType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['attachmentType'] = $attachmentType;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets nonImageFilePath
     *
     * @return string
     */
    public function getNonImageFilePath()
    {
        return $this->container['nonImageFilePath'];
    }

    /**
     * Sets nonImageFilePath
     *
     * @param string $nonImageFilePath nonImageFilePath
     *
     * @return $this
     */
    public function setNonImageFilePath($nonImageFilePath)
    {
        $this->container['nonImageFilePath'] = $nonImageFilePath;

        return $this;
    }

    /**
     * Gets imageLargeFilePath
     *
     * @return string
     */
    public function getImageLargeFilePath()
    {
        return $this->container['imageLargeFilePath'];
    }

    /**
     * Sets imageLargeFilePath
     *
     * @param string $imageLargeFilePath imageLargeFilePath
     *
     * @return $this
     */
    public function setImageLargeFilePath($imageLargeFilePath)
    {
        $this->container['imageLargeFilePath'] = $imageLargeFilePath;

        return $this;
    }

    /**
     * Gets imageMediumFilePath
     *
     * @return string
     */
    public function getImageMediumFilePath()
    {
        return $this->container['imageMediumFilePath'];
    }

    /**
     * Sets imageMediumFilePath
     *
     * @param string $imageMediumFilePath imageMediumFilePath
     *
     * @return $this
     */
    public function setImageMediumFilePath($imageMediumFilePath)
    {
        $this->container['imageMediumFilePath'] = $imageMediumFilePath;

        return $this;
    }

    /**
     * Gets imageSmallFilePath
     *
     * @return string
     */
    public function getImageSmallFilePath()
    {
        return $this->container['imageSmallFilePath'];
    }

    /**
     * Sets imageSmallFilePath
     *
     * @param string $imageSmallFilePath imageSmallFilePath
     *
     * @return $this
     */
    public function setImageSmallFilePath($imageSmallFilePath)
    {
        $this->container['imageSmallFilePath'] = $imageSmallFilePath;

        return $this;
    }

    /**
     * Gets originalFileName
     *
     * @return string
     */
    public function getOriginalFileName()
    {
        return $this->container['originalFileName'];
    }

    /**
     * Sets originalFileName
     *
     * @param string $originalFileName originalFileName
     *
     * @return $this
     */
    public function setOriginalFileName($originalFileName)
    {
        $this->container['originalFileName'] = $originalFileName;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return double
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param double $latitude latitude
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
     * @return double
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param double $longitude longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets dateUploaded
     *
     * @return \DateTime
     */
    public function getDateUploaded()
    {
        return $this->container['dateUploaded'];
    }

    /**
     * Sets dateUploaded
     *
     * @param \DateTime $dateUploaded dateUploaded
     *
     * @return $this
     */
    public function setDateUploaded($dateUploaded)
    {
        $this->container['dateUploaded'] = $dateUploaded;

        return $this;
    }

    /**
     * Gets dateImageCaptured
     *
     * @return \DateTime
     */
    public function getDateImageCaptured()
    {
        return $this->container['dateImageCaptured'];
    }

    /**
     * Sets dateImageCaptured
     *
     * @param \DateTime $dateImageCaptured dateImageCaptured
     *
     * @return $this
     */
    public function setDateImageCaptured($dateImageCaptured)
    {
        $this->container['dateImageCaptured'] = $dateImageCaptured;

        return $this;
    }

    /**
     * Gets storageAllocationBytes
     *
     * @return int
     */
    public function getStorageAllocationBytes()
    {
        return $this->container['storageAllocationBytes'];
    }

    /**
     * Sets storageAllocationBytes
     *
     * @param int $storageAllocationBytes storageAllocationBytes
     *
     * @return $this
     */
    public function setStorageAllocationBytes($storageAllocationBytes)
    {
        $this->container['storageAllocationBytes'] = $storageAllocationBytes;

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


