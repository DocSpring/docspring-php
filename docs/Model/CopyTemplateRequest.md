# CopyTemplateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Default: the template's name followed by a number, such as "Contract (2)". For a published version, the name followed by the version, such as "Contract (v1.2.0)". | [optional]
**parent_folder_id** | **string** | The folder to put the copy in. Null puts it at the root. Left out, the copy goes in the template's own folder. | [optional]
**version** | **string** | Copy this published version (`1.2.0`, or `1` for the latest 1.x.x) instead of the draft. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
