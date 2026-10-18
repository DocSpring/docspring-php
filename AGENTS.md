# AGENTS.md

Notes for AI coding agents working with the DocSpring PHP SDK (`docspring/docspring`), in this repository or
as a dependency of an app.

## This code is generated

Every file here is generated from DocSpring's OpenAPI spec by
[DocSpring's fork of OpenAPI Generator](https://github.com/DocSpring/openapi-generator/tree/docspring/all_patches), and each release replaces
all of it. Don't edit it or open pull requests that change it, and don't patch an installed copy: the next release
overwrites the change. Report bugs at https://github.com/DocSpring/docspring-php/issues or to support@docspring.com, and DocSpring fixes them in
the generator.

## Where to look

- [README.md](README.md): install, configuration, an example and how errors and API changes are handled.
- [docs/Api/Client.md](https://github.com/DocSpring/docspring-php/blob/main/docs/Api/Client.md): every method, with its parameters and return type.
- [docs/Model/](https://github.com/DocSpring/docspring-php/tree/main/docs/Model): every model and its fields.
- https://docspring.com/docs/llms.txt: DocSpring's documentation for LLMs (`llms-small.txt`, `llms-full.txt`).
- https://docspring.com/docs/api/: the API reference, with PHP code for every method.
- https://docspring.com/api-docs/v1/openapi.json: the OpenAPI spec this SDK is generated from.

## Using it in an app

- Credentials come from `DOCSPRING_TOKEN_ID` and `DOCSPRING_TOKEN_SECRET`. Keep them in the environment or a secret
  store, never in code. Accounts in the EU region also need `DOCSPRING_REGION=EU`.
- Template IDs look like `tpl_...` and submission IDs like `sub_...`.
- Pass `test: true` when you generate PDFs during development: test PDFs are free and watermarked.
- Generating a PDF waits for it, for up to 95 seconds. For many PDFs or slow templates, set `wait` to false and use
  webhooks or check the submission later (https://docspring.com/docs/api-guide/synchronous-requests/).
- Errors: Methods throw `DocSpring\ApiException` for an error response, with the HTTP status in `getCode()` and the body in `getResponseBody()`.
- Responses can be newer than this SDK, because DocSpring adds fields and enum values to API v1 without a new
  version. The model leaves out a response field added to the API after this release. An enum value added to the API after this release comes back as a string, so handle values you don't recognize.
