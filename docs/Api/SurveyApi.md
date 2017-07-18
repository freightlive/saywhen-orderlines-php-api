# SayWhenOrderlines\SurveyApi

All URIs are relative to *https://orderlines.saywhen.nl/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**surveyAnalyseAnswers**](SurveyApi.md#surveyAnalyseAnswers) | **POST** /survey/analyse-answers | Analyse Answers and determine extra order lines
[**surveyRetreivePossibleOrderlines**](SurveyApi.md#surveyRetreivePossibleOrderlines) | **POST** /survey/retrieve-possible-orderlines | Retrieve all orderlines for possible answers for a given question


# **surveyAnalyseAnswers**
> \SayWhenOrderlines\Model\OrderlineModel[] surveyAnalyseAnswers($back_office_partner_id, $front_office_partner_id, $body)

Analyse Answers and determine extra order lines

Analyse Answers and determine extra order lines

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\SurveyApi();
$back_office_partner_id = "back_office_partner_id_example"; // string | BackOffice Partner ID
$front_office_partner_id = "front_office_partner_id_example"; // string | FrontOffice Partner ID
$body = new \SayWhenOrderlines\Model\SurveyOrderlinesPostModel(); // \SayWhenOrderlines\Model\SurveyOrderlinesPostModel | SurveyOrderlinesPostModel

try {
    $result = $api_instance->surveyAnalyseAnswers($back_office_partner_id, $front_office_partner_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyAnalyseAnswers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **back_office_partner_id** | **string**| BackOffice Partner ID |
 **front_office_partner_id** | **string**| FrontOffice Partner ID |
 **body** | [**\SayWhenOrderlines\Model\SurveyOrderlinesPostModel**](../Model/\SayWhenOrderlines\Model\SurveyOrderlinesPostModel.md)| SurveyOrderlinesPostModel |

### Return type

[**\SayWhenOrderlines\Model\OrderlineModel[]**](../Model/OrderlineModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyRetreivePossibleOrderlines**
> \SayWhenOrderlines\Model\PossibleOrderlinesResultModel surveyRetreivePossibleOrderlines($back_office_partner_id, $front_office_partner_id, $body)

Retrieve all orderlines for possible answers for a given question

Retrieve all orderlines for possible answers for a given question

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenOrderlines\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenOrderlines\Api\SurveyApi();
$back_office_partner_id = "back_office_partner_id_example"; // string | BackOffice Partner ID
$front_office_partner_id = "front_office_partner_id_example"; // string | FrontOffice Partner ID
$body = new \SayWhenOrderlines\Model\PossibleOrderlinesPostModel(); // \SayWhenOrderlines\Model\PossibleOrderlinesPostModel | PossibleOrderlinesPostModel

try {
    $result = $api_instance->surveyRetreivePossibleOrderlines($back_office_partner_id, $front_office_partner_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyRetreivePossibleOrderlines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **back_office_partner_id** | **string**| BackOffice Partner ID |
 **front_office_partner_id** | **string**| FrontOffice Partner ID |
 **body** | [**\SayWhenOrderlines\Model\PossibleOrderlinesPostModel**](../Model/\SayWhenOrderlines\Model\PossibleOrderlinesPostModel.md)| PossibleOrderlinesPostModel |

### Return type

[**\SayWhenOrderlines\Model\PossibleOrderlinesResultModel**](../Model/PossibleOrderlinesResultModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

