
# Role

## Structure

`Role`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `roleName` | `?string` | Optional | Role Name of the user | getRoleName(): ?string | setRoleName(?string roleName): void |
| `isCustomerAdmin` | `?bool` | Optional | Whether the role is an administrator.<br>**Default**: `true` | getIsCustomerAdmin(): ?bool | setIsCustomerAdmin(?bool isCustomerAdmin): void |
| `isCustomerUser` | `?bool` | Optional | Whether the role is a customer user.<br>**Default**: `false` | getIsCustomerUser(): ?bool | setIsCustomerUser(?bool isCustomerUser): void |
| `isShellAdmin` | `?bool` | Optional | True if the role is Shell user, else false.<br>**Default**: `false` | getIsShellAdmin(): ?bool | setIsShellAdmin(?bool isShellAdmin): void |
| `isServiceAccount` | `?bool` | Optional | True/False.<br>True if the role is Service accounts, else false.<br>**Default**: `false` | getIsServiceAccount(): ?bool | setIsServiceAccount(?bool isServiceAccount): void |
| `isUserAdmin` | `?bool` | Optional | True/False.<br>True, if the role allows user administration, else false.<br>**Default**: `true` | getIsUserAdmin(): ?bool | setIsUserAdmin(?bool isUserAdmin): void |

## Example (as JSON)

```json
{
  "RoleName": "FleetManager",
  "IsCustomerAdmin": true,
  "IsCustomerUser": false,
  "IsShellAdmin": false,
  "IsServiceAccount": false,
  "IsUserAdmin": true
}
```

