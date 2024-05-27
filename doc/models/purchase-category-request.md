
# Purchase Category Request

## Structure

`PurchaseCategoryRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `colCoCode` | `?int` | Optional | Collecting Company Code (Shell Code). | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `colCoId` | `?int` | Optional | Collecting Company Id (in Shell Cards Platform). | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `cardTypeId` | `?int` | Optional | Card type Id | getCardTypeId(): ?int | setCardTypeId(?int cardTypeId): void |
| `purchaseCategoryId` | `?int` | Optional | Purchase category Id<br>Optional.<br>Example: 123, 124, etc., | getPurchaseCategoryId(): ?int | setPurchaseCategoryId(?int purchaseCategoryId): void |
| `languageCode` | `?string` | Optional | Language code for the Title and Description.<br>Language codes should be same as SFH supported language<br>Optional.<br>Default: en-GB<br>Example:<br>en-GB – English (UK)<br>nl-NL – Dutch (Netherlands) | getLanguageCode(): ?string | setLanguageCode(?string languageCode): void |

## Example (as JSON)

```json
{
  "PurchaseCategoryId": 123,
  "LanguageCode": "en-GB",
  "RequestId": "RequestId6",
  "ColCoCode": 30,
  "ColCoId": 16,
  "CardTypeId": 82
}
```

