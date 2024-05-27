
# Logged in User Response

## Structure

`LoggedInUserResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `userName` | `?string` | Optional | Logged in User Identifier | getUserName(): ?string | setUserName(?string userName): void |
| `displayName` | `?string` | Optional | Name of the logged in user. | getDisplayName(): ?string | setDisplayName(?string displayName): void |
| `idMSSOID` | `?string` | Optional | Single Sign On/Unique Identifier of the User in Identity Management system | getIdMSSOID(): ?string | setIdMSSOID(?string idMSSOID): void |
| `preferredLanguage` | `?string` | Optional | ISO culture code/ Language chosen by the logged in user | getPreferredLanguage(): ?string | setPreferredLanguage(?string preferredLanguage): void |
| `isSuperAdmin` | `?bool` | Optional | Whether the user is a super administrator<br>**Default**: `false` | getIsSuperAdmin(): ?bool | setIsSuperAdmin(?bool isSuperAdmin): void |
| `dateFormat` | `?string` | Optional | Preferred Date format for the logged in user | getDateFormat(): ?string | setDateFormat(?string dateFormat): void |
| `timeFormat` | `?string` | Optional | Preferred Time format for the logged in user | getTimeFormat(): ?string | setTimeFormat(?string timeFormat): void |
| `weekBegins` | `?int` | Optional | Preferred Day to Begin the Week. The value will be between 1 to 7 or null. | getWeekBegins(): ?int | setWeekBegins(?int weekBegins): void |
| `displayWeek` | `?bool` | Optional | Preferred Display Week on Fuel Prices configuration for the logged in User.<br>**Default**: `true` | getDisplayWeek(): ?bool | setDisplayWeek(?bool displayWeek): void |
| `cSVSeparator` | `?string` | Optional | Preferred CSV Separator for the logged in user. | getCSVSeparator(): ?string | setCSVSeparator(?string cSVSeparator): void |
| `decimalSeparator` | `?string` | Optional | Preferred Decimal separator configured for the logged in user<br>Note: - Colco default value (configured at Microservices) is returned when the user is not provided or does not exist. | getDecimalSeparator(): ?string | setDecimalSeparator(?string decimalSeparator): void |
| `reportFormat` | `?string` | Optional | Preferred report format configured for the logged in user | getReportFormat(): ?string | setReportFormat(?string reportFormat): void |
| `hasAPIAccess` | `?bool` | Optional | True/False<br>True, if user has access to the requested API. This is validated based on the role Vs API access matrix and client Vs API access matrix.<br>**Default**: `true` | getHasAPIAccess(): ?bool | setHasAPIAccess(?bool hasAPIAccess): void |
| `roles` | [`?(Role[])`](../../doc/models/role.md) | Optional | List of roles the user have access to | getRoles(): ?array | setRoles(?array roles): void |
| `payers` | [`?(PayerAccess[])`](../../doc/models/payer-access.md) | Optional | List of payers which the user has access to.<br>•	It will return 250 payers only and it is configurable. If the user has more than that, the remaining will be ignored.<br>•	The payer which is marked as default will be the first item in the output.<br><br>Note: This list will be empty for users mapped with roles which has either IsShellAdmin or IsServiceAccount set to true as their access level is controlled at ColCo level only. | getPayers(): ?array | setPayers(?array payers): void |
| `accounts` | [`?(AccountAccess[])`](../../doc/models/account-access.md) | Optional | List of accounts which the user has access to.<br>Note: This list will be empty for users mapped with roles which has either IsCustomerAdmin, IsShellAdmin or IsServiceAccount set to true as their access level is controller at either ColCo or payer level only. | getAccounts(): ?array | setAccounts(?array accounts): void |
| `collectingCompanies` | [`?(ColCoAccess[])`](../../doc/models/col-co-access.md) | Optional | List of collecting companies to which the user has access to<br>Note: This list will be empty for users mapped with roles which has either IsCustomerAdmin or IsCustomerUser set to true as their access level is controller at Payer or Account level. | getCollectingCompanies(): ?array | setCollectingCompanies(?array collectingCompanies): void |
| `eIDAccessDetails` | [`?(EIDAccess[])`](../../doc/models/eid-access.md) | Optional | List of Electronic Invoice Data configured for the user.<br>Note: This list will be empty if the value of EIDDetails is set to false or empty in the request. | getEIDAccessDetails(): ?array | setEIDAccessDetails(?array eIDAccessDetails): void |
| `userClassificationBySystem` | `?string` | Optional | User classification by system. | getUserClassificationBySystem(): ?string | setUserClassificationBySystem(?string userClassificationBySystem): void |
| `userClassificationByShell` | `?string` | Optional | User classification by Shell. | getUserClassificationByShell(): ?string | setUserClassificationByShell(?string userClassificationByShell): void |
| `payerCount` | `?int` | Optional | Count of payers accessible to the user at the time when user was created or last updated.<br>Note:<br>Count may vary based on customer operations hence it may not be an up to date value. | getPayerCount(): ?int | setPayerCount(?int payerCount): void |
| `accountCount` | `?int` | Optional | Count of accounts at the time when the user was created or last updated.<br>Note:<br>Count may vary based on customer operations hence it may not be an up to date value. | getAccountCount(): ?int | setAccountCount(?int accountCount): void |
| `cardCount` | `?int` | Optional | Count of cards at the time when the user was created or last updated.<br>Note:<br>Count may vary based on customer operations hence it may not be an up to date value. | getCardCount(): ?int | setCardCount(?int cardCount): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |
| `requestId` | `?string` | Optional | Request Id of the API call | getRequestId(): ?string | setRequestId(?string requestId): void |

## Example (as JSON)

```json
{
  "UserName": "D09PZ29h2eaBWi5Da8gcHsTRO10w8Qh9",
  "DisplayName": "3rdParty test",
  "IdMSSOID": "D09PZ29h2eaBWi5Da8gcHsTRO10w8Qh9",
  "PreferredLanguage": "en-GB",
  "IsSuperAdmin": false,
  "DateFormat": "dd/MM/yy",
  "TimeFormat": "hh:mm tt",
  "WeekBegins": 1,
  "DisplayWeek": true,
  "CSVSeparator": ";",
  "DecimalSeparator": "1,234,567.00",
  "ReportFormat": "csv",
  "HasAPIAccess": true,
  "UserClassificationBySystem": "S",
  "UserClassificationByShell": "S",
  "PayerCount": 1,
  "AccountCount": 1,
  "CardCount": 15,
  "RequestId": "f20979a8-872f-4653-cf12-89b52f1dc7cb"
}
```

