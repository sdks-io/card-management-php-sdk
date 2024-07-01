
# Product Restriction Card

## Structure

`ProductRestrictionCard`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `products` | `?(string[])` | Optional | An array of 3-digit global product codes.<br>Optional.<br>Example: [ "033", "021", "023”] | getProducts(): ?array | setProducts(?array products): void |
| `productGroups` | `?(string[])` | Optional | An array of product group IDs.<br>Optional.<br>Example: [ "670246404", "40557126" ] | getProductGroups(): ?array | setProductGroups(?array productGroups): void |

## Example (as JSON)

```json
{
  "Products": [
    "Products2"
  ],
  "ProductGroups": [
    "ProductGroups9",
    "ProductGroups0"
  ]
}
```

