# # MonthDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**month** | [**\DateTime**](\DateTime.md) |  |
**note** | **string** |  | [optional]
**income** | **int** | The total amount of transactions categorized to &#39;Inflow: Ready to Assign&#39; in the month |
**budgeted** | **int** | The total amount budgeted in the month |
**activity** | **int** | The total amount of transactions in the month, excluding those categorized to &#39;Inflow: Ready to Assign&#39; |
**to_be_budgeted** | **int** | The available amount for &#39;Ready to Assign&#39; |
**age_of_money** | **int** | The Age of Money as of the month | [optional]
**deleted** | **bool** | Whether or not the month has been deleted.  Deleted months will only be included in delta requests. |
**categories** | [**\RickPelletier\YnabSDKPHP\Model\Category[]**](Category.md) | The budget month categories.  Amounts (budgeted, activity, balance, etc.) are specific to the {month} parameter specified. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
