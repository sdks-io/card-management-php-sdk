
# Create Bundle Response

## Structure

`CreateBundleResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Request Id of the API call | getRequestId(): ?string | setRequestId(?string requestId): void |
| `bundleCreationStatus` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getBundleCreationStatus(): ?ErrorStatus | setBundleCreationStatus(?ErrorStatus bundleCreationStatus): void |
| `bundleId` | `?string` | Optional | Identifier of the newly created bundle | getBundleId(): ?string | setBundleId(?string bundleId): void |
| `dayTimeRestrictionStatus` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getDayTimeRestrictionStatus(): ?ErrorStatus | setDayTimeRestrictionStatus(?ErrorStatus dayTimeRestrictionStatus): void |
| `dayTimeRestrictionProfileId` | `?string` | Optional | Identifier of the day/time restriction profile created | getDayTimeRestrictionProfileId(): ?string | setDayTimeRestrictionProfileId(?string dayTimeRestrictionProfileId): void |
| `locationRestrictionStatus` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getLocationRestrictionStatus(): ?ErrorStatus | setLocationRestrictionStatus(?ErrorStatus locationRestrictionStatus): void |
| `locationRestrictionProfileId` | `?string` | Optional | Identifier of the location restriction profile created | getLocationRestrictionProfileId(): ?string | setLocationRestrictionProfileId(?string locationRestrictionProfileId): void |
| `usageRestrictionStatus` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getUsageRestrictionStatus(): ?ErrorStatus | setUsageRestrictionStatus(?ErrorStatus usageRestrictionStatus): void |
| `productRestrictionStatus` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getProductRestrictionStatus(): ?ErrorStatus | setProductRestrictionStatus(?ErrorStatus productRestrictionStatus): void |
| `cards` | [`?BundleCardRestrictionStatus`](../../doc/models/bundle-card-restriction-status.md) | Optional | - | getCards(): ?BundleCardRestrictionStatus | setCards(?BundleCardRestrictionStatus cards): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |

## Example (as JSON)

```json
{
  "RequestId": "2ace3991-5d03-4a68-ac68-ca9119b25101",
  "BundleCreationStatus": {
    "Code": "Code8",
    "Description": "Description8"
  },
  "BundleId": "BundleId2",
  "DayTimeRestrictionStatus": {
    "Code": "Code4",
    "Description": "Description2"
  },
  "DayTimeRestrictionProfileId": "DayTimeRestrictionProfileId0"
}
```

