
# Feedback Req

## Structure

`FeedbackReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `rating` | `?float` | Optional | Rating of the feedback.<br>**Constraints**: `>= 0` | getRating(): ?float | setRating(?float rating): void |
| `sentiment` | `?bool` | Optional | Sentiment of the feedback. | getSentiment(): ?bool | setSentiment(?bool sentiment): void |
| `reasons` | `?(string[])` | Optional | Reasons of the feedback.<br>**Constraints**: *Minimum Items*: `1` | getReasons(): ?array | setReasons(?array reasons): void |
| `suggestion` | `?string` | Optional | Suggestion of the feedback. | getSuggestion(): ?string | setSuggestion(?string suggestion): void |
| `page` | `?string` | Optional | Page of the feedback. | getPage(): ?string | setPage(?string page): void |
| `category` | `?string` | Optional | Category of the feedback. | getCategory(): ?string | setCategory(?string category): void |
| `apiOperationId` | `?string` | Optional | operationId of the API. | getApiOperationId(): ?string | setApiOperationId(?string apiOperationId): void |
| `tags` | `?(string[])` | Optional | Any list of tags to group feedbacks by. | getTags(): ?array | setTags(?array tags): void |
| `userId` | `?string` | Optional | Unique identifier of the user. | getUserId(): ?string | setUserId(?string userId): void |

## Example (as JSON)

```json
{
  "rating": null,
  "sentiment": null,
  "reasons": null,
  "suggestion": null,
  "page": null,
  "category": null,
  "apiOperationId": null,
  "tags": null,
  "userId": null
}
```

