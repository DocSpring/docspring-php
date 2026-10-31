# PageImage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**page** | **int** | The page number, from 1. |
**width** | **int** | The image's width in pixels. |
**height** | **int** | The image's height in pixels. |
**download_url** | **string** | A temporary link to download the image. A submission's is null when your account turns off download links for submissions. |
**permanent_url** | **string** | A link to download a submission's image that doesn't expire: it redirects to a new temporary link. It needs your API token or a signed-in session, except for a submission of a template that makes its submissions public. Null for a template's page images. |
**filename** | **string** | The image's file name, such as `sub_123_page_1.png`. |
**content_type** | **string** | The image's media type, `image/png` for a submission's pages or `image/jpeg` for a template's. |
**size** | **int** | The image's size in bytes. |
**sha256** | **string** | The SHA-256 hash of the image. Null for a template's page images. |

[[Back to Model list]](../../README.md#methods) [[Back to API list]](../../README.md#methods) [[Back to README]](../../README.md)
