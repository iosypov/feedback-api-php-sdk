
# Feedback Data

Feedback object.

## Structure

`FeedbackData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `rating` | `?float` | Optional | Rating of the feedback.<br>**Constraints**: `>= 0` | getRating(): ?float | setRating(?float rating): void |
| `sentiment` | `?bool` | Optional | Sentiment of the feedback. | getSentiment(): ?bool | setSentiment(?bool sentiment): void |
| `reasons` | `?(string[])` | Optional | Reasons of the feedback.<br>**Constraints**: *Minimum Items*: `1` | getReasons(): ?array | setReasons(?array reasons): void |
| `suggestion` | `?string` | Optional | Suggestion of the feedback. | getSuggestion(): ?string | setSuggestion(?string suggestion): void |

## Example (as JSON)

```json
{
  "rating": null,
  "sentiment": null,
  "reasons": null,
  "suggestion": null
}
```

