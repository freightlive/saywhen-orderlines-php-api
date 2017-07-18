# SayWhenOrderlines\LogsApi

All URIs are relative to *http://local.orderlines.saywhen.nl/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveListLog**](LogsApi.md#retrieveListLog) | **PUT** /log | Retrieve List of Activities
[**retrieveLog**](LogsApi.md#retrieveLog) | **GET** /log/{logId} | Retrieve a log entry
[**truncateLog**](LogsApi.md#truncateLog) | **GET** /log/truncate | Truncate Log Table


# **retrieveListLog**
> \SayWhenOrderlines\Model\LogModel[] retrieveListLog($arguments)

Retrieve List of Activities

Retrieve List of Log Entries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\LogsApi();
$arguments = new \SayWhenOrderlines\Model\LogRetrieveListArguments(); // \SayWhenOrderlines\Model\LogRetrieveListArguments | Log RetrieveList Arguments

try {
    $result = $api_instance->retrieveListLog($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->retrieveListLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\SayWhenOrderlines\Model\LogRetrieveListArguments**](../Model/\SayWhenOrderlines\Model\LogRetrieveListArguments.md)| Log RetrieveList Arguments |

### Return type

[**\SayWhenOrderlines\Model\LogModel[]**](../Model/LogModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveLog**
> \SayWhenOrderlines\Model\LogModel retrieveLog($log_id, $include_additional_data)

Retrieve a log entry

Retrieve a log entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\LogsApi();
$log_id = 789; // int | ID of log id to return
$include_additional_data = true; // bool | Show the text value of the status

try {
    $result = $api_instance->retrieveLog($log_id, $include_additional_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->retrieveLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **log_id** | **int**| ID of log id to return |
 **include_additional_data** | **bool**| Show the text value of the status |

### Return type

[**\SayWhenOrderlines\Model\LogModel**](../Model/LogModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **truncateLog**
> \SayWhenOrderlines\Model\ApiResponse truncateLog()

Truncate Log Table

Truncate Log Table

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\LogsApi();

try {
    $result = $api_instance->truncateLog();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->truncateLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SayWhenOrderlines\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

