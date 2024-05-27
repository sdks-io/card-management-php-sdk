
# Product Group

## Structure

`ProductGroup`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `referenceId` | `?int` | Optional | Referenced Purchase Category Id<br>Example: 123, 124 | getReferenceId(): ?int | setReferenceId(?int referenceId): void |
| `productGroupId` | `?string` | Optional | Product group ID | getProductGroupId(): ?string | setProductGroupId(?string productGroupId): void |
| `name` | `?string` | Optional | Product group name | getName(): ?string | setName(?string name): void |
| `isDefault` | `?bool` | Optional | Indicates whether this is a default Product Group at ColCo level or not.<br>Note: The Customer level default settings are not considered here. | getIsDefault(): ?bool | setIsDefault(?bool isDefault): void |
| `isFuelType` | `?bool` | Optional | Identifies the type of Product group.<br>true - if it is a Fuel type Product group<br>false - if it is Non-Fuel type | getIsFuelType(): ?bool | setIsFuelType(?bool isFuelType): void |
| `products` | [`?(ProductAllOf0[])`](../../doc/models/product-all-of-0.md) | Optional | - | getProducts(): ?array | setProducts(?array products): void |

## Example (as JSON)

```json
{
  "ReferenceId": 123,
  "ProductGroupId": "7",
  "Name": "Automotive Gas Oil",
  "IsDefault": false,
  "IsFuelType": false
}
```

