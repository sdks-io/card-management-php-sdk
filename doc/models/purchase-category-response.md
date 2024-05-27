
# Purchase Category Response

## Structure

`PurchaseCategoryResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `purchaseCategories` | [`?(PurchaseCategory1AllOf0[])`](../../doc/models/purchase-category-1-all-of-0.md) | Optional | - | getPurchaseCategories(): ?array | setPurchaseCategories(?array purchaseCategories): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |

## Example (as JSON)

```json
{
  "PurchaseCategories": [
    {
      "Id": 166,
      "Code": "Code6",
      "Name": "Name4",
      "IsVisible": false,
      "ProductGroups": [
        {
          "ReferenceId": 82,
          "ProductGroupId": "ProductGroupId6",
          "Name": "Name0",
          "IsDefault": false,
          "IsFuelType": false
        }
      ],
      "Title": "Title4",
      "Description": "Description0"
    },
    {
      "Id": 166,
      "Code": "Code6",
      "Name": "Name4",
      "IsVisible": false,
      "ProductGroups": [
        {
          "ReferenceId": 82,
          "ProductGroupId": "ProductGroupId6",
          "Name": "Name0",
          "IsDefault": false,
          "IsFuelType": false
        }
      ],
      "Title": "Title4",
      "Description": "Description0"
    },
    {
      "Id": 166,
      "Code": "Code6",
      "Name": "Name4",
      "IsVisible": false,
      "ProductGroups": [
        {
          "ReferenceId": 82,
          "ProductGroupId": "ProductGroupId6",
          "Name": "Name0",
          "IsDefault": false,
          "IsFuelType": false
        }
      ],
      "Title": "Title4",
      "Description": "Description0"
    }
  ],
  "Error": {
    "Code": "Code4",
    "Description": "Description2"
  }
}
```

