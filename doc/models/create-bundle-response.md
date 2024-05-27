
# Create Bundle Response

## Structure

`CreateBundleResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Request Id | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Response status | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(CreateBundleResponseDataItems[])`](../../doc/models/create-bundle-response-data-items.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `errors` | [`?(ErrorDetails[])`](../../doc/models/error-details.md) | Optional | - | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId2",
  "Status": "Status8",
  "Data": [
    {
      "BundleId": "BundleId6",
      "Cards": [
        {
          "PAN": "PAN0"
        }
      ],
      "DayTimeRestrictionProfileId": "DayTimeRestrictionProfileId4",
      "LocationRestrictionProfileId": "LocationRestrictionProfileId6",
      "ProductRestrictionProfileId": "ProductRestrictionProfileId0"
    },
    {
      "BundleId": "BundleId6",
      "Cards": [
        {
          "PAN": "PAN0"
        }
      ],
      "DayTimeRestrictionProfileId": "DayTimeRestrictionProfileId4",
      "LocationRestrictionProfileId": "LocationRestrictionProfileId6",
      "ProductRestrictionProfileId": "ProductRestrictionProfileId0"
    },
    {
      "BundleId": "BundleId6",
      "Cards": [
        {
          "PAN": "PAN0"
        }
      ],
      "DayTimeRestrictionProfileId": "DayTimeRestrictionProfileId4",
      "LocationRestrictionProfileId": "LocationRestrictionProfileId6",
      "ProductRestrictionProfileId": "ProductRestrictionProfileId0"
    }
  ],
  "Errors": [
    {
      "Code": "Code4",
      "Title": "Title6",
      "Detail": "Detail6",
      "AdditionalInfo": {
        "key1": "val1",
        "key2": "val2"
      }
    },
    {
      "Code": "Code4",
      "Title": "Title6",
      "Detail": "Detail6",
      "AdditionalInfo": {
        "key1": "val1",
        "key2": "val2"
      }
    },
    {
      "Code": "Code4",
      "Title": "Title6",
      "Detail": "Detail6",
      "AdditionalInfo": {
        "key1": "val1",
        "key2": "val2"
      }
    }
  ]
}
```

