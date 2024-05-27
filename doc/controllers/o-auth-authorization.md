# O Auth Authorization

```php
$oAuthAuthorizationController = $client->getOAuthAuthorizationController();
```

## Class Name

`OAuthAuthorizationController`


# Request Token Bearer Token

Create a new OAuth 2 token.

:information_source: **Note** This endpoint does not require authentication.

```php
function requestTokenBearerToken(
    string $authorization,
    ?string $scope = null,
    array $fieldParameters = null
): OAuthToken
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `authorization` | `string` | Header, Required | Authorization header in Basic auth format |
| `scope` | `?string` | Form, Optional | Requested scopes as a space-delimited list. |
| `fieldParameters` | `?array` | Optional | Pass additional field parameters. |

## Response Type

[`OAuthToken`](../../doc/models/o-auth-token.md)

## Example Usage

```php
$authorization = 'Authorization8';

$additionalFieldParams = [
    'key0' => ApiHelper::deserialize('"additionalFieldParams9"')
];

$result = $oAuthAuthorizationController->requestTokenBearerToken(
    $authorization,
    null,
    $additionalFieldParams
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | OAuth 2 provider returned an error. | [`OAuthProviderException`](../../doc/models/o-auth-provider-exception.md) |
| 401 | OAuth 2 provider says client authentication failed. | [`OAuthProviderException`](../../doc/models/o-auth-provider-exception.md) |

