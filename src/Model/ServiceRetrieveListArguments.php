<?php
/**
 * ServiceRetrieveListArguments
 *
 * PHP version 5
 *
 * @category Class
 * @package  SayWhenOrderlines
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SayWhen Orderlines
 *
 * SayWhen Orderlines API Documentation
 *
 * OpenAPI spec version: 1.0
 * Contact: gerb@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SayWhenOrderlines\Model;

use \ArrayAccess;

/**
 * ServiceRetrieveListArguments Class Doc Comment
 *
 * @category    Class */
/**
 * @package     SayWhenOrderlines
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ServiceRetrieveListArguments implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ServiceRetrieveListArguments';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'options' => '\SayWhenOrderlines\Model\ServiceOptionsModel',
        'filters' => '\SayWhenOrderlines\Model\ServiceFiltersModel',
        'sorting_column' => 'string',
        'sorting_direction' => 'string',
        'limit' => 'int',
        'offset' => 'int',
        'as_list' => 'bool'
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
        'options' => 'options',
        'filters' => 'filters',
        'sorting_column' => 'sorting_column',
        'sorting_direction' => 'sorting_direction',
        'limit' => 'limit',
        'offset' => 'offset',
        'as_list' => 'as_list'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'options' => 'setOptions',
        'filters' => 'setFilters',
        'sorting_column' => 'setSortingColumn',
        'sorting_direction' => 'setSortingDirection',
        'limit' => 'setLimit',
        'offset' => 'setOffset',
        'as_list' => 'setAsList'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'options' => 'getOptions',
        'filters' => 'getFilters',
        'sorting_column' => 'getSortingColumn',
        'sorting_direction' => 'getSortingDirection',
        'limit' => 'getLimit',
        'offset' => 'getOffset',
        'as_list' => 'getAsList'
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

    const SORTING_COLUMN_ID = 'id';
    const SORTING_COLUMN_NAME = 'name';
    const SORTING_COLUMN_DESCRIPTION = 'description';
    const SORTING_COLUMN_SUBJECT = 'subject';
    const SORTING_DIRECTION_ASC = 'ASC';
    const SORTING_DIRECTION_DESC = 'DESC';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSortingColumnAllowableValues()
    {
        return [
            self::SORTING_COLUMN_ID,
            self::SORTING_COLUMN_NAME,
            self::SORTING_COLUMN_DESCRIPTION,
            self::SORTING_COLUMN_SUBJECT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSortingDirectionAllowableValues()
    {
        return [
            self::SORTING_DIRECTION_ASC,
            self::SORTING_DIRECTION_DESC,
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
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['sorting_column'] = isset($data['sorting_column']) ? $data['sorting_column'] : null;
        $this->container['sorting_direction'] = isset($data['sorting_direction']) ? $data['sorting_direction'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['as_list'] = isset($data['as_list']) ? $data['as_list'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        $allowed_values = ["id", "name", "description", "subject"];
        if (!in_array($this->container['sorting_column'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'sorting_column', must be one of 'id', 'name', 'description', 'subject'.";
        }

        $allowed_values = ["ASC", "DESC"];
        if (!in_array($this->container['sorting_direction'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'sorting_direction', must be one of 'ASC', 'DESC'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        $allowed_values = ["id", "name", "description", "subject"];
        if (!in_array($this->container['sorting_column'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["ASC", "DESC"];
        if (!in_array($this->container['sorting_direction'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets options
     * @return \SayWhenOrderlines\Model\ServiceOptionsModel
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     * @param \SayWhenOrderlines\Model\ServiceOptionsModel $options
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets filters
     * @return \SayWhenOrderlines\Model\ServiceFiltersModel
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     * @param \SayWhenOrderlines\Model\ServiceFiltersModel $filters
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets sorting_column
     * @return string
     */
    public function getSortingColumn()
    {
        return $this->container['sorting_column'];
    }

    /**
     * Sets sorting_column
     * @param string $sorting_column Sorting Column
     * @return $this
     */
    public function setSortingColumn($sorting_column)
    {
        $allowed_values = array('id', 'name', 'description', 'subject');
        if (!is_null($sorting_column) && (!in_array($sorting_column, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'sorting_column', must be one of 'id', 'name', 'description', 'subject'");
        }
        $this->container['sorting_column'] = $sorting_column;

        return $this;
    }

    /**
     * Gets sorting_direction
     * @return string
     */
    public function getSortingDirection()
    {
        return $this->container['sorting_direction'];
    }

    /**
     * Sets sorting_direction
     * @param string $sorting_direction Sorting Direction
     * @return $this
     */
    public function setSortingDirection($sorting_direction)
    {
        $allowed_values = array('ASC', 'DESC');
        if (!is_null($sorting_direction) && (!in_array($sorting_direction, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'sorting_direction', must be one of 'ASC', 'DESC'");
        }
        $this->container['sorting_direction'] = $sorting_direction;

        return $this;
    }

    /**
     * Gets limit
     * @return int
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     * @param int $limit
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets offset
     * @return int
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     * @param int $offset
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets as_list
     * @return bool
     */
    public function getAsList()
    {
        return $this->container['as_list'];
    }

    /**
     * Sets as_list
     * @param bool $as_list
     * @return $this
     */
    public function setAsList($as_list)
    {
        $this->container['as_list'] = $as_list;

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
            return json_encode(\SayWhenOrderlines\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\SayWhenOrderlines\ObjectSerializer::sanitizeForSerialization($this));
    }
}
