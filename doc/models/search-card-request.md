
# Search Card Request

## Structure

`SearchCardRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?SearchRequest`](../../doc/models/search-request.md) | Optional | Encapsulate the Search details request. | getFilters(): ?SearchRequest | setFilters(?SearchRequest filters): void |
| `pageSize` | `?string` | Optional | Page Size – Number of records to show on a page<br>Optional<br>Default value 50 | getPageSize(): ?string | setPageSize(?string pageSize): void |
| `page` | `?string` | Optional | Page Number | getPage(): ?string | setPage(?string page): void |

## Example (as JSON)

```json
{
  "PageSize": "1",
  "Page": "1",
  "Filters": {
    "AccountId": 108,
    "AccountNumber": "AccountNumber2",
    "CardGroupId": 154,
    "CardGroupName": "CardGroupName4",
    "CardSegment": "CardSegment4",
    "CardStatus": [
      "CardStatus7",
      "CardStatus8"
    ]
  }
}
```

