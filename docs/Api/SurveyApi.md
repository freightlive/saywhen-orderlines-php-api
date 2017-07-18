# SayWhenOrderlines\SurveyApi

All URIs are relative to *https://orderlines.saywhen.nl/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**surveyAnalyseAnswers**](SurveyApi.md#surveyAnalyseAnswers) | **GET** /survey/analyse-answers | Analyse Answers and determine extra order lines
[**surveyRetreivePossibleOrderlines**](SurveyApi.md#surveyRetreivePossibleOrderlines) | **GET** /survey/retrieve-possible-orderlines | Retrieve all orderlines for possible answers for a given question


# **surveyAnalyseAnswers**
> \SayWhenOrderlines\Model\OrderlineModel[] surveyAnalyseAnswers($back_office_partner_id, $front_office_partner_id, $questions_and_answers, $fields_and_values)

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
$questions_and_answers = "questions_and_answers_example"; // string | Questions and Answers in JSON format
$fields_and_values = "fields_and_values_example"; // string | Fields and Values in JSON format

try {
    $result = $api_instance->surveyAnalyseAnswers($back_office_partner_id, $front_office_partner_id, $questions_and_answers, $fields_and_values);
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
 **questions_and_answers** | **string**| Questions and Answers in JSON format |
 **fields_and_values** | **string**| Fields and Values in JSON format |

### Return type

[**\SayWhenOrderlines\Model\OrderlineModel[]**](../Model/OrderlineModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyRetreivePossibleOrderlines**
> \SayWhenOrderlines\Model\PossibleOrderlinesResultModel surveyRetreivePossibleOrderlines($back_office_partner_id, $front_office_partner_id, $previous_questions, $next_question, $collected_order_line_references, $fields_object)

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
$previous_questions = "previous_questions_example"; // string | Question and Answers in JSON format
$next_question = "next_question_example"; // string | nextQuestion in JSON format
$collected_order_line_references = "collected_order_line_references_example"; // string | OrderLine References which are already collected in JSON format
$fields_object = "fields_object_example"; // string | Fields in JSON format

try {
    $result = $api_instance->surveyRetreivePossibleOrderlines($back_office_partner_id, $front_office_partner_id, $previous_questions, $next_question, $collected_order_line_references, $fields_object);
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
 **previous_questions** | **string**| Question and Answers in JSON format |
 **next_question** | **string**| nextQuestion in JSON format |
 **collected_order_line_references** | **string**| OrderLine References which are already collected in JSON format |
 **fields_object** | **string**| Fields in JSON format |

### Return type

[**\SayWhenOrderlines\Model\PossibleOrderlinesResultModel**](../Model/PossibleOrderlinesResultModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

