# DocSpring\Client



All URIs are relative to https://sync.api.docspring.com/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addTemplateFields()**](Client.md#addTemplateFields) | **POST** /templates/{template_id}/fields | Add fields to a template |
| [**copyTemplate()**](Client.md#copyTemplate) | **POST** /templates/{template_id}/copy | Copy a template |
| [**createCombinedPdf()**](Client.md#createCombinedPdf) | **POST** /combined_pdfs | Combine PDFs |
| [**createCustomFileFromUpload()**](Client.md#createCustomFileFromUpload) | **POST** /custom_files | Create a custom file from an upload |
| [**createFolder()**](Client.md#createFolder) | **POST** /folders | Create a folder |
| [**createSignatureRequestEvent()**](Client.md#createSignatureRequestEvent) | **POST** /signature_requests/{signature_request_id}/events | Record a signature request event |
| [**createSignatureRequestToken()**](Client.md#createSignatureRequestToken) | **POST** /signature_requests/{signature_request_id}/tokens | Create a signature request token |
| [**createSubmission()**](Client.md#createSubmission) | **POST** /templates/{template_id}/submissions | Generate a PDF |
| [**createSubmissionBatch()**](Client.md#createSubmissionBatch) | **POST** /submissions/batches | Generate PDFs in a batch |
| [**createTemplate()**](Client.md#createTemplate) | **POST** /templates | Create a template |
| [**createWebhook()**](Client.md#createWebhook) | **POST** /webhooks | Create a webhook |
| [**deleteCustomFile()**](Client.md#deleteCustomFile) | **DELETE** /custom_files/{custom_file_id} | Delete a custom file |
| [**deleteFolder()**](Client.md#deleteFolder) | **DELETE** /folders/{folder_id} | Delete a folder |
| [**deleteTemplate()**](Client.md#deleteTemplate) | **DELETE** /templates/{template_id} | Delete a template |
| [**deleteWebhook()**](Client.md#deleteWebhook) | **DELETE** /webhooks/{webhook_id} | Delete a webhook |
| [**expireCombinedPdf()**](Client.md#expireCombinedPdf) | **DELETE** /combined_pdfs/{combined_pdf_id} | Expire a combined PDF |
| [**expireSubmission()**](Client.md#expireSubmission) | **DELETE** /submissions/{submission_id} | Expire a submission |
| [**generateSubmissionFiles()**](Client.md#generateSubmissionFiles) | **POST** /submissions/{submission_id}/generate_files | Generate more files |
| [**generateSubmissionPreview()**](Client.md#generateSubmissionPreview) | **POST** /submissions/{submission_id}/generate_preview | Generate a preview PDF |
| [**getCombinedPdf()**](Client.md#getCombinedPdf) | **GET** /combined_pdfs/{combined_pdf_id} | Get a combined PDF |
| [**getCustomFile()**](Client.md#getCustomFile) | **GET** /custom_files/{custom_file_id} | Get a custom file |
| [**getFolder()**](Client.md#getFolder) | **GET** /folders/{folder_id} | Get a folder |
| [**getPresignUrl()**](Client.md#getPresignUrl) | **GET** /uploads/presign | Get a presigned URL to upload a file |
| [**getSignatureRequest()**](Client.md#getSignatureRequest) | **GET** /signature_requests/{signature_request_id} | Get a signature request |
| [**getSubmission()**](Client.md#getSubmission) | **GET** /submissions/{submission_id} | Get a submission |
| [**getSubmissionBatch()**](Client.md#getSubmissionBatch) | **GET** /submissions/batches/{submission_batch_id} | Get a batch |
| [**getTemplate()**](Client.md#getTemplate) | **GET** /templates/{template_id} | Get a template |
| [**getTemplateDiff()**](Client.md#getTemplateDiff) | **GET** /templates/{template_id}/diff | Compare a version of a template with the one before it |
| [**getTemplateModelCode()**](Client.md#getTemplateModelCode) | **GET** /templates/{template_id}/model_code | Generate typed code for a template's submission data |
| [**getTemplatePageImages()**](Client.md#getTemplatePageImages) | **GET** /templates/{template_id}/page_images | Get images of a template's pages |
| [**getTemplateSchema()**](Client.md#getTemplateSchema) | **GET** /templates/{template_id}/schema | Get the JSON Schema of a template's submission data |
| [**getWebhook()**](Client.md#getWebhook) | **GET** /webhooks/{webhook_id} | Get a webhook |
| [**listCombinedPdfs()**](Client.md#listCombinedPdfs) | **GET** /combined_pdfs | List combined PDFs |
| [**listCustomFiles()**](Client.md#listCustomFiles) | **GET** /custom_files | List custom files |
| [**listFolders()**](Client.md#listFolders) | **GET** /folders | List folders |
| [**listSubmissions()**](Client.md#listSubmissions) | **GET** /submissions | List submissions |
| [**listTemplateFields()**](Client.md#listTemplateFields) | **GET** /templates/{template_id}/fields | List a template's fields |
| [**listTemplateSubmissions()**](Client.md#listTemplateSubmissions) | **GET** /templates/{template_id}/submissions | List a template's submissions |
| [**listTemplates()**](Client.md#listTemplates) | **GET** /templates | List templates |
| [**listWebhooks()**](Client.md#listWebhooks) | **GET** /webhooks | List webhooks |
| [**moveFolder()**](Client.md#moveFolder) | **POST** /folders/{folder_id}/move | Move a folder |
| [**moveTemplate()**](Client.md#moveTemplate) | **POST** /templates/{template_id}/move | Move a template to a folder |
| [**publishTemplateVersion()**](Client.md#publishTemplateVersion) | **POST** /templates/{template_id}/publish_version | Publish a template version |
| [**removeTemplateFields()**](Client.md#removeTemplateFields) | **POST** /templates/{template_id}/fields/remove | Remove fields from a template |
| [**renameFolder()**](Client.md#renameFolder) | **POST** /folders/{folder_id}/rename | Rename a folder |
| [**reorderTemplateFields()**](Client.md#reorderTemplateFields) | **POST** /templates/{template_id}/fields/reorder | Reorder a template's fields |
| [**restoreTemplateVersion()**](Client.md#restoreTemplateVersion) | **POST** /templates/{template_id}/restore_version | Restore a template version |
| [**testAuthentication()**](Client.md#testAuthentication) | **GET** /authentication | Test authentication |
| [**updateSignatureRequest()**](Client.md#updateSignatureRequest) | **PUT** /signature_requests/{signature_request_id} | Update a signature request |
| [**updateTemplate()**](Client.md#updateTemplate) | **PUT** /templates/{template_id} | Update a template |
| [**updateTemplateDocument()**](Client.md#updateTemplateDocument) | **PUT** /templates/{template_id}/document | Replace a template's PDF |
| [**updateTemplateFields()**](Client.md#updateTemplateFields) | **PUT** /templates/{template_id}/fields | Update a template's fields |
| [**updateWebhook()**](Client.md#updateWebhook) | **PUT** /webhooks/{webhook_id} | Update a webhook |
| [**uploadTemplate()**](Client.md#uploadTemplate) | **POST** /templates/upload | Create a PDF template from an uploaded PDF |
| [**uploadTemplateDocument()**](Client.md#uploadTemplateDocument) | **PUT** /templates/{template_id}/document/upload | Replace a template's PDF with an uploaded PDF |
| [**validateSubmission()**](Client.md#validateSubmission) | **POST** /templates/{template_id}/submissions/validate | Check a submission without creating it |


## `addTemplateFields()`

```php
addTemplateFields($template_id, $body): \DocSpring\Model\TemplateFields
```

Add fields to a template

Adds fields to a template's draft and returns all of its fields. Publish a version for submissions of published versions to have them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | The template's ID.
$body = {"fields":[{"name":"email","page":1,"x":100,"y":300,"width":600,"height":80,"type":"email","required":true},{"name":"signature","page":1,"x":100,"y":400,"width":600,"height":150,"type":"signature","display_type":"image"}]}; // \DocSpring\Model\AddTemplateFieldsRequest | The fields to add to the template's draft.

try {
    $result = $apiInstance->addTemplateFields($template_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->addTemplateFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **body** | [**\DocSpring\Model\AddTemplateFieldsRequest**](../Model/AddTemplateFieldsRequest.md)| The fields to add to the template's draft. | |

### Return type

[**\DocSpring\Model\TemplateFields**](../Model/TemplateFields.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `copyTemplate()`

```php
copyTemplate($template_id, $body): \DocSpring\Model\Template
```

Copy a template

Copies a template (its draft, or a published version) into a new template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | The template's ID.
$body = {"parent_folder_id":"fld_1234567890abcdef01"}; // \DocSpring\Model\CopyTemplateRequest | Settings for the copy.

try {
    $result = $apiInstance->copyTemplate($template_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->copyTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **body** | [**\DocSpring\Model\CopyTemplateRequest**](../Model/CopyTemplateRequest.md)| Settings for the copy. | [optional] |

### Return type

[**\DocSpring\Model\Template**](../Model/Template.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCombinedPdf()`

```php
createCombinedPdf($body, $wait): \DocSpring\Model\CombinedPdf
```

Combine PDFs

Merges PDFs into one: submissions, other combined PDFs, templates, custom files (POST /custom_files) and PDFs from URLs, in the order of `source_pdfs`. The PDF is generated in the background: on sync.api hosts the request waits for it (unless you pass `wait=false`), otherwise poll GET /combined_pdfs/{combined_pdf_id} until `state` isn't `pending`.  A template source merges the template's processed PDF by default: the PDF submissions are filled in on, decrypted and with its form fields removed. Pass `processed: false` to merge the PDF as it was uploaded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = {"source_pdfs":[{"type":"submission","id":"sub_1234567890abcdef01"},{"type":"template","id":"tpl_1234567890abcdef01"},{"type":"url","url":"https://example.com/terms.pdf"}],"metadata":{"user_id":42},"password":"secret","expires_in":3600}; // \DocSpring\Model\CreateCombinedPdfRequest | The PDFs to merge, and the combined PDF's settings.
$wait = True; // bool | Wait until the PDF has been generated before responding. Default true on sync.api hosts.

try {
    $result = $apiInstance->createCombinedPdf($body, $wait);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->createCombinedPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\DocSpring\Model\CreateCombinedPdfRequest**](../Model/CreateCombinedPdfRequest.md)| The PDFs to merge, and the combined PDF's settings. | |
| **wait** | **bool**| Wait until the PDF has been generated before responding. Default true on sync.api hosts. | [optional] |

### Return type

[**\DocSpring\Model\CombinedPdf**](../Model/CombinedPdf.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCustomFileFromUpload()`

```php
createCustomFileFromUpload($body): \DocSpring\Model\CustomFile
```

Create a custom file from an upload

Creates a custom file from a PDF you uploaded, so you can merge it with other PDFs. Upload the file with the presigned upload (GET /uploads/presign) first, then pass its `fields.key` as `cache_id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = {"cache_id":"cfi_1234567890abcdef01.pdf"}; // \DocSpring\Model\CreateCustomFileFromUploadRequest | The uploaded file to create the custom file from.

try {
    $result = $apiInstance->createCustomFileFromUpload($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->createCustomFileFromUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\DocSpring\Model\CreateCustomFileFromUploadRequest**](../Model/CreateCustomFileFromUploadRequest.md)| The uploaded file to create the custom file from. | |

### Return type

[**\DocSpring\Model\CustomFile**](../Model/CustomFile.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFolder()`

```php
createFolder($body): \DocSpring\Model\Folder
```

Create a folder

Creates a folder for organizing templates. Pass `parent_folder_id` to create it inside another folder. Folder names are unique within their parent folder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = {"name":"Folder 3","parent_folder_id":"fld_1234567890abcdef01"}; // \DocSpring\Model\CreateFolderRequest | The folder to create.

try {
    $result = $apiInstance->createFolder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->createFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\DocSpring\Model\CreateFolderRequest**](../Model/CreateFolderRequest.md)| The folder to create. | |

### Return type

[**\DocSpring\Model\Folder**](../Model/Folder.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSignatureRequestEvent()`

```php
createSignatureRequestEvent($signature_request_id, $body): \DocSpring\Model\SignatureRequestEvent
```

Record a signature request event

Records something that happened outside DocSpring in the signature request's audit trail: you sent the request to the person (`send_request`). The audit trail shows it as reported by your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = srq_1234567890abcdef01; // string | The signature request's ID.
$body = {"event_type":"send_request","message_type":"email","message_recipient":"john@example.com","occurred_at":"2018-10-20T08:59:00Z"}; // \DocSpring\Model\CreateSignatureRequestEventRequest | The event to record.

try {
    $result = $apiInstance->createSignatureRequestEvent($signature_request_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->createSignatureRequestEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signature_request_id** | **string**| The signature request's ID. | |
| **body** | [**\DocSpring\Model\CreateSignatureRequestEventRequest**](../Model/CreateSignatureRequestEventRequest.md)| The event to record. | |

### Return type

[**\DocSpring\Model\SignatureRequestEvent**](../Model/SignatureRequestEvent.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSignatureRequestToken()`

```php
createSignatureRequestToken($signature_request_id, $body): \DocSpring\Model\SignatureRequestToken
```

Create a signature request token

Creates a token that opens the signature request without signing in, in a form embedded in your app or from a link you send. The response is the only time the token's secret is returned. The link works for 24 hours, or 7 days for an `email` token, and a signing page that opened in time keeps working for 7 more days. A test API token can't create a token for a live signature request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = srq_1234567890abcdef01; // string | The signature request's ID.
$body = {"type":"email"}; // \DocSpring\Model\CreateSignatureRequestTokenRequest | The kind of link to make. Send no body for an `api` token.

try {
    $result = $apiInstance->createSignatureRequestToken($signature_request_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->createSignatureRequestToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signature_request_id** | **string**| The signature request's ID. | |
| **body** | [**\DocSpring\Model\CreateSignatureRequestTokenRequest**](../Model/CreateSignatureRequestTokenRequest.md)| The kind of link to make. Send no body for an `api` token. | [optional] |

### Return type

[**\DocSpring\Model\SignatureRequestToken**](../Model/SignatureRequestToken.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSubmission()`

```php
createSubmission($template_id, $body, $version, $wait): \DocSpring\Model\Submission
```

Generate a PDF

Creates a submission: fills in a template with your data and generates a PDF. The PDF is generated in the background: on sync.api hosts the request waits for it (unless you pass `wait=false`), otherwise poll GET /submissions/{submission_id} until `state` isn't `pending`.  Data that doesn't match the template's fields returns a 422 with an `invalid_data` error. The submission is still saved, with its errors, so you can find it in DocSpring: the error's `submission_id` is its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | The template's ID.
$body = {"data":{"first_name":"John","last_name":"Smith","phone_number":"+11234567890"},"metadata":{"user_id":42},"test":true}; // \DocSpring\Model\CreateSubmissionRequest | The submission's data and settings.
$version = 'version_example'; // string | The template version to use: a published version (`1.2.0`, or `1` for the latest 1.x.x), `latest` or `draft`. Default `latest` (the draft when no version has been published).
$wait = True; // bool | Wait until the files have been generated before responding. Default true on sync.api hosts.

try {
    $result = $apiInstance->createSubmission($template_id, $body, $version, $wait);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->createSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **body** | [**\DocSpring\Model\CreateSubmissionRequest**](../Model/CreateSubmissionRequest.md)| The submission's data and settings. | |
| **version** | **string**| The template version to use: a published version (`1.2.0`, or `1` for the latest 1.x.x), `latest` or `draft`. Default `latest` (the draft when no version has been published). | [optional] |
| **wait** | **bool**| Wait until the files have been generated before responding. Default true on sync.api hosts. | [optional] |

### Return type

[**\DocSpring\Model\Submission**](../Model/Submission.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSubmissionBatch()`

```php
createSubmissionBatch($body, $wait): \DocSpring\Model\SubmissionBatch
```

Generate PDFs in a batch

Creates up to 50 submissions in one request, from one template or several. The PDFs are only generated when every submission is valid. On sync.api hosts the request waits until every PDF has been generated (unless you pass `wait=false`), otherwise poll GET /submissions/batches/{submission_batch_id} until `processed_at` is set.  When any submission is invalid, nothing is generated and the request returns a 422. Submissions whose data doesn't match their template's fields are still saved with their errors (an `invalid_data` error, with each one's `submission_id` in its details), so you can find them in DocSpring. The other submissions aren't saved.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = {"template_id":"tpl_1234567890abcdef01","metadata":{"job_id":54321},"submissions":[{"data":{"first_name":"John","last_name":"Smith"},"metadata":{"row":1}},{"data":{"first_name":"Jane","last_name":"Doe"},"test":true,"metadata":{"row":2}}]}; // \DocSpring\Model\CreateSubmissionBatchRequest | The submissions to create, and the settings they share.
$wait = True; // bool | Wait until every PDF in the batch has been generated before responding. Default true on sync.api hosts.

try {
    $result = $apiInstance->createSubmissionBatch($body, $wait);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->createSubmissionBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\DocSpring\Model\CreateSubmissionBatchRequest**](../Model/CreateSubmissionBatchRequest.md)| The submissions to create, and the settings they share. | |
| **wait** | **bool**| Wait until every PDF in the batch has been generated before responding. Default true on sync.api hosts. | [optional] |

### Return type

[**\DocSpring\Model\SubmissionBatch**](../Model/SubmissionBatch.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTemplate()`

```php
createTemplate($body, $wait): \DocSpring\Model\Template
```

Create a template

Creates an HTML template, or a PDF template from a PDF you uploaded with the presigned upload (GET /uploads/presign): pass its `fields.key` as `cache_id`. To send the PDF with the request instead, use POST /templates/upload.  A PDF template is ready to generate PDFs once DocSpring has processed its PDF (`ready` is true). On sync.api hosts the request waits for that unless you pass `wait=false`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = {"template_type":"html","name":"Receipt","html":"<h1>Receipt for {{ name }}</h1>","scss":"h1 { font-size: 24px; }","html_engine_options":{"format":"A4","landscape":true},"parent_folder_id":"fld_1234567890abcdef01"}; // \DocSpring\Model\CreateTemplateRequest | The template to create.
$wait = True; // bool | Wait until the PDF has been processed, and a `document_url` downloaded, before responding. Default true on sync.api hosts.

try {
    $result = $apiInstance->createTemplate($body, $wait);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->createTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\DocSpring\Model\CreateTemplateRequest**](../Model/CreateTemplateRequest.md)| The template to create. | |
| **wait** | **bool**| Wait until the PDF has been processed, and a `document_url` downloaded, before responding. Default true on sync.api hosts. | [optional] |

### Return type

[**\DocSpring\Model\Template**](../Model/Template.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWebhook()`

```php
createWebhook($body): \DocSpring\Model\Webhook
```

Create a webhook

Creates a webhook that sends a POST request to your endpoint whenever a subscribed event happens. Scope it to API tokens, templates or folders to receive only their events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = {"name":"Test Webhook","url":"https://example.com/webhook","event_types":["submission.processed","signature_request.completed"],"template_ids":["tpl_1234567890abcdef01"],"headers":{"X-Zapier-Subscription":"123"}}; // \DocSpring\Model\CreateWebhookRequest | The webhook to create.

try {
    $result = $apiInstance->createWebhook($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->createWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\DocSpring\Model\CreateWebhookRequest**](../Model/CreateWebhookRequest.md)| The webhook to create. | |

### Return type

[**\DocSpring\Model\Webhook**](../Model/Webhook.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomFile()`

```php
deleteCustomFile($custom_file_id): \DocSpring\Model\CustomFile
```

Delete a custom file

Deletes a custom file and returns it. Use a live API token: test tokens can't delete custom files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_file_id = 'custom_file_id_example'; // string | The custom file's ID.

try {
    $result = $apiInstance->deleteCustomFile($custom_file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->deleteCustomFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_file_id** | **string**| The custom file's ID. | |

### Return type

[**\DocSpring\Model\CustomFile**](../Model/CustomFile.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFolder()`

```php
deleteFolder($folder_id): \DocSpring\Model\Folder
```

Delete a folder

Deletes an empty folder and returns it. A folder that still has templates or folders in it can't be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 'folder_id_example'; // string | The folder's ID.

try {
    $result = $apiInstance->deleteFolder($folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->deleteFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **string**| The folder's ID. | |

### Return type

[**\DocSpring\Model\Folder**](../Model/Folder.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTemplate()`

```php
deleteTemplate($template_id, $version): \DocSpring\Model\Template
```

Delete a template

Deletes a template's draft and all of its published versions, or one published version (`version`). Returns the template as it was before it was deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef02; // string | The template's ID.
$version = 'version_example'; // string | Delete only this published version (`1.2.0`) or the draft (`draft`, when no version has been published). Without it, the draft and every published version are deleted.

try {
    $result = $apiInstance->deleteTemplate($template_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->deleteTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **version** | **string**| Delete only this published version (`1.2.0`) or the draft (`draft`, when no version has been published). Without it, the draft and every published version are deleted. | [optional] |

### Return type

[**\DocSpring\Model\Template**](../Model/Template.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhook()`

```php
deleteWebhook($webhook_id): \DocSpring\Model\Webhook
```

Delete a webhook

Deletes a webhook so it stops receiving events, and returns it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string | The webhook's ID.

try {
    $result = $apiInstance->deleteWebhook($webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**| The webhook's ID. | |

### Return type

[**\DocSpring\Model\Webhook**](../Model/Webhook.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `expireCombinedPdf()`

```php
expireCombinedPdf($combined_pdf_id): \DocSpring\Model\CombinedPdf
```

Expire a combined PDF

Deletes a combined PDF's PDF and returns the expired combined PDF.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$combined_pdf_id = com_1234567890abcdef05; // string | The combined PDF's ID.

try {
    $result = $apiInstance->expireCombinedPdf($combined_pdf_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->expireCombinedPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **combined_pdf_id** | **string**| The combined PDF's ID. | |

### Return type

[**\DocSpring\Model\CombinedPdf**](../Model/CombinedPdf.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `expireSubmission()`

```php
expireSubmission($submission_id): \DocSpring\Model\Submission
```

Expire a submission

Deletes a submission's data and PDF now, and returns the expired submission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$submission_id = sub_1234567890abcdef01; // string | The submission's ID.

try {
    $result = $apiInstance->expireSubmission($submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->expireSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**| The submission's ID. | |

### Return type

[**\DocSpring\Model\Submission**](../Model/Submission.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateSubmissionFiles()`

```php
generateSubmissionFiles($submission_id, $body, $wait): \DocSpring\Model\Submission
```

Generate more files

Adds formats to a processed submission's files, in the background: `png`, a PNG image of each page of the PDF (up to 100 pages). To make them with the submission, add them to `output_formats` when you create it.  Each new file is listed in `files` while it's made: on sync.api hosts the request waits for them (unless you pass `wait=false`), otherwise poll GET /submissions/{submission_id} until none of their `state` is `pending`. A file that couldn't be made has the state `error` and an `error_message`, and the submission stays processed. Asking for a format the submission already has (or is making) changes nothing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$submission_id = sub_1234567890abcdef01; // string | The submission's ID.
$body = {"formats":["png"]}; // \DocSpring\Model\GenerateSubmissionFilesRequest | The formats to make.
$wait = True; // bool | Wait until the files have been generated before responding. Default true on sync.api hosts.

try {
    $result = $apiInstance->generateSubmissionFiles($submission_id, $body, $wait);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->generateSubmissionFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**| The submission's ID. | |
| **body** | [**\DocSpring\Model\GenerateSubmissionFilesRequest**](../Model/GenerateSubmissionFilesRequest.md)| The formats to make. | |
| **wait** | **bool**| Wait until the files have been generated before responding. Default true on sync.api hosts. | [optional] |

### Return type

[**\DocSpring\Model\Submission**](../Model/Submission.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateSubmissionPreview()`

```php
generateSubmissionPreview($submission_id): \DocSpring\Model\Submission
```

Generate a preview PDF

Generates a preview of a submission's PDF in the background, such as for a submission still waiting for its signature requests. It's in `files.preview` once `preview_generated_at` changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$submission_id = sub_1234567890abcdef03; // string | The submission's ID.

try {
    $result = $apiInstance->generateSubmissionPreview($submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->generateSubmissionPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**| The submission's ID. | |

### Return type

[**\DocSpring\Model\Submission**](../Model/Submission.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCombinedPdf()`

```php
getCombinedPdf($combined_pdf_id): \DocSpring\Model\CombinedPdf
```

Get a combined PDF

Returns a combined PDF, with a temporary link to download it once it has been generated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$combined_pdf_id = com_1234567890abcdef05; // string | The combined PDF's ID.

try {
    $result = $apiInstance->getCombinedPdf($combined_pdf_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->getCombinedPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **combined_pdf_id** | **string**| The combined PDF's ID. | |

### Return type

[**\DocSpring\Model\CombinedPdf**](../Model/CombinedPdf.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomFile()`

```php
getCustomFile($custom_file_id): \DocSpring\Model\CustomFile
```

Get a custom file

Returns a custom file, with a temporary URL to download it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_file_id = 'custom_file_id_example'; // string | The custom file's ID.

try {
    $result = $apiInstance->getCustomFile($custom_file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->getCustomFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_file_id** | **string**| The custom file's ID. | |

### Return type

[**\DocSpring\Model\CustomFile**](../Model/CustomFile.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolder()`

```php
getFolder($folder_id): \DocSpring\Model\Folder
```

Get a folder

Returns a folder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 'folder_id_example'; // string | The folder's ID.

try {
    $result = $apiInstance->getFolder($folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->getFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **string**| The folder's ID. | |

### Return type

[**\DocSpring\Model\Folder**](../Model/Folder.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPresignUrl()`

```php
getPresignUrl(): \DocSpring\Model\UploadPresign
```

Get a presigned URL to upload a file

Returns a presigned S3 form for uploading a file directly to DocSpring, for files too large to send in a request body. POST the `fields` and the file (as `file`) to `url` as multipart/form-data, then pass `fields.key` as the `cache_id` when you create a custom file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPresignUrl();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->getPresignUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\DocSpring\Model\UploadPresign**](../Model/UploadPresign.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSignatureRequest()`

```php
getSignatureRequest($signature_request_id): \DocSpring\Model\SignatureRequest
```

Get a signature request

Returns a signature request, with the values the person has entered so far.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = srq_1234567890abcdef01; // string | The signature request's ID.

try {
    $result = $apiInstance->getSignatureRequest($signature_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->getSignatureRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signature_request_id** | **string**| The signature request's ID. | |

### Return type

[**\DocSpring\Model\SignatureRequest**](../Model/SignatureRequest.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubmission()`

```php
getSubmission($submission_id): \DocSpring\Model\Submission
```

Get a submission

Returns a submission, with its data and links to download its PDF.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$submission_id = sub_1234567890abcdef01; // string | The submission's ID.

try {
    $result = $apiInstance->getSubmission($submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->getSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**| The submission's ID. | |

### Return type

[**\DocSpring\Model\Submission**](../Model/Submission.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubmissionBatch()`

```php
getSubmissionBatch($submission_batch_id, $include_data): \DocSpring\Model\SubmissionBatch
```

Get a batch

Returns a batch with its submissions. The batch has finished once `processed_at` is set: its `state` is `processed` when every PDF was generated, or `error` when any submission failed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$submission_batch_id = sbb_1234567890abcdef05; // string | The batch's ID.
$include_data = true; // bool | Include each submission's `data` (null without it).

try {
    $result = $apiInstance->getSubmissionBatch($submission_batch_id, $include_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->getSubmissionBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_batch_id** | **string**| The batch's ID. | |
| **include_data** | **bool**| Include each submission's `data` (null without it). | [optional] |

### Return type

[**\DocSpring\Model\SubmissionBatch**](../Model/SubmissionBatch.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplate()`

```php
getTemplate($template_id, $version): \DocSpring\Model\Template
```

Get a template

Returns a template: its draft, or one of its published versions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | The template's ID.
$version = latest; // string | A published version (`1.2.0`, or `1` for the latest 1.x.x), `latest` or `draft`. Default `draft`.

try {
    $result = $apiInstance->getTemplate($template_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->getTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **version** | **string**| A published version (`1.2.0`, or `1` for the latest 1.x.x), `latest` or `draft`. Default `draft`. | [optional] |

### Return type

[**\DocSpring\Model\Template**](../Model/Template.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplateDiff()`

```php
getTemplateDiff($template_id, $version): \DocSpring\Model\TemplateDiff
```

Compare a version of a template with the one before it

Returns what changed in the template's draft since its latest published version (or in a published version since the one before it): fields added, removed, changed and moved, the settings that changed, and whether the document was replaced. Check it before you publish a version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | The template's ID.
$version = 0.1.0; // string | A published version (`1.2.0`, or `1` for the latest 1.x.x), `latest` or `draft`. Default `draft`.

try {
    $result = $apiInstance->getTemplateDiff($template_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->getTemplateDiff: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **version** | **string**| A published version (`1.2.0`, or `1` for the latest 1.x.x), `latest` or `draft`. Default `draft`. | [optional] |

### Return type

[**\DocSpring\Model\TemplateDiff**](../Model/TemplateDiff.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplateModelCode()`

```php
getTemplateModelCode($template_id, $lang, $version): \DocSpring\Model\TemplateModelCode
```

Generate typed code for a template's submission data

Generates types for a template's submission data in TypeScript, JavaScript, Ruby, Python, PHP, Java, C#, Elixir or Go, so your app catches mistakes before it calls the API. `root_type_name` is the type of the whole `data` object. Java returns every class in `code`, each under a `// ClassName.java` comment. A template with no named fields returns 422.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | The template's ID.
$lang = typescript; // \DocSpring\Model\ModelCodeLanguage | The language to generate the code in.
$version = draft; // string | The template version: a published version (`1.2.0`, or `1` for the latest 1.x.x), `latest` or `draft`. Default `latest` (the draft when no version has been published), the version a submission uses by default.

try {
    $result = $apiInstance->getTemplateModelCode($template_id, $lang, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->getTemplateModelCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **lang** | [**\DocSpring\Model\ModelCodeLanguage**](../Model/.md)| The language to generate the code in. | |
| **version** | **string**| The template version: a published version (`1.2.0`, or `1` for the latest 1.x.x), `latest` or `draft`. Default `latest` (the draft when no version has been published), the version a submission uses by default. | [optional] |

### Return type

[**\DocSpring\Model\TemplateModelCode**](../Model/TemplateModelCode.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplatePageImages()`

```php
getTemplatePageImages($template_id, $version): \DocSpring\Model\TemplatePageImages
```

Get images of a template's pages

Returns a JPEG image of each page of a PDF template's PDF, with temporary links to download them: the draft's PDF, or a published version's. Use them to see the pages that fields are placed on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | The template's ID.
$version = latest; // string | A published version (`1.2.0`, or `1` for the latest 1.x.x), `latest` or `draft`. Default `draft`.

try {
    $result = $apiInstance->getTemplatePageImages($template_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->getTemplatePageImages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **version** | **string**| A published version (`1.2.0`, or `1` for the latest 1.x.x), `latest` or `draft`. Default `draft`. | [optional] |

### Return type

[**\DocSpring\Model\TemplatePageImages**](../Model/TemplatePageImages.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplateSchema()`

```php
getTemplateSchema($template_id, $version): array<string,mixed>
```

Get the JSON Schema of a template's submission data

Returns the JSON Schema that a submission's `data` must match. Use it to check data before you create submissions, or to build a form for the template's fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | The template's ID.
$version = draft; // string | The template version: a published version (`1.2.0`, or `1` for the latest 1.x.x), `latest` or `draft`. Default `latest` (the draft when no version has been published), the version a submission uses by default.

try {
    $result = $apiInstance->getTemplateSchema($template_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->getTemplateSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **version** | **string**| The template version: a published version (`1.2.0`, or `1` for the latest 1.x.x), `latest` or `draft`. Default `latest` (the draft when no version has been published), the version a submission uses by default. | [optional] |

### Return type

**array<string,mixed>**

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhook()`

```php
getWebhook($webhook_id): \DocSpring\Model\Webhook
```

Get a webhook

Returns a webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string | The webhook's ID.

try {
    $result = $apiInstance->getWebhook($webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->getWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**| The webhook's ID. | |

### Return type

[**\DocSpring\Model\Webhook**](../Model/Webhook.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCombinedPdfs()`

```php
listCombinedPdfs($limit, $cursor): \DocSpring\Model\CombinedPdfList
```

List combined PDFs

Returns the combined PDFs in your account, newest first, one page at a time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | How many items to return (1-100, default 50).
$cursor = 'cursor_example'; // string | The previous page's `next_cursor`, to get the next page. It's the ID of that page's last item, so get the next page before you delete or change the items on this one.

try {
    $result = $apiInstance->listCombinedPdfs($limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->listCombinedPdfs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| How many items to return (1-100, default 50). | [optional] [default to 50] |
| **cursor** | **string**| The previous page's `next_cursor`, to get the next page. It's the ID of that page's last item, so get the next page before you delete or change the items on this one. | [optional] |

### Return type

[**\DocSpring\Model\CombinedPdfList**](../Model/CombinedPdfList.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomFiles()`

```php
listCustomFiles($limit, $cursor): \DocSpring\Model\CustomFileList
```

List custom files

Returns the custom files in your account, newest first, one page at a time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | How many items to return (1-100, default 50).
$cursor = 'cursor_example'; // string | The previous page's `next_cursor`, to get the next page. It's the ID of that page's last item, so get the next page before you delete or change the items on this one.

try {
    $result = $apiInstance->listCustomFiles($limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->listCustomFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| How many items to return (1-100, default 50). | [optional] [default to 50] |
| **cursor** | **string**| The previous page's `next_cursor`, to get the next page. It's the ID of that page's last item, so get the next page before you delete or change the items on this one. | [optional] |

### Return type

[**\DocSpring\Model\CustomFileList**](../Model/CustomFileList.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFolders()`

```php
listFolders($parent_folder_id, $limit, $cursor): \DocSpring\Model\FolderList
```

List folders

Returns the folders in your account, newest first, one page at a time. Pass `parent_folder_id` to list the folders in one folder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_folder_id = fld_1234567890abcdef02; // string | Only list the folders in this folder. Without it, the list has every folder, at any depth.
$limit = 2; // int | How many items to return (1-100, default 50).
$cursor = fld_1234567890abcdef02; // string | The previous page's `next_cursor`, to get the next page. It's the ID of that page's last item, so get the next page before you delete or change the items on this one.

try {
    $result = $apiInstance->listFolders($parent_folder_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->listFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parent_folder_id** | **string**| Only list the folders in this folder. Without it, the list has every folder, at any depth. | [optional] |
| **limit** | **int**| How many items to return (1-100, default 50). | [optional] [default to 50] |
| **cursor** | **string**| The previous page's `next_cursor`, to get the next page. It's the ID of that page's last item, so get the next page before you delete or change the items on this one. | [optional] |

### Return type

[**\DocSpring\Model\FolderList**](../Model/FolderList.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSubmissions()`

```php
listSubmissions($template_id, $test, $created_after, $created_before, $include_data, $limit, $cursor): \DocSpring\Model\SubmissionList
```

List submissions

Returns the submissions in your account, newest first, one page at a time. Lists leave out each submission's `data` unless you pass `include_data=true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | Only list this template's submissions.
$test = false; // bool | Only list test submissions (true) or live submissions (false).
$created_after = 2018-10-20T08:40:00Z; // \DateTime | Only list submissions created after this time (RFC 3339, such as `2025-01-31T09:00:00Z`).
$created_before = 2018-10-20T09:00:00Z; // \DateTime | Only list submissions created before this time.
$include_data = true; // bool | Include each submission's `data` (null without it).
$limit = 50; // int | How many items to return (1-100, default 50).
$cursor = 'cursor_example'; // string | The previous page's `next_cursor`, to get the next page. It's the ID of that page's last item, so get the next page before you delete or change the items on this one.

try {
    $result = $apiInstance->listSubmissions($template_id, $test, $created_after, $created_before, $include_data, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->listSubmissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| Only list this template's submissions. | [optional] |
| **test** | **bool**| Only list test submissions (true) or live submissions (false). | [optional] |
| **created_after** | **\DateTime**| Only list submissions created after this time (RFC 3339, such as `2025-01-31T09:00:00Z`). | [optional] |
| **created_before** | **\DateTime**| Only list submissions created before this time. | [optional] |
| **include_data** | **bool**| Include each submission's `data` (null without it). | [optional] |
| **limit** | **int**| How many items to return (1-100, default 50). | [optional] [default to 50] |
| **cursor** | **string**| The previous page's `next_cursor`, to get the next page. It's the ID of that page's last item, so get the next page before you delete or change the items on this one. | [optional] |

### Return type

[**\DocSpring\Model\SubmissionList**](../Model/SubmissionList.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTemplateFields()`

```php
listTemplateFields($template_id, $version): \DocSpring\Model\TemplateFields
```

List a template's fields

Returns a template's fields with all of their settings, page by page: the draft's fields, or a published version's. A PDF template's fields are placed on its pages: GET /templates/{template_id}/page_images has images of the pages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | The template's ID.
$version = latest; // string | A published version (`1.2.0`, or `1` for the latest 1.x.x), `latest` or `draft`. Default `draft`.

try {
    $result = $apiInstance->listTemplateFields($template_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->listTemplateFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **version** | **string**| A published version (`1.2.0`, or `1` for the latest 1.x.x), `latest` or `draft`. Default `draft`. | [optional] |

### Return type

[**\DocSpring\Model\TemplateFields**](../Model/TemplateFields.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTemplateSubmissions()`

```php
listTemplateSubmissions($template_id, $test, $created_after, $created_before, $include_data, $limit, $cursor): \DocSpring\Model\SubmissionList
```

List a template's submissions

Returns a template's submissions (from every version of the template), newest first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | The template's ID.
$test = True; // bool | Only list test submissions (true) or live submissions (false).
$created_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only list submissions created after this time (RFC 3339, such as `2025-01-31T09:00:00Z`).
$created_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only list submissions created before this time.
$include_data = True; // bool | Include each submission's `data` (null without it).
$limit = 50; // int | How many items to return (1-100, default 50).
$cursor = 'cursor_example'; // string | The previous page's `next_cursor`, to get the next page. It's the ID of that page's last item, so get the next page before you delete or change the items on this one.

try {
    $result = $apiInstance->listTemplateSubmissions($template_id, $test, $created_after, $created_before, $include_data, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->listTemplateSubmissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **test** | **bool**| Only list test submissions (true) or live submissions (false). | [optional] |
| **created_after** | **\DateTime**| Only list submissions created after this time (RFC 3339, such as `2025-01-31T09:00:00Z`). | [optional] |
| **created_before** | **\DateTime**| Only list submissions created before this time. | [optional] |
| **include_data** | **bool**| Include each submission's `data` (null without it). | [optional] |
| **limit** | **int**| How many items to return (1-100, default 50). | [optional] [default to 50] |
| **cursor** | **string**| The previous page's `next_cursor`, to get the next page. It's the ID of that page's last item, so get the next page before you delete or change the items on this one. | [optional] |

### Return type

[**\DocSpring\Model\SubmissionList**](../Model/SubmissionList.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTemplates()`

```php
listTemplates($query, $parent_folder_id, $limit, $cursor): \DocSpring\Model\TemplateSummaryList
```

List templates

Returns the templates in your account (their drafts), newest first, one page at a time. Get a template by its ID for its HTML, defaults and published versions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = rental; // string | Only list templates whose name contains this text (ignoring case).
$parent_folder_id = fld_1234567890abcdef01; // string | Only list the templates in this folder (not in its subfolders).
$limit = 1; // int | How many items to return (1-100, default 50).
$cursor = 'cursor_example'; // string | The previous page's `next_cursor`, to get the next page. It's the ID of that page's last item, so get the next page before you delete or change the items on this one.

try {
    $result = $apiInstance->listTemplates($query, $parent_folder_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->listTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| Only list templates whose name contains this text (ignoring case). | [optional] |
| **parent_folder_id** | **string**| Only list the templates in this folder (not in its subfolders). | [optional] |
| **limit** | **int**| How many items to return (1-100, default 50). | [optional] [default to 50] |
| **cursor** | **string**| The previous page's `next_cursor`, to get the next page. It's the ID of that page's last item, so get the next page before you delete or change the items on this one. | [optional] |

### Return type

[**\DocSpring\Model\TemplateSummaryList**](../Model/TemplateSummaryList.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebhooks()`

```php
listWebhooks($event_type, $mode, $template_id, $folder_id, $api_token_id, $limit, $cursor): \DocSpring\Model\WebhookList
```

List webhooks

Returns the webhooks in your account, newest first, one page at a time. Filter them by event type, mode, or the API token, template or folder they're scoped to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_type = submission.processed; // \DocSpring\Model\WebhookEventType | Only list webhooks that subscribe to this event.
$mode = new \DocSpring\Model\\DocSpring\Model\WebhookMode(); // \DocSpring\Model\WebhookMode | Only list webhooks set to this mode.
$template_id = tpl_1234567890abcdef01; // string | Only list webhooks scoped to this template.
$folder_id = 'folder_id_example'; // string | Only list webhooks scoped to this folder.
$api_token_id = 'api_token_id_example'; // string | Only list webhooks scoped to this API token.
$limit = 50; // int | How many items to return (1-100, default 50).
$cursor = 'cursor_example'; // string | The previous page's `next_cursor`, to get the next page. It's the ID of that page's last item, so get the next page before you delete or change the items on this one.

try {
    $result = $apiInstance->listWebhooks($event_type, $mode, $template_id, $folder_id, $api_token_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->listWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_type** | [**\DocSpring\Model\WebhookEventType**](../Model/.md)| Only list webhooks that subscribe to this event. | [optional] |
| **mode** | [**\DocSpring\Model\WebhookMode**](../Model/.md)| Only list webhooks set to this mode. | [optional] |
| **template_id** | **string**| Only list webhooks scoped to this template. | [optional] |
| **folder_id** | **string**| Only list webhooks scoped to this folder. | [optional] |
| **api_token_id** | **string**| Only list webhooks scoped to this API token. | [optional] |
| **limit** | **int**| How many items to return (1-100, default 50). | [optional] [default to 50] |
| **cursor** | **string**| The previous page's `next_cursor`, to get the next page. It's the ID of that page's last item, so get the next page before you delete or change the items on this one. | [optional] |

### Return type

[**\DocSpring\Model\WebhookList**](../Model/WebhookList.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveFolder()`

```php
moveFolder($folder_id, $body): \DocSpring\Model\Folder
```

Move a folder

Moves a folder into another folder, or to the root with `parent_folder_id: null`. Its templates and folders move with it. A folder can't move into itself or one of its own folders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 'folder_id_example'; // string | The folder's ID.
$body = {"parent_folder_id":"fld_1234567890abcdef02"}; // \DocSpring\Model\MoveFolderRequest | Where to move the folder.

try {
    $result = $apiInstance->moveFolder($folder_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->moveFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **string**| The folder's ID. | |
| **body** | [**\DocSpring\Model\MoveFolderRequest**](../Model/MoveFolderRequest.md)| Where to move the folder. | |

### Return type

[**\DocSpring\Model\Folder**](../Model/Folder.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveTemplate()`

```php
moveTemplate($template_id, $body): \DocSpring\Model\Template
```

Move a template to a folder

Moves a template and all of its published versions to a folder, or to the root (`null`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | The template's ID.
$body = {"parent_folder_id":null}; // \DocSpring\Model\MoveTemplateRequest | Where to move the template.

try {
    $result = $apiInstance->moveTemplate($template_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->moveTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **body** | [**\DocSpring\Model\MoveTemplateRequest**](../Model/MoveTemplateRequest.md)| Where to move the template. | |

### Return type

[**\DocSpring\Model\Template**](../Model/Template.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publishTemplateVersion()`

```php
publishTemplateVersion($template_id, $body): \DocSpring\Model\TemplateVersion
```

Publish a template version

Publishes the template's draft as a new version that doesn't change. `version_type` says which part of the latest version number goes up. While the template's PDF is downloading or being processed, or DocSpring is setting up its fields, it returns a 409 that says so.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | The template's ID.
$body = {"version_type":"minor","description":"Added the signature fields"}; // \DocSpring\Model\PublishTemplateVersionRequest | The version to publish.

try {
    $result = $apiInstance->publishTemplateVersion($template_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->publishTemplateVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **body** | [**\DocSpring\Model\PublishTemplateVersionRequest**](../Model/PublishTemplateVersionRequest.md)| The version to publish. | |

### Return type

[**\DocSpring\Model\TemplateVersion**](../Model/TemplateVersion.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeTemplateFields()`

```php
removeTemplateFields($template_id, $body): \DocSpring\Model\TemplateFields
```

Remove fields from a template

Removes fields from a template's draft and returns the fields that are left. Conditional logic that used only the removed fields is removed too.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | The template's ID.
$body = {"field_ids":[3]}; // \DocSpring\Model\RemoveTemplateFieldsRequest | The fields to remove from the template's draft.

try {
    $result = $apiInstance->removeTemplateFields($template_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->removeTemplateFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **body** | [**\DocSpring\Model\RemoveTemplateFieldsRequest**](../Model/RemoveTemplateFieldsRequest.md)| The fields to remove from the template's draft. | |

### Return type

[**\DocSpring\Model\TemplateFields**](../Model/TemplateFields.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renameFolder()`

```php
renameFolder($folder_id, $body): \DocSpring\Model\Folder
```

Rename a folder

Renames a folder. The name must be unique within its parent folder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 'folder_id_example'; // string | The folder's ID.
$body = {"name":"Folder 3"}; // \DocSpring\Model\RenameFolderRequest | The folder's new name.

try {
    $result = $apiInstance->renameFolder($folder_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->renameFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **string**| The folder's ID. | |
| **body** | [**\DocSpring\Model\RenameFolderRequest**](../Model/RenameFolderRequest.md)| The folder's new name. | |

### Return type

[**\DocSpring\Model\Folder**](../Model/Folder.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reorderTemplateFields()`

```php
reorderTemplateFields($template_id, $body): \DocSpring\Model\TemplateFields
```

Reorder a template's fields

Changes the order of the fields in a template's draft and returns them in their new order. Send every field's ID: each field stays on its page, and a page's fields are printed in this order, so a later field prints over an earlier one where they overlap. Their values are in this order in the template's data schema and forms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | The template's ID.
$body = {"field_ids":[3,1,2]}; // \DocSpring\Model\ReorderTemplateFieldsRequest | The new order of the fields in the template's draft.

try {
    $result = $apiInstance->reorderTemplateFields($template_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->reorderTemplateFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **body** | [**\DocSpring\Model\ReorderTemplateFieldsRequest**](../Model/ReorderTemplateFieldsRequest.md)| The new order of the fields in the template's draft. | |

### Return type

[**\DocSpring\Model\TemplateFields**](../Model/TemplateFields.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreTemplateVersion()`

```php
restoreTemplateVersion($template_id, $body): \DocSpring\Model\Template
```

Restore a template version

Replaces the template's draft with a copy of one of its published versions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | The template's ID.
$body = {"version":"0.1.0"}; // \DocSpring\Model\RestoreTemplateVersionRequest | The version to restore.

try {
    $result = $apiInstance->restoreTemplateVersion($template_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->restoreTemplateVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **body** | [**\DocSpring\Model\RestoreTemplateVersionRequest**](../Model/RestoreTemplateVersionRequest.md)| The version to restore. | |

### Return type

[**\DocSpring\Model\Template**](../Model/Template.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testAuthentication()`

```php
testAuthentication(): \DocSpring\Model\AuthenticationCheck
```

Test authentication

Checks whether your API token is valid by making an authenticated request. This endpoint is useful for verifying credentials during setup or troubleshooting issues.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->testAuthentication();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->testAuthentication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\DocSpring\Model\AuthenticationCheck**](../Model/AuthenticationCheck.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSignatureRequest()`

```php
updateSignatureRequest($signature_request_id, $body): \DocSpring\Model\SignatureRequest
```

Update a signature request

Changes a pending signature request's metadata, or how your app authenticated the person (for the audit trail). Once the person has opened it, only its metadata can be changed, and a completed or declined signature request can't be changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = srq_1234567890abcdef01; // string | The signature request's ID.
$body = {"metadata":{"user_id":43},"auth_type":"oauth","auth_provider":"google","auth_session_started_at":"2018-10-20T08:00:00Z","auth_user_id_hash":"8ae0e445664ca53407906db8638d8ba07a2383f656383a4427bed1ab645ca29a"}; // \DocSpring\Model\UpdateSignatureRequestRequest | The settings to change. Properties left out keep their values.

try {
    $result = $apiInstance->updateSignatureRequest($signature_request_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->updateSignatureRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signature_request_id** | **string**| The signature request's ID. | |
| **body** | [**\DocSpring\Model\UpdateSignatureRequestRequest**](../Model/UpdateSignatureRequestRequest.md)| The settings to change. Properties left out keep their values. | |

### Return type

[**\DocSpring\Model\SignatureRequest**](../Model/SignatureRequest.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTemplate()`

```php
updateTemplate($template_id, $body): \DocSpring\Model\Template
```

Update a template

Changes a template's draft. Properties left out keep their values. `defaults` and `html_engine_options` replace the whole object, and `field_groups` changes only the groups it lists. Setting `parent_folder_id` moves the template and all of its published versions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | The template's ID.
$body = {"name":"Rental Contract 2025","parent_folder_id":null,"slack_webhook_url":"https://hooks.slack.com/services/T000/B000/XXXX","encrypt_pdfs_password":null,"default_form_mode":"dual","ai_field_naming_language":"form_language","defaults":{"typeface":"Helvetica","font_size":10,"bold":true}}; // \DocSpring\Model\UpdateTemplateRequest | The settings to change. Properties left out keep their values.

try {
    $result = $apiInstance->updateTemplate($template_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->updateTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **body** | [**\DocSpring\Model\UpdateTemplateRequest**](../Model/UpdateTemplateRequest.md)| The settings to change. Properties left out keep their values. | |

### Return type

[**\DocSpring\Model\Template**](../Model/Template.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTemplateDocument()`

```php
updateTemplateDocument($template_id, $body, $wait): \DocSpring\Model\Template
```

Replace a template's PDF

Replaces a PDF template's PDF with one you uploaded with the presigned upload (GET /uploads/presign) (`cache_id`), a link to download it from (`document_url`), or the file in base64 (`document_base64`). The fields stay where they are, unless `reimport_fields` replaces them with the new PDF's fillable fields. To send the PDF as `multipart/form-data` instead, use PUT /templates/{template_id}/document/upload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | The template's ID.
$body = {"cache_id":"cache/original-0000000000","filename":"fw8ben.pdf","reimport_fields":true}; // \DocSpring\Model\UpdateTemplateDocumentRequest | The new PDF, as one of `cache_id`, `document_url` and `document_base64`.
$wait = True; // bool | Wait until the PDF has been processed, and a `document_url` downloaded, before responding. Default true on sync.api hosts.

try {
    $result = $apiInstance->updateTemplateDocument($template_id, $body, $wait);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->updateTemplateDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **body** | [**\DocSpring\Model\UpdateTemplateDocumentRequest**](../Model/UpdateTemplateDocumentRequest.md)| The new PDF, as one of `cache_id`, `document_url` and `document_base64`. | |
| **wait** | **bool**| Wait until the PDF has been processed, and a `document_url` downloaded, before responding. Default true on sync.api hosts. | [optional] |

### Return type

[**\DocSpring\Model\Template**](../Model/Template.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTemplateFields()`

```php
updateTemplateFields($template_id, $body): \DocSpring\Model\TemplateFields
```

Update a template's fields

Changes fields of a template's draft and returns all of its fields. Settings left out keep their values. A shared setting (`type`, `required`, `default`, ...) changes for every field with the same name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | The template's ID.
$body = {"fields":[{"id":0,"x":5}]}; // \DocSpring\Model\UpdateTemplateFieldsRequest | The fields to change in the template's draft.

try {
    $result = $apiInstance->updateTemplateFields($template_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->updateTemplateFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **body** | [**\DocSpring\Model\UpdateTemplateFieldsRequest**](../Model/UpdateTemplateFieldsRequest.md)| The fields to change in the template's draft. | |

### Return type

[**\DocSpring\Model\TemplateFields**](../Model/TemplateFields.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhook()`

```php
updateWebhook($webhook_id, $body): \DocSpring\Model\Webhook
```

Update a webhook

Updates a webhook. Only the properties you send change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string | The webhook's ID.
$body = {"name":"Updated Webhook","enabled":false}; // \DocSpring\Model\UpdateWebhookRequest | The settings to change. Properties left out keep their values.

try {
    $result = $apiInstance->updateWebhook($webhook_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**| The webhook's ID. | |
| **body** | [**\DocSpring\Model\UpdateWebhookRequest**](../Model/UpdateWebhookRequest.md)| The settings to change. Properties left out keep their values. | |

### Return type

[**\DocSpring\Model\Webhook**](../Model/Webhook.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadTemplate()`

```php
uploadTemplate($document, $wait, $name, $description, $parent_folder_id, $ai_field_naming_language, $detect_fields, $field_source, $field_naming, $field_logic): \DocSpring\Model\Template
```

Create a PDF template from an uploaded PDF

Creates a PDF template from a PDF sent with the request (`multipart/form-data`). For large files, upload the PDF with the presigned upload (GET /uploads/presign) and create the template with POST /templates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document = '/path/to/file.txt'; // \SplFileObject | The PDF.
$wait = True; // bool | Wait until the PDF has been processed, and a `document_url` downloaded, before responding. Default true on sync.api hosts.
$name = 'name_example'; // string | The template's name.
$description = 'description_example'; // string | The template's description.
$parent_folder_id = 'parent_folder_id_example'; // string | The folder to put the template in. Left out, it's created at the root.
$ai_field_naming_language = new \DocSpring\Model\AiFieldNamingLanguage(); // \DocSpring\Model\AiFieldNamingLanguage | The language AI field setup names fields in: `auto` uses the form's language when it's written in the Latin alphabet without accents, and English otherwise; `english` always uses English; `form_language` uses the form's language and script. Default: your account's template settings.
$detect_fields = True; // bool | Set up the PDF's fields as DocSpring's "Automatically detect fields" upload option does: import or detect the fields, name them with AI, and set up conditional logic. `field_source`, `field_naming` and `field_logic` choose how. Default false. `document.page_processing_statuses` and `document.field_logic_status` show how it's going, and `document.state` becomes `processed` once every page's fields are set up.
$field_source = new \DocSpring\Model\FieldSetupSource(); // \DocSpring\Model\FieldSetupSource | With `detect_fields`, where the fields come from. `auto` (the default) imports the form fields of a fillable PDF and detects the fields of a PDF without them; `pdf_detection` detects the fields from the page layout, even on a fillable PDF; `pdf_form_fields` only imports the PDF's form fields.
$field_naming = new \DocSpring\Model\FieldSetupNaming(); // \DocSpring\Model\FieldSetupNaming | With `detect_fields`, how the fields are named. `ai` (the default) names them and sets their types and settings with AI; `preserve` keeps the names of the PDF's form fields, and AI only names the fields it detected. `preserve` needs `field_source` `auto` or `pdf_form_fields`.
$field_logic = new \DocSpring\Model\FieldSetupLogic(); // \DocSpring\Model\FieldSetupLogic | With `detect_fields`, whether AI reads the whole form once the fields are named and sets up conditional logic and required fields (`ai`) or not (`none`). Default: your account's template settings.

try {
    $result = $apiInstance->uploadTemplate($document, $wait, $name, $description, $parent_folder_id, $ai_field_naming_language, $detect_fields, $field_source, $field_naming, $field_logic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->uploadTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document** | **\SplFileObject****\SplFileObject**| The PDF. | |
| **wait** | **bool**| Wait until the PDF has been processed, and a `document_url` downloaded, before responding. Default true on sync.api hosts. | [optional] |
| **name** | **string**| The template's name. | [optional] |
| **description** | **string**| The template's description. | [optional] |
| **parent_folder_id** | **string**| The folder to put the template in. Left out, it's created at the root. | [optional] |
| **ai_field_naming_language** | [**\DocSpring\Model\AiFieldNamingLanguage**](../Model/AiFieldNamingLanguage.md)| The language AI field setup names fields in: `auto` uses the form's language when it's written in the Latin alphabet without accents, and English otherwise; `english` always uses English; `form_language` uses the form's language and script. Default: your account's template settings. | [optional] |
| **detect_fields** | **bool**| Set up the PDF's fields as DocSpring's "Automatically detect fields" upload option does: import or detect the fields, name them with AI, and set up conditional logic. `field_source`, `field_naming` and `field_logic` choose how. Default false. `document.page_processing_statuses` and `document.field_logic_status` show how it's going, and `document.state` becomes `processed` once every page's fields are set up. | [optional] |
| **field_source** | [**\DocSpring\Model\FieldSetupSource**](../Model/FieldSetupSource.md)| With `detect_fields`, where the fields come from. `auto` (the default) imports the form fields of a fillable PDF and detects the fields of a PDF without them; `pdf_detection` detects the fields from the page layout, even on a fillable PDF; `pdf_form_fields` only imports the PDF's form fields. | [optional] |
| **field_naming** | [**\DocSpring\Model\FieldSetupNaming**](../Model/FieldSetupNaming.md)| With `detect_fields`, how the fields are named. `ai` (the default) names them and sets their types and settings with AI; `preserve` keeps the names of the PDF's form fields, and AI only names the fields it detected. `preserve` needs `field_source` `auto` or `pdf_form_fields`. | [optional] |
| **field_logic** | [**\DocSpring\Model\FieldSetupLogic**](../Model/FieldSetupLogic.md)| With `detect_fields`, whether AI reads the whole form once the fields are named and sets up conditional logic and required fields (`ai`) or not (`none`). Default: your account's template settings. | [optional] |

### Return type

[**\DocSpring\Model\Template**](../Model/Template.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadTemplateDocument()`

```php
uploadTemplateDocument($template_id, $document, $wait, $reimport_fields): \DocSpring\Model\Template
```

Replace a template's PDF with an uploaded PDF

Replaces a PDF template's PDF with one sent with the request (`multipart/form-data`). The fields stay where they are, unless `reimport_fields` replaces them with the new PDF's fillable fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | The template's ID.
$document = '/path/to/file.txt'; // \SplFileObject | The new PDF.
$wait = True; // bool | Wait until the PDF has been processed, and a `document_url` downloaded, before responding. Default true on sync.api hosts.
$reimport_fields = True; // bool | Replace all of the template's fields with the fillable fields in the new PDF, once DocSpring has processed it (`document.field_reimport_state`). As on a first upload, the default typeface, font size, bold and color are taken from the PDF's fields; the template's other settings are kept. If the PDF has no fillable fields, the template keeps its fields. A locked template can't re-import its fields.

try {
    $result = $apiInstance->uploadTemplateDocument($template_id, $document, $wait, $reimport_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->uploadTemplateDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **document** | **\SplFileObject****\SplFileObject**| The new PDF. | |
| **wait** | **bool**| Wait until the PDF has been processed, and a `document_url` downloaded, before responding. Default true on sync.api hosts. | [optional] |
| **reimport_fields** | **bool**| Replace all of the template's fields with the fillable fields in the new PDF, once DocSpring has processed it (`document.field_reimport_state`). As on a first upload, the default typeface, font size, bold and color are taken from the PDF's fields; the template's other settings are kept. If the PDF has no fillable fields, the template keeps its fields. A locked template can't re-import its fields. | [optional] |

### Return type

[**\DocSpring\Model\Template**](../Model/Template.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateSubmission()`

```php
validateSubmission($template_id, $body, $version): \DocSpring\Model\SubmissionValidation
```

Check a submission without creating it

Checks a submission as creating it would (its data against the template's fields, its settings and signature requests) without saving it, generating anything or using credits. It doesn't check your account's credits. The response says whether the submission is valid, and if not, has the error that creating it would return.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\Client(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_1234567890abcdef01; // string | The template's ID.
$body = {"data":{"first_name":"John","last_name":"Smith","phone_number":"+11234567890"}}; // \DocSpring\Model\ValidateSubmissionRequest | The submission's data and settings.
$version = latest; // string | The template version to use: a published version (`1.2.0`, or `1` for the latest 1.x.x), `latest` or `draft`. Default `latest` (the draft when no version has been published).

try {
    $result = $apiInstance->validateSubmission($template_id, $body, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->validateSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template's ID. | |
| **body** | [**\DocSpring\Model\ValidateSubmissionRequest**](../Model/ValidateSubmissionRequest.md)| The submission's data and settings. | |
| **version** | **string**| The template version to use: a published version (`1.2.0`, or `1` for the latest 1.x.x), `latest` or `draft`. Default `latest` (the draft when no version has been published). | [optional] |

### Return type

[**\DocSpring\Model\SubmissionValidation**](../Model/SubmissionValidation.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
