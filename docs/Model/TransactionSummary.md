# # TransactionSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**date** | [**\DateTime**](\DateTime.md) | The transaction date in ISO format (e.g. 2016-12-01) |
**amount** | **int** | The transaction amount in milliunits format |
**memo** | **string** |  | [optional]
**cleared** | **string** | The cleared status of the transaction |
**approved** | **bool** | Whether or not the transaction is approved |
**flag_color** | **string** | The transaction flag | [optional]
**account_id** | **string** |  |
**payee_id** | **string** |  | [optional]
**category_id** | **string** |  | [optional]
**transfer_account_id** | **string** | If a transfer transaction, the account to which it transfers | [optional]
**transfer_transaction_id** | **string** | If a transfer transaction, the id of transaction on the other side of the transfer | [optional]
**matched_transaction_id** | **string** | If transaction is matched, the id of the matched transaction | [optional]
**import_id** | **string** | If the Transaction was imported, this field is a unique (by account) import identifier.  If this transaction was imported through File Based Import or Direct Import and not through the API, the import_id will have the format: &#39;YNAB:[milliunit_amount]:[iso_date]:[occurrence]&#39;.  For example, a transaction dated 2015-12-30 in the amount of -$294.23 USD would have an import_id of &#39;YNAB:-294230:2015-12-30:1&#39;.  If a second transaction on the same account was imported and had the same date and same amount, its import_id would be &#39;YNAB:-294230:2015-12-30:2&#39;. | [optional]
**deleted** | **bool** | Whether or not the transaction has been deleted.  Deleted transactions will only be included in delta requests. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
