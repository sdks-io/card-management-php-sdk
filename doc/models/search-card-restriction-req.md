
# Search Card Restriction Req

## Structure

`SearchCardRestrictionReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?int` | Optional | Collecting Company Id of the selected payer.<br>Optional if ColCoCode is passed else Mandatory.<br>Example:<br>1 for Philippines<br>5 for UK | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCode` | `?int` | Optional | Collecting Company Code (Shell Code) of the selected payer.<br>Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided.<br>Example:<br>86 for Philippines<br>5 for UK | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerId` | `?int` | Optional | Payer Id (i.e. Customer Id of the Payment Customer) of the selected payer.<br>Optional if PayerNumber is passed else Mandatory<br>Example: 123456 | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the selected payer.<br>Optional if PayerId is passed else Mandatory<br>Example: GB000000123 | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `accounts` | [`?Accounts`](../../doc/models/accounts.md) | Optional | - | getAccounts(): ?Accounts | setAccounts(?Accounts accounts): void |
| `bundleId` | `?string` | Optional | Identifier of the Card bundle<br>Optional if cards list is given, else mandatory.<br>This input is a search criterion, if given. | getBundleId(): ?string | setBundleId(?string bundleId): void |
| `cards` | [`?SearchCardRestriction`](../../doc/models/search-card-restriction.md) | Optional | - | getCards(): ?SearchCardRestriction | setCards(?SearchCardRestriction cards): void |
| `includeLocationRestrictions` | `?bool` | Optional | True/False<br>Whether to include location restriction of the cards in the response.<br>Optional<br>Default ‘false’ | getIncludeLocationRestrictions(): ?bool | setIncludeLocationRestrictions(?bool includeLocationRestrictions): void |
| `includeBundleDetails` | `?bool` | Optional | Default value is False,<br>When the value is True, API will return bundle Id associated with cards in the response, if available.<br>Note: Use ‘Null’ or ‘False’ for optimum performance. A delay in response is expected when set to ‘True’. | getIncludeBundleDetails(): ?bool | setIncludeBundleDetails(?bool includeBundleDetails): void |
| `includeInheritedLimits` | `?bool` | Optional | Default value is True,<br>When True: service will return the inherited values for the usage limits (from card-program or account as available) when it is not overridden on the card. | getIncludeInheritedLimits(): ?bool | setIncludeInheritedLimits(?bool includeInheritedLimits): void |

## Example (as JSON)

```json
{
  "ColCoId": 90,
  "ColCoCode": 104,
  "PayerId": 138,
  "PayerNumber": "PayerNumber0",
  "Accounts": {
    "AccountId": 28,
    "AccountNumber": "AccountNumber0"
  }
}
```

