
# Restriction Card Request Cards Items

## Structure

`RestrictionCardRequestCardsItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountNumber` | `?string` | Optional | Account Number of the customer.<br>Optional if AccountId is passed, else Mandatory.<br>This input is a search criterion, if given.<br>Example: GB000000123 | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountId` | `?int` | Optional | Account ID of the customer.<br>Optional if AccountNumber is passed, else Mandatory.<br>This input is a search criterion, if given.<br>Example: 123456 | getAccountId(): ?int | setAccountId(?int accountId): void |
| `pAN` | `?string` | Optional | Card PAN.<br>Optional if CardId is given, else mandatory.<br>Example: 7002051006629890645<br>Note:<br>•	PAN is ignored if CardId is given.<br>When PAN matches with multiple cards, the restriction will be applied on the latest issued card. | getPAN(): ?string | setPAN(?string pAN): void |
| `cardId` | `?int` | Optional | Unique Card Id<br>Optional if PAN is given, else mandatory.<br>Example: 275549 | getCardId(): ?int | setCardId(?int cardId): void |
| `resetUsageRestrictions` | `?bool` | Optional | True/False.<br>If true, the usage restrictions applied on the card in Gateway will be reset to Customer Card Type level max limits, if there are no customer level overrides available then OU card type max limits. Else, the card restrictions will be updated with the usage restrictions provided in the API. | getResetUsageRestrictions(): ?bool | setResetUsageRestrictions(?bool resetUsageRestrictions): void |
| `resetDayTimeRestrictions` | `?bool` | Optional | True/False.<br>If true, the Day/Time restrictions applied on the card will be deleted. Else, the card restrictions will be updated with the day/time restrictions provided in the API. | getResetDayTimeRestrictions(): ?bool | setResetDayTimeRestrictions(?bool resetDayTimeRestrictions): void |
| `resetProductRestrictions` | `?bool` | Optional | True/False.<br>If true, Default fuel/non-fuel sets configured at the purchase category level will be applied to the card. Else, the card will be applied with product restrictions provided in the API. | getResetProductRestrictions(): ?bool | setResetProductRestrictions(?bool resetProductRestrictions): void |
| `resetLocationRestrictions` | `?bool` | Optional | True/False.<br>If true, the location restrictions applied on the card will be deleted. Else, the card restrictions will be updated with the location restrictions provided in the API. | getResetLocationRestrictions(): ?bool | setResetLocationRestrictions(?bool resetLocationRestrictions): void |
| `dayTimeRestrictions` | [`?DayTimeRestrictions`](../../doc/models/day-time-restrictions.md) | Optional | Day/time restrictions such as weekdays and time range to be applied on the bundle.<br>Mandatory if respective action is set as “Add”.<br>The details of DayTimeRestriction entity is given below. | getDayTimeRestrictions(): ?DayTimeRestrictions | setDayTimeRestrictions(?DayTimeRestrictions dayTimeRestrictions): void |
| `locationRestrictions` | [`?LocationRestrictions`](../../doc/models/location-restrictions.md) | Optional | Location restrictions to be applied on the bundle which either allows or restricts using the cards, which are under the bundle, in the specified locations.<br>Mandatory if respective action is set as “Add”.<br>Details of location restrictions are given below. | getLocationRestrictions(): ?LocationRestrictions | setLocationRestrictions(?LocationRestrictions locationRestrictions): void |
| `productRestrictions` | [`?ProductRestrictions`](../../doc/models/product-restrictions.md) | Optional | - | getProductRestrictions(): ?ProductRestrictions | setProductRestrictions(?ProductRestrictions productRestrictions): void |
| `usageRestrictions` | [`?UsageRestrictions`](../../doc/models/usage-restrictions.md) | Optional | - | getUsageRestrictions(): ?UsageRestrictions | setUsageRestrictions(?UsageRestrictions usageRestrictions): void |

## Example (as JSON)

```json
{
  "AccountNumber": "AccountNumber4",
  "AccountId": 114,
  "PAN": "PAN6",
  "CardId": 20,
  "ResetUsageRestrictions": false
}
```

