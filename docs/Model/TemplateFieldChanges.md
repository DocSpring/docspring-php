# TemplateFieldChanges

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**added** | [**\DocSpring\Model\Field[]**](Field.md) | The fields that `to_version` has and `from_version` doesn't. |
**removed** | [**\DocSpring\Model\Field[]**](Field.md) | The fields that `from_version` has and `to_version` doesn't, as they were. |
**changed** | [**\DocSpring\Model\TemplateFieldChange[]**](TemplateFieldChange.md) | The fields with changed settings. |
**reordered** | [**\DocSpring\Model\TemplateFieldMove[]**](TemplateFieldMove.md) | The fields that moved in the template's field order (the order of its fields across all its pages, as the fields endpoint lists them): fields that swapped places, or the field that moved the furthest. The fields that a move pushed along aren't listed. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
