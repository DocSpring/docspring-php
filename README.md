# DocSpring

DocSpring provides an API that helps you fill out and sign PDF templates.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/docspring/docspring.git"
    }
  ],
  "require": {
    "docspring/docspring": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/DocSpring/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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
$template_id = tpl_1234567890abcdef02; // string
$data = new \DocSpring\Model\AddFieldsData(); // \DocSpring\Model\AddFieldsData

try {
    $result = $apiInstance->addFieldsToTemplate($template_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->addFieldsToTemplate: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://sync.api.docspring.com/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PDFApi* | [**addFieldsToTemplate**](docs/Api/PDFApi.md#addfieldstotemplate) | **PUT** /templates/{template_id}/add_fields | Add new fields to a Template
*PDFApi* | [**batchGeneratePdfs**](docs/Api/PDFApi.md#batchgeneratepdfs) | **POST** /submissions/batches | Generates multiple PDFs
*PDFApi* | [**combinePdfs**](docs/Api/PDFApi.md#combinepdfs) | **POST** /combined_submissions?v&#x3D;2 | Merge submission PDFs, template PDFs, or custom files
*PDFApi* | [**combineSubmissions**](docs/Api/PDFApi.md#combinesubmissions) | **POST** /combined_submissions | Merge generated PDFs together
*PDFApi* | [**copyTemplate**](docs/Api/PDFApi.md#copytemplate) | **POST** /templates/{template_id}/copy | Copy a Template
*PDFApi* | [**createCustomFileFromUpload**](docs/Api/PDFApi.md#createcustomfilefromupload) | **POST** /custom_files | Create a new custom file from a cached presign upload
*PDFApi* | [**createDataRequestEvent**](docs/Api/PDFApi.md#createdatarequestevent) | **POST** /data_requests/{data_request_id}/events | Creates a new event for emailing a signee a request for signature
*PDFApi* | [**createDataRequestToken**](docs/Api/PDFApi.md#createdatarequesttoken) | **POST** /data_requests/{data_request_id}/tokens | Creates a new data request token for form authentication
*PDFApi* | [**createFolder**](docs/Api/PDFApi.md#createfolder) | **POST** /folders/ | Create a folder
*PDFApi* | [**createHTMLTemplate**](docs/Api/PDFApi.md#createhtmltemplate) | **POST** /templates?endpoint_description&#x3D;html | Create a new HTML template
*PDFApi* | [**createPDFTemplate**](docs/Api/PDFApi.md#createpdftemplate) | **POST** /templates | Create a new PDF template with a form POST file upload
*PDFApi* | [**createPDFTemplateFromUpload**](docs/Api/PDFApi.md#createpdftemplatefromupload) | **POST** /templates?endpoint_description&#x3D;cached_upload | Create a new PDF template from a cached presign upload
*PDFApi* | [**deleteFolder**](docs/Api/PDFApi.md#deletefolder) | **DELETE** /folders/{folder_id} | Delete a folder
*PDFApi* | [**deleteTemplate**](docs/Api/PDFApi.md#deletetemplate) | **DELETE** /templates/{template_id} | Delete a template
*PDFApi* | [**expireCombinedSubmission**](docs/Api/PDFApi.md#expirecombinedsubmission) | **DELETE** /combined_submissions/{combined_submission_id} | Expire a combined submission
*PDFApi* | [**expireSubmission**](docs/Api/PDFApi.md#expiresubmission) | **DELETE** /submissions/{submission_id} | Expire a PDF submission
*PDFApi* | [**generatePdf**](docs/Api/PDFApi.md#generatepdf) | **POST** /templates/{template_id}/submissions | Generates a new PDF
*PDFApi* | [**generatePdfForHtmlTemplate**](docs/Api/PDFApi.md#generatepdfforhtmltemplate) | **POST** /templates/{template_id}/submissions?endpoint_description&#x3D;html_templates | Generates a new PDF for an HTML template
*PDFApi* | [**generatePreview**](docs/Api/PDFApi.md#generatepreview) | **POST** /submissions/{submission_id}/generate_preview | Generated a preview PDF for partially completed data requests
*PDFApi* | [**getCombinedSubmission**](docs/Api/PDFApi.md#getcombinedsubmission) | **GET** /combined_submissions/{combined_submission_id} | Check the status of a combined submission (merged PDFs)
*PDFApi* | [**getDataRequest**](docs/Api/PDFApi.md#getdatarequest) | **GET** /data_requests/{data_request_id} | Look up a submission data request
*PDFApi* | [**getFullTemplate**](docs/Api/PDFApi.md#getfulltemplate) | **GET** /templates/{template_id}?full&#x3D;true | Fetch the full attributes for a PDF template
*PDFApi* | [**getPresignUrl**](docs/Api/PDFApi.md#getpresignurl) | **GET** /uploads/presign | Get a presigned URL so that you can upload a file to our AWS S3 bucket
*PDFApi* | [**getSubmission**](docs/Api/PDFApi.md#getsubmission) | **GET** /submissions/{submission_id} | Check the status of a PDF
*PDFApi* | [**getSubmissionBatch**](docs/Api/PDFApi.md#getsubmissionbatch) | **GET** /submissions/batches/{submission_batch_id} | Check the status of a submission batch job
*PDFApi* | [**getTemplate**](docs/Api/PDFApi.md#gettemplate) | **GET** /templates/{template_id} | Check the status of an uploaded template
*PDFApi* | [**getTemplateSchema**](docs/Api/PDFApi.md#gettemplateschema) | **GET** /templates/{template_id}/schema | Fetch the JSON schema for a template
*PDFApi* | [**listCombinedSubmissions**](docs/Api/PDFApi.md#listcombinedsubmissions) | **GET** /combined_submissions | Get a list of all combined submissions
*PDFApi* | [**listFolders**](docs/Api/PDFApi.md#listfolders) | **GET** /folders/ | Get a list of all folders
*PDFApi* | [**listSubmissions**](docs/Api/PDFApi.md#listsubmissions) | **GET** /submissions | List all submissions
*PDFApi* | [**listTemplateSubmissions**](docs/Api/PDFApi.md#listtemplatesubmissions) | **GET** /templates/{template_id}/submissions | List all submissions for a given template
*PDFApi* | [**listTemplates**](docs/Api/PDFApi.md#listtemplates) | **GET** /templates | Get a list of all templates
*PDFApi* | [**moveFolderToFolder**](docs/Api/PDFApi.md#movefoldertofolder) | **POST** /folders/{folder_id}/move | Move a folder
*PDFApi* | [**moveTemplateToFolder**](docs/Api/PDFApi.md#movetemplatetofolder) | **POST** /templates/{template_id}/move | Move Template to folder
*PDFApi* | [**publishTemplateVersion**](docs/Api/PDFApi.md#publishtemplateversion) | **POST** /templates/{template_id}/publish_version | Publish a template version
*PDFApi* | [**renameFolder**](docs/Api/PDFApi.md#renamefolder) | **POST** /folders/{folder_id}/rename | Rename a folder
*PDFApi* | [**restoreTemplateVersion**](docs/Api/PDFApi.md#restoretemplateversion) | **POST** /templates/{template_id}/restore_version | Restore a template version
*PDFApi* | [**testAuthentication**](docs/Api/PDFApi.md#testauthentication) | **GET** /authentication | Test Authentication
*PDFApi* | [**updateDataRequest**](docs/Api/PDFApi.md#updatedatarequest) | **PUT** /data_requests/{data_request_id} | Update a submission data request
*PDFApi* | [**updateTemplate**](docs/Api/PDFApi.md#updatetemplate) | **PUT** /templates/{template_id} | Update a Template

## Models

- [AddFieldsData](docs/Model/AddFieldsData.md)
- [BatchGeneratePdfs201Response](docs/Model/BatchGeneratePdfs201Response.md)
- [CombinePdfsData](docs/Model/CombinePdfsData.md)
- [CombinedSubmission](docs/Model/CombinedSubmission.md)
- [CombinedSubmissionAction](docs/Model/CombinedSubmissionAction.md)
- [CombinedSubmissionData](docs/Model/CombinedSubmissionData.md)
- [CopyTemplateOptions](docs/Model/CopyTemplateOptions.md)
- [CreateCombinedSubmissionResponse](docs/Model/CreateCombinedSubmissionResponse.md)
- [CreateCustomFileData](docs/Model/CreateCustomFileData.md)
- [CreateCustomFileResponse](docs/Model/CreateCustomFileResponse.md)
- [CreateFolderData](docs/Model/CreateFolderData.md)
- [CreateHtmlSubmissionData](docs/Model/CreateHtmlSubmissionData.md)
- [CreateHtmlTemplate](docs/Model/CreateHtmlTemplate.md)
- [CreatePdfSubmissionData](docs/Model/CreatePdfSubmissionData.md)
- [CreatePdfTemplate](docs/Model/CreatePdfTemplate.md)
- [CreateSubmissionDataRequestData](docs/Model/CreateSubmissionDataRequestData.md)
- [CreateSubmissionDataRequestEventRequest](docs/Model/CreateSubmissionDataRequestEventRequest.md)
- [CreateSubmissionDataRequestEventResponse](docs/Model/CreateSubmissionDataRequestEventResponse.md)
- [CreateSubmissionDataRequestResponse](docs/Model/CreateSubmissionDataRequestResponse.md)
- [CreateSubmissionDataRequestTokenResponse](docs/Model/CreateSubmissionDataRequestTokenResponse.md)
- [CreateSubmissionResponse](docs/Model/CreateSubmissionResponse.md)
- [CustomFile](docs/Model/CustomFile.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [Folder](docs/Model/Folder.md)
- [JsonSchema](docs/Model/JsonSchema.md)
- [ListSubmissionsResponse](docs/Model/ListSubmissionsResponse.md)
- [MoveFolderData](docs/Model/MoveFolderData.md)
- [MoveTemplateData](docs/Model/MoveTemplateData.md)
- [MultipleErrorsResponse](docs/Model/MultipleErrorsResponse.md)
- [PublishVersionData](docs/Model/PublishVersionData.md)
- [RenameFolderData](docs/Model/RenameFolderData.md)
- [RestoreVersionData](docs/Model/RestoreVersionData.md)
- [Submission](docs/Model/Submission.md)
- [SubmissionAction](docs/Model/SubmissionAction.md)
- [SubmissionBatch](docs/Model/SubmissionBatch.md)
- [SubmissionBatchData](docs/Model/SubmissionBatchData.md)
- [SubmissionBatchWithSubmissions](docs/Model/SubmissionBatchWithSubmissions.md)
- [SubmissionDataRequest](docs/Model/SubmissionDataRequest.md)
- [SubmissionDataRequestEvent](docs/Model/SubmissionDataRequestEvent.md)
- [SubmissionDataRequestShow](docs/Model/SubmissionDataRequestShow.md)
- [SubmissionDataRequestToken](docs/Model/SubmissionDataRequestToken.md)
- [SubmissionPreview](docs/Model/SubmissionPreview.md)
- [SuccessErrorResponse](docs/Model/SuccessErrorResponse.md)
- [SuccessMultipleErrorsResponse](docs/Model/SuccessMultipleErrorsResponse.md)
- [Template](docs/Model/Template.md)
- [TemplateAddFieldsResponse](docs/Model/TemplateAddFieldsResponse.md)
- [TemplateDeleteResponse](docs/Model/TemplateDeleteResponse.md)
- [TemplatePreview](docs/Model/TemplatePreview.md)
- [TemplatePublishVersionResponse](docs/Model/TemplatePublishVersionResponse.md)
- [UpdateHtmlTemplate](docs/Model/UpdateHtmlTemplate.md)
- [UpdateSubmissionDataRequestData](docs/Model/UpdateSubmissionDataRequestData.md)
- [UploadPresignResponse](docs/Model/UploadPresignResponse.md)

## Authorization

Authentication schemes defined for the API:
### api_token_basic

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1`
    - Package version: `2.1.0`
    - Generator version: `7.11.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
