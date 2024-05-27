
# Card Usage Restrictions

## Structure

`CardUsageRestrictions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `level` | `?string` | Optional | Describes at which level the restriction is set at.<br>Possible values:<br>OU = Restriction set at ColCo card type<br>Customer = Restriction set at customer card type | getLevel(): ?string | setLevel(?string level): void |
| `dailySpendLimit` | `?float` | Optional | Maximum amount that can be spend on the card in a day. | getDailySpendLimit(): ?float | setDailySpendLimit(?float dailySpendLimit): void |
| `weeklySpendLimit` | `?float` | Optional | Maximum amount that can be spend on the card in a week. | getWeeklySpendLimit(): ?float | setWeeklySpendLimit(?float weeklySpendLimit): void |
| `monthlySpendLimit` | `?float` | Optional | Maximum amount that can be spend on the card in a month. | getMonthlySpendLimit(): ?float | setMonthlySpendLimit(?float monthlySpendLimit): void |
| `annualSpendLimit` | `?float` | Optional | Maximum amount that can be spend on the card in a year. | getAnnualSpendLimit(): ?float | setAnnualSpendLimit(?float annualSpendLimit): void |
| `lifeTimeSpendLimit` | `?float` | Optional | Maximum amount that can be spend on the card in the card’s life time. | getLifeTimeSpendLimit(): ?float | setLifeTimeSpendLimit(?float lifeTimeSpendLimit): void |
| `dailyVolumeLimit` | `?float` | Optional | Maximum volume of fuel that can be bought on the card in a day. | getDailyVolumeLimit(): ?float | setDailyVolumeLimit(?float dailyVolumeLimit): void |
| `weeklyVolumeLimit` | `?float` | Optional | Maximum volume of fuel that can be bought on the card in a week. | getWeeklyVolumeLimit(): ?float | setWeeklyVolumeLimit(?float weeklyVolumeLimit): void |
| `monthlyVolumeLimit` | `?float` | Optional | Maximum volume of fuel that can be bought on the card in a month. | getMonthlyVolumeLimit(): ?float | setMonthlyVolumeLimit(?float monthlyVolumeLimit): void |
| `annualVolumeLimit` | `?float` | Optional | Maximum volume of fuel that can be bought on the card in a year.<br>**Default**: `0` | getAnnualVolumeLimit(): ?float | setAnnualVolumeLimit(?float annualVolumeLimit): void |
| `lifeTimeVolumeLimit` | `?float` | Optional | Maximum volume of fuel that can be bought on the card in the card’s life time. | getLifeTimeVolumeLimit(): ?float | setLifeTimeVolumeLimit(?float lifeTimeVolumeLimit): void |
| `transactionSpendLimit` | `?float` | Optional | Maximum amount that can be spend on the card in a transaction. | getTransactionSpendLimit(): ?float | setTransactionSpendLimit(?float transactionSpendLimit): void |
| `transactionVolumeLimit` | `?float` | Optional | Maximum volume of fuel that can be bought on the card in a transaction. | getTransactionVolumeLimit(): ?float | setTransactionVolumeLimit(?float transactionVolumeLimit): void |
| `dailyTransactionCount` | `?float` | Optional | Maximum number of transactions allowed on a card in a day. | getDailyTransactionCount(): ?float | setDailyTransactionCount(?float dailyTransactionCount): void |
| `weeklyTransactionCount` | `?float` | Optional | Maximum number of transactions allowed on a card in a week. | getWeeklyTransactionCount(): ?float | setWeeklyTransactionCount(?float weeklyTransactionCount): void |
| `monthlyTransactionCount` | `?float` | Optional | Maximum number of transactions allowed on a card in a month. | getMonthlyTransactionCount(): ?float | setMonthlyTransactionCount(?float monthlyTransactionCount): void |
| `annualTransactionCount` | `?float` | Optional | Maximum number of transactions allowed on the card in a year. | getAnnualTransactionCount(): ?float | setAnnualTransactionCount(?float annualTransactionCount): void |
| `lifeTimeTransactionCount` | `?float` | Optional | Maximum number of transactions allowed on the card in the card’s life time. | getLifeTimeTransactionCount(): ?float | setLifeTimeTransactionCount(?float lifeTimeTransactionCount): void |
| `isVelocityCeiling` | `?bool` | Optional | IsVelocityCeiling flag<br>Note: When "True", the velocity defaults configured in MS DB will be considered as the Max Limits for velocity changes. When ‘false’ max allowed limits will be 999999999999 for Type “Count” and 9999999999.99 for Type ‘Value’. | getIsVelocityCeiling(): ?bool | setIsVelocityCeiling(?bool isVelocityCeiling): void |

## Example (as JSON)

```json
{
  "Level": "OU",
  "DailySpendLimit": 120.0,
  "WeeklySpendLimit": 56.07,
  "MonthlySpendLimit": 0.0,
  "AnnualSpendLimit": 0.0,
  "LifeTimeSpendLimit": 0,
  "DailyVolumeLimit": 0,
  "WeeklyVolumeLimit": 0,
  "MonthlyVolumeLimit": 0,
  "AnnualVolumeLimit": 0,
  "LifeTimeVolumeLimit": 0,
  "TransactionSpendLimit": 0,
  "TransactionVolumeLimit": 0,
  "DailyTransactionCount": 100,
  "WeeklyTransactionCount": 100,
  "MonthlyTransactionCount": 100,
  "AnnualTransactionCount": 100,
  "LifeTimeTransactionCount": 100
}
```

