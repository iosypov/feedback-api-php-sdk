
# Feedback Context

Feedback object.

## Structure

`FeedbackContext`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `page` | `?string` | Optional | Page of the feedback. | getPage(): ?string | setPage(?string page): void |
| `category` | `?string` | Optional | Category of the feedback. | getCategory(): ?string | setCategory(?string category): void |
| `apiOperationId` | `?string` | Optional | operationId of the API. | getApiOperationId(): ?string | setApiOperationId(?string apiOperationId): void |
| `tags` | `?(string[])` | Optional | Any list of tags to group feedbacks by. | getTags(): ?array | setTags(?array tags): void |
| `userId` | `?string` | Optional | Unique identifier of the user. | getUserId(): ?string | setUserId(?string userId): void |

## Example (as JSON)

```json
{
  "page": null,
  "category": null,
  "apiOperationId": null,
  "tags": null,
  "userId": null
}
```

