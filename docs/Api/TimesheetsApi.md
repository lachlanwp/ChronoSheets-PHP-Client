# ChronoSheetsClient\TimesheetsApi

All URIs are relative to *https://www.chronosheets.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**timesheetsCreateSingleTimesheet**](TimesheetsApi.md#timesheetsCreateSingleTimesheet) | **PUT** /api/Timesheets/CreateSingleTimesheet | Inserts a single timesheet record
[**timesheetsDeleteTimesheet**](TimesheetsApi.md#timesheetsDeleteTimesheet) | **DELETE** /api/Timesheets/DeleteTimesheet | Delete a timesheet
[**timesheetsGetTimesheets**](TimesheetsApi.md#timesheetsGetTimesheets) | **GET** /api/Timesheets/GetTimesheets | Get timesheets between start and end dates
[**timesheetsUpdateTimesheets**](TimesheetsApi.md#timesheetsUpdateTimesheets) | **POST** /api/Timesheets/UpdateTimesheets | Batch update timesheets


# **timesheetsCreateSingleTimesheet**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseInt32 timesheetsCreateSingleTimesheet($request, $xChronosheetsAuth)

Inserts a single timesheet record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\CSTimesheet(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\CSTimesheet | The timesheet request object
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->timesheetsCreateSingleTimesheet($request, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->timesheetsCreateSingleTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSTimesheet**](../Model/CSTimesheet.md)| The timesheet request object |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseInt32**](../Model/CSApiResponseInt32.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timesheetsDeleteTimesheet**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean timesheetsDeleteTimesheet($timesheetId, $xChronosheetsAuth)

Delete a timesheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$timesheetId = 56; // int | The ID of the timesheet to delete
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->timesheetsDeleteTimesheet($timesheetId, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->timesheetsDeleteTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timesheetId** | **int**| The ID of the timesheet to delete |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean**](../Model/CSApiResponseBoolean.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timesheetsGetTimesheets**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListTimesheet timesheetsGetTimesheets($startDate, $endDate, $xChronosheetsAuth)

Get timesheets between start and end dates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the date range
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the date range
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->timesheetsGetTimesheets($startDate, $endDate, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->timesheetsGetTimesheets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**| The start date of the date range |
 **endDate** | **\DateTime**| The end date of the date range |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListTimesheet**](../Model/CSApiResponseListTimesheet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timesheetsUpdateTimesheets**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListInt32 timesheetsUpdateTimesheets($request, $xChronosheetsAuth)

Batch update timesheets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\CSBatchUpdateTimesheetRequest(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\CSBatchUpdateTimesheetRequest | The batch update timesheets request
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->timesheetsUpdateTimesheets($request, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->timesheetsUpdateTimesheets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSBatchUpdateTimesheetRequest**](../Model/CSBatchUpdateTimesheetRequest.md)| The batch update timesheets request |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListInt32**](../Model/CSApiResponseListInt32.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
