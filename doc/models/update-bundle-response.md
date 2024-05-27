
# Update Bundle Response

## Structure

`UpdateBundleResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | API Request Id | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | API Response Status | getStatus(): ?string | setStatus(?string status): void |
| `errors` | [`?ErrorDetails`](../../doc/models/error-details.md) | Optional | - | getErrors(): ?ErrorDetails | setErrors(?ErrorDetails errors): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId4",
  "Status": "Status0",
  "Errors": {
    "Code": "Code4",
    "Title": "Title6",
    "Detail": "Detail6",
    "AdditionalInfo": {
      "key1": "val1",
      "key2": "val2"
    }
  }
}
```

