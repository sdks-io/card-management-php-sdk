
# Customer Detail Response

## Structure

`CustomerDetailResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountId` | `?int` | Optional | Account Id of the selected account. | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountName` | `?string` | Optional | Account Name of the selected account. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `accountNumber` | `?string` | Optional | Account Number of the selected account. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountShortName` | `?string` | Optional | Short name of the customer. | getAccountShortName(): ?string | setAccountShortName(?string accountShortName): void |
| `accountTradingName` | `?string` | Optional | Trading name of the customer | getAccountTradingName(): ?string | setAccountTradingName(?string accountTradingName): void |
| `allowFleetIdInput` | `?bool` | Optional | True/False.<br>When false, users should not be allowed to enable Fleet Id prompt option while ordering cards under this account. | getAllowFleetIdInput(): ?bool | setAllowFleetIdInput(?bool allowFleetIdInput): void |
| `band` | `?string` | Optional | Band Id and Description of the Payer in Card Platform<br>e.g. (Id – Description):<br>1-Platinum<br>2-Gold<br>3-Silver<br>4-Bronze | getBand(): ?string | setBand(?string band): void |
| `billingAddress` | [`?Address`](../../doc/models/address.md) | Optional | - | getBillingAddress(): ?Address | setBillingAddress(?Address billingAddress): void |
| `cardGroupPosition` | `?string` | Optional | Card group position at –<br>•	Payer – Payer level<br>•	Account – Account level | getCardGroupPosition(): ?string | setCardGroupPosition(?string cardGroupPosition): void |
| `correspondenceAddress` | [`?Address`](../../doc/models/address.md) | Optional | - | getCorrespondenceAddress(): ?Address | setCorrespondenceAddress(?Address correspondenceAddress): void |
| `deliveryAddresses` | [`?(DeliveryAddresses[])`](../../doc/models/delivery-addresses.md) | Optional | - | getDeliveryAddresses(): ?array | setDeliveryAddresses(?array deliveryAddresses): void |
| `fleetPin` | `?bool` | Optional | Is Fleet Pin optional enabled for the selected account | getFleetPin(): ?bool | setFleetPin(?bool fleetPin): void |
| `fullName` | `?string` | Optional | Full Name of the customer | getFullName(): ?string | setFullName(?string fullName): void |
| `invoiceCustomerId` | `?int` | Optional | Customer Id of the Invoice Point of the account | getInvoiceCustomerId(): ?int | setInvoiceCustomerId(?int invoiceCustomerId): void |
| `invoiceCustomerShortName` | `?string` | Optional | Short Name of the Invoice Point of the account | getInvoiceCustomerShortName(): ?string | setInvoiceCustomerShortName(?string invoiceCustomerShortName): void |
| `isInvoicePoint` | `?bool` | Optional | Whether the account is an invoice point. | getIsInvoicePoint(): ?bool | setIsInvoicePoint(?bool isInvoicePoint): void |
| `marketingSegmentation` | `?string` | Optional | Marketing Segmentation id and description<br>e.g. (Id – Description):<br>1-National CRT<br>2-International CRT & IKAs<br>3-Small Customers<br>4-National/International Fleet/IKA | getMarketingSegmentation(): ?string | setMarketingSegmentation(?string marketingSegmentation): void |
| `vATNumber` | `?string` | Optional | VAT Registration Number of Customer | getVATNumber(): ?string | setVATNumber(?string vATNumber): void |
| `payerId` | `?int` | Optional | Payer Id of the selected account. | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerName` | `?string` | Optional | Payer Name of the selected account. | getPayerName(): ?string | setPayerName(?string payerName): void |
| `payerNumber` | `?string` | Optional | Payer Number of the selected account. | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `selfSelectedPin` | `?bool` | Optional | Is Self-selected Pin enabled for the account | getSelfSelectedPin(): ?bool | setSelfSelectedPin(?bool selfSelectedPin): void |
| `status` | `?string` | Optional | Payer current status id and description<br>e.g. (Id – Description):<br>1-Active<br>2-Requested from UTA<br>3-Awaiting embossing<br>4-Manufactured<br>5-Awaiting despatch | getStatus(): ?string | setStatus(?string status): void |
| `defaultPINAdviceType` | `?int` | Optional | Default PIN AdviceType of the customer.<br>Possible Values:<br><br>1. Paper<br>2. Email<br>3. SMS<br>4. None | getDefaultPINAdviceType(): ?int | setDefaultPINAdviceType(?int defaultPINAdviceType): void |
| `pINAdviceTypes` | [`?(PINAdviceTypes[])`](../../doc/models/pin-advice-types.md) | Optional | - | getPINAdviceTypes(): ?array | setPINAdviceTypes(?array pINAdviceTypes): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |
| `requestId` | `?string` | Optional | API Request id | getRequestId(): ?string | setRequestId(?string requestId): void |
| `pINChangeAllowedByCardholder` | `?bool` | Optional | PIN change allowed for card holder or not. | getPINChangeAllowedByCardholder(): ?bool | setPINChangeAllowedByCardholder(?bool pINChangeAllowedByCardholder): void |
| `pINChangeAllowedFromFleetPIN` | `?bool` | Optional | PIN change allowed from fleetpin or not. | getPINChangeAllowedFromFleetPIN(): ?bool | setPINChangeAllowedFromFleetPIN(?bool pINChangeAllowedFromFleetPIN): void |

## Example (as JSON)

```json
{
  "AccountId": 1227,
  "AccountName": "5.11.3 DE",
  "AccountNumber": "DE00001067",
  "AccountShortName": "5.11.3 DE",
  "AccountTradingName": "5.11.3 DE",
  "Band": "2 - Gold",
  "FullName": "5.11.3 DE",
  "InvoiceCustomerId": 1227,
  "InvoiceCustomerShortName": "5.11.3 DE",
  "MarketingSegmentation": "4 - National/International Fleet/IKA",
  "VATNumber": "PH6578900900",
  "PayerId": 1227,
  "PayerName": "5.11.3 DE",
  "PayerNumber": "DE00001067",
  "Status": "1 - Active",
  "DefaultPINAdviceType": 1,
  "RequestId": "908358e3-03ca-4aef-93b2-37586b859171"
}
```

