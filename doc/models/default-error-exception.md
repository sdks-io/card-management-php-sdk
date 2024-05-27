
# Default Error Exception

Error response

## Structure

`DefaultErrorException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fault` | [`?DefaultErrorFault`](../../doc/models/default-error-fault.md) | Optional | Error object | getFault(): ?DefaultErrorFault | setFault(?DefaultErrorFault fault): void |

## Example (as JSON)

```json
{
  "fault": {
    "faultstring": "faultstring2",
    "detail": {
      "errorcode": "errorcode6"
    }
  }
}
```

