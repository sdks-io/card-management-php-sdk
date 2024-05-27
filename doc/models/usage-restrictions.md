
# Usage Restrictions

## Structure

`UsageRestrictions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dailySpend` | `?float` | Optional | Maximum spend value (amount) allowed per day.<br>Optional<br>The value ‘0’ represents not set. If Values is passed as null, will be considered as inherited.<br>Valid range: 0 to 9999999999 | getDailySpend(): ?float | setDailySpend(?float dailySpend): void |
| `weeklySpend` | `?float` | Optional | Maximum spend value (amount) allowed per week.<br>Optional<br>The value ‘0’ represents not set. If Values is passed as null, will be considered as inherited.<br>Valid range: 0 to 9999999999 | getWeeklySpend(): ?float | setWeeklySpend(?float weeklySpend): void |
| `monthlySpend` | `?float` | Optional | Maximum spend value (amount) allowed per month.<br>Optional<br>The value ‘0’ represents not set. If Values is passed as null, will be considered as inherited.<br>Valid range: 0 to 9999999999 | getMonthlySpend(): ?float | setMonthlySpend(?float monthlySpend): void |
| `perTransactionSpend` | `?float` | Optional | Maximum spend value (amount) allowed per transaction.<br>Optional<br>The value ‘0’ represents not set. If Values is passed as null, will be considered as inherited.<br>Valid range: 0 to 9999999999 | getPerTransactionSpend(): ?float | setPerTransactionSpend(?float perTransactionSpend): void |
| `dailyVolume` | `?int` | Optional | Maximum volume (quantity) allowed per day.<br>Optional<br>The value ‘0’ represents not set. If Values is passed as null, will be considered as inherited.<br>Valid range: 0 to 9999999999 | getDailyVolume(): ?int | setDailyVolume(?int dailyVolume): void |
| `weeklyVolume` | `?int` | Optional | Maximum volume (quantity) allowed per week.<br>Optional<br>The value ‘0’ represents not set. If Values is passed as null, will be considered as inherited.<br>Valid range: 0 to 9999999999 | getWeeklyVolume(): ?int | setWeeklyVolume(?int weeklyVolume): void |
| `monthlyVolume` | `?int` | Optional | Maximum volume (quantity) allowed per month.<br>Optional<br>The value ‘0’ represents not set. If Values is passed as null, will be considered as inherited.<br>Valid range: 0 to 9999999999 | getMonthlyVolume(): ?int | setMonthlyVolume(?int monthlyVolume): void |
| `perTransactionVolume` | `?int` | Optional | Maximum volume (quantity) allowed per transaction.<br>Optional<br>The value ‘0’ represents not set. If Values is passed as null, will be considered as inherited.<br>Valid range: 0 to 9999999999 | getPerTransactionVolume(): ?int | setPerTransactionVolume(?int perTransactionVolume): void |
| `dailyTransactionCount` | `?float` | Optional | Maximum number of transactions allowed per day.<br>Optional<br>The value ‘0’ represents not set. If Values is passed as null, will be considered as inherited.<br>Valid range: 0 to 9999999999 | getDailyTransactionCount(): ?float | setDailyTransactionCount(?float dailyTransactionCount): void |
| `weeklyTransactionCount` | `?float` | Optional | Maximum number of transactions allowed per week.<br>Optional<br>The value ‘0’ represents not set. If Values is passed as null, will be considered as inherited.<br>Valid range: 0 to 9999999999 | getWeeklyTransactionCount(): ?float | setWeeklyTransactionCount(?float weeklyTransactionCount): void |
| `monthlyTransactionCount` | `?float` | Optional | Maximum number of transactions allowed per month.<br>Optional.<br>The value ‘0’ represents not set. If Values is passed as null, will be considered as inherited.<br>Valid range: 0 to 9999999999 | getMonthlyTransactionCount(): ?float | setMonthlyTransactionCount(?float monthlyTransactionCount): void |
| `annualSpend` | `?float` | Optional | Maximum spend value (amount) allowed per annum.<br>Optional<br>The value ‘0’ represents not set. If Values is passed as null, will be considered as inherited.<br>Valid range: 0 to 9999999999 | getAnnualSpend(): ?float | setAnnualSpend(?float annualSpend): void |
| `lifeTimeSpend` | `?float` | Optional | Maximum spend value (amount) allowed in card’s life time.<br>Optional<br>The value ‘0’ represents not set. If Values is passed as null, will be considered as inherited.<br>Valid range: 0 to 9999999999 | getLifeTimeSpend(): ?float | setLifeTimeSpend(?float lifeTimeSpend): void |
| `annualVolume` | `?float` | Optional | Maximum volume (quantity) allowed per annum.<br>Optional<br>The value ‘0’ represents not set. If Values is passed as null, will be considered as inherited.<br>Valid range: 0 to 9999999999 | getAnnualVolume(): ?float | setAnnualVolume(?float annualVolume): void |
| `lifeTimeVolume` | `?float` | Optional | Maximum volume (quantity) allowed in card’s life time.<br>Optional<br>The value ‘0’ represents not set. If Values is passed as null, will be considered as inherited.<br>Valid range: 0 to 9999999999 | getLifeTimeVolume(): ?float | setLifeTimeVolume(?float lifeTimeVolume): void |
| `annualTransactionCount` | `?float` | Optional | Maximum number of transactions allowed per annum.<br>Optional.<br>The value ‘0’ represents not set. If Values is passed as null, will be considered as inherited.<br>Valid range: 0 to 9999999999 | getAnnualTransactionCount(): ?float | setAnnualTransactionCount(?float annualTransactionCount): void |
| `lifeTimeTransactionCount` | `?float` | Optional | Maximum number of transactions allowed in card’s lifetime.<br>Optional<br>The value ‘0’ represents not set. If Values is passed as null, will be considered as inherited.<br>Valid range: 0 to 9999999999 | getLifeTimeTransactionCount(): ?float | setLifeTimeTransactionCount(?float lifeTimeTransactionCount): void |

## Example (as JSON)

```json
{
  "DailySpend": 7.72,
  "WeeklySpend": 10.22,
  "MonthlySpend": 48.66,
  "PerTransactionSpend": 17.28,
  "DailyVolume": 122
}
```

