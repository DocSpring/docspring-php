# DocSpring

DocSpring is a service that helps you fill out and sign PDF templates.


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
$template_id = tpl_000000000000000002; // string
$data = new \DocSpring\Model\AddFieldsData(); // \DocSpring\Model\AddFieldsData

try {
    $result = $apiInstance->addFieldsToTemplate($template_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->addFieldsToTemplate: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.docspring.com/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PDFApi* | [**addFieldsToTemplate**](docs/Api/PDFApi.md#addfieldstotemplate) | **PUT** /templates/{template_id}/add_fields | Add new fields to a Template
*PDFApi* | [**batchGeneratePdfV1**](docs/Api/PDFApi.md#batchgeneratepdfv1) | **POST** /templates/{template_id}/submissions/batch | Generates multiple PDFs
*PDFApi* | [**batchGeneratePdfs**](docs/Api/PDFApi.md#batchgeneratepdfs) | **POST** /submissions/batches | Generates multiple PDFs
*PDFApi* | [**combinePdfs**](docs/Api/PDFApi.md#combinepdfs) | **POST** /combined_submissions?v&#x3D;2 | Merge submission PDFs, template PDFs, or custom files
*PDFApi* | [**combineSubmissions**](docs/Api/PDFApi.md#combinesubmissions) | **POST** /combined_submissions | Merge generated PDFs together
*PDFApi* | [**copyTemplate**](docs/Api/PDFApi.md#copytemplate) | **POST** /templates/{template_id}/copy | Copy a Template
*PDFApi* | [**createCustomFileFromUpload**](docs/Api/PDFApi.md#createcustomfilefromupload) | **POST** /custom_files | Create a new custom file from a cached presign upload
*PDFApi* | [**createDataRequestToken**](docs/Api/PDFApi.md#createdatarequesttoken) | **POST** /data_requests/{data_request_id}/tokens | Creates a new data request token for form authentication
*PDFApi* | [**createFolder**](docs/Api/PDFApi.md#createfolder) | **POST** /folders/ | Create a folder
*PDFApi* | [**createHTMLTemplate**](docs/Api/PDFApi.md#createhtmltemplate) | **POST** /templates?desc&#x3D;html | Create a new HTML template
*PDFApi* | [**createPDFTemplate**](docs/Api/PDFApi.md#createpdftemplate) | **POST** /templates | Create a new PDF template with a form POST file upload
*PDFApi* | [**createPDFTemplateFromUpload**](docs/Api/PDFApi.md#createpdftemplatefromupload) | **POST** /templates?desc&#x3D;cached_upload | Create a new PDF template from a cached presign upload
*PDFApi* | [**deleteFolder**](docs/Api/PDFApi.md#deletefolder) | **DELETE** /folders/{folder_id} | Delete a folder
*PDFApi* | [**deleteTemplate**](docs/Api/PDFApi.md#deletetemplate) | **DELETE** /templates/{template_id} | Delete a template
*PDFApi* | [**expireCombinedSubmission**](docs/Api/PDFApi.md#expirecombinedsubmission) | **DELETE** /combined_submissions/{combined_submission_id} | Expire a combined submission
*PDFApi* | [**expireSubmission**](docs/Api/PDFApi.md#expiresubmission) | **DELETE** /submissions/{submission_id} | Expire a PDF submission
*PDFApi* | [**generatePDF**](docs/Api/PDFApi.md#generatepdf) | **POST** /templates/{template_id}/submissions | Generates a new PDF
*PDFApi* | [**getCombinedSubmission**](docs/Api/PDFApi.md#getcombinedsubmission) | **GET** /combined_submissions/{combined_submission_id} | Check the status of a combined submission (merged PDFs)
*PDFApi* | [**getDataRequest**](docs/Api/PDFApi.md#getdatarequest) | **GET** /data_requests/{data_request_id} | Look up a submission data request
*PDFApi* | [**getFullTemplate**](docs/Api/PDFApi.md#getfulltemplate) | **GET** /templates/{template_id}?full&#x3D;true | Fetch the full template attributes
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
*PDFApi* | [**renameFolder**](docs/Api/PDFApi.md#renamefolder) | **POST** /folders/{folder_id}/rename | Rename a folder
*PDFApi* | [**testAuthentication**](docs/Api/PDFApi.md#testauthentication) | **GET** /authentication | Test Authentication
*PDFApi* | [**updateDataRequest**](docs/Api/PDFApi.md#updatedatarequest) | **PUT** /data_requests/{data_request_id} | Update a submission data request
*PDFApi* | [**updateTemplate**](docs/Api/PDFApi.md#updatetemplate) | **PUT** /templates/{template_id} | Update a Template

## Models

- [AddFieldsData](docs/Model/AddFieldsData.md)
- [AddFieldsTemplateResponse](docs/Model/AddFieldsTemplateResponse.md)
- [AuthenticationError](docs/Model/AuthenticationError.md)
- [AuthenticationSuccessResponse](docs/Model/AuthenticationSuccessResponse.md)
- [CombinePdfsData](docs/Model/CombinePdfsData.md)
- [CombinedSubmission](docs/Model/CombinedSubmission.md)
- [CombinedSubmissionAction](docs/Model/CombinedSubmissionAction.md)
- [CombinedSubmissionData](docs/Model/CombinedSubmissionData.md)
- [CopyTemplateData](docs/Model/CopyTemplateData.md)
- [CreateCombinedSubmissionResponse](docs/Model/CreateCombinedSubmissionResponse.md)
- [CreateCustomFileData](docs/Model/CreateCustomFileData.md)
- [CreateCustomFileResponse](docs/Model/CreateCustomFileResponse.md)
- [CreateFolderAttributes](docs/Model/CreateFolderAttributes.md)
- [CreateFolderData](docs/Model/CreateFolderData.md)
- [CreateHtmlTemplateData](docs/Model/CreateHtmlTemplateData.md)
- [CreateSubmissionBatchResponse](docs/Model/CreateSubmissionBatchResponse.md)
- [CreateSubmissionBatchSubmissionsResponse](docs/Model/CreateSubmissionBatchSubmissionsResponse.md)
- [CreateSubmissionData](docs/Model/CreateSubmissionData.md)
- [CreateSubmissionDataRequestData](docs/Model/CreateSubmissionDataRequestData.md)
- [CreateSubmissionDataRequestTokenResponse](docs/Model/CreateSubmissionDataRequestTokenResponse.md)
- [CreateSubmissionResponse](docs/Model/CreateSubmissionResponse.md)
- [CreateTemplateFromUploadData](docs/Model/CreateTemplateFromUploadData.md)
- [DataRequestToken](docs/Model/DataRequestToken.md)
- [DeleteTemplateResponse](docs/Model/DeleteTemplateResponse.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [Folder](docs/Model/Folder.md)
- [FullTemplate](docs/Model/FullTemplate.md)
- [HtmlTemplateData](docs/Model/HtmlTemplateData.md)
- [InvalidRequest](docs/Model/InvalidRequest.md)
- [ListSubmissionsResponse](docs/Model/ListSubmissionsResponse.md)
- [MoveFolderData](docs/Model/MoveFolderData.md)
- [MoveTemplateData](docs/Model/MoveTemplateData.md)
- [PendingTemplate](docs/Model/PendingTemplate.md)
- [RenameFolderData](docs/Model/RenameFolderData.md)
- [Submission](docs/Model/Submission.md)
- [SubmissionAction](docs/Model/SubmissionAction.md)
- [SubmissionBatch](docs/Model/SubmissionBatch.md)
- [SubmissionBatchData](docs/Model/SubmissionBatchData.md)
- [SubmissionData](docs/Model/SubmissionData.md)
- [SubmissionDataBatchRequest](docs/Model/SubmissionDataBatchRequest.md)
- [SubmissionDataRequest](docs/Model/SubmissionDataRequest.md)
- [Template](docs/Model/Template.md)
- [TemplateData](docs/Model/TemplateData.md)
- [TemplateDefaults](docs/Model/TemplateDefaults.md)
- [TemplateDocument](docs/Model/TemplateDocument.md)
- [TemplateDocumentMetadata](docs/Model/TemplateDocumentMetadata.md)
- [UpdateDataRequestResponse](docs/Model/UpdateDataRequestResponse.md)
- [UpdateSubmissionDataRequestData](docs/Model/UpdateSubmissionDataRequestData.md)
- [UpdateTemplateData](docs/Model/UpdateTemplateData.md)
- [UpdateTemplateResponse](docs/Model/UpdateTemplateResponse.md)
- [UploadTemplateData](docs/Model/UploadTemplateData.md)

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
    - Package version: `2.0.0`
- Build package: `com.docspring.codegen.DocSpringPhpClientCodegen`
