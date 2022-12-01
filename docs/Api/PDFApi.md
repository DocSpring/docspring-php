# DocSpring\PDFApi

All URIs are relative to *https://api.docspring.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFieldsToTemplate**](PDFApi.md#addFieldsToTemplate) | **PUT** /templates/{template_id}/add_fields | Add new fields to a Template
[**batchGeneratePdfV1**](PDFApi.md#batchGeneratePdfV1) | **POST** /templates/{template_id}/submissions/batch | Generates multiple PDFs
[**batchGeneratePdfs**](PDFApi.md#batchGeneratePdfs) | **POST** /submissions/batches | Generates multiple PDFs
[**combinePdfs**](PDFApi.md#combinePdfs) | **POST** /combined_submissions?v&#x3D;2 | Merge submission PDFs, template PDFs, or custom files
[**combineSubmissions**](PDFApi.md#combineSubmissions) | **POST** /combined_submissions | Merge generated PDFs together
[**copyTemplate**](PDFApi.md#copyTemplate) | **POST** /templates/{template_id}/copy | Copy a Template
[**createCustomFileFromUpload**](PDFApi.md#createCustomFileFromUpload) | **POST** /custom_files | Create a new custom file from a cached presign upload
[**createDataRequestToken**](PDFApi.md#createDataRequestToken) | **POST** /data_requests/{data_request_id}/tokens | Creates a new data request token for form authentication
[**createFolder**](PDFApi.md#createFolder) | **POST** /folders/ | Create a folder
[**createHTMLTemplate**](PDFApi.md#createHTMLTemplate) | **POST** /templates?desc&#x3D;html | Create a new HTML template
[**createPDFTemplate**](PDFApi.md#createPDFTemplate) | **POST** /templates | Create a new PDF template with a form POST file upload
[**createPDFTemplateFromUpload**](PDFApi.md#createPDFTemplateFromUpload) | **POST** /templates?desc&#x3D;cached_upload | Create a new PDF template from a cached presign upload
[**deleteFolder**](PDFApi.md#deleteFolder) | **DELETE** /folders/{folder_id} | Delete a folder
[**expireCombinedSubmission**](PDFApi.md#expireCombinedSubmission) | **DELETE** /combined_submissions/{combined_submission_id} | Expire a combined submission
[**expireSubmission**](PDFApi.md#expireSubmission) | **DELETE** /submissions/{submission_id} | Expire a PDF submission
[**generatePDF**](PDFApi.md#generatePDF) | **POST** /templates/{template_id}/submissions | Generates a new PDF
[**getCombinedSubmission**](PDFApi.md#getCombinedSubmission) | **GET** /combined_submissions/{combined_submission_id} | Check the status of a combined submission (merged PDFs)
[**getDataRequest**](PDFApi.md#getDataRequest) | **GET** /data_requests/{data_request_id} | Look up a submission data request
[**getFullTemplate**](PDFApi.md#getFullTemplate) | **GET** /templates/{template_id}?full&#x3D;true | Fetch the full template attributes
[**getPresignUrl**](PDFApi.md#getPresignUrl) | **GET** /uploads/presign | Get a presigned URL so that you can upload a file to our AWS S3 bucket
[**getSubmission**](PDFApi.md#getSubmission) | **GET** /submissions/{submission_id} | Check the status of a PDF
[**getSubmissionBatch**](PDFApi.md#getSubmissionBatch) | **GET** /submissions/batches/{submission_batch_id} | Check the status of a submission batch job
[**getTemplate**](PDFApi.md#getTemplate) | **GET** /templates/{template_id} | Check the status of an uploaded template
[**getTemplateSchema**](PDFApi.md#getTemplateSchema) | **GET** /templates/{template_id}/schema | Fetch the JSON schema for a template
[**listFolders**](PDFApi.md#listFolders) | **GET** /folders/ | Get a list of all folders
[**listSubmissions**](PDFApi.md#listSubmissions) | **GET** /submissions | List all submissions
[**listSubmissions_0**](PDFApi.md#listSubmissions_0) | **GET** /templates/{template_id}/submissions | List all submissions for a given template
[**listTemplates**](PDFApi.md#listTemplates) | **GET** /templates | Get a list of all templates
[**moveFolderToFolder**](PDFApi.md#moveFolderToFolder) | **POST** /folders/{folder_id}/move | Move a folder
[**moveTemplateToFolder**](PDFApi.md#moveTemplateToFolder) | **POST** /templates/{template_id}/move | Move Template to folder
[**renameFolder**](PDFApi.md#renameFolder) | **POST** /folders/{folder_id}/rename | Rename a folder
[**testAuthentication**](PDFApi.md#testAuthentication) | **GET** /authentication | Test Authentication
[**updateDataRequest**](PDFApi.md#updateDataRequest) | **PUT** /data_requests/{data_request_id} | Update a submission data request
[**updateTemplate**](PDFApi.md#updateTemplate) | **PUT** /templates/{template_id} | Update a Template


# **addFieldsToTemplate**
> \DocSpring\Model\AddFieldsTemplateResponse addFieldsToTemplate($template_id, $add_fields_data)

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
$template_id = tpl_000000000000000002; // string | 
$add_fields_data = new \DocSpring\Model\AddFieldsData(); // \DocSpring\Model\AddFieldsData | 

try {
    $result = $apiInstance->addFieldsToTemplate($template_id, $add_fields_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->addFieldsToTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**|  |
 **add_fields_data** | [**\DocSpring\Model\AddFieldsData**](../Model/AddFieldsData.md)|  |

### Return type

[**\DocSpring\Model\AddFieldsTemplateResponse**](../Model/AddFieldsTemplateResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchGeneratePdfV1**
> \DocSpring\Model\CreateSubmissionResponse[] batchGeneratePdfV1($template_id, $request_body)

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
$template_id = tpl_000000000000000001; // string | 
$request_body = array(new \DocSpring\Model\array()); // object[] | 

try {
    $result = $apiInstance->batchGeneratePdfV1($template_id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->batchGeneratePdfV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**|  |
 **request_body** | [**object[]**](../Model/array.md)|  |

### Return type

[**\DocSpring\Model\CreateSubmissionResponse[]**](../Model/CreateSubmissionResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchGeneratePdfs**
> \DocSpring\Model\CreateSubmissionBatchResponse batchGeneratePdfs($submission_batch_data)

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
$submission_batch_data = new \DocSpring\Model\SubmissionBatchData(); // \DocSpring\Model\SubmissionBatchData | 

try {
    $result = $apiInstance->batchGeneratePdfs($submission_batch_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->batchGeneratePdfs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **submission_batch_data** | [**\DocSpring\Model\SubmissionBatchData**](../Model/SubmissionBatchData.md)|  |

### Return type

[**\DocSpring\Model\CreateSubmissionBatchResponse**](../Model/CreateSubmissionBatchResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **combinePdfs**
> \DocSpring\Model\CreateCombinedSubmissionResponse combinePdfs($combine_pdfs_data)

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
$combine_pdfs_data = new \DocSpring\Model\CombinePdfsData(); // \DocSpring\Model\CombinePdfsData | 

try {
    $result = $apiInstance->combinePdfs($combine_pdfs_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->combinePdfs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **combine_pdfs_data** | [**\DocSpring\Model\CombinePdfsData**](../Model/CombinePdfsData.md)|  |

### Return type

[**\DocSpring\Model\CreateCombinedSubmissionResponse**](../Model/CreateCombinedSubmissionResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **combineSubmissions**
> \DocSpring\Model\CreateCombinedSubmissionResponse combineSubmissions($combined_submission_data)

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
$combined_submission_data = new \DocSpring\Model\CombinedSubmissionData(); // \DocSpring\Model\CombinedSubmissionData | 

try {
    $result = $apiInstance->combineSubmissions($combined_submission_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->combineSubmissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **combined_submission_data** | [**\DocSpring\Model\CombinedSubmissionData**](../Model/CombinedSubmissionData.md)|  |

### Return type

[**\DocSpring\Model\CreateCombinedSubmissionResponse**](../Model/CreateCombinedSubmissionResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **copyTemplate**
> \DocSpring\Model\Template copyTemplate($template_id, $copy_template_data)

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
$template_id = tpl_000000000000000001; // string | 
$copy_template_data = new \DocSpring\Model\CopyTemplateData(); // \DocSpring\Model\CopyTemplateData | 

try {
    $result = $apiInstance->copyTemplate($template_id, $copy_template_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->copyTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**|  |
 **copy_template_data** | [**\DocSpring\Model\CopyTemplateData**](../Model/CopyTemplateData.md)|  |

### Return type

[**\DocSpring\Model\Template**](../Model/Template.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCustomFileFromUpload**
> \DocSpring\Model\CreateCustomFileResponse createCustomFileFromUpload($create_custom_file_data)

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
$create_custom_file_data = new \DocSpring\Model\CreateCustomFileData(); // \DocSpring\Model\CreateCustomFileData | 

try {
    $result = $apiInstance->createCustomFileFromUpload($create_custom_file_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->createCustomFileFromUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_custom_file_data** | [**\DocSpring\Model\CreateCustomFileData**](../Model/CreateCustomFileData.md)|  |

### Return type

[**\DocSpring\Model\CreateCustomFileResponse**](../Model/CreateCustomFileResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDataRequestToken**
> \DocSpring\Model\CreateSubmissionDataRequestTokenResponse createDataRequestToken($data_request_id)

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
$data_request_id = drq_000000000000000001; // string | 

try {
    $result = $apiInstance->createDataRequestToken($data_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->createDataRequestToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_request_id** | **string**|  |

### Return type

[**\DocSpring\Model\CreateSubmissionDataRequestTokenResponse**](../Model/CreateSubmissionDataRequestTokenResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFolder**
> \DocSpring\Model\Folder createFolder($create_folder_data)

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
$create_folder_data = new \DocSpring\Model\CreateFolderData(); // \DocSpring\Model\CreateFolderData | 

try {
    $result = $apiInstance->createFolder($create_folder_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->createFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_folder_data** | [**\DocSpring\Model\CreateFolderData**](../Model/CreateFolderData.md)|  |

### Return type

[**\DocSpring\Model\Folder**](../Model/Folder.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createHTMLTemplate**
> \DocSpring\Model\PendingTemplate createHTMLTemplate($create_html_template_data)

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
$create_html_template_data = new \DocSpring\Model\CreateHtmlTemplateData(); // \DocSpring\Model\CreateHtmlTemplateData | 

try {
    $result = $apiInstance->createHTMLTemplate($create_html_template_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->createHTMLTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_html_template_data** | [**\DocSpring\Model\CreateHtmlTemplateData**](../Model/CreateHtmlTemplateData.md)|  |

### Return type

[**\DocSpring\Model\PendingTemplate**](../Model/PendingTemplate.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPDFTemplate**
> \DocSpring\Model\PendingTemplate createPDFTemplate($template_document, $template_name, $template_parent_folder_id)

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
$template_document = "/path/to/file.txt"; // \SplFileObject | 
$template_name = 'template_name_example'; // string | 
$template_parent_folder_id = 'template_parent_folder_id_example'; // string | 

try {
    $result = $apiInstance->createPDFTemplate($template_document, $template_name, $template_parent_folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->createPDFTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_document** | **\SplFileObject****\SplFileObject**|  |
 **template_name** | **string**|  |
 **template_parent_folder_id** | **string**|  | [optional]

### Return type

[**\DocSpring\Model\PendingTemplate**](../Model/PendingTemplate.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPDFTemplateFromUpload**
> \DocSpring\Model\PendingTemplate createPDFTemplateFromUpload($create_template_from_upload_data)

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
$create_template_from_upload_data = new \DocSpring\Model\CreateTemplateFromUploadData(); // \DocSpring\Model\CreateTemplateFromUploadData | 

try {
    $result = $apiInstance->createPDFTemplateFromUpload($create_template_from_upload_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->createPDFTemplateFromUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_template_from_upload_data** | [**\DocSpring\Model\CreateTemplateFromUploadData**](../Model/CreateTemplateFromUploadData.md)|  |

### Return type

[**\DocSpring\Model\PendingTemplate**](../Model/PendingTemplate.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFolder**
> \DocSpring\Model\Folder deleteFolder($folder_id)

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
$folder_id = fld_000000000000000001; // string | 

try {
    $result = $apiInstance->deleteFolder($folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->deleteFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **string**|  |

### Return type

[**\DocSpring\Model\Folder**](../Model/Folder.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expireCombinedSubmission**
> \DocSpring\Model\CombinedSubmission expireCombinedSubmission($combined_submission_id)

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
$combined_submission_id = com_000000000000000001; // string | 

try {
    $result = $apiInstance->expireCombinedSubmission($combined_submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->expireCombinedSubmission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **combined_submission_id** | **string**|  |

### Return type

[**\DocSpring\Model\CombinedSubmission**](../Model/CombinedSubmission.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expireSubmission**
> \DocSpring\Model\Submission expireSubmission($submission_id)

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
$submission_id = sub_000000000000000001; // string | 

try {
    $result = $apiInstance->expireSubmission($submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->expireSubmission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **submission_id** | **string**|  |

### Return type

[**\DocSpring\Model\Submission**](../Model/Submission.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generatePDF**
> \DocSpring\Model\CreateSubmissionResponse generatePDF($template_id, $submission_data)

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
$template_id = tpl_000000000000000001; // string | 
$submission_data = new \DocSpring\Model\SubmissionData(); // \DocSpring\Model\SubmissionData | 

try {
    $result = $apiInstance->generatePDF($template_id, $submission_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->generatePDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**|  |
 **submission_data** | [**\DocSpring\Model\SubmissionData**](../Model/SubmissionData.md)|  |

### Return type

[**\DocSpring\Model\CreateSubmissionResponse**](../Model/CreateSubmissionResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCombinedSubmission**
> \DocSpring\Model\CombinedSubmission getCombinedSubmission($combined_submission_id)

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
$combined_submission_id = com_000000000000000001; // string | 

try {
    $result = $apiInstance->getCombinedSubmission($combined_submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getCombinedSubmission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **combined_submission_id** | **string**|  |

### Return type

[**\DocSpring\Model\CombinedSubmission**](../Model/CombinedSubmission.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataRequest**
> \DocSpring\Model\SubmissionDataRequest getDataRequest($data_request_id)

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
$data_request_id = drq_000000000000000001; // string | 

try {
    $result = $apiInstance->getDataRequest($data_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getDataRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_request_id** | **string**|  |

### Return type

[**\DocSpring\Model\SubmissionDataRequest**](../Model/SubmissionDataRequest.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFullTemplate**
> \DocSpring\Model\FullTemplate getFullTemplate($template_id)

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
$template_id = tpl_000000000000000001; // string | 

try {
    $result = $apiInstance->getFullTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getFullTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**|  |

### Return type

[**\DocSpring\Model\FullTemplate**](../Model/FullTemplate.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPresignUrl**
> map[string,object] getPresignUrl()

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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**map[string,object]**

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubmission**
> \DocSpring\Model\Submission getSubmission($submission_id, $include_data)

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
$submission_id = sub_000000000000000001; // string | 
$include_data = true; // bool | 

try {
    $result = $apiInstance->getSubmission($submission_id, $include_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getSubmission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **submission_id** | **string**|  |
 **include_data** | **bool**|  | [optional]

### Return type

[**\DocSpring\Model\Submission**](../Model/Submission.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubmissionBatch**
> \DocSpring\Model\SubmissionBatch getSubmissionBatch($submission_batch_id, $include_submissions)

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
$submission_batch_id = sbb_000000000000000001; // string | 
$include_submissions = true; // bool | 

try {
    $result = $apiInstance->getSubmissionBatch($submission_batch_id, $include_submissions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getSubmissionBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **submission_batch_id** | **string**|  |
 **include_submissions** | **bool**|  | [optional]

### Return type

[**\DocSpring\Model\SubmissionBatch**](../Model/SubmissionBatch.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplate**
> \DocSpring\Model\Template getTemplate($template_id)

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
$template_id = tpl_000000000000000001; // string | 

try {
    $result = $apiInstance->getTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**|  |

### Return type

[**\DocSpring\Model\Template**](../Model/Template.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateSchema**
> map[string,object] getTemplateSchema($template_id)

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
$template_id = tpl_000000000000000001; // string | 

try {
    $result = $apiInstance->getTemplateSchema($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getTemplateSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**|  |

### Return type

**map[string,object]**

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFolders**
> \DocSpring\Model\Folder[] listFolders($parent_folder_id)

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_folder_id** | **string**| Filter By Folder Id | [optional]

### Return type

[**\DocSpring\Model\Folder[]**](../Model/Folder.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSubmissions**
> \DocSpring\Model\ListSubmissionsResponse listSubmissions($cursor, $limit, $created_after, $created_before, $type, $include_data)

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
$cursor = sub_list_000012; // string | 
$limit = 3; // float | 
$created_after = 2019-01-01T09:00:00-05:00; // string | 
$created_before = 2020-01-01T09:00:00-05:00; // string | 
$type = test; // string | 
$include_data = true; // bool | 

try {
    $result = $apiInstance->listSubmissions($cursor, $limit, $created_after, $created_before, $type, $include_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->listSubmissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cursor** | **string**|  | [optional]
 **limit** | **float**|  | [optional]
 **created_after** | **string**|  | [optional]
 **created_before** | **string**|  | [optional]
 **type** | **string**|  | [optional]
 **include_data** | **bool**|  | [optional]

### Return type

[**\DocSpring\Model\ListSubmissionsResponse**](../Model/ListSubmissionsResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSubmissions_0**
> \DocSpring\Model\ListSubmissionsResponse listSubmissions_0($template_id, $cursor, $limit, $created_after, $created_before, $type, $include_data)

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
$template_id = tpl_000000000000000002; // string | 
$cursor = 'cursor_example'; // string | 
$limit = 3.4; // float | 
$created_after = 'created_after_example'; // string | 
$created_before = 'created_before_example'; // string | 
$type = 'type_example'; // string | 
$include_data = true; // bool | 

try {
    $result = $apiInstance->listSubmissions_0($template_id, $cursor, $limit, $created_after, $created_before, $type, $include_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->listSubmissions_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**|  |
 **cursor** | **string**|  | [optional]
 **limit** | **float**|  | [optional]
 **created_after** | **string**|  | [optional]
 **created_before** | **string**|  | [optional]
 **type** | **string**|  | [optional]
 **include_data** | **bool**|  | [optional]

### Return type

[**\DocSpring\Model\ListSubmissionsResponse**](../Model/ListSubmissionsResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTemplates**
> \DocSpring\Model\Template[] listTemplates($query, $parent_folder_id, $page, $per_page)

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Search By Name | [optional]
 **parent_folder_id** | **string**| Filter By Folder Id | [optional]
 **page** | **int**| Default: 1 | [optional]
 **per_page** | **int**| Default: 50 | [optional]

### Return type

[**\DocSpring\Model\Template[]**](../Model/Template.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveFolderToFolder**
> \DocSpring\Model\Folder moveFolderToFolder($folder_id, $move_folder_data)

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
$folder_id = fld_000000000000000001; // string | 
$move_folder_data = new \DocSpring\Model\MoveFolderData(); // \DocSpring\Model\MoveFolderData | 

try {
    $result = $apiInstance->moveFolderToFolder($folder_id, $move_folder_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->moveFolderToFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **string**|  |
 **move_folder_data** | [**\DocSpring\Model\MoveFolderData**](../Model/MoveFolderData.md)|  |

### Return type

[**\DocSpring\Model\Folder**](../Model/Folder.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveTemplateToFolder**
> \DocSpring\Model\Template moveTemplateToFolder($template_id, $move_template_data)

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
$template_id = tpl_000000000000000001; // string | 
$move_template_data = new \DocSpring\Model\MoveTemplateData(); // \DocSpring\Model\MoveTemplateData | 

try {
    $result = $apiInstance->moveTemplateToFolder($template_id, $move_template_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->moveTemplateToFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**|  |
 **move_template_data** | [**\DocSpring\Model\MoveTemplateData**](../Model/MoveTemplateData.md)|  |

### Return type

[**\DocSpring\Model\Template**](../Model/Template.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **renameFolder**
> renameFolder($folder_id, $rename_folder_data)

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
$folder_id = fld_000000000000000001; // string | 
$rename_folder_data = new \DocSpring\Model\RenameFolderData(); // \DocSpring\Model\RenameFolderData | 

try {
    $apiInstance->renameFolder($folder_id, $rename_folder_data);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->renameFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **string**|  |
 **rename_folder_data** | [**\DocSpring\Model\RenameFolderData**](../Model/RenameFolderData.md)|  |

### Return type

void (empty response body)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testAuthentication**
> \DocSpring\Model\AuthenticationSuccessResponse testAuthentication()

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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\DocSpring\Model\AuthenticationSuccessResponse**](../Model/AuthenticationSuccessResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDataRequest**
> \DocSpring\Model\UpdateDataRequestResponse updateDataRequest($data_request_id, $update_submission_data_request_data)

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
$data_request_id = drq_000000000000000001; // string | 
$update_submission_data_request_data = new \DocSpring\Model\UpdateSubmissionDataRequestData(); // \DocSpring\Model\UpdateSubmissionDataRequestData | 

try {
    $result = $apiInstance->updateDataRequest($data_request_id, $update_submission_data_request_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->updateDataRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_request_id** | **string**|  |
 **update_submission_data_request_data** | [**\DocSpring\Model\UpdateSubmissionDataRequestData**](../Model/UpdateSubmissionDataRequestData.md)|  |

### Return type

[**\DocSpring\Model\UpdateDataRequestResponse**](../Model/UpdateDataRequestResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTemplate**
> \DocSpring\Model\UpdateTemplateResponse updateTemplate($template_id, $update_template_data)

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
$template_id = tpl_000000000000000003; // string | 
$update_template_data = new \DocSpring\Model\UpdateTemplateData(); // \DocSpring\Model\UpdateTemplateData | 

try {
    $result = $apiInstance->updateTemplate($template_id, $update_template_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->updateTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**|  |
 **update_template_data** | [**\DocSpring\Model\UpdateTemplateData**](../Model/UpdateTemplateData.md)|  |

### Return type

[**\DocSpring\Model\UpdateTemplateResponse**](../Model/UpdateTemplateResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

