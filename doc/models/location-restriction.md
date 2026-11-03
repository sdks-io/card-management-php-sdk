
# Location Restriction

## Structure

`LocationRestriction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `countryRestrictions` | [`?CountryRestriction`](../../doc/models/country-restriction.md) | Optional | - | getCountryRestrictions(): ?CountryRestriction | setCountryRestrictions(?CountryRestriction countryRestrictions): void |
| `networkRestrictions` | [`?(NetworkRestriction[])`](../../doc/models/network-restriction.md) | Optional | - | getNetworkRestrictions(): ?array | setNetworkRestrictions(?array networkRestrictions): void |
| `shellSiteRestrictions` | [`?(ShellSiteRestriction[])`](../../doc/models/shell-site-restriction.md) | Optional | - | getShellSiteRestrictions(): ?array | setShellSiteRestrictions(?array shellSiteRestrictions): void |
| `partnerSiteRestrictions` | [`?(PartnerSiteRestriction[])`](../../doc/models/partner-site-restriction.md) | Optional | - | getPartnerSiteRestrictions(): ?array | setPartnerSiteRestrictions(?array partnerSiteRestrictions): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\LocationRestrictionBuilder;
use ShellCardManagementAPIsLib\Models\Builders\CountryRestrictionBuilder;
use ShellCardManagementAPIsLib\Models\Builders\NetworkRestrictionBuilder;
use ShellCardManagementAPIsLib\Models\Builders\ShellSiteRestrictionBuilder;
use ShellCardManagementAPIsLib\Models\Builders\PartnerSiteRestrictionBuilder;

$locationRestriction = LocationRestrictionBuilder::init()
    ->countryRestrictions(
        CountryRestrictionBuilder::init()
            ->countries(
                [
                    'Countries7'
                ]
            )
            ->exclusive(false)
            ->build()
    )
    ->networkRestrictions(
        [
            NetworkRestrictionBuilder::init()
                ->country('Country6')
                ->networks(
                    [
                        'Networks3',
                        'Networks4',
                        'Networks5'
                    ]
                )
                ->exclusive(false)
                ->build(),
            NetworkRestrictionBuilder::init()
                ->country('Country6')
                ->networks(
                    [
                        'Networks3',
                        'Networks4',
                        'Networks5'
                    ]
                )
                ->exclusive(false)
                ->build()
        ]
    )
    ->shellSiteRestrictions(
        [
            ShellSiteRestrictionBuilder::init()
                ->country('Country4')
                ->sites(
                    [
                        'Sites3',
                        'Sites4'
                    ]
                )
                ->siteGroups(
                    [
                        'SiteGroups9',
                        'SiteGroups8',
                        'SiteGroups7'
                    ]
                )
                ->exclusive(false)
                ->build(),
            ShellSiteRestrictionBuilder::init()
                ->country('Country4')
                ->sites(
                    [
                        'Sites3',
                        'Sites4'
                    ]
                )
                ->siteGroups(
                    [
                        'SiteGroups9',
                        'SiteGroups8',
                        'SiteGroups7'
                    ]
                )
                ->exclusive(false)
                ->build()
        ]
    )
    ->partnerSiteRestrictions(
        [
            PartnerSiteRestrictionBuilder::init()
                ->networkCode('NetworkCode2')
                ->sites(
                    [
                        'Sites3'
                    ]
                )
                ->siteGroups(
                    [
                        'SiteGroups1',
                        'SiteGroups2'
                    ]
                )
                ->exclusive(false)
                ->build()
        ]
    )
    ->build();
```

