<?php

namespace OnlinePayments\Sdk;

use OnlinePayments\Sdk\Logging\ValueObfuscator;

/**
 * Class ProxyConfiguration
 *
 * @package OnlinePayments\Sdk
 */
class ProxyConfiguration
{
    /** @var string|null */
    private readonly ?string $host;

    /** @var string|int|null */
    private readonly string|int|null $port;

    /** @var string|null */
    private readonly ?string $username;

    /** @var string|null */
    private readonly ?string $password;

    /**
     * @param string $host
     * @param string|int|null $port
     * @param string|null $username
     * @param string|null $password
     */
    public function __construct(string $host, string|int|null $port = null, ?string $username = null, #[\SensitiveParameter] ?string $password = null)
    {
        if ($host) {
            $this->host = $host;
            $this->port = $port;
            $this->username = $username;
            $this->password = $password;
        } else {
            $this->host = null;
            $this->port = null;
            $this->username = null;
            $this->password = null;
        }
    }

    /**
     * @return string
     */
    public function getCurlProxy(): string
    {
        if ($this->host !== null) {
            return $this->host . ($this->port === null ? '' : ':' . $this->port);
        }
        return '';
    }

    /**
     * @return string
     */
    public function getCurlProxyUserPwd(): string
    {
        if ($this->username !== null) {
            return $this->username . ($this->password === null ? '' : ':' . $this->password);
        }
        return '';
    }

    /**
     * Returns the properties for var_dump and print_r, with the password masked.
     *
     * @return array<string, mixed>
     */
    public function __debugInfo(): array
    {
        return [
            'host' => $this->host,
            'port' => $this->port,
            'username' => $this->username,
            'password' => $this->password === null ? null : (new ValueObfuscator())->obfuscateFixedLength(8),
        ];
    }
}
