
# Usage Restrictions Card

## Structure

`UsageRestrictionsCard`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dailySpend` | `?float` | Optional | Maximum spend value (amount) allowed per day.<br>Optional<br>It allows null in the input field. If Values is passed as null, apply the card type limit. However, if the card type limit is NULL for the same field then No limit will be applied in Gateway. | getDailySpend(): ?float | setDailySpend(?float dailySpend): void |
| `weeklySpend` | `?float` | Optional | Maximum spend value (amount) allowed per week.<br>Optional | getWeeklySpend(): ?float | setWeeklySpend(?float weeklySpend): void |
| `monthlySpend` | `?float` | Optional | Maximum spend value (amount) allowed per month.<br>Optional | getMonthlySpend(): ?float | setMonthlySpend(?float monthlySpend): void |
| `perTransactionSpend` | `?float` | Optional | Maximum spend value (amount) allowed per transaction.<br>Optional | getPerTransactionSpend(): ?float | setPerTransactionSpend(?float perTransactionSpend): void |
| `annualSpend` | `?float` | Optional | Maximum spend value (amount) allowed per annum.<br>Optional | getAnnualSpend(): ?float | setAnnualSpend(?float annualSpend): void |
| `lifeTimeSpend` | `?float` | Optional | Maximum spend value (amount) allowed in card’s life time.<br>Optional | getLifeTimeSpend(): ?float | setLifeTimeSpend(?float lifeTimeSpend): void |
| `dailyVolume` | `?float` | Optional | Maximum volume (quantity) allowed per day.<br>Optional | getDailyVolume(): ?float | setDailyVolume(?float dailyVolume): void |
| `weeklyVolume` | `?float` | Optional | Maximum volume (quantity) allowed per week.<br>Optional | getWeeklyVolume(): ?float | setWeeklyVolume(?float weeklyVolume): void |
| `monthlyVolume` | `?float` | Optional | Maximum volume (quantity) allowed per month.<br>Optional | getMonthlyVolume(): ?float | setMonthlyVolume(?float monthlyVolume): void |
| `perTransactionVolume` | `?float` | Optional | Maximum volume (quantity) allowed per transaction.<br>Optional | getPerTransactionVolume(): ?float | setPerTransactionVolume(?float perTransactionVolume): void |
| `annualVolume` | `?float` | Optional | Maximum volume (quantity) allowed per annum.<br>Optional | getAnnualVolume(): ?float | setAnnualVolume(?float annualVolume): void |
| `lifeTimeVolume` | `?float` | Optional | Maximum volume (quantity) allowed in card’s life time.<br>Optional | getLifeTimeVolume(): ?float | setLifeTimeVolume(?float lifeTimeVolume): void |
| `dailyTransactionCount` | `?float` | Optional | Maximum number of transactions allowed per day.<br>Optional | getDailyTransactionCount(): ?float | setDailyTransactionCount(?float dailyTransactionCount): void |
| `weeklyTransactionCount` | `?float` | Optional | Maximum number of transactions allowed per week.<br>Optional | getWeeklyTransactionCount(): ?float | setWeeklyTransactionCount(?float weeklyTransactionCount): void |
| `monthlyTransactionCount` | `?float` | Optional | Maximum number of transactions allowed per month.<br>Optional. | getMonthlyTransactionCount(): ?float | setMonthlyTransactionCount(?float monthlyTransactionCount): void |
| `annualTransactionCount` | `?float` | Optional | Maximum number of transactions allowed per annum. | getAnnualTransactionCount(): ?float | setAnnualTransactionCount(?float annualTransactionCount): void |
| `lifeTimeTransactionCount` | `?float` | Optional | Maximum number of transactions allowed in card’s lifetime.<br>Optional | getLifeTimeTransactionCount(): ?float | setLifeTimeTransactionCount(?float lifeTimeTransactionCount): void |

## Example (as JSON)

```json
{
  "DailySpend": 76.58,
  "WeeklySpend": 181.92,
  "MonthlySpend": 132.96,
  "PerTransactionSpend": 101.58,
  "AnnualSpend": 51.38
}
```

