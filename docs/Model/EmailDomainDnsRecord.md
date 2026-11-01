# EmailDomainDnsRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purpose** | [**\DocSpring\Model\EmailDomainDnsRecordPurpose**](EmailDomainDnsRecordPurpose.md) | What the record is for. `dkim` signs the emails (required), `mail_from` lets SPF pass for your domain (recommended), and `dmarc` tells inboxes what to do with emails that fail these checks (required). |
**type** | [**\DocSpring\Model\DnsRecordType**](DnsRecordType.md) | The record's type. |
**name** | **string** | The record's name. Some DNS hosts add the domain to the end of a name by themselves. |
**value** | **string** | The record's value. |

[[Back to Model list]](../../README.md#methods) [[Back to API list]](../../README.md#methods) [[Back to README]](../../README.md)
