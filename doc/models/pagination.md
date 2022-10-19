
# Pagination

Pagination object.

## Structure

`Pagination`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `page` | `?int` | Optional | Current page. | getPage(): ?int | setPage(?int page): void |
| `perPage` | `?int` | Optional | Number of items per page. | getPerPage(): ?int | setPerPage(?int perPage): void |
| `total` | `?int` | Optional | Total number of items. | getTotal(): ?int | setTotal(?int total): void |

## Example (as JSON)

```json
{
  "page": null,
  "perPage": null,
  "total": null
}
```

