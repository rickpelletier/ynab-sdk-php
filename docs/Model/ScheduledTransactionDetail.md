# # ScheduledTransactionDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**date_first** | [**\DateTime**](\DateTime.md) | The first date for which the Scheduled Transaction was scheduled. |
**date_next** | [**\DateTime**](\DateTime.md) | The next date for which the Scheduled Transaction is scheduled. |
**frequency** | **string** |  |
**amount** | **int** | The scheduled transaction amount in milliunits format |
**memo** | **string** |  | [optional]
**flag_color** | **string** | The scheduled transaction flag | [optional]
**account_id** | **string** |  |
**payee_id** | **string** |  | [optional]
**category_id** | **string** |  | [optional]
**transfer_account_id** | **string** | If a transfer, the account_id which the scheduled transaction transfers to | [optional]
**deleted** | **bool** | Whether or not the scheduled transaction has been deleted.  Deleted scheduled transactions will only be included in delta requests. |
**account_name** | **string** |  |
**payee_name** | **string** |  | [optional]
**category_name** | **string** |  | [optional]
**subtransactions** | [**\RickPelletier\YnabSDKPHP\Model\ScheduledSubTransaction[]**](ScheduledSubTransaction.md) | If a split scheduled transaction, the subtransactions. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
