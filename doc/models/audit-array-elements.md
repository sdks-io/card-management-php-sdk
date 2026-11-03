
# Audit Array Elements

## Structure

`AuditArrayElements`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `audits` | [`?(AuditResponseAuditsItems[])`](../../doc/models/audit-response-audits-items.md) | Optional | - | getAudits(): ?array | setAudits(?array audits): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\AuditArrayElementsBuilder;
use ShellCardManagementAPIsLib\Models\Builders\AuditResponseAuditsItemsBuilder;

$auditArrayElements = AuditArrayElementsBuilder::init()
    ->audits(
        [
            AuditResponseAuditsItemsBuilder::init()
                ->accountId(178)
                ->accountNumber('AccountNumber2')
                ->additionalInformation1('AdditionalInformation16')
                ->additionalInformation2('AdditionalInformation26')
                ->additionalInformation3('AdditionalInformation30')
                ->build()
        ]
    )
    ->build();
```

