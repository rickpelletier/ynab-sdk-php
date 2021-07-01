# # CategoryGroupWithCategories

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**name** | **string** |  |
**hidden** | **bool** | Whether or not the category group is hidden |
**deleted** | **bool** | Whether or not the category group has been deleted.  Deleted category groups will only be included in delta requests. |
**categories** | [**\RickPelletier\YnabSDKPHP\Model\Category[]**](Category.md) | Category group categories.  Amounts (budgeted, activity, balance, etc.) are specific to the current budget month (UTC). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
