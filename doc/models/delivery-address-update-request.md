
# Delivery Address Update Request

## Structure

`DeliveryAddressUpdateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?int` | Optional | Collecting Company Id of the selected payer.<br>Optional if ColCoCode is passed else Mandatory. | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCode` | `?int` | Optional | Collecting Company Code (Shell Code) of the selected payer.<br>Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided. | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerId` | `?int` | Optional | Payer Id (i.e. Customer Id of the Payment Customer) of the selected payer.<br>Optional if PayerNumber is passed else Mandatory | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number (Ex: GB000000123) of the selected payer.<br>Optional if PayerId is passed else Mandatory | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `accountId` | `?int` | Optional | Account ID of the customer.<br>Optional if AccountNumber is passed, else mandatory. | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the customer.<br>Optional if AccountId is passed, else mandatory.<br>This input is a search criterion, if given. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `deliveryAddressUpdates` | [`?(DeliveryAddressUpdate[])`](../../doc/models/delivery-address-update.md) | Optional | - | getDeliveryAddressUpdates(): ?array | setDeliveryAddressUpdates(?array deliveryAddressUpdates): void |

## Example (as JSON)

```json
{
  "ColCoId": 5,
  "ColCoCode": 5,
  "PayerId": 123456,
  "PayerNumber": "GB000000123",
  "AccountId": 12356,
  "AccountNumber": "GB000000124"
}
```

