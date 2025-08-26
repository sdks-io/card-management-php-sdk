
# Create Bundle Res

## Structure

`CreateBundleRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(CreateBundleResponse[])`](../../doc/models/create-bundle-response.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "RequestId": "0e6fb42a-51b0-43b2-f010-92f822657f6a",
  "Status": "SUCCESS",
  "Data": [
    {
      "BundleCreationStatus": {
        "Code": "Code8",
        "Description": "Description8"
      },
      "BundleId": "BundleId6",
      "DayTimeRestrictionStatus": {
        "Code": "Code4",
        "Description": "Description2"
      },
      "DayTimeRestrictionProfileId": "DayTimeRestrictionProfileId4",
      "LocationRestrictionStatus": {
        "Code": "Code6",
        "Description": "Description0"
      }
    },
    {
      "BundleCreationStatus": {
        "Code": "Code8",
        "Description": "Description8"
      },
      "BundleId": "BundleId6",
      "DayTimeRestrictionStatus": {
        "Code": "Code4",
        "Description": "Description2"
      },
      "DayTimeRestrictionProfileId": "DayTimeRestrictionProfileId4",
      "LocationRestrictionStatus": {
        "Code": "Code6",
        "Description": "Description0"
      }
    }
  ]
}
```

