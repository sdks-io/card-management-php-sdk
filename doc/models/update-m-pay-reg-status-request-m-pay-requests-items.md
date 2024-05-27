
# Update M Pay Reg Status Request M Pay Requests Items

## Structure

`UpdateMPayRegStatusRequestMPayRequestsItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `globalRequestID` | `?string` | Optional | List of MPay Request to be updated for Fleet Manager approval status.<br>Mandatory<br>Maximum number of requests that can be submitted are 50 | getGlobalRequestID(): ?string | setGlobalRequestID(?string globalRequestID): void |
| `status` | `?string` | Optional | Status of mobile payment registration request<br>Mandatory.<br>Allowed values –<br>•	Approved<br>•   Rejected | getStatus(): ?string | setStatus(?string status): void |
| `approverUserID` | `?string` | Optional | Approver’s User ID<br>ApproverUserID is mandatory when Status is Approved else optional | getApproverUserID(): ?string | setApproverUserID(?string approverUserID): void |
| `approverUserDisplayName` | `?string` | Optional | Approver’s display name<br>Mandatory when Status is Approved else optional. | getApproverUserDisplayName(): ?string | setApproverUserDisplayName(?string approverUserDisplayName): void |
| `reason` | `?string` | Optional | Reason for Fleet Manager approval/rejection.<br>Optional | getReason(): ?string | setReason(?string reason): void |

## Example (as JSON)

```json
{
  "GlobalRequestID": "GlobalRequestID4",
  "Status": "Status4",
  "ApproverUserID": "ApproverUserID0",
  "ApproverUserDisplayName": "ApproverUserDisplayName0",
  "Reason": "Reason8"
}
```

