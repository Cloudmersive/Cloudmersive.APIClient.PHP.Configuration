<?php
/**
 * CreateSettingRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * configapi
 *
 * Config API lets you easily manage configuration at scale.
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * CreateSettingRequest Class Doc Comment
 *
 * @category Class
 * @description Request to create a setting
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateSettingRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateSettingRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bucket_id' => 'string',
        'bucket_secret_key' => 'string',
        'setting_name' => 'string',
        'setting_type' => 'string',
        'setting_value' => 'object',
        'setting_description' => 'string',
        'setting_tags' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bucket_id' => null,
        'bucket_secret_key' => null,
        'setting_name' => null,
        'setting_type' => null,
        'setting_value' => null,
        'setting_description' => null,
        'setting_tags' => null
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
        'bucket_id' => 'BucketID',
        'bucket_secret_key' => 'BucketSecretKey',
        'setting_name' => 'SettingName',
        'setting_type' => 'SettingType',
        'setting_value' => 'SettingValue',
        'setting_description' => 'SettingDescription',
        'setting_tags' => 'SettingTags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bucket_id' => 'setBucketId',
        'bucket_secret_key' => 'setBucketSecretKey',
        'setting_name' => 'setSettingName',
        'setting_type' => 'setSettingType',
        'setting_value' => 'setSettingValue',
        'setting_description' => 'setSettingDescription',
        'setting_tags' => 'setSettingTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bucket_id' => 'getBucketId',
        'bucket_secret_key' => 'getBucketSecretKey',
        'setting_name' => 'getSettingName',
        'setting_type' => 'getSettingType',
        'setting_value' => 'getSettingValue',
        'setting_description' => 'getSettingDescription',
        'setting_tags' => 'getSettingTags'
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
        $this->container['bucket_id'] = isset($data['bucket_id']) ? $data['bucket_id'] : null;
        $this->container['bucket_secret_key'] = isset($data['bucket_secret_key']) ? $data['bucket_secret_key'] : null;
        $this->container['setting_name'] = isset($data['setting_name']) ? $data['setting_name'] : null;
        $this->container['setting_type'] = isset($data['setting_type']) ? $data['setting_type'] : null;
        $this->container['setting_value'] = isset($data['setting_value']) ? $data['setting_value'] : null;
        $this->container['setting_description'] = isset($data['setting_description']) ? $data['setting_description'] : null;
        $this->container['setting_tags'] = isset($data['setting_tags']) ? $data['setting_tags'] : null;
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
     * Gets bucket_id
     *
     * @return string
     */
    public function getBucketId()
    {
        return $this->container['bucket_id'];
    }

    /**
     * Sets bucket_id
     *
     * @param string $bucket_id BucketID of the bucket to place the setting in; you can create a bucket by navigating to account.cloudmersive.com, clicking on Settings &gt; API Configuration &gt; Create Bucket
     *
     * @return $this
     */
    public function setBucketId($bucket_id)
    {
        $this->container['bucket_id'] = $bucket_id;

        return $this;
    }

    /**
     * Gets bucket_secret_key
     *
     * @return string
     */
    public function getBucketSecretKey()
    {
        return $this->container['bucket_secret_key'];
    }

    /**
     * Sets bucket_secret_key
     *
     * @param string $bucket_secret_key SecretKey of the bucket to place the setting in; you can create a bucket by navigating to account.cloudmersive.com, clicking on Settings &gt; API Configuration &gt; Create Bucket
     *
     * @return $this
     */
    public function setBucketSecretKey($bucket_secret_key)
    {
        $this->container['bucket_secret_key'] = $bucket_secret_key;

        return $this;
    }

    /**
     * Gets setting_name
     *
     * @return string
     */
    public function getSettingName()
    {
        return $this->container['setting_name'];
    }

    /**
     * Sets setting_name
     *
     * @param string $setting_name Name of the setting to create
     *
     * @return $this
     */
    public function setSettingName($setting_name)
    {
        $this->container['setting_name'] = $setting_name;

        return $this;
    }

    /**
     * Gets setting_type
     *
     * @return string
     */
    public function getSettingType()
    {
        return $this->container['setting_type'];
    }

    /**
     * Sets setting_type
     *
     * @param string $setting_type Type of setting to create; possible values are STRING, JSON
     *
     * @return $this
     */
    public function setSettingType($setting_type)
    {
        $this->container['setting_type'] = $setting_type;

        return $this;
    }

    /**
     * Gets setting_value
     *
     * @return object
     */
    public function getSettingValue()
    {
        return $this->container['setting_value'];
    }

    /**
     * Sets setting_value
     *
     * @param object $setting_value Initial value of the setting
     *
     * @return $this
     */
    public function setSettingValue($setting_value)
    {
        $this->container['setting_value'] = $setting_value;

        return $this;
    }

    /**
     * Gets setting_description
     *
     * @return string
     */
    public function getSettingDescription()
    {
        return $this->container['setting_description'];
    }

    /**
     * Sets setting_description
     *
     * @param string $setting_description Description of the setting
     *
     * @return $this
     */
    public function setSettingDescription($setting_description)
    {
        $this->container['setting_description'] = $setting_description;

        return $this;
    }

    /**
     * Gets setting_tags
     *
     * @return string
     */
    public function getSettingTags()
    {
        return $this->container['setting_tags'];
    }

    /**
     * Sets setting_tags
     *
     * @param string $setting_tags Tags to apply to the setting
     *
     * @return $this
     */
    public function setSettingTags($setting_tags)
    {
        $this->container['setting_tags'] = $setting_tags;

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


