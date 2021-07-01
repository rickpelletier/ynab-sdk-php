# # BudgetDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**name** | **string** |  |
**last_modified_on** | [**\DateTime**](\DateTime.md) | The last time any changes were made to the budget from either a web or mobile client | [optional]
**first_month** | [**\DateTime**](\DateTime.md) | The earliest budget month | [optional]
**last_month** | [**\DateTime**](\DateTime.md) | The latest budget month | [optional]
**date_format** | [**\RickPelletier\YnabSDKPHP\Model\DateFormat**](DateFormat.md) |  | [optional]
**currency_format** | [**\RickPelletier\YnabSDKPHP\Model\CurrencyFormat**](CurrencyFormat.md) |  | [optional]
**accounts** | [**\RickPelletier\YnabSDKPHP\Model\Account[]**](Account.md) |  | [optional]
**payees** | [**\RickPelletier\YnabSDKPHP\Model\Payee[]**](Payee.md) |  | [optional]
**payee_locations** | [**\RickPelletier\YnabSDKPHP\Model\PayeeLocation[]**](PayeeLocation.md) |  | [optional]
**category_groups** | [**\RickPelletier\YnabSDKPHP\Model\CategoryGroup[]**](CategoryGroup.md) |  | [optional]
**categories** | [**\RickPelletier\YnabSDKPHP\Model\Category[]**](Category.md) |  | [optional]
**months** | [**\RickPelletier\YnabSDKPHP\Model\MonthDetail[]**](MonthDetail.md) |  | [optional]
**transactions** | [**\RickPelletier\YnabSDKPHP\Model\TransactionSummary[]**](TransactionSummary.md) |  | [optional]
**subtransactions** | [**\RickPelletier\YnabSDKPHP\Model\SubTransaction[]**](SubTransaction.md) |  | [optional]
**scheduled_transactions** | [**\RickPelletier\YnabSDKPHP\Model\ScheduledTransactionSummary[]**](ScheduledTransactionSummary.md) |  | [optional]
**scheduled_subtransactions** | [**\RickPelletier\YnabSDKPHP\Model\ScheduledSubTransaction[]**](ScheduledSubTransaction.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
