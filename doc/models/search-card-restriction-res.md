
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

## Example (as JSON)

```json
{
  "RequestId": "2ace3991-5d03-4a68-ac68-ca9119b25101",
  "cards": [
    {
      "CardId": 134,
      "PAN": "PAN4",
      "ExpiryDate": "ExpiryDate4",
      "StatusId": 102,
      "StatusDescription": "StatusDescription0"
    },
    {
      "CardId": 134,
      "PAN": "PAN4",
      "ExpiryDate": "ExpiryDate4",
      "StatusId": 102,
      "StatusDescription": "StatusDescription0"
    }
  ],
  "Restrictions": {
    "UsageRestrictions": {
      "Level": "Level0",
      "DailySpend": 7.72,
      "DailySpendAccumulated": 127.2,
      "DailySpendBalance": 5.36,
      "DailySpendOverride": false
    },
    "DayTimeRestrictions": {
      "Monday": false,
      "Tuesday": false,
      "Wednesday": false,
      "Thursday": false,
      "Friday": false
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
    "LocationRestrictions": {
      "CountryRestrictions": {
        "Countries": [
          "Countries7"
        ],
        "Exclusive": false
      },
      "NetworkRestrictions": [
        {
          "Country": "Country6",
          "Networks": [
            "Networks3",
            "Networks4",
            "Networks5"
          ],
          "Exclusive": false
        },
        {
          "Country": "Country6",
          "Networks": [
            "Networks3",
            "Networks4",
            "Networks5"
          ],
          "Exclusive": false
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
    }
  },
  "Error": {
    "Code": "Code4",
    "Description": "Description2"
  }
}
```

