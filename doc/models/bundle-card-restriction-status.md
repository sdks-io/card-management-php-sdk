
# Bundle Card Restriction Status

## Structure

`BundleCardRestrictionStatus`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pAN` | `?string` | Optional | Card PAN. | getPAN(): ?string | setPAN(?string pAN): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\BundleCardRestrictionStatusBuilder;

$bundleCardRestrictionStatus = BundleCardRestrictionStatusBuilder::init()
    ->pAN('7077117017500030015')
    ->build();
```

