# DocSpring\Client

All URIs are relative to https://sync.api.docspring.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addFieldsToTemplate()**](Client.md#addFieldsToTemplate) | **PUT** /templates/{template_id}/add_fields | Add new fields to a Template |
| [**batchGeneratePdfs()**](Client.md#batchGeneratePdfs) | **POST** /submissions/batches | Generate multiple PDFs |
| [**combinePdfs()**](Client.md#combinePdfs) | **POST** /combined_submissions | Merge submission PDFs, template PDFs, or custom files |
| [**copyTemplate()**](Client.md#copyTemplate) | **POST** /templates/{template_id}/copy | Copy a template |
| [**createCustomFileFromUpload()**](Client.md#createCustomFileFromUpload) | **POST** /custom_files | Create a new custom file from a cached S3 upload |
| [**createDataRequestEvent()**](Client.md#createDataRequestEvent) | **POST** /data_requests/{data_request_id}/events | Create a new event for emailing a signee a request for signature |
| [**createDataRequestToken()**](Client.md#createDataRequestToken) | **POST** /data_requests/{data_request_id}/tokens | Create a new data request token for form authentication |
| [**createFolder()**](Client.md#createFolder) | **POST** /folders/ | Create a folder |
| [**createHtmlTemplate()**](Client.md#createHtmlTemplate) | **POST** /templates?endpoint_variant&#x3D;create_html_template | Create a new HTML template |
| [**createPdfTemplate()**](Client.md#createPdfTemplate) | **POST** /templates | Create a new PDF template with a form POST file upload |
| [**createPdfTemplateFromUpload()**](Client.md#createPdfTemplateFromUpload) | **POST** /templates?endpoint_variant&#x3D;create_template_from_cached_upload | Create a new PDF template from a cached S3 file upload |
| [**deleteFolder()**](Client.md#deleteFolder) | **DELETE** /folders/{folder_id} | Delete a folder |
| [**deleteTemplate()**](Client.md#deleteTemplate) | **DELETE** /templates/{template_id} | Delete a template |
| [**expireCombinedSubmission()**](Client.md#expireCombinedSubmission) | **DELETE** /combined_submissions/{combined_submission_id} | Expire a combined submission |
| [**expireSubmission()**](Client.md#expireSubmission) | **DELETE** /submissions/{submission_id} | Expire a PDF submission |
| [**generatePdf()**](Client.md#generatePdf) | **POST** /templates/{template_id}/submissions | Generate a PDF |
| [**generatePreview()**](Client.md#generatePreview) | **POST** /submissions/{submission_id}/generate_preview | Generate a preview PDF for partially completed data requests |
| [**getCombinedSubmission()**](Client.md#getCombinedSubmission) | **GET** /combined_submissions/{combined_submission_id} | Check the status of a combined submission (merged PDFs) |
| [**getDataRequest()**](Client.md#getDataRequest) | **GET** /data_requests/{data_request_id} | Look up a submission data request |
| [**getFullTemplate()**](Client.md#getFullTemplate) | **GET** /templates/{template_id}?full&#x3D;true | Fetch the full attributes for a PDF template |
| [**getPresignUrl()**](Client.md#getPresignUrl) | **GET** /uploads/presign | Get a presigned S3 URL for direct file upload |
| [**getSubmission()**](Client.md#getSubmission) | **GET** /submissions/{submission_id} | Check the status of a PDF |
| [**getSubmissionBatch()**](Client.md#getSubmissionBatch) | **GET** /submissions/batches/{submission_batch_id} | Check the status of a submission batch job |
| [**getTemplate()**](Client.md#getTemplate) | **GET** /templates/{template_id} | Check the status of an uploaded template |
| [**getTemplateSchema()**](Client.md#getTemplateSchema) | **GET** /templates/{template_id}/schema | Fetch the JSON schema for a template |
| [**listCombinedSubmissions()**](Client.md#listCombinedSubmissions) | **GET** /combined_submissions | Get a list of all combined submissions |
| [**listFolders()**](Client.md#listFolders) | **GET** /folders/ | Get a list of all folders |
| [**listSubmissions()**](Client.md#listSubmissions) | **GET** /submissions | List all submissions |
| [**listTemplateSubmissions()**](Client.md#listTemplateSubmissions) | **GET** /templates/{template_id}/submissions | List all submissions for a given template |
| [**listTemplates()**](Client.md#listTemplates) | **GET** /templates | Get a list of all templates |
| [**moveFolderToFolder()**](Client.md#moveFolderToFolder) | **POST** /folders/{folder_id}/move | Move a folder |
| [**moveTemplateToFolder()**](Client.md#moveTemplateToFolder) | **POST** /templates/{template_id}/move | Move Template to folder |
| [**publishTemplateVersion()**](Client.md#publishTemplateVersion) | **POST** /templates/{template_id}/publish_version | Publish a template version |
| [**renameFolder()**](Client.md#renameFolder) | **POST** /folders/{folder_id}/rename | Rename a folder |
| [**restoreTemplateVersion()**](Client.md#restoreTemplateVersion) | **POST** /templates/{template_id}/restore_version | Restore a template version |
| [**testAuthentication()**](Client.md#testAuthentication) | **GET** /authentication | Test authentication |
| [**updateDataRequest()**](Client.md#updateDataRequest) | **PUT** /data_requests/{data_request_id} | Update a submission data request |
| [**updateTemplate()**](Client.md#updateTemplate) | **PUT** /templates/{template_id} | Update a Template |
| [**updateTemplateDocument()**](Client.md#updateTemplateDocument) | **PUT** /templates/{template_id}?endpoint_variant&#x3D;update_template_pdf_with_form_post | Update a template&#39;s document with a form POST file upload |
| [**updateTemplateDocumentFromUpload()**](Client.md#updateTemplateDocumentFromUpload) | **PUT** /templates/{template_id}?endpoint_variant&#x3D;update_template_pdf_with_cached_upload | Update a template&#39;s document with a cached S3 file upload |


## `addFieldsToTemplate()`

```php
addFieldsToTemplate($template_id, $data): \DocSpring\Model\TemplateAddFieldsResponse
```

Add new fields to a Template

Adds fields to a PDF template. Configure field types, positions, defaults, and formatting options.

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
$template_id = tpl_1234567890abcdef02; // string
$data = new \DocSpring\Model\AddFieldsData(); // \DocSpring\Model\AddFieldsData

try {
    $result = $apiInstance->addFieldsToTemplate($template_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->addFieldsToTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **data** | [**\DocSpring\Model\AddFieldsData**](../Model/AddFieldsData.md)|  | |

### Return type

[**\DocSpring\Model\TemplateAddFieldsResponse**](../Model/TemplateAddFieldsResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchGeneratePdfs()`

```php
batchGeneratePdfs($data, $wait): \DocSpring\Model\BatchGeneratePdfs201Response
```

Generate multiple PDFs

Generates up to 50 PDFs in a single request. Each submission can use a different template and data. Supports both synchronous (wait for all PDFs) and asynchronous processing. More efficient than individual requests when creating multiple PDFs.  See also: - [Batch and Combine PDFs](https://docspring.com/docs/api-guide/generate-pdfs/batch-generate-pdfs/) - Generate and merge PDFs in one request

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
$data = new \DocSpring\Model\SubmissionBatchData(); // \DocSpring\Model\SubmissionBatchData
$wait = true; // bool | Wait for submission batch to be processed before returning. Set to false to return immediately. Default: true (on sync.* subdomain)

try {
    $result = $apiInstance->batchGeneratePdfs($data, $wait);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->batchGeneratePdfs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\DocSpring\Model\SubmissionBatchData**](../Model/SubmissionBatchData.md)|  | |
| **wait** | **bool**| Wait for submission batch to be processed before returning. Set to false to return immediately. Default: true (on sync.* subdomain) | [optional] [default to true] |

### Return type

[**\DocSpring\Model\BatchGeneratePdfs201Response**](../Model/BatchGeneratePdfs201Response.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `combinePdfs()`

```php
combinePdfs($data): \DocSpring\Model\CreateCombinedSubmissionResponse
```

Merge submission PDFs, template PDFs, or custom files

Combines multiple PDFs from various sources into a single PDF file. Supports merging submission PDFs, template PDFs, custom files, other merged PDFs, and PDFs from URLs. Merges the PDFs in the order provided.

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
$data = new \DocSpring\Model\CombinePdfsData(); // \DocSpring\Model\CombinePdfsData

try {
    $result = $apiInstance->combinePdfs($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->combinePdfs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\DocSpring\Model\CombinePdfsData**](../Model/CombinePdfsData.md)|  | |

### Return type

[**\DocSpring\Model\CreateCombinedSubmissionResponse**](../Model/CreateCombinedSubmissionResponse.md)

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
copyTemplate($template_id, $options): \DocSpring\Model\TemplatePreview
```

Copy a template

Creates a copy of an existing template with all its fields and configuration. Optionally specify a new name and target folder. The copied template starts as a new draft that can be modified independently of the original.

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
$template_id = tpl_1234567890abcdef01; // string
$options = new \DocSpring\Model\CopyTemplateOptions(); // \DocSpring\Model\CopyTemplateOptions

try {
    $result = $apiInstance->copyTemplate($template_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->copyTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **options** | [**\DocSpring\Model\CopyTemplateOptions**](../Model/CopyTemplateOptions.md)|  | [optional] |

### Return type

[**\DocSpring\Model\TemplatePreview**](../Model/TemplatePreview.md)

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
createCustomFileFromUpload($data): \DocSpring\Model\CreateCustomFileResponse
```

Create a new custom file from a cached S3 upload

The Custom Files API endpoint allows you to upload PDFs to DocSpring and then merge them with other PDFs. First upload your file using the presigned URL endpoint, then use the returned cache_id to create the custom file.

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
$data = new \DocSpring\Model\CreateCustomFileData(); // \DocSpring\Model\CreateCustomFileData

try {
    $result = $apiInstance->createCustomFileFromUpload($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->createCustomFileFromUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\DocSpring\Model\CreateCustomFileData**](../Model/CreateCustomFileData.md)|  | |

### Return type

[**\DocSpring\Model\CreateCustomFileResponse**](../Model/CreateCustomFileResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDataRequestEvent()`

```php
createDataRequestEvent($data_request_id, $event): \DocSpring\Model\CreateSubmissionDataRequestEventResponse
```

Create a new event for emailing a signee a request for signature

Records user notification events for data requests. Use this to create an audit trail showing when and how users were notified about data request forms. Supports email, SMS, and other notification types. Records the notification time for compliance tracking.  See also: - [Embedded Data Requests Guide](https://docspring.com/docs/guides/embedded-forms/embedded-data-requests/) - User notification workflow

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
$data_request_id = drq_1234567890abcdef01; // string
$event = new \DocSpring\Model\CreateSubmissionDataRequestEventRequest(); // \DocSpring\Model\CreateSubmissionDataRequestEventRequest

try {
    $result = $apiInstance->createDataRequestEvent($data_request_id, $event);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->createDataRequestEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data_request_id** | **string**|  | |
| **event** | [**\DocSpring\Model\CreateSubmissionDataRequestEventRequest**](../Model/CreateSubmissionDataRequestEventRequest.md)|  | |

### Return type

[**\DocSpring\Model\CreateSubmissionDataRequestEventResponse**](../Model/CreateSubmissionDataRequestEventResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDataRequestToken()`

```php
createDataRequestToken($data_request_id, $type): \DocSpring\Model\CreateSubmissionDataRequestTokenResponse
```

Create a new data request token for form authentication

Creates an authentication token for accessing a data request form. Tokens can be created for API access (1 hour expiration) or email links (30 day expiration). Returns a token and a pre-authenticated URL for the data request form.  See also: - [Embedded Data Requests Guide](https://docspring.com/docs/guides/embedded-forms/embedded-data-requests/)

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
$data_request_id = drq_1234567890abcdef01; // string
$type = api; // string

try {
    $result = $apiInstance->createDataRequestToken($data_request_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->createDataRequestToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data_request_id** | **string**|  | |
| **type** | **string**|  | [optional] |

### Return type

[**\DocSpring\Model\CreateSubmissionDataRequestTokenResponse**](../Model/CreateSubmissionDataRequestTokenResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFolder()`

```php
createFolder($data): \DocSpring\Model\Folder
```

Create a folder

Creates a new folder for organizing templates. Folders can be nested within other folders by providing a `parent_folder_id`. Folder names must be unique within the same parent.

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
$data = new \DocSpring\Model\CreateFolderData(); // \DocSpring\Model\CreateFolderData

try {
    $result = $apiInstance->createFolder($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->createFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\DocSpring\Model\CreateFolderData**](../Model/CreateFolderData.md)|  | |

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

## `createHtmlTemplate()`

```php
createHtmlTemplate($data): \DocSpring\Model\TemplatePreview
```

Create a new HTML template

Creates a new HTML template using HTML, CSS/SCSS, and Liquid templating. Allows complete control over PDF layout and styling. Supports headers, footers, and dynamic content using Liquid syntax for field values, conditions, loops, and filters.

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
$data = new \DocSpring\Model\CreateHtmlTemplate(); // \DocSpring\Model\CreateHtmlTemplate

try {
    $result = $apiInstance->createHtmlTemplate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->createHtmlTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\DocSpring\Model\CreateHtmlTemplate**](../Model/CreateHtmlTemplate.md)|  | |

### Return type

[**\DocSpring\Model\TemplatePreview**](../Model/TemplatePreview.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPdfTemplate()`

```php
createPdfTemplate($template_document, $template_name, $wait, $template_description, $template_parent_folder_id): \DocSpring\Model\TemplatePreview
```

Create a new PDF template with a form POST file upload

Creates a new PDF template by uploading a PDF file. The uploaded PDF becomes the foundation for your template, and you can then add fillable fields using the template editor. Use the wait parameter to control whether the request waits for document processing to complete.

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
$template_document = '/path/to/file.txt'; // \SplFileObject
$template_name = 'template_name_example'; // string
$wait = true; // bool | Wait for template document to be processed before returning. Set to false to return immediately. Default: true (on sync.* subdomain)
$template_description = 'template_description_example'; // string
$template_parent_folder_id = 'template_parent_folder_id_example'; // string

try {
    $result = $apiInstance->createPdfTemplate($template_document, $template_name, $wait, $template_description, $template_parent_folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->createPdfTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_document** | **\SplFileObject****\SplFileObject**|  | |
| **template_name** | **string**|  | |
| **wait** | **bool**| Wait for template document to be processed before returning. Set to false to return immediately. Default: true (on sync.* subdomain) | [optional] [default to true] |
| **template_description** | **string**|  | [optional] |
| **template_parent_folder_id** | **string**|  | [optional] |

### Return type

[**\DocSpring\Model\TemplatePreview**](../Model/TemplatePreview.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPdfTemplateFromUpload()`

```php
createPdfTemplateFromUpload($data): \DocSpring\Model\TemplatePreview
```

Create a new PDF template from a cached S3 file upload

Creates a new PDF template from a file previously uploaded to S3 using a presigned URL. This two-step process allows for more reliable large file uploads by first uploading the file to S3, then creating the template using the cached upload ID.

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
$data = new \DocSpring\Model\CreatePdfTemplate(); // \DocSpring\Model\CreatePdfTemplate

try {
    $result = $apiInstance->createPdfTemplateFromUpload($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->createPdfTemplateFromUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\DocSpring\Model\CreatePdfTemplate**](../Model/CreatePdfTemplate.md)|  | |

### Return type

[**\DocSpring\Model\TemplatePreview**](../Model/TemplatePreview.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFolder()`

```php
deleteFolder($folder_id): \DocSpring\Model\Folder
```

Delete a folder

Deletes an empty folder. The folder must not contain any templates or subfolders. Move or delete all contents before attempting to delete the folder.

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
$folder_id = fld_1234567890abcdef01; // string

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
| **folder_id** | **string**|  | |

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
deleteTemplate($template_id, $version): \DocSpring\Model\TemplateDeleteResponse
```

Delete a template

Deletes a template or a specific template version. When no version is specified, deletes the entire template including all versions. When a version is specified, deletes only that version while preserving others. Returns remaining version information.

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
$template_id = tpl_1234567890abcdef01; // string
$version = 0.1.0; // string

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
| **template_id** | **string**|  | |
| **version** | **string**|  | [optional] |

### Return type

[**\DocSpring\Model\TemplateDeleteResponse**](../Model/TemplateDeleteResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `expireCombinedSubmission()`

```php
expireCombinedSubmission($combined_submission_id): \DocSpring\Model\CombinedSubmission
```

Expire a combined submission

Expiring a combined submission deletes the PDF from our system. This is useful for invalidating sensitive documents.

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
$combined_submission_id = com_1234567890abcdef01; // string

try {
    $result = $apiInstance->expireCombinedSubmission($combined_submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->expireCombinedSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **combined_submission_id** | **string**|  | |

### Return type

[**\DocSpring\Model\CombinedSubmission**](../Model/CombinedSubmission.md)

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
expireSubmission($submission_id): \DocSpring\Model\SubmissionPreview
```

Expire a PDF submission

Expiring a PDF submission deletes the PDF and removes the data from our database. This is useful for invalidating sensitive documents after they've been downloaded. You can also [configure a data retention policy for your submissions](https://docspring.com/docs/template-editor/settings/#expire-submissions) so that they automatically expire.

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
$submission_id = sub_1234567890abcdef01; // string

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
| **submission_id** | **string**|  | |

### Return type

[**\DocSpring\Model\SubmissionPreview**](../Model/SubmissionPreview.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generatePdf()`

```php
generatePdf($template_id, $submission, $wait): \DocSpring\Model\CreateSubmissionResponse
```

Generate a PDF

Creates a PDF submission by filling in a template with data. Supports both synchronous (default) and asynchronous processing. Set `wait: false` to return immediately.  See also: - [Customize the PDF Title and Filename](https://docspring.com/docs/api-guide/generate-pdfs/customize-pdf-title-and-filename/) - Set custom metadata - [Handling Truncated Text](https://docspring.com/docs/api-guide/generate-pdfs/handle-truncated-text/) - Handle text that doesn't fit in fields

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
$template_id = tpl_1234567890abcdef01; // string
$submission = new \DocSpring\Model\CreatePdfSubmissionData(); // \DocSpring\Model\CreatePdfSubmissionData
$wait = true; // bool | Wait for submission to be processed before returning. Set to false to return immediately. Default: true (on sync.* subdomain)

try {
    $result = $apiInstance->generatePdf($template_id, $submission, $wait);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->generatePdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **submission** | [**\DocSpring\Model\CreatePdfSubmissionData**](../Model/CreatePdfSubmissionData.md)|  | |
| **wait** | **bool**| Wait for submission to be processed before returning. Set to false to return immediately. Default: true (on sync.* subdomain) | [optional] [default to true] |

### Return type

[**\DocSpring\Model\CreateSubmissionResponse**](../Model/CreateSubmissionResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generatePreview()`

```php
generatePreview($submission_id): \DocSpring\Model\SuccessErrorResponse
```

Generate a preview PDF for partially completed data requests

Generates a preview PDF for a submission with partially completed data requests. Useful for showing users what the final document will look like before all signatures or data have been collected. The preview includes any data collected so far.

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
$submission_id = sub_1234567890abcdef01; // string

try {
    $result = $apiInstance->generatePreview($submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->generatePreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**|  | |

### Return type

[**\DocSpring\Model\SuccessErrorResponse**](../Model/SuccessErrorResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCombinedSubmission()`

```php
getCombinedSubmission($combined_submission_id): \DocSpring\Model\CombinedSubmission
```

Check the status of a combined submission (merged PDFs)

Retrieves the details and status of a combined submission. Returns processing state, download URL (if processed), metadata, and information about any integrated actions (e.g., S3 uploads).

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
$combined_submission_id = com_1234567890abcdef01; // string

try {
    $result = $apiInstance->getCombinedSubmission($combined_submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->getCombinedSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **combined_submission_id** | **string**|  | |

### Return type

[**\DocSpring\Model\CombinedSubmission**](../Model/CombinedSubmission.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDataRequest()`

```php
getDataRequest($data_request_id): \DocSpring\Model\SubmissionDataRequestShow
```

Look up a submission data request

Retrieves the details and status of a data request. Returns information about the request state (pending, viewed, completed), authentication details, and metadata. Includes audit information like IP address, browseruser agent, and timestamps.  See also: - [Embedded Data Requests Guide](https://docspring.com/docs/guides/embedded-forms/embedded-data-requests/) - Complete guide to data request workflow

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
$data_request_id = drq_1234567890abcdef01; // string

try {
    $result = $apiInstance->getDataRequest($data_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->getDataRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data_request_id** | **string**|  | |

### Return type

[**\DocSpring\Model\SubmissionDataRequestShow**](../Model/SubmissionDataRequestShow.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFullTemplate()`

```php
getFullTemplate($template_id): \DocSpring\Model\Template
```

Fetch the full attributes for a PDF template

Retrieves complete template information including fields, defaults, settings, and HTML/SCSS content. Use this to get all template data needed for automated updates or analysis. Returns more detailed information than the basic `getTemplate` endpoint.

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
$template_id = tpl_1234567890abcdef01; // string

try {
    $result = $apiInstance->getFullTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->getFullTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |

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

## `getPresignUrl()`

```php
getPresignUrl(): \DocSpring\Model\UploadPresignResponse
```

Get a presigned S3 URL for direct file upload

Returns a presigned S3 URL for uploading files directly to our S3 bucket. Use this endpoint to upload large files before creating templates or custom files. S3 will respond with a JSON object that you can include in your DocSpring API request.  Uploaded files can be used to: - [Create templates](https://docspring.com/docs/api/#tag/templates/post/templates?endpoint_variant=create_template_from_cached_upload) - [Update templates](https://docspring.com/docs/api/#tag/templates/put/templates/{template_id}?endpoint_variant=update_template_pdf_with_cached_upload) - [Create custom files](https://docspring.com/docs/api/#tag/custom-files/post/custom_files) and then [merge them with other PDFs](https://docspring.com/docs/api/#tag/combine-pdfs/post/combined_submissions)

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

[**\DocSpring\Model\UploadPresignResponse**](../Model/UploadPresignResponse.md)

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
getSubmission($submission_id, $include_data): \DocSpring\Model\Submission
```

Check the status of a PDF

Retrieves the details and status of a PDF submission. Returns processing state, download URL (if processed), metadata, submission data (optional), and information about any integrated actions. Use this to poll for completion when using asynchronous processing.

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
$submission_id = sub_1234567890abcdef01; // string
$include_data = true; // bool

try {
    $result = $apiInstance->getSubmission($submission_id, $include_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->getSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**|  | |
| **include_data** | **bool**|  | [optional] |

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
getSubmissionBatch($submission_batch_id, $include_submissions): \DocSpring\Model\SubmissionBatchWithSubmissions
```

Check the status of a submission batch job

Retrieves the status and results of a batch PDF generation job. Returns processing state, completion statistics, and optionally includes all individual submission details. Use this to poll for completion when using asynchronous batch processing.

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
$submission_batch_id = sbb_1234567890abcdef01; // string
$include_submissions = true; // bool

try {
    $result = $apiInstance->getSubmissionBatch($submission_batch_id, $include_submissions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->getSubmissionBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_batch_id** | **string**|  | |
| **include_submissions** | **bool**|  | [optional] |

### Return type

[**\DocSpring\Model\SubmissionBatchWithSubmissions**](../Model/SubmissionBatchWithSubmissions.md)

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
getTemplate($template_id): \DocSpring\Model\TemplatePreview
```

Check the status of an uploaded template

Retrieves information about a template including processing status and document URL. Use this to check if template is ready to view in the template editor or generate PDFs.

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
$template_id = tpl_1234567890abcdef01; // string

try {
    $result = $apiInstance->getTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->getTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |

### Return type

[**\DocSpring\Model\TemplatePreview**](../Model/TemplatePreview.md)

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
getTemplateSchema($template_id): \DocSpring\Model\JsonSchema
```

Fetch the JSON schema for a template

Retrieves the JSON Schema definition for a template's fields. Use this to validate data before submitting it for PDF generation, or to build dynamic forms that match the template's field structure and validation requirements.  See also: - [Generate PDFs Guide](https://docspring.com/docs/api-guide/generate-pdfs/generate-pdfs-via-api/) - Use schema to validate submission data

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
$template_id = tpl_1234567890abcdef01; // string

try {
    $result = $apiInstance->getTemplateSchema($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->getTemplateSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |

### Return type

[**\DocSpring\Model\JsonSchema**](../Model/JsonSchema.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCombinedSubmissions()`

```php
listCombinedSubmissions($page, $per_page): \DocSpring\Model\CombinedSubmission[]
```

Get a list of all combined submissions

Returns a paginated list of combined submissions (merged PDFs) for your account. Includes processing status, expiration details, and download URLs for processed PDFs.

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
$page = 3; // int | Default: 1
$per_page = 1; // int | Default: 50

try {
    $result = $apiInstance->listCombinedSubmissions($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->listCombinedSubmissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Default: 1 | [optional] |
| **per_page** | **int**| Default: 50 | [optional] |

### Return type

[**\DocSpring\Model\CombinedSubmission[]**](../Model/CombinedSubmission.md)

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
listFolders($parent_folder_id): \DocSpring\Model\Folder[]
```

Get a list of all folders

Returns a list of folders in your account. Can be filtered by parent folder ID to retrieve subfolders. Folders help organize templates and maintain a hierarchical structure.

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
$parent_folder_id = fld_1234567890abcdef02; // string | Filter By Folder Id

try {
    $result = $apiInstance->listFolders($parent_folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->listFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parent_folder_id** | **string**| Filter By Folder Id | [optional] |

### Return type

[**\DocSpring\Model\Folder[]**](../Model/Folder.md)

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
listSubmissions($cursor, $limit, $created_after, $created_before, $type, $include_data): \DocSpring\Model\ListSubmissionsResponse
```

List all submissions

Returns a paginated list of all PDF submissions across all templates in your account. Can be filtered by date range and submission type (test/live). Supports cursor-based pagination and optionally includes submission data for each result.

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
$cursor = sub_1234567890abcdef12; // string
$limit = 3; // int
$created_after = 2019-01-01T09:00:00-05:00; // string
$created_before = 2020-01-01T09:00:00.000+0200; // string
$type = test; // string
$include_data = true; // bool

try {
    $result = $apiInstance->listSubmissions($cursor, $limit, $created_after, $created_before, $type, $include_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->listSubmissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **created_after** | **string**|  | [optional] |
| **created_before** | **string**|  | [optional] |
| **type** | **string**|  | [optional] |
| **include_data** | **bool**|  | [optional] |

### Return type

[**\DocSpring\Model\ListSubmissionsResponse**](../Model/ListSubmissionsResponse.md)

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
listTemplateSubmissions($template_id, $cursor, $limit, $created_after, $created_before, $type, $include_data): \DocSpring\Model\ListSubmissionsResponse
```

List all submissions for a given template

Returns a paginated list of all submissions for a specific template. Can be filtered by date range, submission type (test/live), and optionally include submission data. Supports cursor-based pagination for efficient retrieval of large result sets.

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
$template_id = tpl_1234567890abcdef02; // string
$cursor = 'cursor_example'; // string
$limit = 56; // int
$created_after = 'created_after_example'; // string
$created_before = 'created_before_example'; // string
$type = 'type_example'; // string
$include_data = true; // bool

try {
    $result = $apiInstance->listTemplateSubmissions($template_id, $cursor, $limit, $created_after, $created_before, $type, $include_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->listTemplateSubmissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **cursor** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **created_after** | **string**|  | [optional] |
| **created_before** | **string**|  | [optional] |
| **type** | **string**|  | [optional] |
| **include_data** | **bool**|  | [optional] |

### Return type

[**\DocSpring\Model\ListSubmissionsResponse**](../Model/ListSubmissionsResponse.md)

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
listTemplates($query, $parent_folder_id, $page, $per_page): \DocSpring\Model\TemplatePreview[]
```

Get a list of all templates

Retrieves a list of your templates with search, filtering, and pagination options. Returns basic template information including ID, name, type (PDF or HTML), and folder location. Supports text search by name and filtering by parent folder.

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
$query = 2; // string | Search By Name
$parent_folder_id = fld_1234567890abcdef01; // string | Filter By Folder Id
$page = 2; // int | Default: 1
$per_page = 1; // int | Default: 50

try {
    $result = $apiInstance->listTemplates($query, $parent_folder_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->listTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| Search By Name | [optional] |
| **parent_folder_id** | **string**| Filter By Folder Id | [optional] |
| **page** | **int**| Default: 1 | [optional] |
| **per_page** | **int**| Default: 50 | [optional] |

### Return type

[**\DocSpring\Model\TemplatePreview[]**](../Model/TemplatePreview.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveFolderToFolder()`

```php
moveFolderToFolder($folder_id, $data): \DocSpring\Model\Folder
```

Move a folder

Moves a folder to a new parent folder or to the root level. All templates and subfolders within the folder are moved together. Cannot move a folder into one of its own subfolders.

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
$folder_id = fld_1234567890abcdef01; // string
$data = new \DocSpring\Model\MoveFolderData(); // \DocSpring\Model\MoveFolderData

try {
    $result = $apiInstance->moveFolderToFolder($folder_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->moveFolderToFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **string**|  | |
| **data** | [**\DocSpring\Model\MoveFolderData**](../Model/MoveFolderData.md)|  | |

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

## `moveTemplateToFolder()`

```php
moveTemplateToFolder($template_id, $data): \DocSpring\Model\TemplatePreview
```

Move Template to folder

Moves a template to a different folder or to the root level. Use this to organize templates within your folders. Provide a folder ID to move to a specific folder, or `null` to move to the root level.

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
$template_id = tpl_1234567890abcdef01; // string
$data = new \DocSpring\Model\MoveTemplateData(); // \DocSpring\Model\MoveTemplateData

try {
    $result = $apiInstance->moveTemplateToFolder($template_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->moveTemplateToFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **data** | [**\DocSpring\Model\MoveTemplateData**](../Model/MoveTemplateData.md)|  | |

### Return type

[**\DocSpring\Model\TemplatePreview**](../Model/TemplatePreview.md)

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
publishTemplateVersion($template_id, $data): \DocSpring\Model\TemplatePublishVersionResponse
```

Publish a template version

Publishes the current draft version of a template and creates a new immutable version with semantic versioning (major.minor.patch).

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
$template_id = tpl_1234567890abcdef01; // string
$data = new \DocSpring\Model\PublishVersionData(); // \DocSpring\Model\PublishVersionData

try {
    $result = $apiInstance->publishTemplateVersion($template_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->publishTemplateVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **data** | [**\DocSpring\Model\PublishVersionData**](../Model/PublishVersionData.md)|  | |

### Return type

[**\DocSpring\Model\TemplatePublishVersionResponse**](../Model/TemplatePublishVersionResponse.md)

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
renameFolder($folder_id, $data): \DocSpring\Model\Folder
```

Rename a folder

Renames an existing folder. The new name must be unique within the same parent folder. This operation only changes the folder name, not its location or contents.

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
$folder_id = fld_1234567890abcdef01; // string
$data = new \DocSpring\Model\RenameFolderData(); // \DocSpring\Model\RenameFolderData

try {
    $result = $apiInstance->renameFolder($folder_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->renameFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **string**|  | |
| **data** | [**\DocSpring\Model\RenameFolderData**](../Model/RenameFolderData.md)|  | |

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

## `restoreTemplateVersion()`

```php
restoreTemplateVersion($template_id, $data): \DocSpring\Model\SuccessErrorResponse
```

Restore a template version

Restores your template to a previously published version, copying that version's content and configuration to the current draft. Use this to revert changes or recover from an unwanted modification.

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
$template_id = tpl_1234567890abcdef01; // string
$data = new \DocSpring\Model\RestoreVersionData(); // \DocSpring\Model\RestoreVersionData

try {
    $result = $apiInstance->restoreTemplateVersion($template_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->restoreTemplateVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **data** | [**\DocSpring\Model\RestoreVersionData**](../Model/RestoreVersionData.md)|  | |

### Return type

[**\DocSpring\Model\SuccessErrorResponse**](../Model/SuccessErrorResponse.md)

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
testAuthentication(): \DocSpring\Model\SuccessErrorResponse
```

Test authentication

Checks whether your API token is valid by making an authenticated request. Returns a success response if authentication passes. This endpoint is useful for verifying credentials during setup or troubleshooting issues.

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

[**\DocSpring\Model\SuccessErrorResponse**](../Model/SuccessErrorResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDataRequest()`

```php
updateDataRequest($data_request_id, $data): \DocSpring\Model\CreateSubmissionDataRequestResponse
```

Update a submission data request

Updates authentication details for a data request. Use this when a user logs in to record their authentication method, provider, session information, and hashed identifiers. Updates metadata and tracks authentication state changes for auditing and compliance.

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
$data_request_id = drq_1234567890abcdef01; // string
$data = new \DocSpring\Model\UpdateSubmissionDataRequestData(); // \DocSpring\Model\UpdateSubmissionDataRequestData

try {
    $result = $apiInstance->updateDataRequest($data_request_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->updateDataRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data_request_id** | **string**|  | |
| **data** | [**\DocSpring\Model\UpdateSubmissionDataRequestData**](../Model/UpdateSubmissionDataRequestData.md)|  | |

### Return type

[**\DocSpring\Model\CreateSubmissionDataRequestResponse**](../Model/CreateSubmissionDataRequestResponse.md)

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
updateTemplate($template_id, $data): \DocSpring\Model\SuccessMultipleErrorsResponse
```

Update a Template

Updates template content and properties. For HTML templates, you can modify the HTML, SCSS, headers, footers, name, and description. Changes are applied to your draft template and do not affect published template versions.

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
$template_id = tpl_1234567890abcdef03; // string
$data = new \DocSpring\Model\UpdateHtmlTemplate(); // \DocSpring\Model\UpdateHtmlTemplate

try {
    $result = $apiInstance->updateTemplate($template_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->updateTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **data** | [**\DocSpring\Model\UpdateHtmlTemplate**](../Model/UpdateHtmlTemplate.md)|  | |

### Return type

[**\DocSpring\Model\SuccessMultipleErrorsResponse**](../Model/SuccessMultipleErrorsResponse.md)

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
updateTemplateDocument($template_id, $template_document, $template_name): \DocSpring\Model\SuccessMultipleErrorsResponse
```

Update a template's document with a form POST file upload

Upload a new PDF file to update a PDF template's document. This replaces the template's PDF while preserving all of the existing fields. If you upload a PDF with fewer pages than the current document, any fields on the removed pages will be deleted.

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
$template_id = tpl_1234567890abcdef01; // string
$template_document = '/path/to/file.txt'; // \SplFileObject
$template_name = 'template_name_example'; // string

try {
    $result = $apiInstance->updateTemplateDocument($template_id, $template_document, $template_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->updateTemplateDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **template_document** | **\SplFileObject****\SplFileObject**|  | |
| **template_name** | **string**|  | [optional] |

### Return type

[**\DocSpring\Model\SuccessMultipleErrorsResponse**](../Model/SuccessMultipleErrorsResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTemplateDocumentFromUpload()`

```php
updateTemplateDocumentFromUpload($template_id, $data): \DocSpring\Model\SuccessMultipleErrorsResponse
```

Update a template's document with a cached S3 file upload

Updates a PDF template's document using a cached file upload. This is a three-step process: First, request a presigned URL to upload your PDF file to our S3 bucket. Then, use that URL to upload your PDF file. Finally, submit the ID of the uploaded file to replace the template's document.

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
$template_id = tpl_1234567890abcdef01; // string
$data = new \DocSpring\Model\UpdatePdfTemplate(); // \DocSpring\Model\UpdatePdfTemplate

try {
    $result = $apiInstance->updateTemplateDocumentFromUpload($template_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Client->updateTemplateDocumentFromUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **data** | [**\DocSpring\Model\UpdatePdfTemplate**](../Model/UpdatePdfTemplate.md)|  | |

### Return type

[**\DocSpring\Model\SuccessMultipleErrorsResponse**](../Model/SuccessMultipleErrorsResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
