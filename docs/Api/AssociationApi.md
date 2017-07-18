# SayWhenOrderlines\AssociationApi

All URIs are relative to *https://orderlines.saywhen.nl/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAssociation**](AssociationApi.md#createAssociation) | **POST** /association | Create a Association Object
[**deleteAssociation**](AssociationApi.md#deleteAssociation) | **DELETE** /association/{associationId} | Delete a Association Object
[**retrieveAssociation**](AssociationApi.md#retrieveAssociation) | **GET** /association/{associationId} | Retrieve a Association Object
[**retrieveListAssociation**](AssociationApi.md#retrieveListAssociation) | **PUT** /association | Retrieve List of Associations
[**updateAssociation**](AssociationApi.md#updateAssociation) | **PUT** /association/{associationId} | Update a Association


# **createAssociation**
> \SayWhenOrderlines\Model\ApiResponse createAssociation($body)

Create a Association Object

Create a Association Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\AssociationApi();
$body = new \SayWhenOrderlines\Model\AssociationModel(); // \SayWhenOrderlines\Model\AssociationModel | Association object

try {
    $result = $api_instance->createAssociation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssociationApi->createAssociation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SayWhenOrderlines\Model\AssociationModel**](../Model/\SayWhenOrderlines\Model\AssociationModel.md)| Association object |

### Return type

[**\SayWhenOrderlines\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAssociation**
> \SayWhenOrderlines\Model\ApiResponse deleteAssociation($association_id)

Delete a Association Object

Delete a Association Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\AssociationApi();
$association_id = 789; // int | ID of the association to delete

try {
    $result = $api_instance->deleteAssociation($association_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssociationApi->deleteAssociation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **association_id** | **int**| ID of the association to delete |

### Return type

[**\SayWhenOrderlines\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAssociation**
> \SayWhenOrderlines\Model\AssociationModel retrieveAssociation($association_id)

Retrieve a Association Object

Retrieve a Association Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\AssociationApi();
$association_id = 789; // int | ID of Association to return

try {
    $result = $api_instance->retrieveAssociation($association_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssociationApi->retrieveAssociation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **association_id** | **int**| ID of Association to return |

### Return type

[**\SayWhenOrderlines\Model\AssociationModel**](../Model/AssociationModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListAssociation**
> \SayWhenOrderlines\Model\AssociationListResponse retrieveListAssociation($arguments)

Retrieve List of Associations

Retrieve List of Associations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\AssociationApi();
$arguments = new \SayWhenOrderlines\Model\AssociationRetrieveListArguments(); // \SayWhenOrderlines\Model\AssociationRetrieveListArguments | Association RetrieveList Arguments

try {
    $result = $api_instance->retrieveListAssociation($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssociationApi->retrieveListAssociation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\SayWhenOrderlines\Model\AssociationRetrieveListArguments**](../Model/\SayWhenOrderlines\Model\AssociationRetrieveListArguments.md)| Association RetrieveList Arguments |

### Return type

[**\SayWhenOrderlines\Model\AssociationListResponse**](../Model/AssociationListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAssociation**
> \SayWhenOrderlines\Model\ApiResponse updateAssociation($association_id, $body)

Update a Association

Update a Association

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\AssociationApi();
$association_id = 789; // int | ID of Association to update
$body = new \SayWhenOrderlines\Model\AssociationModel(); // \SayWhenOrderlines\Model\AssociationModel | Association object that needs to be updated

try {
    $result = $api_instance->updateAssociation($association_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssociationApi->updateAssociation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **association_id** | **int**| ID of Association to update |
 **body** | [**\SayWhenOrderlines\Model\AssociationModel**](../Model/\SayWhenOrderlines\Model\AssociationModel.md)| Association object that needs to be updated | [optional]

### Return type

[**\SayWhenOrderlines\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

