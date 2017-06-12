<?php
/**
 * Algorithm
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GraphHopper Directions API
 *
 * You use the GraphHopper Directions API to add route planning, navigation and route optimization to your software. E.g. the Routing API has turn instructions and elevation data and the Route Optimization API solves your logistic problems and supports various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Algorithm Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Algorithm implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Algorithm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'problem_type' => 'string',
        'objective' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'problem_type' => 'problem_type',
        'objective' => 'objective'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'problem_type' => 'setProblemType',
        'objective' => 'setObjective'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'problem_type' => 'getProblemType',
        'objective' => 'getObjective'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const PROBLEM_TYPE_MIN = 'min';
    const PROBLEM_TYPE_MIN_MAX = 'min-max';
    const OBJECTIVE_TRANSPORT_TIME = 'transport_time';
    const OBJECTIVE_COMPLETION_TIME = 'completion_time';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getProblemTypeAllowableValues()
    {
        return [
            self::PROBLEM_TYPE_MIN,
            self::PROBLEM_TYPE_MIN_MAX,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getObjectiveAllowableValues()
    {
        return [
            self::OBJECTIVE_TRANSPORT_TIME,
            self::OBJECTIVE_COMPLETION_TIME,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['problem_type'] = isset($data['problem_type']) ? $data['problem_type'] : null;
        $this->container['objective'] = isset($data['objective']) ? $data['objective'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["min", "min-max"];
        if (!in_array($this->container['problem_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'problem_type', must be one of 'min', 'min-max'.";
        }

        $allowed_values = ["transport_time", "completion_time"];
        if (!in_array($this->container['objective'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'objective', must be one of 'transport_time', 'completion_time'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = ["min", "min-max"];
        if (!in_array($this->container['problem_type'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["transport_time", "completion_time"];
        if (!in_array($this->container['objective'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets problem_type
     * @return string
     */
    public function getProblemType()
    {
        return $this->container['problem_type'];
    }

    /**
     * Sets problem_type
     * @param string $problem_type
     * @return $this
     */
    public function setProblemType($problem_type)
    {
        $allowed_values = array('min', 'min-max');
        if (!is_null($problem_type) && (!in_array($problem_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'problem_type', must be one of 'min', 'min-max'");
        }
        $this->container['problem_type'] = $problem_type;

        return $this;
    }

    /**
     * Gets objective
     * @return string
     */
    public function getObjective()
    {
        return $this->container['objective'];
    }

    /**
     * Sets objective
     * @param string $objective
     * @return $this
     */
    public function setObjective($objective)
    {
        $allowed_values = array('transport_time', 'completion_time');
        if (!is_null($objective) && (!in_array($objective, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'objective', must be one of 'transport_time', 'completion_time'");
        }
        $this->container['objective'] = $objective;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

