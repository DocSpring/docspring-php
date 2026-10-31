# TemplateDiff

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**template_id** | **string** | The template's ID. |
**from_version** | **string** | The earlier version, such as `1.1.0`. Null when no version was published before `to_version`: it's compared with a new template, so all of its fields are added. |
**to_version** | **string** | The later version, such as `1.2.0`. Null for the draft. |
**summary** | [**\DocSpring\Model\TemplateDiffSummary**](TemplateDiffSummary.md) | How many changes of each kind there are. |
**fields** | [**\DocSpring\Model\TemplateFieldChanges**](TemplateFieldChanges.md) | The fields that changed. |
**changed_settings** | **string[]** | The names of the template's settings that changed, as they're named on the Template (`name`, `html`, `defaults`, `merge_audit_trail_pdf`, ...). Values aren't included. Settings that apply to every version, such as `webhook_url` and `encrypt_pdfs_password`, are the same on every version, so they're named only when there's no earlier version to compare with; a secret is named without its value. |
**document_changed** | **bool** | The template's PDF was replaced, or its Word document replaced or edited (or added, when there's no `from_version`). |

[[Back to Model list]](../../README.md#methods) [[Back to API list]](../../README.md#methods) [[Back to README]](../../README.md)
