# SayWhenOrderlines\ServiceApi

All URIs are relative to *http://local.orderlines.saywhen.nl/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createService**](ServiceApi.md#createService) | **POST** /service | Create a Service Object
[**deleteService**](ServiceApi.md#deleteService) | **DELETE** /service/{serviceId} | Delete a Service Object
[**listForPortalService**](ServiceApi.md#listForPortalService) | **GET** /service/list-for-portal | List Extra Services for Portal by Filter Object
[**retrieveListService**](ServiceApi.md#retrieveListService) | **PUT** /service | Retrieve List of Services
[**retrieveService**](ServiceApi.md#retrieveService) | **GET** /service/{serviceId} | Retrieve a Service Object
[**updateService**](ServiceApi.md#updateService) | **PUT** /service/{serviceId} | Update a Service


# **createService**
> \SayWhenOrderlines\Model\ApiResponse createService($body)

Create a Service Object

Create a Service Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\ServiceApi();
$body = new \SayWhenOrderlines\Model\ServiceModel(); // \SayWhenOrderlines\Model\ServiceModel | Service object

try {
    $result = $api_instance->createService($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->createService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SayWhenOrderlines\Model\ServiceModel**](../Model/\SayWhenOrderlines\Model\ServiceModel.md)| Service object |

### Return type

[**\SayWhenOrderlines\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteService**
> \SayWhenOrderlines\Model\ApiResponse deleteService($service_id)

Delete a Service Object

Delete a Service Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\ServiceApi();
$service_id = 789; // int | ID of the service to delete

try {
    $result = $api_instance->deleteService($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->deleteService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| ID of the service to delete |

### Return type

[**\SayWhenOrderlines\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listForPortalService**
> \SayWhenOrderlines\Model\OrderlineModel[] listForPortalService($back_office_partner_id, $front_office_partner_id, $filters_object)

List Extra Services for Portal by Filter Object

List Extra Services for Portal by Filter Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\ServiceApi();
$back_office_partner_id = "back_office_partner_id_example"; // string | BackOffice Partner ID
$front_office_partner_id = "front_office_partner_id_example"; // string | FrontOffice Partner ID
$filters_object = "filters_object_example"; // string | FilterObject in JSON format

try {
    $result = $api_instance->listForPortalService($back_office_partner_id, $front_office_partner_id, $filters_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->listForPortalService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **back_office_partner_id** | **string**| BackOffice Partner ID |
 **front_office_partner_id** | **string**| FrontOffice Partner ID |
 **filters_object** | **string**| FilterObject in JSON format |

### Return type

[**\SayWhenOrderlines\Model\OrderlineModel[]**](../Model/OrderlineModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListService**
> \SayWhenOrderlines\Model\ServiceListResponse retrieveListService($arguments)

Retrieve List of Services

Retrieve List of Services

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\ServiceApi();
$arguments = new \SayWhenOrderlines\Model\ServiceRetrieveListArguments(); // \SayWhenOrderlines\Model\ServiceRetrieveListArguments | Service RetrieveList Arguments

try {
    $result = $api_instance->retrieveListService($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->retrieveListService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\SayWhenOrderlines\Model\ServiceRetrieveListArguments**](../Model/\SayWhenOrderlines\Model\ServiceRetrieveListArguments.md)| Service RetrieveList Arguments |

### Return type

[**\SayWhenOrderlines\Model\ServiceListResponse**](../Model/ServiceListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveService**
> \SayWhenOrderlines\Model\ServiceModel retrieveService($service_id)

Retrieve a Service Object

Retrieve a Service Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\ServiceApi();
$service_id = 789; // int | ID of Service to return

try {
    $result = $api_instance->retrieveService($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->retrieveService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| ID of Service to return |

### Return type

[**\SayWhenOrderlines\Model\ServiceModel**](../Model/ServiceModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateService**
> \SayWhenOrderlines\Model\ApiResponse updateService($service_id, $body)

Update a Service

Update a Service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\ServiceApi();
$service_id = 789; // int | ID of Service to update
$body = new \SayWhenOrderlines\Model\ServiceModel(); // \SayWhenOrderlines\Model\ServiceModel | Service object that needs to be updated

try {
    $result = $api_instance->updateService($service_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->updateService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **int**| ID of Service to update |
 **body** | [**\SayWhenOrderlines\Model\ServiceModel**](../Model/\SayWhenOrderlines\Model\ServiceModel.md)| Service object that needs to be updated | [optional]

### Return type

[**\SayWhenOrderlines\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

