# SayWhenOrderlines\TimeslotsApi

All URIs are relative to *http://local.orderlines.saywhen.nl/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**timeslotsRetreivePossibleOrderlines**](TimeslotsApi.md#timeslotsRetreivePossibleOrderlines) | **POST** /timeslots/retrieve-possible-orderlines | Retrieve all orderlines for given timeslots


# **timeslotsRetreivePossibleOrderlines**
> \SayWhenOrderlines\Model\TimeslotModel[] timeslotsRetreivePossibleOrderlines($back_office_partner_id, $front_office_partner_id, $body)

Retrieve all orderlines for given timeslots

Retrieve all orderlines for given timeslots

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\TimeslotsApi();
$back_office_partner_id = "back_office_partner_id_example"; // string | BackOffice Partner ID
$front_office_partner_id = "front_office_partner_id_example"; // string | FrontOffice Partner ID
$body = new \SayWhenOrderlines\Model\TimeSlotsOrderlinesPostModel(); // \SayWhenOrderlines\Model\TimeSlotsOrderlinesPostModel | Orderline object

try {
    $result = $api_instance->timeslotsRetreivePossibleOrderlines($back_office_partner_id, $front_office_partner_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeslotsApi->timeslotsRetreivePossibleOrderlines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **back_office_partner_id** | **string**| BackOffice Partner ID |
 **front_office_partner_id** | **string**| FrontOffice Partner ID |
 **body** | [**\SayWhenOrderlines\Model\TimeSlotsOrderlinesPostModel**](../Model/\SayWhenOrderlines\Model\TimeSlotsOrderlinesPostModel.md)| Orderline object |

### Return type

[**\SayWhenOrderlines\Model\TimeslotModel[]**](../Model/TimeslotModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

