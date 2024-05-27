
# Create Bundle Response Data Items

## Structure

`CreateBundleResponseDataItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bundleId` | `?string` | Optional | Identifier of the newly created bundle in Gateway. | getBundleId(): ?string | setBundleId(?string bundleId): void |
| `cards` | [`?(CreateBundleResponseDataItemsCardsItems[])`](../../doc/models/create-bundle-response-data-items-cards-items.md) | Optional | List of product restriction requests validated and submitted successfully for each card. | getCards(): ?array | setCards(?array cards): void |
| `dayTimeRestrictionProfileId` | `?string` | Optional | Identifier of the day/time restriction profile created for the bundle in Gateway.<br>This will be null if respective action is passed as “Default”. | getDayTimeRestrictionProfileId(): ?string | setDayTimeRestrictionProfileId(?string dayTimeRestrictionProfileId): void |
| `locationRestrictionProfileId` | `?string` | Optional | Identifier of the location restriction profile created for the bundle in Gateway.<br>This will be null if respective action is passed as “Default”. | getLocationRestrictionProfileId(): ?string | setLocationRestrictionProfileId(?string locationRestrictionProfileId): void |
| `productRestrictionProfileId` | `?string` | Optional | Identifier of the location restriction profile created for the bundle in Gateway.<br>This will be null if respective action is passed as “Default”. | getProductRestrictionProfileId(): ?string | setProductRestrictionProfileId(?string productRestrictionProfileId): void |

## Example (as JSON)

```json
{
  "BundleId": "BundleId0",
  "Cards": [
    {
      "PAN": "PAN0"
    },
    {
      "PAN": "PAN0"
    }
  ],
  "DayTimeRestrictionProfileId": "DayTimeRestrictionProfileId8",
  "LocationRestrictionProfileId": "LocationRestrictionProfileId0",
  "ProductRestrictionProfileId": "ProductRestrictionProfileId4"
}
```

