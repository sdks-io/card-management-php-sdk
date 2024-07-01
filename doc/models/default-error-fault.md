
# Default Error Fault

Error object

## Structure

`DefaultErrorFault`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `faultstring` | `?string` | Optional | Error Description | getFaultstring(): ?string | setFaultstring(?string faultstring): void |
| `detail` | [`?Detail`](../../doc/models/detail.md) | Optional | - | getDetail(): ?Detail | setDetail(?Detail detail): void |

## Example (as JSON)

```json
{
  "faultstring": "faultstring8",
  "detail": {
    "errorcode": "errorcode6"
  }
}
```

