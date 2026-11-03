
# Payers

## Structure

`Payers`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?int` | Optional | Collecting Company Id of the payer | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCode` | `?int` | Optional | Collecting Company Code (Shell Code) of the selected payer.<br>Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided. | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerId` | `?int` | Optional | Payer id of the customer. | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the customer. | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `payerName` | `?string` | Optional | Payer Name of the customer. | getPayerName(): ?string | setPayerName(?string payerName): void |
| `payerGroupId` | `?int` | Optional | Payer Group identifier of the customer | getPayerGroupId(): ?int | setPayerGroupId(?int payerGroupId): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\PayersBuilder;

$payers = PayersBuilder::init()
    ->colCoId(14)
    ->colCoCode(14)
    ->payerId(12345)
    ->payerNumber('PayerNumber4')
    ->payerName('ABC company')
    ->payerGroupId(456)
    ->build();
```

