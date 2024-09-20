
# Order Card Enquiry Req

This class holds Order Card Enquiry list based on which the Order Card Enquiry need to be filtered.

## Structure

`OrderCardEnquiryReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountId` | `?int` | Optional | Account ID of the customer.<br/> Optional if AccountNumber is passed, else mandatory. <br/> This input is a search criterion, if given. | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the customer.<br/> Optional if AccountId is passed, else mandatory.<br/> This input is a search criterion, if given. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `colCoCode` | `?int` | Optional | Collecting Company Code (Shell Code) of the selected payer. <br /><br>Optional – when ‘ReferenceNumber’ is provided.<br /> | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `colCoId` | `?int` | Optional | Collecting Company Id (in ) of the selected payer. <br /><br>Optional – when ‘ReferenceNumber’ is provided. Else, either ‘ColCoId’ or ‘ColCoCode’ is mandatory.<br /> | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCountryCode` | `?string` | Optional | ISO 3166 Alpha-2 Country Code for the customer and card owning country. | getColCoCountryCode(): ?string | setColCoCountryCode(?string colCoCountryCode): void |
| `payerId` | `?int` | Optional | Payer Id (i.e. Customer Id of the Payment Customer) of the selected payer.<br /><br>Optional – when ‘ReferenceNumber’ is provided. Else, either ‘PayerId’ or ‘PayerNumber’ is mandatory. | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the selected payer.<br /><br>Optional – when ‘ReferenceNumber’ is provided. Else, either ‘PayerId’ or ‘PayerNumber’ is mandatory. | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `referenceNumber` | `?int` | Optional | Reference number of the Card Order/ Bulk Card Order/ Order Card Request.<br /><br>Mandatory when ColCo and Payer fields are not provided. Else, optional. | getReferenceNumber(): ?int | setReferenceNumber(?int referenceNumber): void |
| `referenceType` | [`?int(OrderCardEnquiryReqReferenceTypeEnum)`](../../doc/models/order-card-enquiry-req-reference-type-enum.md) | Optional | Type of the reference number provided.<br /><br>Mandatory if ReferenceNumber is provided. Else optional.<br /><br>Allowed Values:<br /><br>1=Main Reference(Main Order Reference Number returned in the output of Card/OrderCard service. <br /><br>2=Order Card Reference (Reference number for each individual card in the order submitted via Card/OrderCard service. <br /><br>3=Bulk Order Card Reference (Reference number returned in the response of bulkcardinterface /UploadOrderCardTemplate. ) | getReferenceType(): ?int | setReferenceType(?int referenceType): void |
| `fromDate` | `?string` | Optional | Card Orders from Date/Time.<br /><br>Optional.<br /><br>Value should be with in last 7 days<br /><br>This field is ignored if ReferenceNumber is provided <br /><br>This field is optional when not provided and ReferenceNumber is null or empty then the value should be set to D-7(Where D is current date)<br /><br>Format: yyyyMMdd | getFromDate(): ?string | setFromDate(?string fromDate): void |
| `toDate` | `?string` | Optional | Card Order to Date/Time<br /><br>Optional<br /><br>Value should be with in last 7 days<br /><br>This field is ignored if ReferenceNumber is provided <br /><br>This field is optional when not provided and ReferenceNumber is null or empty then the value should be set to current date<br /><br>Format: yyyyMMdd | getToDate(): ?string | setToDate(?string toDate): void |
| `orderRequestId` | `?string` | Optional | Client provided Unique Id of the original Order Card request, the status of which is enquired by this API | getOrderRequestId(): ?string | setOrderRequestId(?string orderRequestId): void |

## Example (as JSON)

```json
{
  "ColCoCountryCode": "PH",
  "OrderRequestId": "ed557f02-c7d7-4c01-b3e5-11bf",
  "AccountId": 66,
  "AccountNumber": "AccountNumber8",
  "ColCoCode": 228,
  "ColCoId": 214
}
```

