
# Summary of Bundle Response Data Items Card Bundles Items

## Structure

`SummaryOfBundleResponseDataItemsCardBundlesItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bundleId` | `?string` | Optional | Gateway assigned unique identifier for the Card Bundle. | getBundleId(): ?string | setBundleId(?string bundleId): void |
| `externalBundleId` | `?string` | Optional | External system allocated Card Bundle identifier for Card Bundle. | getExternalBundleId(): ?string | setExternalBundleId(?string externalBundleId): void |
| `description` | `?string` | Optional | Card Bundle Description. | getDescription(): ?string | setDescription(?string description): void |
| `totalCards` | `?int` | Optional | No of Card PAN added to the card bundle. | getTotalCards(): ?int | setTotalCards(?int totalCards): void |

## Example (as JSON)

```json
{
  "BundleId": "BundleId0",
  "ExternalBundleId": "ExternalBundleId4",
  "Description": "Description8",
  "TotalCards": 126
}
```

