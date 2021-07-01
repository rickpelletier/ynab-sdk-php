# RickPelletier\YnabSDKPHP\DeprecatedApi

All URIs are relative to https://api.youneedabudget.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkCreateTransactions()**](DeprecatedApi.md#bulkCreateTransactions) | **POST** /budgets/{budget_id}/transactions/bulk | Bulk create transactions


## `bulkCreateTransactions()`

```php
bulkCreateTransactions($budget_id, $transactions): \RickPelletier\YnabSDKPHP\Model\BulkResponse
```

Bulk create transactions

Creates multiple transactions.  Although this endpoint is still supported, it is recommended to use 'POST /budgets/{budget_id}/transactions' to create multiple transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearer
$config = RickPelletier\YnabSDKPHP\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RickPelletier\YnabSDKPHP\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new RickPelletier\YnabSDKPHP\Api\DeprecatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = 'budget_id_example'; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget).
$transactions = new \RickPelletier\YnabSDKPHP\Model\BulkTransactions(); // \RickPelletier\YnabSDKPHP\Model\BulkTransactions | The list of transactions to create

try {
    $result = $apiInstance->bulkCreateTransactions($budget_id, $transactions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeprecatedApi->bulkCreateTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget). |
 **transactions** | [**\RickPelletier\YnabSDKPHP\Model\BulkTransactions**](../Model/BulkTransactions.md)| The list of transactions to create |

### Return type

[**\RickPelletier\YnabSDKPHP\Model\BulkResponse**](../Model/BulkResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
