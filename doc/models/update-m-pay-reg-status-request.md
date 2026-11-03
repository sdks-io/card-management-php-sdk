
# Update M Pay Reg Status Request

## Structure

`UpdateMPayRegStatusRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?int` | Optional | Collecting Company Id  of the selected payer.<br>Optional if ColCoCode is passed else Mandatory.<br>Example:<br>1-Philippines<br>5-UK | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCode` | `?int` | Optional | Collecting Company Code (Shell Code) of the selected payer.<br>Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided.<br>Example:<br>86-Philippines<br>5-UK | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerId` | `?int` | Optional | Payer Id  of the selected payer.<br>Optional if PayerNumber is passed else Mandatory | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number (Ex: GB000000123) of the selected payer.<br>Optional if PayerId is passed else Mandatory | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `mPayRequests` | [`?(UpdateMPayRegStatusRequestMPayRequestsItems[])`](../../doc/models/update-m-pay-reg-status-request-m-pay-requests-items.md) | Optional | List of MPay Request to be updated for Fleet Manager approval status.<br>Mandatory<br>Maximum number of requests that can be submitted are 50 | getMPayRequests(): ?array | setMPayRequests(?array mPayRequests): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\UpdateMPayRegStatusRequestBuilder;
use ShellCardManagementAPIsLib\Models\Builders\UpdateMPayRegStatusRequestMPayRequestsItemsBuilder;

$updateMPayRegStatusRequest = UpdateMPayRegStatusRequestBuilder::init()
    ->colCoId(12)
    ->colCoCode(26)
    ->payerId(60)
    ->payerNumber('PayerNumber6')
    ->mPayRequests(
        [
            UpdateMPayRegStatusRequestMPayRequestsItemsBuilder::init()
                ->globalRequestID('GlobalRequestID6')
                ->status('Status6')
                ->approverUserID('ApproverUserID8')
                ->approverUserDisplayName('ApproverUserDisplayName2')
                ->reason('Reason0')
                ->build(),
            UpdateMPayRegStatusRequestMPayRequestsItemsBuilder::init()
                ->globalRequestID('GlobalRequestID6')
                ->status('Status6')
                ->approverUserID('ApproverUserID8')
                ->approverUserDisplayName('ApproverUserDisplayName2')
                ->reason('Reason0')
                ->build()
        ]
    )
    ->build();
```

