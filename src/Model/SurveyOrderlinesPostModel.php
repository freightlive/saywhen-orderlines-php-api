<?php
/**
 * SurveyOrderlinesPostModel
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
 * SurveyOrderlinesPostModel Class Doc Comment
 *
 * @category    Class */
/**
 * @package     SayWhenOrderlines
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SurveyOrderlinesPostModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SurveyOrderlinesPostModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'questions_and_answers' => 'string',
        'fields_and_values' => 'string'
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
        'questions_and_answers' => 'questionsAndAnswers',
        'fields_and_values' => 'fieldsAndValues'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'questions_and_answers' => 'setQuestionsAndAnswers',
        'fields_and_values' => 'setFieldsAndValues'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'questions_and_answers' => 'getQuestionsAndAnswers',
        'fields_and_values' => 'getFieldsAndValues'
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
        $this->container['questions_and_answers'] = isset($data['questions_and_answers']) ? $data['questions_and_answers'] : null;
        $this->container['fields_and_values'] = isset($data['fields_and_values']) ? $data['fields_and_values'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
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
        return true;
    }


    /**
     * Gets questions_and_answers
     * @return string
     */
    public function getQuestionsAndAnswers()
    {
        return $this->container['questions_and_answers'];
    }

    /**
     * Sets questions_and_answers
     * @param string $questions_and_answers Question and Answers in JSON format
     * @return $this
     */
    public function setQuestionsAndAnswers($questions_and_answers)
    {
        $this->container['questions_and_answers'] = $questions_and_answers;

        return $this;
    }

    /**
     * Gets fields_and_values
     * @return string
     */
    public function getFieldsAndValues()
    {
        return $this->container['fields_and_values'];
    }

    /**
     * Sets fields_and_values
     * @param string $fields_and_values Fields and Values in JSON format
     * @return $this
     */
    public function setFieldsAndValues($fields_and_values)
    {
        $this->container['fields_and_values'] = $fields_and_values;

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
