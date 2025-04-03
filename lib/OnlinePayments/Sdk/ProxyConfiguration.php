<?php
namespace OnlinePayments\Sdk;

/**
 * Class ProxyConfiguration
 *
 * @package OnlinePayments\Sdk
 */
class ProxyConfiguration
{
    /**
     * @var string|null
     */
    private $host = null;
    /**
     * @var string|int|null
     */
    private $port = null;
    /**
     * @var string|null
     */
    private $username = null;
    /**
     * @var string|null
     */
    private $password = null;

    /**
     * @param string $host
     * @param string|int|null $port
     * @param string|null $username
     * @param string|null $password
     */
    public function __construct($host, $port = null, $username = null, $password = null)
    {
        if ($host) {
            $this->host = $host;
            $this->port = $port;
            $this->username = $username;
            $this->password = $password;
        }
    }

    /**
     * @return string
     */
    public function getCurlProxy()
    {
        if (!is_null($this->host)) {
            return $this->host . (is_null($this->port) ? '' : ':'. $this->port);
        }
        return '';
    }

    /**
     * @return string
     */
    public function getCurlProxyUserPwd()
    {
        if (!is_null($this->username)) {
            return $this->username . (is_null($this->password) ? '' : ':'. $this->password);
        }
        return '';
    }
}
