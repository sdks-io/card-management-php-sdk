
# Logged in User Request

This entity models the data that is sent in the http request body for Logged In User operation. This class inherits RequestBase class.

## Structure

`LoggedInUserRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `includePayerGroup` | `?bool` | Optional | True/False. The output will include the payer group information only when true is passed.<br>**Default**: `false` | getIncludePayerGroup(): ?bool | setIncludePayerGroup(?bool includePayerGroup): void |
| `includeEIDDetails` | `?bool` | Optional | True/False. The output will include the EID (Electronic Invoice data) information only when true is passed..<br>**Default**: `false` | getIncludeEIDDetails(): ?bool | setIncludeEIDDetails(?bool includeEIDDetails): void |
| `requestedAPIName` | `?string` | Optional | Name of the API on which user access needs to be validated<br>Optional. | getRequestedAPIName(): ?string | setRequestedAPIName(?string requestedAPIName): void |
| `payerId` | `?int` | Optional | Payer id of the customer.</br><br>Optional.</br><br>This input is a search criterion.</br><br>Note: If PayerId or PayerNumber is provided in the input, the given payer will be available in the output if the user has access to the given payer. | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | PayerNumber of the customer.</br><br>Optional</br><br>This input is a search criterion.</br><br>Note: If Payerid or PayerNumber is provided in the input, the given payer will be available in the output if the user has access to the given payer. | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |

## Example (as JSON)

```json
{
  "IncludePayerGroup": false,
  "IncludeEIDDetails": false,
  "RequestedAPIName": "Name of the API",
  "PayerId": 123456,
  "PayerNumber": "GB00123456"
}
```

