# TemplateFieldDependency

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | [**\DocSpring\Model\TemplateFieldDependencyAction**](TemplateFieldDependencyAction.md) | What the rule does to its targets when its conditions are met. |
**match** | [**\DocSpring\Model\TemplateFieldDependencyMatch**](TemplateFieldDependencyMatch.md) | Whether all of the conditions (the default) or any of them must be met. | [optional]
**conditions** | [**\DocSpring\Model\TemplateFieldDependencyCondition[]**](TemplateFieldDependencyCondition.md) | The conditions on other fields' values. |
**targets** | **string[]** | The names of the fields the rule shows or makes required. |
**group** | **string** | Marks a rule made for a field group in the template editor. Its targets outside the group are removed when the template is saved, and the rule is removed once the group has no fields. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
