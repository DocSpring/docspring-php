# HtmlEngineOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**format** | [**\DocSpring\Model\PageFormat**](PageFormat.md) | The paper size. `Custom` uses `width` and `height`. |
**width** | **string** | The page width for the `Custom` format, with a unit (`8.5in`, `210mm`), from 0.05in to 200in. | [optional]
**height** | **string** | The page height for the `Custom` format, with a unit, from 0.05in to 200in. | [optional]
**scale** | **float** | How much to scale the page, from 0.1 to 2, such as `0.8`. `1` prints it at its normal size. |
**landscape** | **bool** | Print pages in landscape orientation. |
**print_background** | **bool** | Print background colors and images. |
**margin_top** | **string** | The top margin, with a unit, such as `1in` or `20mm`. The top and bottom margins together must be less than the page's height. |
**margin_bottom** | **string** | The bottom margin, with a unit. |
**margin_left** | **string** | The left margin, with a unit. The left and right margins together must be less than the page's width. |
**margin_right** | **string** | The right margin, with a unit. |

[[Back to Model list]](../../README.md#methods) [[Back to API list]](../../README.md#methods) [[Back to README]](../../README.md)
