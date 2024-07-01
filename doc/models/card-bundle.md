
# Card Bundle

## Structure

`CardBundle`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bundleId` | `?string` | Optional | Unique identifier for the Card Bundle | getBundleId(): ?string | setBundleId(?string bundleId): void |
| `externalBundleId` | `?string` | Optional | External system allocated Card Bundle identifier for Card Bundle. | getExternalBundleId(): ?string | setExternalBundleId(?string externalBundleId): void |
| `description` | `?string` | Optional | DescriptionCard Bundle Description. | getDescription(): ?string | setDescription(?string description): void |
| `totalCards` | `?int` | Optional | No of Card PAN added to the card bundle. | getTotalCards(): ?int | setTotalCards(?int totalCards): void |

## Example (as JSON)

```json
{
  "BundleId": "BundleId4",
  "ExternalBundleId": "ExternalBundleId0",
  "Description": "Description4",
  "TotalCards": 126
}
```

