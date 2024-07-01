
# Bundled Details Product List

## Structure

`BundledDetailsProductList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `purchaseCategoryId` | `?int` | Optional | Purchase category Id<br>Example: 123, 124, etc., | getPurchaseCategoryId(): ?int | setPurchaseCategoryId(?int purchaseCategoryId): void |
| `purchaseCategoryCode` | `?string` | Optional | Purchase category name.<br>Example:<br>0 - All Fuels (without VP) and Lubricants<br>1 - FuelSave only<br>2 - FuelSave and Lubricants<br>3 - No Restrictions | getPurchaseCategoryCode(): ?string | setPurchaseCategoryCode(?string purchaseCategoryCode): void |
| `products` | `?(string[])` | Optional | An array of 3-digit global product codes.<br>Example: [ "033", "021", "023" ] | getProducts(): ?array | setProducts(?array products): void |
| `productGroups` | `?(string[])` | Optional | An array of product group ids.<br>Example: [ "670246404", "40557126" ] | getProductGroups(): ?array | setProductGroups(?array productGroups): void |
| `fuelSetId` | `?string` | Optional | Fuel set id that is allowed to be purchased with the card | getFuelSetId(): ?string | setFuelSetId(?string fuelSetId): void |
| `fuelSetName` | `?string` | Optional | Fuel set name that is allowed to be purchased with the card | getFuelSetName(): ?string | setFuelSetName(?string fuelSetName): void |
| `nonFuelSets` | `?string` | Optional | Non-Fuel set name that is allowed to be purchased with the card | getNonFuelSets(): ?string | setNonFuelSets(?string nonFuelSets): void |

## Example (as JSON)

```json
{
  "PurchaseCategoryId": 162,
  "PurchaseCategoryCode": "PurchaseCategoryCode6",
  "Products": [
    "Products2",
    "Products3",
    "Products4"
  ],
  "ProductGroups": [
    "ProductGroups5",
    "ProductGroups6",
    "ProductGroups7"
  ],
  "FuelSetId": "FuelSetId8"
}
```

