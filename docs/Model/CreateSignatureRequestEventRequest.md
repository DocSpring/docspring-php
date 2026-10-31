# CreateSignatureRequestEventRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_type** | [**\DocSpring\Model\SignatureRequestEventType**](SignatureRequestEventType.md) | `send_request`: you sent the signature request to the person (`message_type` and `message_recipient` are required). It's the only event the API records: DocSpring records everything that happens in the signing form itself, and people decline a signature request in its form. |
**message_type** | [**\DocSpring\Model\SignatureRequestMessageType**](SignatureRequestMessageType.md) | How you sent the request. Required for `send_request`. | [optional]
**message_recipient** | **string** | Where you sent the request, such as an email address or a phone number. Required for `send_request`. | [optional]
**occurred_at** | **\DateTime** | When it happened. Default now. | [optional]

[[Back to Model list]](../../README.md#methods) [[Back to API list]](../../README.md#methods) [[Back to README]](../../README.md)
