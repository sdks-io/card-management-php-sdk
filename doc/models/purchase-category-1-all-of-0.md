
# Purchase Category 1 All of 0

## Structure

`PurchaseCategory1AllOf0`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Required | Purchase category ID | getId(): ?int | setId(?int id): void |
| `code` | `?string` | Required | Purchase category code | getCode(): ?string | setCode(?string code): void |
| `name` | `?string` | Required | Name of Purchase category .<br>**Constraints**: *Maximum Length*: `30` | getName(): ?string | setName(?string name): void |
| `isVisible` | `bool` | Required | PurchaseCategory can be used while submitting new order cards requests if true else will not be used for ordering cards. | getIsVisible(): bool | setIsVisible(bool isVisible): void |
| `productGroups` | [`ProductGroup[]`](../../doc/models/product-group.md) | Required | List of product sets<br>**Constraints**: *Unique Items Required* | getProductGroups(): array | setProductGroups(array productGroups): void |
| `title` | `?string` | Optional | Purchase category Title by given language code.<br><br>1. Basic<br>2. Essentials<br>3. Extra<br>4. Premium<br>5. Basic and LNG<br>6. Essentials and LNG<br>7. Extra and LNG<br>8. Premium and LNG<br>   Note: Purchase Category name (GFN) is returned when Title does not exist for the given language Code and default language code (en-GB). | getTitle(): ?string | setTitle(?string title): void |
| `description` | `?string` | Optional | Purchase category description by given language code.<br>Example:<br>0 - Diesel Products and TMF<br>1 - All Fuel Products and TMF<br>2 - All Fuels Products, Car related items and TMF<br>3 - No Restriction<br>0 - Diesel Products + LNG and TMF<br>1 - All Fuel Products + LNG and TMF<br>2 - All Fuels Products + LNG, Car related items and TMF<br>3 - No Restriction + LNG<br>Note: Purchase Category name (GFN) is returned when Title does not exist for the given language Code and default language code (en-GB). | getDescription(): ?string | setDescription(?string description): void |

## Example (as JSON)

```json
{
  "Id": 0,
  "Code": "93",
  "Name": "0 - Diesel Products and TMF",
  "IsVisible": true,
  "ProductGroups": [
    {
      "ReferenceId": 123,
      "ProductGroupId": "7",
      "Name": "Automotive Gas Oil",
      "IsDefault": false,
      "IsFuelType": false
    }
  ],
  "Title": "1.\tBasic",
  "Description": "0 - Diesel Products and TMF"
}
```

