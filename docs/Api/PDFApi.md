# DocSpring\PDFApi

All URIs are relative to https://api.docspring.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addFieldsToTemplate()**](PDFApi.md#addFieldsToTemplate) | **PUT** /templates/{template_id}/add_fields | Add new fields to a Template |
| [**batchGeneratePdfV1()**](PDFApi.md#batchGeneratePdfV1) | **POST** /templates/{template_id}/submissions/batch | Generates multiple PDFs |
| [**batchGeneratePdfs()**](PDFApi.md#batchGeneratePdfs) | **POST** /submissions/batches | Generates multiple PDFs |
| [**combinePdfs()**](PDFApi.md#combinePdfs) | **POST** /combined_submissions?v&#x3D;2 | Merge submission PDFs, template PDFs, or custom files |
| [**combineSubmissions()**](PDFApi.md#combineSubmissions) | **POST** /combined_submissions | Merge generated PDFs together |
| [**copyTemplate()**](PDFApi.md#copyTemplate) | **POST** /templates/{template_id}/copy | Copy a Template |
| [**createCustomFileFromUpload()**](PDFApi.md#createCustomFileFromUpload) | **POST** /custom_files | Create a new custom file from a cached presign upload |
| [**createDataRequestToken()**](PDFApi.md#createDataRequestToken) | **POST** /data_requests/{data_request_id}/tokens | Creates a new data request token for form authentication |
| [**createFolder()**](PDFApi.md#createFolder) | **POST** /folders/ | Create a folder |
| [**createHTMLTemplate()**](PDFApi.md#createHTMLTemplate) | **POST** /templates?desc&#x3D;html | Create a new HTML template |
| [**createPDFTemplate()**](PDFApi.md#createPDFTemplate) | **POST** /templates | Create a new PDF template with a form POST file upload |
| [**createPDFTemplateFromUpload()**](PDFApi.md#createPDFTemplateFromUpload) | **POST** /templates?desc&#x3D;cached_upload | Create a new PDF template from a cached presign upload |
| [**deleteFolder()**](PDFApi.md#deleteFolder) | **DELETE** /folders/{folder_id} | Delete a folder |
| [**deleteTemplate()**](PDFApi.md#deleteTemplate) | **DELETE** /templates/{template_id} | Delete a template |
| [**expireCombinedSubmission()**](PDFApi.md#expireCombinedSubmission) | **DELETE** /combined_submissions/{combined_submission_id} | Expire a combined submission |
| [**expireSubmission()**](PDFApi.md#expireSubmission) | **DELETE** /submissions/{submission_id} | Expire a PDF submission |
| [**generatePDF()**](PDFApi.md#generatePDF) | **POST** /templates/{template_id}/submissions | Generates a new PDF |
| [**getCombinedSubmission()**](PDFApi.md#getCombinedSubmission) | **GET** /combined_submissions/{combined_submission_id} | Check the status of a combined submission (merged PDFs) |
| [**getDataRequest()**](PDFApi.md#getDataRequest) | **GET** /data_requests/{data_request_id} | Look up a submission data request |
| [**getFullTemplate()**](PDFApi.md#getFullTemplate) | **GET** /templates/{template_id}?full&#x3D;true | Fetch the full template attributes |
| [**getPresignUrl()**](PDFApi.md#getPresignUrl) | **GET** /uploads/presign | Get a presigned URL so that you can upload a file to our AWS S3 bucket |
| [**getSubmission()**](PDFApi.md#getSubmission) | **GET** /submissions/{submission_id} | Check the status of a PDF |
| [**getSubmissionBatch()**](PDFApi.md#getSubmissionBatch) | **GET** /submissions/batches/{submission_batch_id} | Check the status of a submission batch job |
| [**getTemplate()**](PDFApi.md#getTemplate) | **GET** /templates/{template_id} | Check the status of an uploaded template |
| [**getTemplateSchema()**](PDFApi.md#getTemplateSchema) | **GET** /templates/{template_id}/schema | Fetch the JSON schema for a template |
| [**listCombinedSubmissions()**](PDFApi.md#listCombinedSubmissions) | **GET** /combined_submissions | Get a list of all combined submissions |
| [**listFolders()**](PDFApi.md#listFolders) | **GET** /folders/ | Get a list of all folders |
| [**listSubmissions()**](PDFApi.md#listSubmissions) | **GET** /submissions | List all submissions |
| [**listTemplateSubmissions()**](PDFApi.md#listTemplateSubmissions) | **GET** /templates/{template_id}/submissions | List all submissions for a given template |
| [**listTemplates()**](PDFApi.md#listTemplates) | **GET** /templates | Get a list of all templates |
| [**moveFolderToFolder()**](PDFApi.md#moveFolderToFolder) | **POST** /folders/{folder_id}/move | Move a folder |
| [**moveTemplateToFolder()**](PDFApi.md#moveTemplateToFolder) | **POST** /templates/{template_id}/move | Move Template to folder |
| [**renameFolder()**](PDFApi.md#renameFolder) | **POST** /folders/{folder_id}/rename | Rename a folder |
| [**testAuthentication()**](PDFApi.md#testAuthentication) | **GET** /authentication | Test Authentication |
| [**updateDataRequest()**](PDFApi.md#updateDataRequest) | **PUT** /data_requests/{data_request_id} | Update a submission data request |
| [**updateTemplate()**](PDFApi.md#updateTemplate) | **PUT** /templates/{template_id} | Update a Template |


## `addFieldsToTemplate()`

```php
addFieldsToTemplate($template_id, $data): \DocSpring\Model\AddFieldsTemplateResponse
```

Add new fields to a Template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_000000000000000002; // string
$data = new \DocSpring\Model\AddFieldsData(); // \DocSpring\Model\AddFieldsData

try {
    $result = $apiInstance->addFieldsToTemplate($template_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->addFieldsToTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **data** | [**\DocSpring\Model\AddFieldsData**](../Model/AddFieldsData.md)|  | |

### Return type

[**\DocSpring\Model\AddFieldsTemplateResponse**](../Model/AddFieldsTemplateResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchGeneratePdfV1()`

```php
batchGeneratePdfV1($template_id, $data): \DocSpring\Model\CreateSubmissionResponse[]
```

Generates multiple PDFs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_000000000000000001; // string
$data = array(new \DocSpring\Model\SubmissionData()); // \DocSpring\Model\SubmissionData[]

try {
    $result = $apiInstance->batchGeneratePdfV1($template_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->batchGeneratePdfV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **data** | [**\DocSpring\Model\SubmissionData[]**](../Model/SubmissionData.md)|  | |

### Return type

[**\DocSpring\Model\CreateSubmissionResponse[]**](../Model/CreateSubmissionResponse.md)

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
batchGeneratePdfs($data): \DocSpring\Model\CreateSubmissionBatchResponse
```

Generates multiple PDFs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \DocSpring\Model\SubmissionBatchData(); // \DocSpring\Model\SubmissionBatchData

try {
    $result = $apiInstance->batchGeneratePdfs($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->batchGeneratePdfs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\DocSpring\Model\SubmissionBatchData**](../Model/SubmissionBatchData.md)|  | |

### Return type

[**\DocSpring\Model\CreateSubmissionBatchResponse**](../Model/CreateSubmissionBatchResponse.md)

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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
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
    echo 'Exception when calling PDFApi->combinePdfs: ', $e->getMessage(), PHP_EOL;
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

## `combineSubmissions()`

```php
combineSubmissions($data): \DocSpring\Model\CreateCombinedSubmissionResponse
```

Merge generated PDFs together

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \DocSpring\Model\CombinedSubmissionData(); // \DocSpring\Model\CombinedSubmissionData

try {
    $result = $apiInstance->combineSubmissions($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->combineSubmissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\DocSpring\Model\CombinedSubmissionData**](../Model/CombinedSubmissionData.md)|  | |

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
copyTemplate($template_id, $data): \DocSpring\Model\Template
```

Copy a Template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_000000000000000001; // string
$data = new \DocSpring\Model\CopyTemplateData(); // \DocSpring\Model\CopyTemplateData

try {
    $result = $apiInstance->copyTemplate($template_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->copyTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **data** | [**\DocSpring\Model\CopyTemplateData**](../Model/CopyTemplateData.md)|  | |

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

## `createCustomFileFromUpload()`

```php
createCustomFileFromUpload($data): \DocSpring\Model\CreateCustomFileResponse
```

Create a new custom file from a cached presign upload

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
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
    echo 'Exception when calling PDFApi->createCustomFileFromUpload: ', $e->getMessage(), PHP_EOL;
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

## `createDataRequestToken()`

```php
createDataRequestToken($data_request_id): \DocSpring\Model\CreateSubmissionDataRequestTokenResponse
```

Creates a new data request token for form authentication

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_request_id = drq_000000000000000001; // string

try {
    $result = $apiInstance->createDataRequestToken($data_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->createDataRequestToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data_request_id** | **string**|  | |

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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
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
    echo 'Exception when calling PDFApi->createFolder: ', $e->getMessage(), PHP_EOL;
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

## `createHTMLTemplate()`

```php
createHTMLTemplate($data): \DocSpring\Model\PendingTemplate
```

Create a new HTML template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \DocSpring\Model\CreateHtmlTemplateData(); // \DocSpring\Model\CreateHtmlTemplateData

try {
    $result = $apiInstance->createHTMLTemplate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->createHTMLTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\DocSpring\Model\CreateHtmlTemplateData**](../Model/CreateHtmlTemplateData.md)|  | |

### Return type

[**\DocSpring\Model\PendingTemplate**](../Model/PendingTemplate.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPDFTemplate()`

```php
createPDFTemplate($template_document, $template_name, $template_parent_folder_id): \DocSpring\Model\PendingTemplate
```

Create a new PDF template with a form POST file upload

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_document = "/path/to/file.txt"; // \SplFileObject
$template_name = 'template_name_example'; // string
$template_parent_folder_id = 'template_parent_folder_id_example'; // string

try {
    $result = $apiInstance->createPDFTemplate($template_document, $template_name, $template_parent_folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->createPDFTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_document** | **\SplFileObject****\SplFileObject**|  | |
| **template_name** | **string**|  | |
| **template_parent_folder_id** | **string**|  | [optional] |

### Return type

[**\DocSpring\Model\PendingTemplate**](../Model/PendingTemplate.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPDFTemplateFromUpload()`

```php
createPDFTemplateFromUpload($data): \DocSpring\Model\PendingTemplate
```

Create a new PDF template from a cached presign upload

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \DocSpring\Model\CreateTemplateFromUploadData(); // \DocSpring\Model\CreateTemplateFromUploadData

try {
    $result = $apiInstance->createPDFTemplateFromUpload($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->createPDFTemplateFromUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\DocSpring\Model\CreateTemplateFromUploadData**](../Model/CreateTemplateFromUploadData.md)|  | |

### Return type

[**\DocSpring\Model\PendingTemplate**](../Model/PendingTemplate.md)

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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = fld_000000000000000001; // string

try {
    $result = $apiInstance->deleteFolder($folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->deleteFolder: ', $e->getMessage(), PHP_EOL;
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
deleteTemplate($template_id): \DocSpring\Model\DeleteTemplateResponse
```

Delete a template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_000000000000000001; // string

try {
    $result = $apiInstance->deleteTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->deleteTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |

### Return type

[**\DocSpring\Model\DeleteTemplateResponse**](../Model/DeleteTemplateResponse.md)

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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$combined_submission_id = com_000000000000000001; // string

try {
    $result = $apiInstance->expireCombinedSubmission($combined_submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->expireCombinedSubmission: ', $e->getMessage(), PHP_EOL;
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
expireSubmission($submission_id): \DocSpring\Model\Submission
```

Expire a PDF submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$submission_id = sub_000000000000000001; // string

try {
    $result = $apiInstance->expireSubmission($submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->expireSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**|  | |

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

## `generatePDF()`

```php
generatePDF($template_id, $submission): \DocSpring\Model\CreateSubmissionResponse
```

Generates a new PDF

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_000000000000000001; // string
$submission = new \DocSpring\Model\CreateSubmissionData(); // \DocSpring\Model\CreateSubmissionData

try {
    $result = $apiInstance->generatePDF($template_id, $submission);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->generatePDF: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **submission** | [**\DocSpring\Model\CreateSubmissionData**](../Model/CreateSubmissionData.md)|  | |

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

## `getCombinedSubmission()`

```php
getCombinedSubmission($combined_submission_id): \DocSpring\Model\CombinedSubmission
```

Check the status of a combined submission (merged PDFs)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$combined_submission_id = com_000000000000000001; // string

try {
    $result = $apiInstance->getCombinedSubmission($combined_submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getCombinedSubmission: ', $e->getMessage(), PHP_EOL;
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
getDataRequest($data_request_id): \DocSpring\Model\SubmissionDataRequest
```

Look up a submission data request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_request_id = drq_000000000000000001; // string

try {
    $result = $apiInstance->getDataRequest($data_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getDataRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data_request_id** | **string**|  | |

### Return type

[**\DocSpring\Model\SubmissionDataRequest**](../Model/SubmissionDataRequest.md)

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
getFullTemplate($template_id): \DocSpring\Model\FullTemplate
```

Fetch the full template attributes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_000000000000000001; // string

try {
    $result = $apiInstance->getFullTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getFullTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |

### Return type

[**\DocSpring\Model\FullTemplate**](../Model/FullTemplate.md)

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
getPresignUrl(): object
```

Get a presigned URL so that you can upload a file to our AWS S3 bucket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPresignUrl();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getPresignUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$submission_id = sub_000000000000000001; // string
$include_data = true; // bool

try {
    $result = $apiInstance->getSubmission($submission_id, $include_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getSubmission: ', $e->getMessage(), PHP_EOL;
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
getSubmissionBatch($submission_batch_id, $include_submissions): \DocSpring\Model\SubmissionBatch
```

Check the status of a submission batch job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$submission_batch_id = sbb_000000000000000001; // string
$include_submissions = true; // bool

try {
    $result = $apiInstance->getSubmissionBatch($submission_batch_id, $include_submissions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getSubmissionBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_batch_id** | **string**|  | |
| **include_submissions** | **bool**|  | [optional] |

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
getTemplate($template_id): \DocSpring\Model\Template
```

Check the status of an uploaded template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_000000000000000001; // string

try {
    $result = $apiInstance->getTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getTemplate: ', $e->getMessage(), PHP_EOL;
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

## `getTemplateSchema()`

```php
getTemplateSchema($template_id): object
```

Fetch the JSON schema for a template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_000000000000000001; // string

try {
    $result = $apiInstance->getTemplateSchema($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getTemplateSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |

### Return type

**object**

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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 2; // int | Default: 1
$per_page = 1; // int | Default: 50

try {
    $result = $apiInstance->listCombinedSubmissions($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->listCombinedSubmissions: ', $e->getMessage(), PHP_EOL;
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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_folder_id = fld_000000000000000002; // string | Filter By Folder Id

try {
    $result = $apiInstance->listFolders($parent_folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->listFolders: ', $e->getMessage(), PHP_EOL;
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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = sub_list_000012; // string
$limit = 3; // float
$created_after = 2019-01-01T09:00:00-05:00; // string
$created_before = 2020-01-01T09:00:00.000+0200; // string
$type = test; // string
$include_data = true; // bool

try {
    $result = $apiInstance->listSubmissions($cursor, $limit, $created_after, $created_before, $type, $include_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->listSubmissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**|  | [optional] |
| **limit** | **float**|  | [optional] |
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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_000000000000000002; // string
$cursor = 'cursor_example'; // string
$limit = 3.4; // float
$created_after = 'created_after_example'; // string
$created_before = 'created_before_example'; // string
$type = 'type_example'; // string
$include_data = true; // bool

try {
    $result = $apiInstance->listTemplateSubmissions($template_id, $cursor, $limit, $created_after, $created_before, $type, $include_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->listTemplateSubmissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **cursor** | **string**|  | [optional] |
| **limit** | **float**|  | [optional] |
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
listTemplates($query, $parent_folder_id, $page, $per_page): \DocSpring\Model\Template[]
```

Get a list of all templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 2; // string | Search By Name
$parent_folder_id = fld_000000000000000001; // string | Filter By Folder Id
$page = 2; // int | Default: 1
$per_page = 1; // int | Default: 50

try {
    $result = $apiInstance->listTemplates($query, $parent_folder_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->listTemplates: ', $e->getMessage(), PHP_EOL;
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

[**\DocSpring\Model\Template[]**](../Model/Template.md)

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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = fld_000000000000000001; // string
$data = new \DocSpring\Model\MoveFolderData(); // \DocSpring\Model\MoveFolderData

try {
    $result = $apiInstance->moveFolderToFolder($folder_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->moveFolderToFolder: ', $e->getMessage(), PHP_EOL;
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
moveTemplateToFolder($template_id, $data): \DocSpring\Model\Template
```

Move Template to folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_000000000000000001; // string
$data = new \DocSpring\Model\MoveTemplateData(); // \DocSpring\Model\MoveTemplateData

try {
    $result = $apiInstance->moveTemplateToFolder($template_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->moveTemplateToFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **data** | [**\DocSpring\Model\MoveTemplateData**](../Model/MoveTemplateData.md)|  | |

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

## `renameFolder()`

```php
renameFolder($folder_id, $data)
```

Rename a folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = fld_000000000000000001; // string
$data = new \DocSpring\Model\RenameFolderData(); // \DocSpring\Model\RenameFolderData

try {
    $apiInstance->renameFolder($folder_id, $data);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->renameFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **string**|  | |
| **data** | [**\DocSpring\Model\RenameFolderData**](../Model/RenameFolderData.md)|  | |

### Return type

void (empty response body)

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
testAuthentication(): \DocSpring\Model\AuthenticationSuccessResponse
```

Test Authentication

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->testAuthentication();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->testAuthentication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\DocSpring\Model\AuthenticationSuccessResponse**](../Model/AuthenticationSuccessResponse.md)

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
updateDataRequest($data_request_id, $data): \DocSpring\Model\UpdateDataRequestResponse
```

Update a submission data request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_request_id = drq_000000000000000001; // string
$data = new \DocSpring\Model\UpdateSubmissionDataRequestData(); // \DocSpring\Model\UpdateSubmissionDataRequestData

try {
    $result = $apiInstance->updateDataRequest($data_request_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->updateDataRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data_request_id** | **string**|  | |
| **data** | [**\DocSpring\Model\UpdateSubmissionDataRequestData**](../Model/UpdateSubmissionDataRequestData.md)|  | |

### Return type

[**\DocSpring\Model\UpdateDataRequestResponse**](../Model/UpdateDataRequestResponse.md)

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
updateTemplate($template_id, $data): \DocSpring\Model\UpdateTemplateResponse
```

Update a Template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: api_token_basic
$config = DocSpring\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new DocSpring\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_000000000000000003; // string
$data = new \DocSpring\Model\UpdateTemplateData(); // \DocSpring\Model\UpdateTemplateData

try {
    $result = $apiInstance->updateTemplate($template_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->updateTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **data** | [**\DocSpring\Model\UpdateTemplateData**](../Model/UpdateTemplateData.md)|  | |

### Return type

[**\DocSpring\Model\UpdateTemplateResponse**](../Model/UpdateTemplateResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
