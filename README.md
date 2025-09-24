# DocSpring

Use DocSpring's API to programmatically fill out PDF forms, convert HTML to PDFs, merge PDFs, or request legally binding e-signatures.


## Installation & Usage

### Requirements

PHP 8.1 and later.

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

## API Endpoints

All URIs are relative to *https://sync.api.docspring.com/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*Client* | [**addFieldsToTemplate**](docs/Api/Client.md#addfieldstotemplate) | **PUT** /templates/{template_id}/add_fields | Add new fields to a Template
*Client* | [**batchGeneratePdfs**](docs/Api/Client.md#batchgeneratepdfs) | **POST** /submissions/batches | Generate multiple PDFs
*Client* | [**combinePdfs**](docs/Api/Client.md#combinepdfs) | **POST** /combined_submissions | Merge submission PDFs, template PDFs, or custom files
*Client* | [**copyTemplate**](docs/Api/Client.md#copytemplate) | **POST** /templates/{template_id}/copy | Copy a template
*Client* | [**createCustomFileFromUpload**](docs/Api/Client.md#createcustomfilefromupload) | **POST** /custom_files | Create a new custom file from a cached S3 upload
*Client* | [**createDataRequestEvent**](docs/Api/Client.md#createdatarequestevent) | **POST** /data_requests/{data_request_id}/events | Create a new event for emailing a signee a request for signature
*Client* | [**createDataRequestToken**](docs/Api/Client.md#createdatarequesttoken) | **POST** /data_requests/{data_request_id}/tokens | Create a new data request token for form authentication
*Client* | [**createFolder**](docs/Api/Client.md#createfolder) | **POST** /folders/ | Create a folder
*Client* | [**createHtmlTemplate**](docs/Api/Client.md#createhtmltemplate) | **POST** /templates?endpoint_variant&#x3D;create_html_template | Create a new HTML template
*Client* | [**createPdfTemplate**](docs/Api/Client.md#createpdftemplate) | **POST** /templates | Create a new PDF template with a form POST file upload
*Client* | [**createPdfTemplateFromUpload**](docs/Api/Client.md#createpdftemplatefromupload) | **POST** /templates?endpoint_variant&#x3D;create_template_from_cached_upload | Create a new PDF template from a cached S3 file upload
*Client* | [**deleteFolder**](docs/Api/Client.md#deletefolder) | **DELETE** /folders/{folder_id} | Delete a folder
*Client* | [**deleteTemplate**](docs/Api/Client.md#deletetemplate) | **DELETE** /templates/{template_id} | Delete a template
*Client* | [**expireCombinedSubmission**](docs/Api/Client.md#expirecombinedsubmission) | **DELETE** /combined_submissions/{combined_submission_id} | Expire a combined submission
*Client* | [**expireSubmission**](docs/Api/Client.md#expiresubmission) | **DELETE** /submissions/{submission_id} | Expire a PDF submission
*Client* | [**generatePdf**](docs/Api/Client.md#generatepdf) | **POST** /templates/{template_id}/submissions | Generate a PDF
*Client* | [**generatePreview**](docs/Api/Client.md#generatepreview) | **POST** /submissions/{submission_id}/generate_preview | Generate a preview PDF for partially completed data requests
*Client* | [**getCombinedSubmission**](docs/Api/Client.md#getcombinedsubmission) | **GET** /combined_submissions/{combined_submission_id} | Check the status of a combined submission (merged PDFs)
*Client* | [**getDataRequest**](docs/Api/Client.md#getdatarequest) | **GET** /data_requests/{data_request_id} | Look up a submission data request
*Client* | [**getFullTemplate**](docs/Api/Client.md#getfulltemplate) | **GET** /templates/{template_id}?full&#x3D;true | Fetch the full attributes for a PDF template
*Client* | [**getPresignUrl**](docs/Api/Client.md#getpresignurl) | **GET** /uploads/presign | Get a presigned S3 URL for direct file upload
*Client* | [**getSubmission**](docs/Api/Client.md#getsubmission) | **GET** /submissions/{submission_id} | Check the status of a PDF
*Client* | [**getSubmissionBatch**](docs/Api/Client.md#getsubmissionbatch) | **GET** /submissions/batches/{submission_batch_id} | Check the status of a submission batch job
*Client* | [**getTemplate**](docs/Api/Client.md#gettemplate) | **GET** /templates/{template_id} | Check the status of an uploaded template
*Client* | [**getTemplateSchema**](docs/Api/Client.md#gettemplateschema) | **GET** /templates/{template_id}/schema | Fetch the JSON schema for a template
*Client* | [**listCombinedSubmissions**](docs/Api/Client.md#listcombinedsubmissions) | **GET** /combined_submissions | Get a list of all combined submissions
*Client* | [**listFolders**](docs/Api/Client.md#listfolders) | **GET** /folders/ | Get a list of all folders
*Client* | [**listSubmissions**](docs/Api/Client.md#listsubmissions) | **GET** /submissions | List all submissions
*Client* | [**listTemplateSubmissions**](docs/Api/Client.md#listtemplatesubmissions) | **GET** /templates/{template_id}/submissions | List all submissions for a given template
*Client* | [**listTemplates**](docs/Api/Client.md#listtemplates) | **GET** /templates | Get a list of all templates
*Client* | [**moveFolderToFolder**](docs/Api/Client.md#movefoldertofolder) | **POST** /folders/{folder_id}/move | Move a folder
*Client* | [**moveTemplateToFolder**](docs/Api/Client.md#movetemplatetofolder) | **POST** /templates/{template_id}/move | Move Template to folder
*Client* | [**publishTemplateVersion**](docs/Api/Client.md#publishtemplateversion) | **POST** /templates/{template_id}/publish_version | Publish a template version
*Client* | [**renameFolder**](docs/Api/Client.md#renamefolder) | **POST** /folders/{folder_id}/rename | Rename a folder
*Client* | [**restoreTemplateVersion**](docs/Api/Client.md#restoretemplateversion) | **POST** /templates/{template_id}/restore_version | Restore a template version
*Client* | [**testAuthentication**](docs/Api/Client.md#testauthentication) | **GET** /authentication | Test authentication
*Client* | [**updateDataRequest**](docs/Api/Client.md#updatedatarequest) | **PUT** /data_requests/{data_request_id} | Update a submission data request
*Client* | [**updateTemplate**](docs/Api/Client.md#updatetemplate) | **PUT** /templates/{template_id} | Update a Template
*Client* | [**updateTemplateDocument**](docs/Api/Client.md#updatetemplatedocument) | **PUT** /templates/{template_id}?endpoint_variant&#x3D;update_template_pdf_with_form_post | Update a template&#39;s document with a form POST file upload
*Client* | [**updateTemplateDocumentFromUpload**](docs/Api/Client.md#updatetemplatedocumentfromupload) | **PUT** /templates/{template_id}?endpoint_variant&#x3D;update_template_pdf_with_cached_upload | Update a template&#39;s document with a cached S3 file upload

## Models

- [AddFieldsData](docs/Model/AddFieldsData.md)
- [BatchGeneratePdfs201Response](docs/Model/BatchGeneratePdfs201Response.md)
- [CombinePdfsData](docs/Model/CombinePdfsData.md)
- [CombinedSubmission](docs/Model/CombinedSubmission.md)
- [CombinedSubmissionAction](docs/Model/CombinedSubmissionAction.md)
- [CopyTemplateOptions](docs/Model/CopyTemplateOptions.md)
- [CreateCombinedSubmissionResponse](docs/Model/CreateCombinedSubmissionResponse.md)
- [CreateCustomFileData](docs/Model/CreateCustomFileData.md)
- [CreateCustomFileResponse](docs/Model/CreateCustomFileResponse.md)
- [CreateFolderData](docs/Model/CreateFolderData.md)
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
- [ErrorOrMultipleErrorsResponse](docs/Model/ErrorOrMultipleErrorsResponse.md)
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
- [Submission422Response](docs/Model/Submission422Response.md)
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
- [UpdatePdfTemplate](docs/Model/UpdatePdfTemplate.md)
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
    - Package version: `3.0.0`
    - Generator version: `7.16.0-DOCSPRING`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
