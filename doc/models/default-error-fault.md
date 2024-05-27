
# Default Error Fault

Error object

## Structure

`DefaultErrorFault`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `faultstring` | `?string` | Optional | Error Description | getFaultstring(): ?string | setFaultstring(?string faultstring): void |
| `detail` | [`?DefaultErrorFaultDetail`](../../doc/models/default-error-fault-detail.md) | Optional | Details about the error | getDetail(): ?DefaultErrorFaultDetail | setDetail(?DefaultErrorFaultDetail detail): void |

## Example (as JSON)

```json
{
  "faultstring": "faultstring8",
  "detail": {
    "errorcode": "errorcode6"
  }
}
```

