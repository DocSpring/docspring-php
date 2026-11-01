# SignatureRequestInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the person the request is for. | [optional]
**email** | **string** | Their email address. Null when they have none. | [optional]
**fields** | **string[]** | The fields this person fills in. Each field can only be in one signature request, and a field that `data` fills in needs `prefilled_values_editable`. |
**metadata** | **array<string,mixed>** | Your own data about the signature request, such as an ID from your app. | [optional]
**role** | **string** | Which of the template's signers the person is: `Signer 1`, `Signer 2` and so on, up to `Signer 100`, until templates have roles of their own. Either every signature request has a `role` or none does, and each role can only have one. | [optional]
**auth_type** | [**\DocSpring\Model\SignatureRequestAuthType**](SignatureRequestAuthType.md) | How your app authenticated the person before it showed them the signature request. | [optional]
**auth_second_factor_type** | [**\DocSpring\Model\SignatureRequestAuthSecondFactorType**](SignatureRequestAuthSecondFactorType.md) | The second factor your app authenticated them with, if any. | [optional]
**auth_provider** | **string** | The service that authenticated them, such as `google`. Required when `auth_type` is `oauth`. | [optional]
**auth_session_started_at** | **\DateTime** | When your app authenticated them. Set for you with `email_link`. | [optional]
**auth_session_id_hash** | **string** | A hash of your app's session ID, for the audit trail. | [optional]
**auth_user_id_hash** | **string** | Their user ID in your app, or a SHA-256 hash of a salt and the user ID. | [optional]
**auth_username_hash** | **string** | Their username in your app, or a SHA-256 hash of a salt and the username. | [optional]
**auth_phone_number_hash** | **string** | The phone number they authenticated with, or a SHA-256 hash of a salt and the phone number. | [optional]
**ignore_unknown_fields** | **bool** | Leave out names in `fields` that the template doesn't have, for one field list that you send with several templates. Without it, an unknown name makes the submission `invalid_data`. | [optional]
**prefilled_values_editable** | **bool** | Let the person change the values that `data` already has for fields in `fields`. Without it, those fields are a 422. | [optional]
**send_email** | **bool** | Whether DocSpring emails this person their signing link. Default: the submission's `send_email`. Set it to false for someone who signs in your app (embedded signing) or whose link you send yourself. When DocSpring emails them, `email` is required and `auth_type` is `email_link` (the default). Otherwise `auth_type` is required. | [optional]
**signing_step** | **int** | When this person signs, with `signing_order: sequential`: everyone in step 1 first, then step 2, and so on. People in the same step sign in any order. Only the order of the numbers matters. Either every signature request has a `signing_step` or none does; without them, each person is a step of their own, in the order of `signature_requests`. | [optional]

[[Back to Model list]](../../README.md#methods) [[Back to API list]](../../README.md#methods) [[Back to README]](../../README.md)
