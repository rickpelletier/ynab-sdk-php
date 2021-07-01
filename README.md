# OpenAPIClient-php

Our API uses a REST based design, leverages the JSON data format, and relies upon HTTPS for transport. We respond with meaningful HTTP response codes and if an error occurs, we include error details in the response body.  API Documentation is at https://api.youneedabudget.com


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/rickpelletier/ynab-sdk-php.git"
    }
  ],
  "require": {
    "rickpelletier/ynab-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: bearer
$config = RickPelletier\YnabSDKPHP\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RickPelletier\YnabSDKPHP\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new RickPelletier\YnabSDKPHP\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = 'budget_id_example'; // string | The id of the budget (\"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget)
$data = new \RickPelletier\YnabSDKPHP\Model\SaveAccountWrapper(); // \RickPelletier\YnabSDKPHP\Model\SaveAccountWrapper | The account to create.

try {
    $result = $apiInstance->createAccount($budget_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createAccount: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.youneedabudget.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**createAccount**](docs/Api/AccountsApi.md#createaccount) | **POST** /budgets/{budget_id}/accounts | Create a new account
*AccountsApi* | [**getAccountById**](docs/Api/AccountsApi.md#getaccountbyid) | **GET** /budgets/{budget_id}/accounts/{account_id} | Single account
*AccountsApi* | [**getAccounts**](docs/Api/AccountsApi.md#getaccounts) | **GET** /budgets/{budget_id}/accounts | Account list
*BudgetsApi* | [**getBudgetById**](docs/Api/BudgetsApi.md#getbudgetbyid) | **GET** /budgets/{budget_id} | Single budget
*BudgetsApi* | [**getBudgetSettingsById**](docs/Api/BudgetsApi.md#getbudgetsettingsbyid) | **GET** /budgets/{budget_id}/settings | Budget Settings
*BudgetsApi* | [**getBudgets**](docs/Api/BudgetsApi.md#getbudgets) | **GET** /budgets | List budgets
*CategoriesApi* | [**getCategories**](docs/Api/CategoriesApi.md#getcategories) | **GET** /budgets/{budget_id}/categories | List categories
*CategoriesApi* | [**getCategoryById**](docs/Api/CategoriesApi.md#getcategorybyid) | **GET** /budgets/{budget_id}/categories/{category_id} | Single category
*CategoriesApi* | [**getMonthCategoryById**](docs/Api/CategoriesApi.md#getmonthcategorybyid) | **GET** /budgets/{budget_id}/months/{month}/categories/{category_id} | Single category for a specific budget month
*CategoriesApi* | [**updateMonthCategory**](docs/Api/CategoriesApi.md#updatemonthcategory) | **PATCH** /budgets/{budget_id}/months/{month}/categories/{category_id} | Update a category for a specific month
*DeprecatedApi* | [**bulkCreateTransactions**](docs/Api/DeprecatedApi.md#bulkcreatetransactions) | **POST** /budgets/{budget_id}/transactions/bulk | Bulk create transactions
*MonthsApi* | [**getBudgetMonth**](docs/Api/MonthsApi.md#getbudgetmonth) | **GET** /budgets/{budget_id}/months/{month} | Single budget month
*MonthsApi* | [**getBudgetMonths**](docs/Api/MonthsApi.md#getbudgetmonths) | **GET** /budgets/{budget_id}/months | List budget months
*PayeeLocationsApi* | [**getPayeeLocationById**](docs/Api/PayeeLocationsApi.md#getpayeelocationbyid) | **GET** /budgets/{budget_id}/payee_locations/{payee_location_id} | Single payee location
*PayeeLocationsApi* | [**getPayeeLocations**](docs/Api/PayeeLocationsApi.md#getpayeelocations) | **GET** /budgets/{budget_id}/payee_locations | List payee locations
*PayeeLocationsApi* | [**getPayeeLocationsByPayee**](docs/Api/PayeeLocationsApi.md#getpayeelocationsbypayee) | **GET** /budgets/{budget_id}/payees/{payee_id}/payee_locations | List locations for a payee
*PayeesApi* | [**getPayeeById**](docs/Api/PayeesApi.md#getpayeebyid) | **GET** /budgets/{budget_id}/payees/{payee_id} | Single payee
*PayeesApi* | [**getPayees**](docs/Api/PayeesApi.md#getpayees) | **GET** /budgets/{budget_id}/payees | List payees
*ScheduledTransactionsApi* | [**getScheduledTransactionById**](docs/Api/ScheduledTransactionsApi.md#getscheduledtransactionbyid) | **GET** /budgets/{budget_id}/scheduled_transactions/{scheduled_transaction_id} | Single scheduled transaction
*ScheduledTransactionsApi* | [**getScheduledTransactions**](docs/Api/ScheduledTransactionsApi.md#getscheduledtransactions) | **GET** /budgets/{budget_id}/scheduled_transactions | List scheduled transactions
*TransactionsApi* | [**createTransaction**](docs/Api/TransactionsApi.md#createtransaction) | **POST** /budgets/{budget_id}/transactions | Create a single transaction or multiple transactions
*TransactionsApi* | [**getTransactionById**](docs/Api/TransactionsApi.md#gettransactionbyid) | **GET** /budgets/{budget_id}/transactions/{transaction_id} | Single transaction
*TransactionsApi* | [**getTransactions**](docs/Api/TransactionsApi.md#gettransactions) | **GET** /budgets/{budget_id}/transactions | List transactions
*TransactionsApi* | [**getTransactionsByAccount**](docs/Api/TransactionsApi.md#gettransactionsbyaccount) | **GET** /budgets/{budget_id}/accounts/{account_id}/transactions | List account transactions
*TransactionsApi* | [**getTransactionsByCategory**](docs/Api/TransactionsApi.md#gettransactionsbycategory) | **GET** /budgets/{budget_id}/categories/{category_id}/transactions | List category transactions
*TransactionsApi* | [**getTransactionsByPayee**](docs/Api/TransactionsApi.md#gettransactionsbypayee) | **GET** /budgets/{budget_id}/payees/{payee_id}/transactions | List payee transactions
*TransactionsApi* | [**importTransactions**](docs/Api/TransactionsApi.md#importtransactions) | **POST** /budgets/{budget_id}/transactions/import | Import transactions
*TransactionsApi* | [**updateTransaction**](docs/Api/TransactionsApi.md#updatetransaction) | **PUT** /budgets/{budget_id}/transactions/{transaction_id} | Updates an existing transaction
*TransactionsApi* | [**updateTransactions**](docs/Api/TransactionsApi.md#updatetransactions) | **PATCH** /budgets/{budget_id}/transactions | Update multiple transactions
*UserApi* | [**getUser**](docs/Api/UserApi.md#getuser) | **GET** /user | User info

## Models

- [Account](docs/Model/Account.md)
- [AccountResponse](docs/Model/AccountResponse.md)
- [AccountResponseData](docs/Model/AccountResponseData.md)
- [AccountsResponse](docs/Model/AccountsResponse.md)
- [AccountsResponseData](docs/Model/AccountsResponseData.md)
- [BudgetDetail](docs/Model/BudgetDetail.md)
- [BudgetDetailAllOf](docs/Model/BudgetDetailAllOf.md)
- [BudgetDetailResponse](docs/Model/BudgetDetailResponse.md)
- [BudgetDetailResponseData](docs/Model/BudgetDetailResponseData.md)
- [BudgetSettings](docs/Model/BudgetSettings.md)
- [BudgetSettingsResponse](docs/Model/BudgetSettingsResponse.md)
- [BudgetSettingsResponseData](docs/Model/BudgetSettingsResponseData.md)
- [BudgetSummary](docs/Model/BudgetSummary.md)
- [BudgetSummaryResponse](docs/Model/BudgetSummaryResponse.md)
- [BudgetSummaryResponseData](docs/Model/BudgetSummaryResponseData.md)
- [BulkResponse](docs/Model/BulkResponse.md)
- [BulkResponseData](docs/Model/BulkResponseData.md)
- [BulkResponseDataBulk](docs/Model/BulkResponseDataBulk.md)
- [BulkTransactions](docs/Model/BulkTransactions.md)
- [CategoriesResponse](docs/Model/CategoriesResponse.md)
- [CategoriesResponseData](docs/Model/CategoriesResponseData.md)
- [Category](docs/Model/Category.md)
- [CategoryGroup](docs/Model/CategoryGroup.md)
- [CategoryGroupWithCategories](docs/Model/CategoryGroupWithCategories.md)
- [CategoryGroupWithCategoriesAllOf](docs/Model/CategoryGroupWithCategoriesAllOf.md)
- [CategoryResponse](docs/Model/CategoryResponse.md)
- [CategoryResponseData](docs/Model/CategoryResponseData.md)
- [CurrencyFormat](docs/Model/CurrencyFormat.md)
- [DateFormat](docs/Model/DateFormat.md)
- [ErrorDetail](docs/Model/ErrorDetail.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [HybridTransaction](docs/Model/HybridTransaction.md)
- [HybridTransactionAllOf](docs/Model/HybridTransactionAllOf.md)
- [HybridTransactionsResponse](docs/Model/HybridTransactionsResponse.md)
- [HybridTransactionsResponseData](docs/Model/HybridTransactionsResponseData.md)
- [MonthDetail](docs/Model/MonthDetail.md)
- [MonthDetailAllOf](docs/Model/MonthDetailAllOf.md)
- [MonthDetailResponse](docs/Model/MonthDetailResponse.md)
- [MonthDetailResponseData](docs/Model/MonthDetailResponseData.md)
- [MonthSummariesResponse](docs/Model/MonthSummariesResponse.md)
- [MonthSummariesResponseData](docs/Model/MonthSummariesResponseData.md)
- [MonthSummary](docs/Model/MonthSummary.md)
- [Payee](docs/Model/Payee.md)
- [PayeeLocation](docs/Model/PayeeLocation.md)
- [PayeeLocationResponse](docs/Model/PayeeLocationResponse.md)
- [PayeeLocationResponseData](docs/Model/PayeeLocationResponseData.md)
- [PayeeLocationsResponse](docs/Model/PayeeLocationsResponse.md)
- [PayeeLocationsResponseData](docs/Model/PayeeLocationsResponseData.md)
- [PayeeResponse](docs/Model/PayeeResponse.md)
- [PayeeResponseData](docs/Model/PayeeResponseData.md)
- [PayeesResponse](docs/Model/PayeesResponse.md)
- [PayeesResponseData](docs/Model/PayeesResponseData.md)
- [SaveAccount](docs/Model/SaveAccount.md)
- [SaveAccountWrapper](docs/Model/SaveAccountWrapper.md)
- [SaveCategoryResponse](docs/Model/SaveCategoryResponse.md)
- [SaveCategoryResponseData](docs/Model/SaveCategoryResponseData.md)
- [SaveMonthCategory](docs/Model/SaveMonthCategory.md)
- [SaveMonthCategoryWrapper](docs/Model/SaveMonthCategoryWrapper.md)
- [SaveSubTransaction](docs/Model/SaveSubTransaction.md)
- [SaveTransaction](docs/Model/SaveTransaction.md)
- [SaveTransactionWrapper](docs/Model/SaveTransactionWrapper.md)
- [SaveTransactionsResponse](docs/Model/SaveTransactionsResponse.md)
- [SaveTransactionsResponseData](docs/Model/SaveTransactionsResponseData.md)
- [SaveTransactionsWrapper](docs/Model/SaveTransactionsWrapper.md)
- [ScheduledSubTransaction](docs/Model/ScheduledSubTransaction.md)
- [ScheduledTransactionDetail](docs/Model/ScheduledTransactionDetail.md)
- [ScheduledTransactionDetailAllOf](docs/Model/ScheduledTransactionDetailAllOf.md)
- [ScheduledTransactionResponse](docs/Model/ScheduledTransactionResponse.md)
- [ScheduledTransactionResponseData](docs/Model/ScheduledTransactionResponseData.md)
- [ScheduledTransactionSummary](docs/Model/ScheduledTransactionSummary.md)
- [ScheduledTransactionsResponse](docs/Model/ScheduledTransactionsResponse.md)
- [ScheduledTransactionsResponseData](docs/Model/ScheduledTransactionsResponseData.md)
- [SubTransaction](docs/Model/SubTransaction.md)
- [TransactionDetail](docs/Model/TransactionDetail.md)
- [TransactionDetailAllOf](docs/Model/TransactionDetailAllOf.md)
- [TransactionResponse](docs/Model/TransactionResponse.md)
- [TransactionResponseData](docs/Model/TransactionResponseData.md)
- [TransactionSummary](docs/Model/TransactionSummary.md)
- [TransactionsImportResponse](docs/Model/TransactionsImportResponse.md)
- [TransactionsImportResponseData](docs/Model/TransactionsImportResponseData.md)
- [TransactionsResponse](docs/Model/TransactionsResponse.md)
- [TransactionsResponseData](docs/Model/TransactionsResponseData.md)
- [UpdateTransaction](docs/Model/UpdateTransaction.md)
- [UpdateTransactionAllOf](docs/Model/UpdateTransactionAllOf.md)
- [UpdateTransactionsWrapper](docs/Model/UpdateTransactionsWrapper.md)
- [User](docs/Model/User.md)
- [UserResponse](docs/Model/UserResponse.md)
- [UserResponseData](docs/Model/UserResponseData.md)

## Authorization

### bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
