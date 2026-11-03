
# Customer Contract

## Structure

`CustomerContract`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `partnerId` | `?string` | Optional | Partner Id in e-TM system | getPartnerId(): ?string | setPartnerId(?string partnerId): void |
| `partnerName` | `?string` | Optional | Partner Name in e-TM system | getPartnerName(): ?string | setPartnerName(?string partnerName): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CustomerContractBuilder;

$customerContract = CustomerContractBuilder::init()
    ->partnerId('335')
    ->partnerName('Test')
    ->build();
```

