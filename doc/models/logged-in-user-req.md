
# Logged in User Req

## Structure

`LoggedInUserReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?FleetmanagementV1UserLoggedinuserRequest`](../../doc/models/fleetmanagement-v1-user-loggedinuser-request.md) | Optional | - | getFilters(): ?FleetmanagementV1UserLoggedinuserRequest | setFilters(?FleetmanagementV1UserLoggedinuserRequest filters): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\LoggedInUserReqBuilder;
use ShellCardManagementAPIsLib\Models\Builders\FleetmanagementV1UserLoggedinuserRequestBuilder;

$loggedInUserReq = LoggedInUserReqBuilder::init()
    ->filters(
        FleetmanagementV1UserLoggedinuserRequestBuilder::init()
            ->includePayerGroup(false)
            ->includeEIDDetails(false)
            ->requestedAPIName('RequestedAPIName0')
            ->payerId(48)
            ->payerNumber('PayerNumber0')
            ->build()
    )
    ->build();
```

