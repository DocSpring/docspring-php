# TemplateDefaultsInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**typeface** | [**\DocSpring\Model\Typeface**](Typeface.md) | The font of text fields. | [optional]
**font_size** | **int** | The font size in points, a whole number. | [optional]
**character_spacing** | **float** | Extra space between characters, in points (0 to 50). | [optional]
**color** | **string** | The text color, as 6 hex digits without `#`, such as `444444`. | [optional]
**background_color** | **string** | The field's background color, as 6 hex digits. | [optional]
**bold** | **bool** | Print text in bold. | [optional]
**uppercase** | **bool** | Print text in capital letters. | [optional]
**alignment** | [**\DocSpring\Model\TextAlignment**](TextAlignment.md) | How text is aligned in its field. `justify` lines up both edges of every line of multiline text except the last of each paragraph. | [optional]
**opacity** | **float** | The opacity of the field's content, from 0 (invisible) to 1. | [optional]
**date_format** | **string** | How date fields are printed, as a strftime format such as `%m/%d/%Y`. | [optional]
**date_time_format** | **string** | How date-time fields are printed, as a strftime format such as `%m/%d/%Y %H:%M:%S`. | [optional]
**check_color** | **string** | The color of check marks, as 6 hex digits. | [optional]
**check_character** | [**\DocSpring\Model\CheckCharacter**](CheckCharacter.md) | The character that a ticked check box prints. | [optional]
**check_background_color** | **string** | The check box's background color, as 6 hex digits. | [optional]
**required_field_background_color** | **string** | The background color that highlights required fields on visual forms and signature request forms, as 6 hex digits. PDFs don't print it. | [optional]
**true_text** | **string** | The text a boolean field prints for `true`. | [optional]
**false_text** | **string** | The text a boolean field prints for `false`. | [optional]
**shape_fill_color** | **string** | The fill color of shapes, as 6 hex digits. | [optional]
**shape_border_color** | **string** | The border color of shapes, as 6 hex digits. | [optional]
**shape_border_width** | **int** | The border width of shapes, in whole points (at least 1). | [optional]

[[Back to Model list]](../../README.md#methods) [[Back to API list]](../../README.md#methods) [[Back to README]](../../README.md)
