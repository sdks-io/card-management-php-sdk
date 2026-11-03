
# Bundled Restrictions List

## Structure

`BundledRestrictionsList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `usageRestrictions` | [`?UsageRestrictionsCard`](../../doc/models/usage-restrictions-card.md) | Optional | - | getUsageRestrictions(): ?UsageRestrictionsCard | setUsageRestrictions(?UsageRestrictionsCard usageRestrictions): void |
| `dayTimeRestrictions` | [`?DayTimeRestrictions`](../../doc/models/day-time-restrictions.md) | Optional | - | getDayTimeRestrictions(): ?DayTimeRestrictions | setDayTimeRestrictions(?DayTimeRestrictions dayTimeRestrictions): void |
| `productRestrictions` | [`?BundledDetailsProductList`](../../doc/models/bundled-details-product-list.md) | Optional | - | getProductRestrictions(): ?BundledDetailsProductList | setProductRestrictions(?BundledDetailsProductList productRestrictions): void |
| `locationRestrictions` | [`?LocationRestriction`](../../doc/models/location-restriction.md) | Optional | - | getLocationRestrictions(): ?LocationRestriction | setLocationRestrictions(?LocationRestriction locationRestrictions): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\BundledRestrictionsListBuilder;
use ShellCardManagementAPIsLib\Models\Builders\UsageRestrictionsCardBuilder;
use ShellCardManagementAPIsLib\Models\Builders\DayTimeRestrictionsBuilder;
use ShellCardManagementAPIsLib\Models\Builders\BundledDetailsProductListBuilder;
use ShellCardManagementAPIsLib\Models\Builders\LocationRestrictionBuilder;
use ShellCardManagementAPIsLib\Models\Builders\CountryRestrictionBuilder;
use ShellCardManagementAPIsLib\Models\Builders\NetworkRestrictionBuilder;
use ShellCardManagementAPIsLib\Models\Builders\ShellSiteRestrictionBuilder;
use ShellCardManagementAPIsLib\Models\Builders\PartnerSiteRestrictionBuilder;

$bundledRestrictionsList = BundledRestrictionsListBuilder::init()
    ->usageRestrictions(
        UsageRestrictionsCardBuilder::init()
            ->dailySpend(7.72)
            ->weeklySpend(10.22)
            ->monthlySpend(48.66)
            ->perTransactionSpend(17.28)
            ->annualSpend(223.08)
            ->build()
    )
    ->dayTimeRestrictions(
        DayTimeRestrictionsBuilder::init()
            ->monday(false)
            ->tuesday(false)
            ->wednesday(false)
            ->thursday(false)
            ->friday(false)
            ->build()
    )
    ->productRestrictions(
        BundledDetailsProductListBuilder::init()
            ->purchaseCategoryId(120)
            ->purchaseCategoryCode('PurchaseCategoryCode4')
            ->products(
                [
                    'Products4'
                ]
            )
            ->productGroups(
                [
                    'ProductGroups3',
                    'ProductGroups4'
                ]
            )
            ->fuelSetId('FuelSetId0')
            ->build()
    )
    ->locationRestrictions(
        LocationRestrictionBuilder::init()
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
            ->build()
    )
    ->build();
```

