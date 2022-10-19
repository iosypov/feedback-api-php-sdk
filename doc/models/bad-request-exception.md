
# Bad Request Exception

## Structure

`BadRequestException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `message` | `string` | Required, Constant | **Default**: `'Bad Request'` | getMessage(): string | setMessage(string message): void |
| `data` | [`?Data`](../../doc/models/data.md) | Optional | - | getData(): ?Data | setData(?Data data): void |

## Example (as JSON)

```json
{
  "message": "Bad Request"
}
```

