# Feedback

```php
$feedbackController = $client->getFeedbackController();
```

## Class Name

`FeedbackController`

## Methods

* [Create Feedback](../../doc/controllers/feedback.md#create-feedback)
* [Get Feedback](../../doc/controllers/feedback.md#get-feedback)
* [Get Feedback by Id](../../doc/controllers/feedback.md#get-feedback-by-id)
* [Update Feedback by Id](../../doc/controllers/feedback.md#update-feedback-by-id)


# Create Feedback

### Create a new feedback

You can explore sample payloads below.
Every feedback must have at least one properties:

- `rating`: numeric value (star rating)
- `sentiment`: boolean value (like/dislike button)
- `reasons`: list of text values (multiple choice questions)
- `suggestion`: text value (free text input)

In addition, you may provide any of context values:

- `userId`: string value (for logged in users, we'll generate one for anonymous users)
- `page`: text value (url of the page where the feedback was given)
- `category`: text value (category of the page where the feedback was given)
- `apiOperationId`: text value (operationId for OpenAPI docs)
- `tags`: list of text values (product name, feature name, etc.)

```php
function createFeedback(FeedbackReq $body): Feedback
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`FeedbackReq`](../../doc/models/feedback-req.md) | Body, Required | - |

## Response Type

[`Feedback`](../../doc/models/feedback.md)

## Example Usage

```php
$body = new Models\FeedbackReq();
$body->setRating(4);
$body->setSuggestion('Some screenshots would help');
$body->setPage('https://example.com/docs/tutorial/1');
$body->setUserId('abc-xyz');

$result = $feedbackController->createFeedback($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`BadRequestException`](../../doc/models/bad-request-exception.md) |
| 401 | Unauthorized | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 429 | Too Many Requests | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |
| 500 | Internal Server Error | [`InternalServerErrorException`](../../doc/models/internal-server-error-exception.md) |


# Get Feedback

Get feedback.

```php
function getFeedback(
    string $xAPIKEY,
    ?array $rating = null,
    ?array $sentiment = null,
    ?array $reasons = null,
    ?array $userId = null,
    ?array $userIP = null,
    ?array $page = null,
    ?array $category = null,
    ?array $apiOperationId = null,
    ?array $tags = null,
    ?float $xPAGE = 1,
    ?float $xPERPAGE = 50,
    ?string $xORDER = XORDEREnum::DESC,
    ?string $xORDERBY = XORDERBYEnum::CREATEDAT
): FeedbackResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xAPIKEY` | `string` | Header, Required | Private key. Create a tenant to generate. |
| `rating` | `?(float[])` | Query, Optional | Rating to filter by.<br>**Constraints**: `>= 0` |
| `sentiment` | `?(bool[])` | Query, Optional | Sentiment to filter by. |
| `reasons` | `?(string[])` | Query, Optional | Reasons to filter by. |
| `userId` | `?(string[])` | Query, Optional | User ID to filter by. |
| `userIP` | `?(string[])` | Query, Optional | IP address to filter by. |
| `page` | `?(string[])` | Query, Optional | Page to filter by. |
| `category` | `?(string[])` | Query, Optional | Category to filter by. |
| `apiOperationId` | `?(string[])` | Query, Optional | Operation to filter by. |
| `tags` | `?(string[])` | Query, Optional | Tags to filter by. |
| `xPAGE` | `?float` | Header, Optional | Page number.<br>**Default**: `1` |
| `xPERPAGE` | `?float` | Header, Optional | Items per page.<br>**Default**: `50` |
| `xORDER` | [`?string (XORDEREnum)`](../../doc/models/xorder-enum.md) | Header, Optional | Sort order.<br>**Default**: `XORDEREnum::DESC` |
| `xORDERBY` | [`?string (XORDERBYEnum)`](../../doc/models/xorderby-enum.md) | Header, Optional | Order by.<br>**Default**: `XORDERBYEnum::CREATEDAT` |

## Response Type

[`FeedbackResponse`](../../doc/models/feedback-response.md)

## Example Usage

```php
$xAPIKEY = 'X-API-KEY2';
$xPAGE = 1;
$xPERPAGE = 10;
$xORDER = Models\XORDEREnum::DESC;
$xORDERBY = Models\XORDERBYEnum::CREATEDAT;

$result = $feedbackController->getFeedback($xAPIKEY, null, null, null, null, null, null, null, null, null, $xPAGE, $xPERPAGE, $xORDER, $xORDERBY);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 429 | Too Many Requests | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |
| 500 | Internal Server Error | [`InternalServerErrorException`](../../doc/models/internal-server-error-exception.md) |


# Get Feedback by Id

Get feedback by id.

```php
function getFeedbackById(string $id, string $xAPIKEY): Feedback
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Resource identifier string.<br>**Constraints**: *Pattern*: `^[0-9a-fA-F]{8}\b-[0-9a-fA-F]{4}\b-[0-9a-fA-F]{4}\b-[0-9a-fA-F]{4}\b-[0-9a-fA-F]{12}$` |
| `xAPIKEY` | `string` | Header, Required | Private key. Create a tenant to generate. |

## Response Type

[`Feedback`](../../doc/models/feedback.md)

## Example Usage

```php
$id = 'c73bcdcc-2669-4bf6-81d3-e4ae73fb11fd';
$xAPIKEY = 'X-API-KEY2';

$result = $feedbackController->getFeedbackById($id, $xAPIKEY);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`BadRequestException`](../../doc/models/bad-request-exception.md) |
| 401 | Unauthorized | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 404 | Not found | [`NotFoundException`](../../doc/models/not-found-exception.md) |
| 429 | Too Many Requests | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |
| 500 | Internal Server Error | [`InternalServerErrorException`](../../doc/models/internal-server-error-exception.md) |


# Update Feedback by Id

Update feedback by id.

```php
function updateFeedbackById(string $id, FeedbackReq $body): Feedback
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Resource identifier string.<br>**Constraints**: *Pattern*: `^[0-9a-fA-F]{8}\b-[0-9a-fA-F]{4}\b-[0-9a-fA-F]{4}\b-[0-9a-fA-F]{4}\b-[0-9a-fA-F]{12}$` |
| `body` | [`FeedbackReq`](../../doc/models/feedback-req.md) | Body, Required | - |

## Response Type

[`Feedback`](../../doc/models/feedback.md)

## Example Usage

```php
$id = 'c73bcdcc-2669-4bf6-81d3-e4ae73fb11fd';
$body = new Models\FeedbackReq();
$body->setRating(4);
$body->setUserId('abc-xyz');

$result = $feedbackController->updateFeedbackById($id, $body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`BadRequestException`](../../doc/models/bad-request-exception.md) |
| 401 | Unauthorized | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 404 | Not found | [`NotFoundException`](../../doc/models/not-found-exception.md) |
| 429 | Too Many Requests | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |
| 500 | Internal Server Error | [`InternalServerErrorException`](../../doc/models/internal-server-error-exception.md) |

