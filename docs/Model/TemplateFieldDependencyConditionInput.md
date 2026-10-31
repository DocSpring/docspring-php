# TemplateFieldDependencyConditionInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**field** | **string** | The name of the field whose value is compared. |
**operator** | **string** | Must be `range`. | [default to 'range']
**value** | **mixed** | The lower end of the range, a number (or a number as a string, as the template editor saves it). Null or left out for no lower end. A range needs `value`, `range_max` or both. |
**range_max** | **mixed** | The upper end of the range, a number (or a number as a string, as the template editor saves it). Null or left out for no upper end. | [optional]

[[Back to Model list]](../../README.md#methods) [[Back to API list]](../../README.md#methods) [[Back to README]](../../README.md)
