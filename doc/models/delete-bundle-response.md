
# Delete Bundle Response

## Structure

`DeleteBundleResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | API Request Id | getRequestId(): ?string | setRequestId(?string requestId): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId4",
  "Error": {
    "Code": "Code4",
    "Description": "Description2"
  }
}
```

