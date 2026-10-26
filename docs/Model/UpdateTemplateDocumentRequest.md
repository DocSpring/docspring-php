# UpdateTemplateDocumentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cache_id** | **string** | The `fields.key` of the new PDF, uploaded with the presigned upload (GET /uploads/presign). |
**filename** | **string** | The PDF's file name, for a `cache_id` (presigned uploads don't send one). | [optional]
**reimport_fields** | **bool** | Replace all of the template's fields with the fillable fields in the new PDF, once DocSpring has processed it (`document.field_reimport_state`). As on a first upload, the default typeface, font size, bold and color are taken from the PDF's fields; the template's other settings are kept. If the PDF has no fillable fields, the template keeps its fields. A locked template can't re-import its fields. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
