
# Invoice Distribution Method

## Structure

`InvoiceDistributionMethod`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `isPrimary` | `?bool` | Optional | If True then this distribution method is the default distribution method.<br>**Default**: `true` | getIsPrimary(): ?bool | setIsPrimary(?bool isPrimary): void |
| `frequencyType` | `?string` | Optional | Frequency type unit Id & description<br>E.g.:<br>1- Daily<br>2-Weekly<br>3-Monthly<br>4-Invoicing<br>6-Calendar quarter | getFrequencyType(): ?string | setFrequencyType(?string frequencyType): void |
| `distributionMethod` | `?string` | Optional | Invoice Distribution Method (Id-Description)<br>E.g.:<br>1-e-mail<br>2-Fax<br>3-Courier to Customer<br>4-Courier to Client<br>5-Print<br>6-FTP<br>7-SMS | getDistributionMethod(): ?string | setDistributionMethod(?string distributionMethod): void |
| `outputType` | `?string` | Optional | Invoice output type (Id - Description) | getOutputType(): ?string | setOutputType(?string outputType): void |

## Example (as JSON)

```json
{
  "IsPrimary": true,
  "FrequencyType": "weekly",
  "DistributionMethod": "e-mail",
  "OutputType": "1 - PDF"
}
```

