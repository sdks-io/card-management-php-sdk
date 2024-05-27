
# Payer Request

## Structure

`PayerRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payers` | [`?(Payers[])`](../../doc/models/payers.md) | Optional | List of Payer entity.<br>Optional.<br>Note:<br>•	Max number of payers allowed in the input is 10, if it exceeds in the input it will throw an error.<br>•	This value is configurable. Initial configuration will be 1000 and will change to 10 once SFH changes are integrated. | getPayers(): ?array | setPayers(?array payers): void |
| `returnBasicDetailsOnly` | `?bool` | Optional | Returns only the high-level basic details of payers. Set this field to ‘true’ when only the basic details are required to get the result quicker.<br>**Default**: `false` | getReturnBasicDetailsOnly(): ?bool | setReturnBasicDetailsOnly(?bool returnBasicDetailsOnly): void |
| `includeAddresses` | `?bool` | Optional | Include address related fields on the response. Set this field to ‘False’ when Address fields are not required to get the result quicker.<br>**Default**: `false` | getIncludeAddresses(): ?bool | setIncludeAddresses(?bool includeAddresses): void |
| `includeBonusParameters` | `?bool` | Optional | Include the Finance Currency, used for Finance Widget, in the response<br>**Default**: `false` | getIncludeBonusParameters(): ?bool | setIncludeBonusParameters(?bool includeBonusParameters): void |
| `currentPage` | `?int` | Optional | Page Number | getCurrentPage(): ?int | setCurrentPage(?int currentPage): void |
| `pageSize` | `?int` | Optional | Page Size – Number of records to show on a page<br><br>Default value 50<br>Return 250 rows only in the response if -1 is supplied as page size.<br><br>Note:<br>•	Max page size is 250, if the user provided value is more than 250 then it will throw error.<br>•	This value is configurable. | getPageSize(): ?int | setPageSize(?int pageSize): void |

## Example (as JSON)

```json
{
  "ReturnBasicDetailsOnly": false,
  "IncludeAddresses": false,
  "IncludeBonusParameters": false,
  "CurrentPage": 1,
  "PageSize": 15,
  "Payers": [
    {
      "ColCoId": 78,
      "ColCoCode": 92,
      "PayerId": 126,
      "PayerNumber": "PayerNumber0",
      "PayerName": "PayerName0"
    }
  ]
}
```

