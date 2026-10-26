# DocSpring PHP SDK

The official PHP client for the [DocSpring API](https://docspring.com/docs/api/). DocSpring fills PDF
templates with your data, generates PDFs from HTML templates, combines PDFs and collects e-signatures.

[Documentation](https://docspring.com/docs/) · [API reference](https://docspring.com/docs/api/) ·
[Packagist](https://packagist.org/packages/docspring/docspring) · [Changelog](https://github.com/DocSpring/docspring-php/blob/main/CHANGELOG.md)

The code in this repository is generated from DocSpring's OpenAPI spec ([About this SDK](#about-this-sdk)). Issues and
pull requests are welcome.

Version 4.0.0. Requires PHP ^8.1.

## Install and configure

Install via Composer:

```bash
composer require docspring/docspring
```

Or add to your composer.json:

```json
{
  "require": {
    "docspring/docspring": "*"
  }
}
```

Then run:

```bash
composer install
```

Configure authentication via environment variables:

```bash
export DOCSPRING_TOKEN_ID="API_TOKEN_ID"
export DOCSPRING_TOKEN_SECRET="API_TOKEN_SECRET"
```

You can also configure the region or host. The host takes priority over the region:

```bash
export DOCSPRING_REGION="US" # US or EU (defaults to US)
export DOCSPRING_HOST="docspring.yourcompany.com" # For on-premise deployments
```

Initialize the client:

```php
require 'vendor/autoload.php';

$config = DocSpring\Configuration::getDefaultConfiguration();
$api = new DocSpring\Api\Client(null, $config);
```

Or provide credentials directly:

```php
require 'vendor/autoload.php';

$config = DocSpring\Configuration::getDefaultConfiguration();
$config->setUsername('API_TOKEN_ID');
$config->setPassword('API_TOKEN_SECRET');
$api = new DocSpring\Api\Client(null, $config);
```

## Generate a PDF

Fill a template with data (use your template's ID in place of `tpl_1234567890abcdef01`):

```php
$templateId = 'tpl_1234567890abcdef01';
$body = [
  'data' => [ 'first_name' => 'John', 'last_name' => 'Smith', 'phone_number' => '+11234567890' ],
  'metadata' => [ 'user_id' => 42 ],
  'test' => true
];

$result = $api->createSubmission(
    $templateId,
    $body
);

echo json_encode($result, JSON_PRETTY_PRINT) . "\n";
```

By default the call waits for the PDF, for up to 95 seconds, and the submission in the response has a link to
download it (`files.pdf.download_url`). Set `wait` to false to get a pending submission straight away.
[Sync vs. async processing](https://docspring.com/docs/api-guide/synchronous-requests/) covers the time limit, status
checks and webhooks.

## Methods

[docs/Api/Client.md](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md) has each method's parameters and return type, and
[docs/Model/](https://github.com/DocSpring/docspring-php/tree/main/docs/Model) has the models. The [API reference](https://docspring.com/docs/api/) has
PHP code for every method.

| Method | Description |
| ------ | ----------- |
| [`copyTemplate`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#copytemplate) | Copy a template |
| [`createCombinedPdf`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#createcombinedpdf) | Combine PDFs |
| [`createCustomFileFromUpload`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#createcustomfilefromupload) | Create a custom file from an upload |
| [`createFolder`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#createfolder) | Create a folder |
| [`createSignatureRequestEvent`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#createsignaturerequestevent) | Record a signature request event |
| [`createSignatureRequestToken`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#createsignaturerequesttoken) | Create a signature request token |
| [`createSubmission`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#createsubmission) | Generate a PDF |
| [`createSubmissionBatch`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#createsubmissionbatch) | Generate PDFs in a batch |
| [`createTemplate`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#createtemplate) | Create a template |
| [`createWebhook`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#createwebhook) | Create a webhook |
| [`deleteCustomFile`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#deletecustomfile) | Delete a custom file |
| [`deleteFolder`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#deletefolder) | Delete a folder |
| [`deleteTemplate`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#deletetemplate) | Delete a template |
| [`deleteWebhook`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#deletewebhook) | Delete a webhook |
| [`expireCombinedPdf`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#expirecombinedpdf) | Expire a combined PDF |
| [`expireSubmission`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#expiresubmission) | Expire a submission |
| [`generateSubmissionPreview`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#generatesubmissionpreview) | Generate a preview PDF |
| [`getCombinedPdf`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#getcombinedpdf) | Get a combined PDF |
| [`getCustomFile`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#getcustomfile) | Get a custom file |
| [`getFolder`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#getfolder) | Get a folder |
| [`getPresignUrl`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#getpresignurl) | Get a presigned URL to upload a file |
| [`getSignatureRequest`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#getsignaturerequest) | Get a signature request |
| [`getSubmission`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#getsubmission) | Get a submission |
| [`getSubmissionBatch`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#getsubmissionbatch) | Get a batch |
| [`getTemplate`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#gettemplate) | Get a template |
| [`getTemplateModelCode`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#gettemplatemodelcode) | Generate typed code for a template's submission data |
| [`getTemplateSchema`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#gettemplateschema) | Get the JSON Schema of a template's submission data |
| [`getWebhook`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#getwebhook) | Get a webhook |
| [`listCombinedPdfs`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#listcombinedpdfs) | List combined PDFs |
| [`listCustomFiles`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#listcustomfiles) | List custom files |
| [`listFolders`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#listfolders) | List folders |
| [`listSubmissions`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#listsubmissions) | List submissions |
| [`listTemplates`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#listtemplates) | List templates |
| [`listTemplateSubmissions`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#listtemplatesubmissions) | List a template's submissions |
| [`listWebhooks`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#listwebhooks) | List webhooks |
| [`moveFolder`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#movefolder) | Move a folder |
| [`moveTemplate`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#movetemplate) | Move a template to a folder |
| [`publishTemplateVersion`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#publishtemplateversion) | Publish a template version |
| [`renameFolder`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#renamefolder) | Rename a folder |
| [`restoreTemplateVersion`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#restoretemplateversion) | Restore a template version |
| [`testAuthentication`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#testauthentication) | Test authentication |
| [`updateSignatureRequest`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#updatesignaturerequest) | Update a signature request |
| [`updateTemplate`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#updatetemplate) | Update a template |
| [`updateTemplateDocument`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#updatetemplatedocument) | Replace a template's PDF |
| [`updateWebhook`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#updatewebhook) | Update a webhook |
| [`uploadTemplate`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#uploadtemplate) | Create a PDF template from an uploaded PDF |
| [`uploadTemplateDocument`](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md#uploadtemplatedocument) | Replace a template's PDF with an uploaded PDF |

## Errors

Methods throw `DocSpring\ApiException` for an error response, with the HTTP status in `getCode()` and the body in `getResponseBody()`.

The client checks each request against the API's request schemas before sending it. A request the API would reject throws a `DocSpring\ValidationException` (an `InvalidArgumentException`), whose `getDetails()` are arrays with `code`, `message` and a `pointer` into the body (or a `parameter`). Turn the check off with `setValidateRequests(false)` on the `Configuration`.
The details are the ones the API's 422 response would have, so you get them without a round trip.

## API changes

DocSpring adds fields and enum values to API v2 without releasing a new API version. Changes that would break
existing code, such as removing or renaming a field, go in a new API version
([API changes](https://docspring.com/docs/api-guide/openapi-schema/#api-changes)). So this SDK keeps working with
responses that are newer than it is:

- The model leaves out a response field added to the API after this release.
- Enum values in responses are strings, so a value added to the API after this release comes back as it is: handle values you don't recognize.

Upgrade the SDK to read new fields and enum values. The [changelog](https://github.com/DocSpring/docspring-php/blob/main/CHANGELOG.md) lists
what each release adds.

## About this SDK

This SDK is generated from DocSpring's [OpenAPI spec](https://docspring.com/api-docs/v2/openapi.json) with
[DocSpring's fork of OpenAPI Generator](https://github.com/DocSpring/openapi-generator/tree/docspring/all_patches) 7.26.0.
The fork changes the PHP generator:

- An enum value added to the API after this release comes back as the API sent it, instead of throwing `InvalidArgumentException`, and is kept when the model is serialized again.
- A union model (`CombinedPdfSourceInput`) keeps the `type` it's given. Stock OpenAPI Generator sets it to the model's name.

On top of the generated code, we add:

- A client constructor that reads your credentials, region and host from the environment.
- Fixes for the file uploads in `uploadTemplate` and `uploadTemplateDocument`.

Each release regenerates every file, so a change made only here would be lost in the next one. Issues and pull
requests are welcome all the same: [open an issue](https://github.com/DocSpring/docspring-php/issues) or a pull request, or email
[support@docspring.com](mailto:support@docspring.com), and we'll make the fix in the generator so that every release
keeps it. [AGENTS.md](https://github.com/DocSpring/docspring-php/blob/main/AGENTS.md) is a guide for AI coding agents that integrate this SDK.

## License

MIT. See [LICENSE](https://github.com/DocSpring/docspring-php/blob/main/LICENSE).
