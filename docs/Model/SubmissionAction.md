# SubmissionAction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The upload's ID. |
**integration_id** | **string** | The ID of the account integration it used. |
**state** | [**\DocSpring\Model\SubmissionActionState**](SubmissionActionState.md) | `pending` until the upload has run, then `processed`. `failed`: your storage rejected it. `error`: it failed in DocSpring. |
**action_type** | [**\DocSpring\Model\SubmissionActionType**](SubmissionActionType.md) | The kind of storage, such as `aws_s3_upload` for an S3 bucket. |
**result_data** | **array<string,mixed>** | Where the PDF was uploaded, such as the S3 bucket and key. |
**error_message** | **string** | Why the upload failed, when `state` is `failed` or `error`. |

[[Back to Model list]](../../README.md#methods) [[Back to API list]](../../README.md#methods) [[Back to README]](../../README.md)
