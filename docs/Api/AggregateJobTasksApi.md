# ChronoSheetsClient\AggregateJobTasksApi

All URIs are relative to *https://www.chronosheets.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aggregateJobTasksGetAggregateJobTasks**](AggregateJobTasksApi.md#aggregateJobTasksGetAggregateJobTasks) | **GET** /api/AggregateJobTasks/GetAggregateJobTasks | Get jobs and tasks information, aggregated


# **aggregateJobTasksGetAggregateJobTasks**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListAggregateJobCode aggregateJobTasksGetAggregateJobTasks($xChronosheetsAuth)

Get jobs and tasks information, aggregated

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\AggregateJobTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->aggregateJobTasksGetAggregateJobTasks($xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AggregateJobTasksApi->aggregateJobTasksGetAggregateJobTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListAggregateJobCode**](../Model/CSApiResponseListAggregateJobCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
