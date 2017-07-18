# SayWhenOrderlines\OrderlineApi

All URIs are relative to *http://local.orderlines.saywhen.nl/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderline**](OrderlineApi.md#createOrderline) | **POST** /orderline | Create a Orderline Object
[**deleteOrderline**](OrderlineApi.md#deleteOrderline) | **DELETE** /orderline/{orderlineId} | Delete a Orderline Object
[**retrieveListOrderline**](OrderlineApi.md#retrieveListOrderline) | **PUT** /orderline | Retrieve List of Orderlines
[**retrieveOrderline**](OrderlineApi.md#retrieveOrderline) | **GET** /orderline/{orderlineId} | Retrieve a Orderline Object
[**updateOrderline**](OrderlineApi.md#updateOrderline) | **PUT** /orderline/{orderlineId} | Update a Orderline


# **createOrderline**
> \SayWhenOrderlines\Model\ApiResponse createOrderline($body)

Create a Orderline Object

Create a Orderline Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\OrderlineApi();
$body = new \SayWhenOrderlines\Model\OrderlineModel(); // \SayWhenOrderlines\Model\OrderlineModel | Orderline object

try {
    $result = $api_instance->createOrderline($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderlineApi->createOrderline: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SayWhenOrderlines\Model\OrderlineModel**](../Model/\SayWhenOrderlines\Model\OrderlineModel.md)| Orderline object |

### Return type

[**\SayWhenOrderlines\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderline**
> \SayWhenOrderlines\Model\ApiResponse deleteOrderline($orderline_id)

Delete a Orderline Object

Delete a Orderline Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\OrderlineApi();
$orderline_id = 789; // int | ID of the orderline to delete

try {
    $result = $api_instance->deleteOrderline($orderline_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderlineApi->deleteOrderline: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderline_id** | **int**| ID of the orderline to delete |

### Return type

[**\SayWhenOrderlines\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListOrderline**
> \SayWhenOrderlines\Model\OrderlineListResponse retrieveListOrderline($arguments)

Retrieve List of Orderlines

Retrieve List of Orderlines

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\OrderlineApi();
$arguments = new \SayWhenOrderlines\Model\OrderlineRetrieveListArguments(); // \SayWhenOrderlines\Model\OrderlineRetrieveListArguments | Orderline RetrieveList Arguments

try {
    $result = $api_instance->retrieveListOrderline($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderlineApi->retrieveListOrderline: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\SayWhenOrderlines\Model\OrderlineRetrieveListArguments**](../Model/\SayWhenOrderlines\Model\OrderlineRetrieveListArguments.md)| Orderline RetrieveList Arguments |

### Return type

[**\SayWhenOrderlines\Model\OrderlineListResponse**](../Model/OrderlineListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveOrderline**
> \SayWhenOrderlines\Model\OrderlineModel retrieveOrderline($orderline_id)

Retrieve a Orderline Object

Retrieve a Orderline Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\OrderlineApi();
$orderline_id = 789; // int | ID of Orderline to return

try {
    $result = $api_instance->retrieveOrderline($orderline_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderlineApi->retrieveOrderline: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderline_id** | **int**| ID of Orderline to return |

### Return type

[**\SayWhenOrderlines\Model\OrderlineModel**](../Model/OrderlineModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderline**
> \SayWhenOrderlines\Model\ApiResponse updateOrderline($orderline_id, $body)

Update a Orderline

Update a Orderline

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\OrderlineApi();
$orderline_id = 789; // int | ID of Orderline to update
$body = new \SayWhenOrderlines\Model\OrderlineModel(); // \SayWhenOrderlines\Model\OrderlineModel | Orderline object that needs to be updated

try {
    $result = $api_instance->updateOrderline($orderline_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderlineApi->updateOrderline: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderline_id** | **int**| ID of Orderline to update |
 **body** | [**\SayWhenOrderlines\Model\OrderlineModel**](../Model/\SayWhenOrderlines\Model\OrderlineModel.md)| Orderline object that needs to be updated | [optional]

### Return type

[**\SayWhenOrderlines\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

