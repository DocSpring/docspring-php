# CreateWebhookRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A name for the webhook, shown in the dashboard. | [optional]
**url** | **string** | The endpoint that receives webhook POST requests. |
**enabled** | **bool** | Whether DocSpring sends events to the webhook. Webhooks are disabled after repeated failures. | [optional]
**event_types** | [**\DocSpring\Model\WebhookEventType[]**](WebhookEventType.md) | The events the webhook subscribes to. A webhook made in the dashboard can also subscribe to API token, account integration and user events, which are listed with their own names. |
**mode** | [**\DocSpring\Model\WebhookMode**](WebhookMode.md) | Only send events for test or live submissions. Null sends both. | [optional]
**api_token_ids** | **string[]** | Only send events from these API tokens. Combined with the other scope lists using OR. Applies to submission, signature request, combined PDF, submission batch and custom file events. | [optional]
**template_ids** | **string[]** | Only send events for these templates. Combined with the other scope lists using OR. Applies to submission, signature request and template events. | [optional]
**folder_ids** | **string[]** | Only send events for templates in these folders, including their subfolders. Combined with the other scope lists using OR. Applies to submission, signature request, template and folder events. | [optional]
**include_submission_data** | **bool** | Include the submission's field data in the payload. When false, the submission's data and truncated_text, and each signature request's data, ip_address and user_agent, are null. | [optional]
**strip_fields** | **string[]** | Dot-separated paths to remove from the event's data object. Form fields live under `data` (`data.ssn` removes the ssn field). A bare name removes a top-level key (`metadata` removes the whole metadata object). | [optional]
**headers** | **array<string,string>** | Headers to send with each request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
