# SubmissionBatch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The batch's ID. |
**state** | [**\DocSpring\Model\SubmissionBatchState**](SubmissionBatchState.md) | `pending` while the PDFs are being generated, then `processed`. `error` as soon as a submission fails, while the others can still be pending: the batch has finished once `processed_at` is set. |
**metadata** | **array<string,mixed>** | Your own data about the batch, such as an ID from your app. |
**total_count** | **int** | The number of submissions in the request. |
**pending_count** | **int** | The submissions whose PDFs haven't been generated yet. |
**error_count** | **int** | The submissions that were invalid or whose PDFs couldn't be generated. |
**completion_percentage** | **int** | The percentage of the batch's submissions that have finished, from 0 to 100. |
**submissions** | [**\DocSpring\Model\Submission[]**](Submission.md) | The batch's submissions, in the order of the request. Their `data` is null unless you pass `include_data=true`. A batch that failed validation only has the submissions that were recorded as `invalid_data`. |
**processed_at** | **\DateTime** | When every submission had finished. |
**created_at** | **\DateTime** | When the batch was created. |
**updated_at** | **\DateTime** | When the batch was last updated. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
