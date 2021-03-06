<?php
/**
 * ServiceApi
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
 * ServiceApi Class Doc Comment
 *
 * @category Class
 * @package  SayWhenOrderlines
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceApi
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
     * @return ServiceApi
     */
    public function setApiClient(\SayWhenOrderlines\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createService
     *
     * Create a Service Object
     *
     * @param \SayWhenOrderlines\Model\ServiceModel $body Service object (required)
     * @throws \SayWhenOrderlines\ApiException on non-2xx response
     * @return \SayWhenOrderlines\Model\ApiResponse
     */
    public function createService($body)
    {
        list($response) = $this->createServiceWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createServiceWithHttpInfo
     *
     * Create a Service Object
     *
     * @param \SayWhenOrderlines\Model\ServiceModel $body Service object (required)
     * @throws \SayWhenOrderlines\ApiException on non-2xx response
     * @return array of \SayWhenOrderlines\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createServiceWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createService');
        }
        // parse inputs
        $resourcePath = "/service";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

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
                '\SayWhenOrderlines\Model\ApiResponse',
                '/service'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SayWhenOrderlines\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SayWhenOrderlines\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteService
     *
     * Delete a Service Object
     *
     * @param int $service_id ID of the service to delete (required)
     * @throws \SayWhenOrderlines\ApiException on non-2xx response
     * @return \SayWhenOrderlines\Model\ApiResponse
     */
    public function deleteService($service_id)
    {
        list($response) = $this->deleteServiceWithHttpInfo($service_id);
        return $response;
    }

    /**
     * Operation deleteServiceWithHttpInfo
     *
     * Delete a Service Object
     *
     * @param int $service_id ID of the service to delete (required)
     * @throws \SayWhenOrderlines\ApiException on non-2xx response
     * @return array of \SayWhenOrderlines\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteServiceWithHttpInfo($service_id)
    {
        // verify the required parameter 'service_id' is set
        if ($service_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $service_id when calling deleteService');
        }
        // parse inputs
        $resourcePath = "/service/{serviceId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                "{" . "serviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($service_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SayWhenOrderlines\Model\ApiResponse',
                '/service/{serviceId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SayWhenOrderlines\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SayWhenOrderlines\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listForPortalService
     *
     * List Extra Services for Portal by Filter Object
     *
     * @param string $back_office_partner_id BackOffice Partner ID (required)
     * @param string $front_office_partner_id FrontOffice Partner ID (required)
     * @param string $filters_object FilterObject in JSON format (required)
     * @throws \SayWhenOrderlines\ApiException on non-2xx response
     * @return \SayWhenOrderlines\Model\OrderlineModel[]
     */
    public function listForPortalService($back_office_partner_id, $front_office_partner_id, $filters_object)
    {
        list($response) = $this->listForPortalServiceWithHttpInfo($back_office_partner_id, $front_office_partner_id, $filters_object);
        return $response;
    }

    /**
     * Operation listForPortalServiceWithHttpInfo
     *
     * List Extra Services for Portal by Filter Object
     *
     * @param string $back_office_partner_id BackOffice Partner ID (required)
     * @param string $front_office_partner_id FrontOffice Partner ID (required)
     * @param string $filters_object FilterObject in JSON format (required)
     * @throws \SayWhenOrderlines\ApiException on non-2xx response
     * @return array of \SayWhenOrderlines\Model\OrderlineModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function listForPortalServiceWithHttpInfo($back_office_partner_id, $front_office_partner_id, $filters_object)
    {
        // verify the required parameter 'back_office_partner_id' is set
        if ($back_office_partner_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $back_office_partner_id when calling listForPortalService');
        }
        // verify the required parameter 'front_office_partner_id' is set
        if ($front_office_partner_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $front_office_partner_id when calling listForPortalService');
        }
        // verify the required parameter 'filters_object' is set
        if ($filters_object === null) {
            throw new \InvalidArgumentException('Missing the required parameter $filters_object when calling listForPortalService');
        }
        // parse inputs
        $resourcePath = "/service/list-for-portal";
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
        // query params
        if ($filters_object !== null) {
            $queryParams['filtersObject'] = $this->apiClient->getSerializer()->toQueryValue($filters_object);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SayWhenOrderlines\Model\OrderlineModel[]',
                '/service/list-for-portal'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SayWhenOrderlines\Model\OrderlineModel[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SayWhenOrderlines\Model\OrderlineModel[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveListService
     *
     * Retrieve List of Services
     *
     * @param \SayWhenOrderlines\Model\ServiceRetrieveListArguments $arguments Service RetrieveList Arguments (required)
     * @throws \SayWhenOrderlines\ApiException on non-2xx response
     * @return \SayWhenOrderlines\Model\ServiceListResponse
     */
    public function retrieveListService($arguments)
    {
        list($response) = $this->retrieveListServiceWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListServiceWithHttpInfo
     *
     * Retrieve List of Services
     *
     * @param \SayWhenOrderlines\Model\ServiceRetrieveListArguments $arguments Service RetrieveList Arguments (required)
     * @throws \SayWhenOrderlines\ApiException on non-2xx response
     * @return array of \SayWhenOrderlines\Model\ServiceListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListServiceWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListService');
        }
        // parse inputs
        $resourcePath = "/service";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($arguments)) {
            $_tempBody = $arguments;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SayWhenOrderlines\Model\ServiceListResponse',
                '/service'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SayWhenOrderlines\Model\ServiceListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SayWhenOrderlines\Model\ServiceListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveService
     *
     * Retrieve a Service Object
     *
     * @param int $service_id ID of Service to return (required)
     * @throws \SayWhenOrderlines\ApiException on non-2xx response
     * @return \SayWhenOrderlines\Model\ServiceModel
     */
    public function retrieveService($service_id)
    {
        list($response) = $this->retrieveServiceWithHttpInfo($service_id);
        return $response;
    }

    /**
     * Operation retrieveServiceWithHttpInfo
     *
     * Retrieve a Service Object
     *
     * @param int $service_id ID of Service to return (required)
     * @throws \SayWhenOrderlines\ApiException on non-2xx response
     * @return array of \SayWhenOrderlines\Model\ServiceModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveServiceWithHttpInfo($service_id)
    {
        // verify the required parameter 'service_id' is set
        if ($service_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $service_id when calling retrieveService');
        }
        // parse inputs
        $resourcePath = "/service/{serviceId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                "{" . "serviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($service_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SayWhenOrderlines\Model\ServiceModel',
                '/service/{serviceId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SayWhenOrderlines\Model\ServiceModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SayWhenOrderlines\Model\ServiceModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateService
     *
     * Update a Service
     *
     * @param int $service_id ID of Service to update (required)
     * @param \SayWhenOrderlines\Model\ServiceModel $body Service object that needs to be updated (optional)
     * @throws \SayWhenOrderlines\ApiException on non-2xx response
     * @return \SayWhenOrderlines\Model\ApiResponse
     */
    public function updateService($service_id, $body = null)
    {
        list($response) = $this->updateServiceWithHttpInfo($service_id, $body);
        return $response;
    }

    /**
     * Operation updateServiceWithHttpInfo
     *
     * Update a Service
     *
     * @param int $service_id ID of Service to update (required)
     * @param \SayWhenOrderlines\Model\ServiceModel $body Service object that needs to be updated (optional)
     * @throws \SayWhenOrderlines\ApiException on non-2xx response
     * @return array of \SayWhenOrderlines\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateServiceWithHttpInfo($service_id, $body = null)
    {
        // verify the required parameter 'service_id' is set
        if ($service_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $service_id when calling updateService');
        }
        // parse inputs
        $resourcePath = "/service/{serviceId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                "{" . "serviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($service_id),
                $resourcePath
            );
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SayWhenOrderlines\Model\ApiResponse',
                '/service/{serviceId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SayWhenOrderlines\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SayWhenOrderlines\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
