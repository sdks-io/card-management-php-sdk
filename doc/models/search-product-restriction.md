
# Search Product Restriction

## Structure

`SearchProductRestriction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `products` | [`?(RestrictionProduct[])`](../../doc/models/restriction-product.md) | Optional | - | getProducts(): ?array | setProducts(?array products): void |
| `productGroups` | [`?(ProductGroup[])`](../../doc/models/product-group.md) | Optional | - | getProductGroups(): ?array | setProductGroups(?array productGroups): void |

## Example (as JSON)

```json
{
  "Products": [
    {
      "GlobalProductCode": "GlobalProductCode6",
      "Description": "Description8"
    },
    {
      "GlobalProductCode": "GlobalProductCode6",
      "Description": "Description8"
    }
  ],
  "ProductGroups": [
    {
      "ReferenceId": 82,
      "ProductGroupId": "ProductGroupId6",
      "Name": "Name0",
      "IsDefault": false,
      "IsFuelType": false
    }
  ]
}
```

