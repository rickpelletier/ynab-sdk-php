# # SaveTransactionsResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_ids** | **string[]** | The transaction ids that were saved |
**transaction** | [**\RickPelletier\YnabSDKPHP\Model\TransactionDetail**](TransactionDetail.md) |  | [optional]
**transactions** | [**\RickPelletier\YnabSDKPHP\Model\TransactionDetail[]**](TransactionDetail.md) | If multiple transactions were specified, the transactions that were saved | [optional]
**duplicate_import_ids** | **string[]** | If multiple transactions were specified, a list of import_ids that were not created because of an existing &#x60;import_id&#x60; found on the same account | [optional]
**server_knowledge** | **int** | The knowledge of the server |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
