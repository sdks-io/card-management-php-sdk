
# Purchase Category Res

## Structure

`PurchaseCategoryRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(PurchaseCategoryResponse[])`](../../doc/models/purchase-category-response.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "RequestId": "0e6fb42a-51b0-43b2-f010-92f822657f6a",
  "Status": "SUCCESS",
  "Data": [
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
        }
      ]
    },
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
        }
      ]
    },
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
        }
      ]
    }
  ]
}
```

