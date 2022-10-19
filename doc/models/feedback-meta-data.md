
# Feedback Meta Data

Feedback object.

## Structure

`FeedbackMetaData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Unique identifier of the feedback. | getId(): string | setId(string id): void |
| `createdAt` | `\DateTime` | Required | Date of the feedback creation. | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |
| `updatedAt` | `?\DateTime` | Optional | Date of the feedback update. | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `userIP` | `string` | Required | IP address of the user. | getUserIP(): string | setUserIP(string userIP): void |
| `userAgent` | `string` | Required | User agent of the device. | getUserAgent(): string | setUserAgent(string userAgent): void |

## Example (as JSON)

```json
{
  "id": "c73bcdcc-2669-4bf6-81d3-e4ae73fb11fd",
  "createdAt": "01/01/2020 00:00:00",
  "userIP": "91.201.190.10",
  "userAgent": "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36"
}
```

