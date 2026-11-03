
# Audit Req

## Structure

`AuditReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?AuditRequest`](../../doc/models/audit-request.md) | Optional | - | getFilters(): ?AuditRequest | setFilters(?AuditRequest filters): void |
| `page` | `?int` | Optional | Page Number (as shown to the users)<br><br>**Default**: `1` | getPage(): ?int | setPage(?int page): void |
| `pageSize` | `?int` | Optional | Page Size – Number of records to show on a page.<br><br>**Default**: `50` | getPageSize(): ?int | setPageSize(?int pageSize): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\AuditReqBuilder;
use ShellCardManagementAPIsLib\Models\Builders\AuditRequestBuilder;

$auditReq = AuditReqBuilder::init()
    ->filters(
        AuditRequestBuilder::init()
            ->status('Status6')
            ->payerNumber('PayerNumber0')
            ->payerId(48)
            ->accountNumber('AccountNumber2')
            ->colCoCode(14)
            ->build()
    )
    ->page(1)
    ->pageSize(100)
    ->build();
```

