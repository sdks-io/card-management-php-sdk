<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib;

use Core\ClientBuilder;
use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Authentication\BasicAuthCredentials;
use ShellCardManagementAPIsLib\Authentication\BasicAuthCredentialsBuilder;
use ShellCardManagementAPIsLib\Authentication\BasicAuthManager;
use ShellCardManagementAPIsLib\Authentication\BearerTokenCredentials;
use ShellCardManagementAPIsLib\Authentication\BearerTokenCredentialsBuilder;
use ShellCardManagementAPIsLib\Authentication\BearerTokenManager;
use ShellCardManagementAPIsLib\Controllers\CardController;
use ShellCardManagementAPIsLib\Controllers\CustomerController;
use ShellCardManagementAPIsLib\Controllers\OAuthAuthorizationController;
use ShellCardManagementAPIsLib\Controllers\RestrictionController;
use ShellCardManagementAPIsLib\Utils\CompatibilityConverter;
use Unirest\Configuration;
use Unirest\HttpClient;

class ShellCardManagementAPIsClient implements ConfigurationInterface
{
    private $customer;

    private $restriction;

    private $card;

    private $oAuthAuthorization;

    private $basicAuthManager;

    private $bearerTokenManager;

    private $config;

    private $client;

    /**
     * @see ShellCardManagementAPIsClientBuilder::init()
     * @see ShellCardManagementAPIsClientBuilder::build()
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = array_merge(ConfigurationDefaults::_ALL, CoreHelper::clone($config));
        $this->basicAuthManager = new BasicAuthManager($this->config);
        $this->bearerTokenManager = new BearerTokenManager($this->config);
        $this->client = ClientBuilder::init(new HttpClient(Configuration::init($this)))
            ->converter(new CompatibilityConverter())
            ->jsonHelper(ApiHelper::getJsonHelper())
            ->apiCallback($this->config['httpCallback'] ?? null)
            ->userAgent('APIMATIC 3.0')
            ->serverUrls(self::ENVIRONMENT_MAP[$this->getEnvironment()], Server::SHELL)
            ->authManagers(['BasicAuth' => $this->basicAuthManager, 'BearerToken' => $this->bearerTokenManager])
            ->build();
        $this->bearerTokenManager->setClient($this->client);
    }

    /**
     * Create a builder with the current client's configurations.
     *
     * @return ShellCardManagementAPIsClientBuilder ShellCardManagementAPIsClientBuilder instance
     */
    public function toBuilder(): ShellCardManagementAPIsClientBuilder
    {
        $builder = ShellCardManagementAPIsClientBuilder::init()
            ->timeout($this->getTimeout())
            ->enableRetries($this->shouldEnableRetries())
            ->numberOfRetries($this->getNumberOfRetries())
            ->retryInterval($this->getRetryInterval())
            ->backOffFactor($this->getBackOffFactor())
            ->maximumRetryWaitTime($this->getMaximumRetryWaitTime())
            ->retryOnTimeout($this->shouldRetryOnTimeout())
            ->httpStatusCodesToRetry($this->getHttpStatusCodesToRetry())
            ->httpMethodsToRetry($this->getHttpMethodsToRetry())
            ->environment($this->getEnvironment())
            ->httpCallback($this->config['httpCallback'] ?? null);

        $basicAuth = $this->getBasicAuthCredentialsBuilder();
        if ($basicAuth != null) {
            $builder->basicAuthCredentials($basicAuth);
        }

        $bearerToken = $this->getBearerTokenCredentialsBuilder();
        if ($bearerToken != null) {
            $builder->bearerTokenCredentials($bearerToken);
        }
        return $builder;
    }

    public function getTimeout(): int
    {
        return $this->config['timeout'] ?? ConfigurationDefaults::TIMEOUT;
    }

    public function shouldEnableRetries(): bool
    {
        return $this->config['enableRetries'] ?? ConfigurationDefaults::ENABLE_RETRIES;
    }

    public function getNumberOfRetries(): int
    {
        return $this->config['numberOfRetries'] ?? ConfigurationDefaults::NUMBER_OF_RETRIES;
    }

    public function getRetryInterval(): float
    {
        return $this->config['retryInterval'] ?? ConfigurationDefaults::RETRY_INTERVAL;
    }

