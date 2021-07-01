# RickPelletier\YnabSDKPHP\CategoriesApi

All URIs are relative to https://api.youneedabudget.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCategories()**](CategoriesApi.md#getCategories) | **GET** /budgets/{budget_id}/categories | List categories
[**getCategoryById()**](CategoriesApi.md#getCategoryById) | **GET** /budgets/{budget_id}/categories/{category_id} | Single category
[**getMonthCategoryById()**](CategoriesApi.md#getMonthCategoryById) | **GET** /budgets/{budget_id}/months/{month}/categories/{category_id} | Single category for a specific budget month
[**updateMonthCategory()**](CategoriesApi.md#updateMonthCategory) | **PATCH** /budgets/{budget_id}/months/{month}/categories/{category_id} | Update a category for a specific month


## `getCategories()`

```php
getCategories($budget_id, $last_knowledge_of_server): \RickPelletier\YnabSDKPHP\Model\CategoriesResponse
```

List categories

Returns all categories grouped by category group.  Amounts (budgeted, activity, balance, etc.) are specific to the current budget month (UTC).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearer
$config = RickPelletier\YnabSDKPHP\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RickPelletier\YnabSDKPHP\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new RickPelletier\YnabSDKPHP\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = 'budget_id_example'; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget).
$last_knowledge_of_server = 56; // int | The starting server knowledge.  If provided, only entities that have changed since `last_knowledge_of_server` will be included.

try {
    $result = $apiInstance->getCategories($budget_id, $last_knowledge_of_server);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget). |
 **last_knowledge_of_server** | **int**| The starting server knowledge.  If provided, only entities that have changed since &#x60;last_knowledge_of_server&#x60; will be included. | [optional]

### Return type

[**\RickPelletier\YnabSDKPHP\Model\CategoriesResponse**](../Model/CategoriesResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoryById()`

```php
getCategoryById($budget_id, $category_id): \RickPelletier\YnabSDKPHP\Model\CategoryResponse
```

Single category

Returns a single category.  Amounts (budgeted, activity, balance, etc.) are specific to the current budget month (UTC).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearer
$config = RickPelletier\YnabSDKPHP\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RickPelletier\YnabSDKPHP\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new RickPelletier\YnabSDKPHP\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = 'budget_id_example'; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget).
$category_id = 'category_id_example'; // string | The id of the category

try {
    $result = $apiInstance->getCategoryById($budget_id, $category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoryById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget). |
 **category_id** | **string**| The id of the category |

### Return type

[**\RickPelletier\YnabSDKPHP\Model\CategoryResponse**](../Model/CategoryResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMonthCategoryById()`

```php
getMonthCategoryById($budget_id, $month, $category_id): \RickPelletier\YnabSDKPHP\Model\CategoryResponse
```

Single category for a specific budget month

Returns a single category for a specific budget month.  Amounts (budgeted, activity, balance, etc.) are specific to the current budget month (UTC).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearer
$config = RickPelletier\YnabSDKPHP\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RickPelletier\YnabSDKPHP\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new RickPelletier\YnabSDKPHP\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = 'budget_id_example'; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget).
$month = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The budget month in ISO format (e.g. 2016-12-01) (\"current\" can also be used to specify the current calendar month (UTC))
$category_id = 'category_id_example'; // string | The id of the category

try {
    $result = $apiInstance->getMonthCategoryById($budget_id, $month, $category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getMonthCategoryById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget). |
 **month** | **\DateTime**| The budget month in ISO format (e.g. 2016-12-01) (\&quot;current\&quot; can also be used to specify the current calendar month (UTC)) |
 **category_id** | **string**| The id of the category |

### Return type

[**\RickPelletier\YnabSDKPHP\Model\CategoryResponse**](../Model/CategoryResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMonthCategory()`

```php
updateMonthCategory($budget_id, $month, $category_id, $data): \RickPelletier\YnabSDKPHP\Model\SaveCategoryResponse
```

Update a category for a specific month

Update a category for a specific month.  Only `budgeted` amount can be updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearer
$config = RickPelletier\YnabSDKPHP\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RickPelletier\YnabSDKPHP\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new RickPelletier\YnabSDKPHP\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = 'budget_id_example'; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget).
$month = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The budget month in ISO format (e.g. 2016-12-01) (\"current\" can also be used to specify the current calendar month (UTC))
$category_id = 'category_id_example'; // string | The id of the category
$data = new \RickPelletier\YnabSDKPHP\Model\SaveMonthCategoryWrapper(); // \RickPelletier\YnabSDKPHP\Model\SaveMonthCategoryWrapper | The category to update.  Only `budgeted` amount can be updated and any other fields specified will be ignored.

try {
    $result = $apiInstance->updateMonthCategory($budget_id, $month, $category_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->updateMonthCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget). |
 **month** | **\DateTime**| The budget month in ISO format (e.g. 2016-12-01) (\&quot;current\&quot; can also be used to specify the current calendar month (UTC)) |
 **category_id** | **string**| The id of the category |
 **data** | [**\RickPelletier\YnabSDKPHP\Model\SaveMonthCategoryWrapper**](../Model/SaveMonthCategoryWrapper.md)| The category to update.  Only &#x60;budgeted&#x60; amount can be updated and any other fields specified will be ignored. |

### Return type

[**\RickPelletier\YnabSDKPHP\Model\SaveCategoryResponse**](../Model/SaveCategoryResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
