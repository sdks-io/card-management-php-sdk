
# Error Object Error Exception

## Structure

`ErrorObjectErrorException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique request identifier passed from end user. This identifier helps in tracing a transaction | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Indicates overall status of the request. Allowed values: SUCCES, FAILED, PARTIAL_SUCCESS | getStatus(): ?string | setStatus(?string status): void |
| `errors` | [`?(ErrorDetails[])`](../../doc/models/error-details.md) | Optional | - | getErrors(): ?array | setErrors(?array errors): void |

## Example

```php
try {
    // make the API call
} catch (ErrorObjectErrorException $exp) {
    echo 'Caught ErrorObjectErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

