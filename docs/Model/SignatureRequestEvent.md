# SignatureRequestEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The event's ID. |
**submission_id** | **string** | The ID of the signature request's submission. |
**signature_request_id** | **string** | The ID of the signature request. |
**event_type** | [**\DocSpring\Model\SignatureRequestEventType**](SignatureRequestEventType.md) | What happened. |
**message_type** | [**\DocSpring\Model\SignatureRequestMessageType**](SignatureRequestMessageType.md) | How you sent the request. Required for `send_request`. |
**message_recipient** | **string** | Where you sent the request, such as an email address or a phone number. Required for `send_request`. |
**occurred_at** | **\DateTime** | When it happened. Default now. |
**created_at** | **\DateTime** | When the event was recorded. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
