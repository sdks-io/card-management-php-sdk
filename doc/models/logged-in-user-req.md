
# Logged in User Req

## Structure

`LoggedInUserReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?FleetmanagementV1UserLoggedinuserRequest`](../../doc/models/fleetmanagement-v1-user-loggedinuser-request.md) | Optional | - | getFilters(): ?FleetmanagementV1UserLoggedinuserRequest | setFilters(?FleetmanagementV1UserLoggedinuserRequest filters): void |

## Example (as JSON)

```json
{
  "Filters": {
    "IncludePayerGroup": false,
    "IncludeEIDDetails": false,
    "RequestedAPIName": "RequestedAPIName0",
    "PayerId": 48,
    "PayerNumber": "PayerNumber0"
  }
}
```