    public function getBackOffFactor(): float
    {
        return $this->config['backOffFactor'] ?? ConfigurationDefaults::BACK_OFF_FACTOR;
    }

    public function getMaximumRetryWaitTime(): int
    {
        return $this->config['maximumRetryWaitTime'] ?? ConfigurationDefaults::MAXIMUM_RETRY_WAIT_TIME;
    }

    public function shouldRetryOnTimeout(): bool
    {
        return $this->config['retryOnTimeout'] ?? ConfigurationDefaults::RETRY_ON_TIMEOUT;
    }

    public function getHttpStatusCodesToRetry(): array
    {
        return $this->config['httpStatusCodesToRetry'] ?? ConfigurationDefaults::HTTP_STATUS_CODES_TO_RETRY;
    }

    public function getHttpMethodsToRetry(): array
    {
        return $this->config['httpMethodsToRetry'] ?? ConfigurationDefaults::HTTP_METHODS_TO_RETRY;
    }

    public function getEnvironment(): string
    {
        return $this->config['environment'] ?? ConfigurationDefaults::ENVIRONMENT;
    }

    public function getBasicAuthCredentials(): BasicAuthCredentials
    {
        return $this->basicAuthManager;
    }

    public function getBasicAuthCredentialsBuilder(): ?BasicAuthCredentialsBuilder
    {
        if (empty($this->basicAuthManager->getUsername()) && empty($this->basicAuthManager->getPassword())) {
            return null;
        }
        return BasicAuthCredentialsBuilder::init(
            $this->basicAuthManager->getUsername(),
            $this->basicAuthManager->getPassword()
        );
    }

    public function getBearerTokenCredentials(): BearerTokenCredentials
    {
        return $this->bearerTokenManager;
    }

    public function getBearerTokenCredentialsBuilder(): ?BearerTokenCredentialsBuilder
    {
        if (
            empty($this->bearerTokenManager->getOAuthClientId()) &&
            empty($this->bearerTokenManager->getOAuthClientSecret())
        ) {
            return null;
        }
        return BearerTokenCredentialsBuilder::init(
            $this->bearerTokenManager->getOAuthClientId(),
            $this->bearerTokenManager->getOAuthClientSecret()
        )->oAuthToken($this->bearerTokenManager->getOAuthToken());
    }

    /**
     * Get the client configuration as an associative array
     *
     * @see ShellCardManagementAPIsClientBuilder::getConfiguration()
     */
    public function getConfiguration(): array
    {
        return $this->toBuilder()->getConfiguration();
    }

    /**
     * Clone this client and override given configuration options
     *
     * @see ShellCardManagementAPIsClientBuilder::build()
     */
    public function withConfiguration(array $config): self
    {
        return new self(array_merge($this->config, $config));
    }

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::SHELL): string
    {
        return $this->client->getGlobalRequest($server)->getQueryUrl();
    }

    /**
     * Returns Customer Controller
     */
    public function getCustomerController(): CustomerController
    {
        if ($this->customer == null) {
            $this->customer = new CustomerController($this->client);
        }
        return $this->customer;
    }

    /**
     * Returns Restriction Controller
     */
    public function getRestrictionController(): RestrictionController
    {
        if ($this->restriction == null) {
            $this->restriction = new RestrictionController($this->client);
        }
        return $this->restriction;
    }

    /**
     * Returns Card Controller
     */
    public function getCardController(): CardController
    {
        if ($this->card == null) {
            $this->card = new CardController($this->client);
        }
        return $this->card;
    }

    /**
     * Returns O Auth Authorization Controller
     */
    public function getOAuthAuthorizationController(): OAuthAuthorizationController
    {
        if ($this->oAuthAuthorization == null) {
            $this->oAuthAuthorization = new OAuthAuthorizationController($this->client);
        }
        return $this->oAuthAuthorization;
    }

    /**
     * A map of all base urls used in different environments and servers
     *
     * @var array
     */
    private const ENVIRONMENT_MAP = [
        Environment::SIT => [
            Server::OAUTH_SERVER => 'https://api-test.shell.com',
            Server::SHELL => 'https://api-test.shell.com/test'
        ],
        Environment::PRODUCTION => [
            Server::OAUTH_SERVER => 'https://api.shell.com',
            Server::SHELL => 'https://api.shell.com'
        ]
    ];
}
