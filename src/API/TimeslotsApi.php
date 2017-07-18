<?php
/**
 * TimeslotsApi
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

namespace SayWhenOrderlines\API;

use \SayWhenOrderlines\ApiClient;
use \SayWhenOrderlines\ApiException;
use \SayWhenOrderlines\Configuration;
use \SayWhenOrderlines\ObjectSerializer;

/**
 * TimeslotsApi Class Doc Comment
 *
 * @category Class
 * @package  SayWhenOrderlines
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TimeslotsApi
{
    /**
     * API Client
     *
     * @var \SayWhenOrderlines\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \SayWhenOrderlines\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\SayWhenOrderlines\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://orderlines.saywhen.nl/api/v1');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \SayWhenOrderlines\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \SayWhenOrderlines\ApiClient $apiClient set the API client
     *
     * @return TimeslotsApi
     */
    public function setApiClient(\SayWhenOrderlines\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation timeslotsRetreivePossibleOrderlines
     *
     * Retrieve all orderlines for given timeslots
     *
     * @param string $back_office_partner_id BackOffice Partner ID (required)
     * @param string $front_office_partner_id FrontOffice Partner ID (required)
     * @param \SayWhenOrderlines\Model\TimeSlotsOrderlinesPostModel $body TimeSlots and FieldAndValues (required)
     * @throws \SayWhenOrderlines\ApiException on non-2xx response
     * @return \SayWhenOrderlines\Model\TimeslotModel[]
     */
    public function timeslotsRetreivePossibleOrderlines($back_office_partner_id, $front_office_partner_id, $body)
    {
        list($response) = $this->timeslotsRetreivePossibleOrderlinesWithHttpInfo($back_office_partner_id, $front_office_partner_id, $body);
        return $response;
    }

    /**
     * Operation timeslotsRetreivePossibleOrderlinesWithHttpInfo
     *
     * Retrieve all orderlines for given timeslots
     *
     * @param string $back_office_partner_id BackOffice Partner ID (required)
     * @param string $front_office_partner_id FrontOffice Partner ID (required)
     * @param \SayWhenOrderlines\Model\TimeSlotsOrderlinesPostModel $body TimeSlots and FieldAndValues (required)
     * @throws \SayWhenOrderlines\ApiException on non-2xx response
     * @return array of \SayWhenOrderlines\Model\TimeslotModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function timeslotsRetreivePossibleOrderlinesWithHttpInfo($back_office_partner_id, $front_office_partner_id, $body)
    {
        // verify the required parameter 'back_office_partner_id' is set
        if ($back_office_partner_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $back_office_partner_id when calling timeslotsRetreivePossibleOrderlines');
        }
        // verify the required parameter 'front_office_partner_id' is set
        if ($front_office_partner_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $front_office_partner_id when calling timeslotsRetreivePossibleOrderlines');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling timeslotsRetreivePossibleOrderlines');
        }
        // parse inputs
        $resourcePath = "/timeslots/retrieve-possible-orderlines";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // query params
        if ($back_office_partner_id !== null) {
            $queryParams['backOfficePartnerId'] = $this->apiClient->getSerializer()->toQueryValue($back_office_partner_id);
        }
        // query params
        if ($front_office_partner_id !== null) {
            $queryParams['frontOfficePartnerId'] = $this->apiClient->getSerializer()->toQueryValue($front_office_partner_id);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SayWhenOrderlines\Model\TimeslotModel[]',
                '/timeslots/retrieve-possible-orderlines'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SayWhenOrderlines\Model\TimeslotModel[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SayWhenOrderlines\Model\TimeslotModel[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
