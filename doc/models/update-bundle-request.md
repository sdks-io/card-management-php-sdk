
# Update Bundle Request

## Structure

`UpdateBundleRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?int` | Optional | Collecting Company Id  of the selected payer.<br>Optional if ColCoCode is passed else Mandatory.<br>Example:<br>1 for Philippines<br>5 for UK | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCode` | `?int` | Optional | Collecting Company Code  of the selected payer.<br>Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided.<br>Example:<br>86 for Philippines<br>5 for UK | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerId` | `?string` | Optional | Payer Id of the selected payer.<br>Either PayerId or PayerNumber or both must be passed.<br>Example: 123456 | getPayerId(): ?string | setPayerId(?string payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the selected payer.<br>Either PayerId or PayerNumber or both must be passed.<br>Example: GB000000123 | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `accountId` | `?int` | Optional | Account ID of the customer.<br>Either AccountId or AccountNumber or both must be passed.<br>Example: 123456 | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the customer.<br>Either AccountId or AccountNumber or both must be passed.<br>Example: GB000000123 | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `bundleId` | `?string` | Required | Identifier of the bundle in Gateway.<br>Mandatory | getBundleId(): ?string | setBundleId(?string bundleId): void |
| `requestAction` | `?string` | Required | The value indicates the action to be performed with the request.<br>Mandatory<br>Allowed values:<br>•    Add<br>•    Update<br>•    Remove | getRequestAction(): ?string | setRequestAction(?string requestAction): void |
| `cards` | `string[]` | Required | List of Card PANs to be added in the bundle.<br>Mandatory for Add / Remove request action. Ignored for Update action.<br>Example: 7002051006629890645<br>When PAN matches with multiple cards, the restriction will be applied on the latest issued card. | getCards(): array | setCards(array cards): void |
| `usageRestrictionAction` | `?string` | Required | The value indicates what actions to be performed with respect to usage restrictions on the list of cards being added or removed.<br>Mandatory for Add / Remove request action. Ignored for Update action.<br>Allowed values:<br>•    Update<br>•    None | getUsageRestrictionAction(): ?string | setUsageRestrictionAction(?string usageRestrictionAction): void |
| `restrictions` | [`?BundleRestrictionUpdate`](../../doc/models/bundle-restriction-update.md) | Optional | - | getRestrictions(): ?BundleRestrictionUpdate | setRestrictions(?BundleRestrictionUpdate restrictions): void |

## Example (as JSON)

```json
{
  "ColCoId": 26,
  "ColCoCode": 40,
  "PayerId": "PayerId2",
  "PayerNumber": "PayerNumber4",
  "AccountId": 134,
  "BundleId": "BundleId4",
  "RequestAction": "RequestAction4",
  "Cards": [
    "Cards5",
    "Cards6"
  ],
  "UsageRestrictionAction": "UsageRestrictionAction6"
}
```

