# Credentials

```php
$credentialsController = $client->getCredentialsController();
```

## Class Name

`CredentialsController`

## Methods

* [Create Credentials](../../doc/controllers/credentials.md#create-credentials)
* [Rotate Credentials](../../doc/controllers/credentials.md#rotate-credentials)
* [Delete Credentials](../../doc/controllers/credentials.md#delete-credentials)


# Create Credentials

### Start here by creating your credentials

Be careful to save the private key that is returned. You will not be able to retrieve it again.
You can only have one private key at a time.
Private key is not to be shared with anyone, do not expose it in your frontend code.

```php
function createCredentials(): Credentials
```

## Response Type

[`Credentials`](../../doc/models/credentials.md)

## Example Usage

```php
$result = $credentialsController->createCredentials();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 429 | Too Many Requests | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |
| 500 | Internal Server Error | [`InternalServerErrorException`](../../doc/models/internal-server-error-exception.md) |


# Rotate Credentials

### Rotate credentials

Generate a new private key and invalidate the current one.
Use this in case your private key is compromised or for security reasons.

```php
function rotateCredentials(string $xAPIKEY): Credentials
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xAPIKEY` | `string` | Header, Required | Private key. Create a tenant to generate. |

## Response Type

[`Credentials`](../../doc/models/credentials.md)

## Example Usage

```php
$xAPIKEY = 'X-API-KEY2';

$result = $credentialsController->rotateCredentials($xAPIKEY);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 429 | Too Many Requests | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |
| 500 | Internal Server Error | [`InternalServerErrorException`](../../doc/models/internal-server-error-exception.md) |


# Delete Credentials

### Delete credentials

Invalidate your current private key.
You will no longer be able to create or read feedback.

```php
function deleteCredentials(string $xAPIKEY): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xAPIKEY` | `string` | Header, Required | Private key. Create a tenant to generate. |

## Response Type

`void`

## Example Usage

```php
$xAPIKEY = 'X-API-KEY2';

$credentialsController->deleteCredentials($xAPIKEY);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 429 | Too Many Requests | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |
| 500 | Internal Server Error | [`InternalServerErrorException`](../../doc/models/internal-server-error-exception.md) |

