# TemplateFieldDependencyCondition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**field** | **string** | The name of the field whose value is compared. |
**operator** | [**\DocSpring\Model\TemplateFieldDependencyOperator**](TemplateFieldDependencyOperator.md) | How the field's value is compared with `value`. `in`: one of a list. `range`: from `value` to `range_max`. |
**value** | **mixed** | The value to compare the field's value with. | [optional]
**range_max** | **mixed** | The upper end of a `range`, a number (or a number as a string, as the template editor saves it). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
