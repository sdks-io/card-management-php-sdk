
# Card Group Request

## Structure

`CardGroupRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?int` | Optional | Collecting Company Id of the selected payer.<br>Optional if ColCoCode is passed else Mandatory.<br>Example:<br>1 for Philippines<br>5 for UK | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCode` | `?int` | Optional | Collecting Company Code (Shell Code) of the selected payer.<br>Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided.<br>Example:<br>86 for Philippines<br>5 for UK | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerId` | `?int` | Optional | Payer id of the customer.<br>Optional if PayerNumber is passed, else Mandatory.<br>This input is a search criterion.<br>Example: 123456 | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | PayerNumber of the customer.<br>Optional if PayerId is passed, else Mandatory.<br>This input is a search criterion.<br>Example: GB00123456 | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `account` | [`?(Accounts[])`](../../doc/models/accounts.md) | Optional | - | getAccount(): ?array | setAccount(?array account): void |
| `cardGroupName` | `?string` | Optional | Card Group Name<br>Optional.<br>Minimum of 2 characters should be provided else not considered.<br>CardGroups those have the entered value at any part | getCardGroupName(): ?string | setCardGroupName(?string cardGroupName): void |
| `status` | `?string` | Optional | Card Group Status<br>Mandatory<br>Allowed values:<br>•	ALL<br>•	TERMINATED<br>•	ACTIVE | getStatus(): ?string | setStatus(?string status): void |
| `currentPage` | `?int` | Optional | Page Number (as shown to the users)<br>Optional<br>Default value 1 | getCurrentPage(): ?int | setCurrentPage(?int currentPage): void |
| `pageSize` | `?int` | Optional | Page Size – Number of records to show on a page.<br>Optional<br>Default value 50.<br>Return all rows if -1 is supplied as page size. | getPageSize(): ?int | setPageSize(?int pageSize): void |

## Example (as JSON)

```json
{
  "ColCoId": 14,
  "ColCoCode": 14,
  "PayerId": 123,
  "PayerNumber": "GB00123456",
  "CardGroupName": "test",
  "Status": "ALL",
  "PageSize": 1,
  "Account": [
    {
      "AccountId": 66,
      "AccountNumber": "AccountNumber2"
    },
    {
      "AccountId": 66,
      "AccountNumber": "AccountNumber2"
    }
  ]
}
```

