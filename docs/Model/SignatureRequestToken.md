# SignatureRequestToken

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The token's ID. |
**signature_request_id** | **string** | The ID of the signature request the token opens. |
**type** | [**\DocSpring\Model\SignatureRequestTokenType**](SignatureRequestTokenType.md) | `api`: the link opens the signature request for 24 hours. `email`: 7 days. |
**secret** | **string** | The token's secret. It's only returned when the token is created. |
**signature_request_url** | **string** | A link that opens the signature request with this token. |
**expires_at** | **\DateTime** | When the link stops opening the signature request. |
**created_at** | **\DateTime** | When the token was created. |

[[Back to Model list]](../../README.md#methods) [[Back to API list]](../../README.md#methods) [[Back to README]](../../README.md)
