# TemplatePageImages

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**template_id** | **string** | The template's ID. |
**version** | **string** | The published version the images are of, such as `1.2.0`. Null for the draft. |
**page_count** | **int** | How many pages the PDF has. |
**pages** | [**\DocSpring\Model\PageImage[]**](PageImage.md) | An image of each page, in order: `pages[0]` is page 1. Their `download_url`s expire, so get them again when you need them. |

[[Back to Model list]](../../README.md#methods) [[Back to API list]](../../README.md#methods) [[Back to README]](../../README.md)
