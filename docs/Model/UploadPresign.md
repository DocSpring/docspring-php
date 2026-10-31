# UploadPresign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The S3 URL to upload the file to. |
**method** | [**\DocSpring\Model\UploadMethod**](UploadMethod.md) | The HTTP method for the upload. |
**fields** | **array<string,string>** | Form fields to send with the file. Send them all, as they are. `key` is the uploaded file's ID: pass it as `cache_id`. |
**headers** | **array<string,string>** | Headers to send with the upload. |

[[Back to Model list]](../../README.md#methods) [[Back to API list]](../../README.md#methods) [[Back to README]](../../README.md)
