
# Search Card Restriction Res

## Structure

`SearchCardRestrictionRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Request Id of the API call | getRequestId(): ?string | setRequestId(?string requestId): void |
| `cards` | [`?(RestrictionCardList[])`](../../doc/models/restriction-card-list.md) | Optional | - | getCards(): ?array | setCards(?array cards): void |
| `restrictions` | [`?Restriction`](../../doc/models/restriction.md) | Optional | - | getRestrictions(): ?Restriction | setRestrictions(?Restriction restrictions): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\SearchCardRestrictionResBuilder;
use ShellCardManagementAPIsLib\Models\Builders\RestrictionCardListBuilder;
use ShellCardManagementAPIsLib\Models\Builders\RestrictionBuilder;
use ShellCardManagementAPIsLib\Models\Builders\UsageRestrictionsCardBuilder;
use ShellCardManagementAPIsLib\Models\Builders\DayTimeRestrictionsBuilder;
use ShellCardManagementAPIsLib\Models\Builders\SearchProductRestrictionBuilder;
use ShellCardManagementAPIsLib\Models\Builders\RestrictionProductBuilder;
use ShellCardManagementAPIsLib\Models\Builders\ProductGroupBuilder;
use ShellCardManagementAPIsLib\Models\Builders\LocationRestrictionBuilder;
use ShellCardManagementAPIsLib\Models\Builders\CountryRestrictionBuilder;
use ShellCardManagementAPIsLib\Models\Builders\NetworkRestrictionBuilder;
use ShellCardManagementAPIsLib\Models\Builders\ShellSiteRestrictionBuilder;
use ShellCardManagementAPIsLib\Models\Builders\PartnerSiteRestrictionBuilder;
use ShellCardManagementAPIsLib\Models\Builders\ErrorStatusBuilder;

$searchCardRestrictionRes = SearchCardRestrictionResBuilder::init()
    ->requestId('2ace3991-5d03-4a68-ac68-ca9119b25101')
    ->cards(
        [
            RestrictionCardListBuilder::init()
                ->cardId(134)
                ->pAN('PAN4')
                ->expiryDate('ExpiryDate4')
                ->statusId(102)
                ->statusDescription('StatusDescription0')
                ->build(),
            RestrictionCardListBuilder::init()
                ->cardId(134)
                ->pAN('PAN4')
                ->expiryDate('ExpiryDate4')
                ->statusId(102)
                ->statusDescription('StatusDescription0')
                ->build()
        ]
    )
    ->restrictions(
        RestrictionBuilder::init()
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
                SearchProductRestrictionBuilder::init()
                    ->products(
                        [
                            RestrictionProductBuilder::init()
                                ->globalProductCode('GlobalProductCode6')
                                ->description('Description8')
                                ->build()
                        ]
                    )
                    ->productGroups(
                        [
                            ProductGroupBuilder::init()
                                ->referenceId(82)
                                ->productGroupId('ProductGroupId6')
                                ->name('Name0')
                                ->isDefault(false)
                                ->isFuelType(false)
                                ->build(),
                            ProductGroupBuilder::init()
                                ->referenceId(82)
                                ->productGroupId('ProductGroupId6')
                                ->name('Name0')
                                ->isDefault(false)
                                ->isFuelType(false)
                                ->build()
                        ]
                    )
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
            ->build()
    )
    ->error(
        ErrorStatusBuilder::init()
            ->code('Code4')
            ->description('Description2')
            ->build()
    )
    ->build();
```

