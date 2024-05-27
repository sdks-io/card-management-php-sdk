
# Restriction Search Card Response

## Structure

`RestrictionSearchCardResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | API Request ID | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | API Response Status | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(RestrictionSearchCardResponseDataItems[])`](../../doc/models/restriction-search-card-response-data-items.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId2",
  "Status": "Status8",
  "Data": [
    {
      "BundleId": 204,
      "Restrictions": {
        "DayTimeRestrictions": {
          "Friday": false,
          "Monday": false,
          "Saturday": false,
          "Sunday": false,
          "Thursday": false
        },
        "LocationRestrictions": {
          "CountryRestrictions": {
            "Exclusive": false,
            "Countries": [
              "Countries7"
            ]
          },
          "NetworkRestrictions": [
            {
              "Country": "Country6",
              "Exclusive": false,
              "Networks": [
                "Networks3",
                "Networks4",
                "Networks5"
              ]
            },
            {
              "Country": "Country6",
              "Exclusive": false,
              "Networks": [
                "Networks3",
                "Networks4",
                "Networks5"
              ]
            }
          ],
          "ShellSiteRestrictions": [
            {
              "Country": "Country4",
              "Sites": [
                "Sites3",
                "Sites4"
              ],
              "SiteGroups": [
                "SiteGroups9",
                "SiteGroups8",
                "SiteGroups7"
              ],
              "Exclusive": false
            },
            {
              "Country": "Country4",
              "Sites": [
                "Sites3",
                "Sites4"
              ],
              "SiteGroups": [
                "SiteGroups9",
                "SiteGroups8",
                "SiteGroups7"
              ],
              "Exclusive": false
            }
          ],
          "PartnerSiteRestrictions": [
            {
              "NetworkCode": "NetworkCode2",
              "Sites": [
                "Sites3"
              ],
              "SiteGroups": [
                "SiteGroups1",
                "SiteGroups2"
              ],
              "Exclusive": false
            }
          ]
        },
        "ProductRestrictions": {
          "Products": [
            {
              "GlobalProductCode": "GlobalProductCode6",
              "Description": "Description8"
            }
          ],
          "ProductGroups": [
            {
              "ReferenceId": 82,
              "ProductGroupId": "ProductGroupId6",
              "Name": "Name0",
              "IsDefault": false,
              "IsFuelType": false
            },
            {
              "ReferenceId": 82,
              "ProductGroupId": "ProductGroupId6",
              "Name": "Name0",
              "IsDefault": false,
              "IsFuelType": false
            }
          ]
        },
        "UsageRestrictions": {
          "DailySpend": 7.72,
          "WeeklySpend": 10.22,
          "MonthlySpend": 48.66,
          "PerTransactionSpend": 17.28,
          "DailyVolume": 122
        }
      },
      "RestrictionCurrencyCode": "RestrictionCurrencyCode2",
      "RestrictionCurrencySymbol": "RestrictionCurrencySymbol2",
      "AccountId": 62
    },
    {
      "BundleId": 204,
      "Restrictions": {
        "DayTimeRestrictions": {
          "Friday": false,
          "Monday": false,
          "Saturday": false,
          "Sunday": false,
          "Thursday": false
        },
        "LocationRestrictions": {
          "CountryRestrictions": {
            "Exclusive": false,
            "Countries": [
              "Countries7"
            ]
          },
          "NetworkRestrictions": [
            {
              "Country": "Country6",
              "Exclusive": false,
              "Networks": [
                "Networks3",
                "Networks4",
                "Networks5"
              ]
            },
            {
              "Country": "Country6",
              "Exclusive": false,
              "Networks": [
                "Networks3",
                "Networks4",
                "Networks5"
              ]
            }
          ],
          "ShellSiteRestrictions": [
            {
              "Country": "Country4",
              "Sites": [
                "Sites3",
                "Sites4"
              ],
              "SiteGroups": [
                "SiteGroups9",
                "SiteGroups8",
                "SiteGroups7"
              ],
              "Exclusive": false
            },
            {
              "Country": "Country4",
              "Sites": [
                "Sites3",
                "Sites4"
              ],
              "SiteGroups": [
                "SiteGroups9",
                "SiteGroups8",
                "SiteGroups7"
              ],
              "Exclusive": false
            }
          ],
          "PartnerSiteRestrictions": [
            {
              "NetworkCode": "NetworkCode2",
              "Sites": [
                "Sites3"
              ],
              "SiteGroups": [
                "SiteGroups1",
                "SiteGroups2"
              ],
              "Exclusive": false
            }
          ]
        },
        "ProductRestrictions": {
          "Products": [
            {
              "GlobalProductCode": "GlobalProductCode6",
              "Description": "Description8"
            }
          ],
          "ProductGroups": [
            {
              "ReferenceId": 82,
              "ProductGroupId": "ProductGroupId6",
              "Name": "Name0",
              "IsDefault": false,
              "IsFuelType": false
            },
            {
              "ReferenceId": 82,
              "ProductGroupId": "ProductGroupId6",
              "Name": "Name0",
              "IsDefault": false,
              "IsFuelType": false
            }
          ]
        },
        "UsageRestrictions": {
          "DailySpend": 7.72,
          "WeeklySpend": 10.22,
          "MonthlySpend": 48.66,
          "PerTransactionSpend": 17.28,
          "DailyVolume": 122
        }
      },
      "RestrictionCurrencyCode": "RestrictionCurrencyCode2",
      "RestrictionCurrencySymbol": "RestrictionCurrencySymbol2",
      "AccountId": 62
    },
    {
      "BundleId": 204,
      "Restrictions": {
        "DayTimeRestrictions": {
          "Friday": false,
          "Monday": false,
          "Saturday": false,
          "Sunday": false,
          "Thursday": false
        },
        "LocationRestrictions": {
          "CountryRestrictions": {
            "Exclusive": false,
            "Countries": [
              "Countries7"
            ]
          },
          "NetworkRestrictions": [
            {
              "Country": "Country6",
              "Exclusive": false,
              "Networks": [
                "Networks3",
                "Networks4",
                "Networks5"
              ]
            },
            {
              "Country": "Country6",
              "Exclusive": false,
              "Networks": [
                "Networks3",
                "Networks4",
                "Networks5"
              ]
            }
          ],
          "ShellSiteRestrictions": [
            {
              "Country": "Country4",
              "Sites": [
                "Sites3",
                "Sites4"
              ],
              "SiteGroups": [
                "SiteGroups9",
                "SiteGroups8",
                "SiteGroups7"
              ],
              "Exclusive": false
            },
            {
              "Country": "Country4",
              "Sites": [
                "Sites3",
                "Sites4"
              ],
              "SiteGroups": [
                "SiteGroups9",
                "SiteGroups8",
                "SiteGroups7"
              ],
              "Exclusive": false
            }
          ],
          "PartnerSiteRestrictions": [
            {
              "NetworkCode": "NetworkCode2",
              "Sites": [
                "Sites3"
              ],
              "SiteGroups": [
                "SiteGroups1",
                "SiteGroups2"
              ],
              "Exclusive": false
            }
          ]
        },
        "ProductRestrictions": {
          "Products": [
            {
              "GlobalProductCode": "GlobalProductCode6",
              "Description": "Description8"
            }
          ],
          "ProductGroups": [
            {
              "ReferenceId": 82,
              "ProductGroupId": "ProductGroupId6",
              "Name": "Name0",
              "IsDefault": false,
              "IsFuelType": false
            },
            {
              "ReferenceId": 82,
              "ProductGroupId": "ProductGroupId6",
              "Name": "Name0",
              "IsDefault": false,
              "IsFuelType": false
            }
          ]
        },
        "UsageRestrictions": {
          "DailySpend": 7.72,
          "WeeklySpend": 10.22,
          "MonthlySpend": 48.66,
          "PerTransactionSpend": 17.28,
          "DailyVolume": 122
        }
      },
      "RestrictionCurrencyCode": "RestrictionCurrencyCode2",
      "RestrictionCurrencySymbol": "RestrictionCurrencySymbol2",
      "AccountId": 62
    }
  ]
}
```

