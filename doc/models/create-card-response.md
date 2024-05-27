
# Create Card Response

This entity models the data that is sent in the http response body for this operation.

## Structure

`CreateCardResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `driverAndVRN` | `?string` | Optional | Driver and VRN of the card. ;( semicolon) is used as delimiter | getDriverAndVRN(): ?string | setDriverAndVRN(?string driverAndVRN): void |
| `orderCardReference` | `?int` | Optional | Reference number for each individual card in the order | getOrderCardReference(): ?int | setOrderCardReference(?int orderCardReference): void |

## Example (as JSON)

```json
{
  "DriverAndVRN": "Robert:MV65YLH",
  "OrderCardReference": 488351
}
```

