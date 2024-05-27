
# Basic Authentication



Documentation for accessing and setting credentials for BasicAuth.

## Auth Credentials

| Name | Type | Description | Setter | Getter |
|  --- | --- | --- | --- | --- |
| Username | `string` | The username to use with basic authentication | `username` | `getUsername()` |
| Password | `string` | The password to use with basic authentication | `password` | `getPassword()` |



**Note:** Auth credentials can be set using `BasicAuthCredentialsBuilder::init()` in `basicAuthCredentials` method in the client builder and accessed through `getBasicAuthCredentials` method in the client instance.

## Usage Example

### Client Initialization

You must provide credentials in the client as shown in the following code snippet.

```php
$client = ShellCardManagementAPIsClientBuilder::init()
    ->basicAuthCredentials(
        BasicAuthCredentialsBuilder::init(
            'Username',
            'Password'
        )
    )
    ->build();
```


