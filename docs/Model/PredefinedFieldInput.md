# PredefinedFieldInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The field's name, the key of its value in submission data. A `/` nests the key in objects and arrays (`customer/email`, `signers/0/name`). |
**display_name** | **string** | The name the template editor shows instead of `name`, where a `/` puts it in a folder, such as `Defendant/Name`. Null shows `name`. Two names can't share a display name. | [optional]
**title** | **string** | The Title setting a field gets when it's given this name. Null leaves the field's title as it is. | [optional]
**type** | [**\DocSpring\Model\FieldType**](FieldType.md) | The data type a field gets when it's given this name, as a field's `type`. |
**option_list** | **string** | String fields only: the values allowed, separated by commas, such as `Yes,No`. Null allows any value. | [optional]
**required_in_template** | **bool** | Whether the template must have a field with this name. The embedded editor shows the names that are missing, and with `disableDoneButtonIfPredefinedFieldsMissing` keeps its Done button disabled until the template has them. Default false. | [optional]
**field_required** | **bool** | The Required setting a field gets when it's given this name. Default true. | [optional]

[[Back to Model list]](../../README.md#methods) [[Back to API list]](../../README.md#methods) [[Back to README]](../../README.md)
