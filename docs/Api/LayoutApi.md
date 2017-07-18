# SayWhenOrderlines\LayoutApi

All URIs are relative to *http://local.orderlines.saywhen.nl/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLayout**](LayoutApi.md#createLayout) | **POST** /layout | Create a Layout Object
[**deleteLayout**](LayoutApi.md#deleteLayout) | **DELETE** /layout/{layoutId} | Delete a Layout Object
[**retrieveLayout**](LayoutApi.md#retrieveLayout) | **GET** /layout/{layoutId} | Retrieve a Layout Object
[**retrieveListLayout**](LayoutApi.md#retrieveListLayout) | **PUT** /layout | Retrieve List of Layouts
[**updateLayout**](LayoutApi.md#updateLayout) | **PUT** /layout/{layoutId} | Update a Layout


# **createLayout**
> \SayWhenOrderlines\Model\ApiResponse createLayout($body)

Create a Layout Object

Create a Layout Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\LayoutApi();
$body = new \SayWhenOrderlines\Model\LayoutModel(); // \SayWhenOrderlines\Model\LayoutModel | Layout object

try {
    $result = $api_instance->createLayout($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LayoutApi->createLayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SayWhenOrderlines\Model\LayoutModel**](../Model/\SayWhenOrderlines\Model\LayoutModel.md)| Layout object |

### Return type

[**\SayWhenOrderlines\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLayout**
> \SayWhenOrderlines\Model\ApiResponse deleteLayout($layout_id)

Delete a Layout Object

Delete a Layout Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\LayoutApi();
$layout_id = 789; // int | ID of the layout to delete

try {
    $result = $api_instance->deleteLayout($layout_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LayoutApi->deleteLayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **layout_id** | **int**| ID of the layout to delete |

### Return type

[**\SayWhenOrderlines\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveLayout**
> \SayWhenOrderlines\Model\LayoutModel retrieveLayout($layout_id)

Retrieve a Layout Object

Retrieve a Layout Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\LayoutApi();
$layout_id = 789; // int | ID of Layout to return

try {
    $result = $api_instance->retrieveLayout($layout_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LayoutApi->retrieveLayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **layout_id** | **int**| ID of Layout to return |

### Return type

[**\SayWhenOrderlines\Model\LayoutModel**](../Model/LayoutModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListLayout**
> \SayWhenOrderlines\Model\LayoutListResponse retrieveListLayout($arguments)

Retrieve List of Layouts

Retrieve List of Layouts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\LayoutApi();
$arguments = new \SayWhenOrderlines\Model\LayoutRetrieveListArguments(); // \SayWhenOrderlines\Model\LayoutRetrieveListArguments | Layout RetrieveList Arguments

try {
    $result = $api_instance->retrieveListLayout($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LayoutApi->retrieveListLayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\SayWhenOrderlines\Model\LayoutRetrieveListArguments**](../Model/\SayWhenOrderlines\Model\LayoutRetrieveListArguments.md)| Layout RetrieveList Arguments |

### Return type

[**\SayWhenOrderlines\Model\LayoutListResponse**](../Model/LayoutListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLayout**
> \SayWhenOrderlines\Model\ApiResponse updateLayout($layout_id, $body)

Update a Layout

Update a Layout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\LayoutApi();
$layout_id = 789; // int | ID of Layout to update
$body = new \SayWhenOrderlines\Model\LayoutModel(); // \SayWhenOrderlines\Model\LayoutModel | Layout object that needs to be updated

try {
    $result = $api_instance->updateLayout($layout_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LayoutApi->updateLayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **layout_id** | **int**| ID of Layout to update |
 **body** | [**\SayWhenOrderlines\Model\LayoutModel**](../Model/\SayWhenOrderlines\Model\LayoutModel.md)| Layout object that needs to be updated | [optional]

### Return type

[**\SayWhenOrderlines\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

