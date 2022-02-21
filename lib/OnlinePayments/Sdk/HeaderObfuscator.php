<?php

namespace OnlinePayments\Sdk;

/**
 * Class HeaderObfuscator
 *
 * @package OnlinePayments\Sdk
 */
class HeaderObfuscator
{
    /** @var ValueObfuscator */
    protected $obfuscator;

    public function __construct()
    {
        $this->obfuscator = new SensitiveValueObfuscator();
    }

    /**
     * @param string[] $headers
     * @return string[]
     */
    public function obfuscateHeaders(array $headers)
    {
        foreach ($headers as $headerName => &$headerValue) {
            $headerValue = $this->obfuscateHeaderValue($headerName, $headerValue);
        }
        return $headers;
    }

    /**
     * @param $key
     * @param $value
     * @return string
     */
    protected function obfuscateHeaderValue($key, $value)
    {
        switch (mb_strtolower(strval($key), 'UTF-8')) {
            case 'authorization':
            case 'www-authenticate':
            case 'proxy-authenticate':
            case 'proxy-authorization':
            case 'x-gcs-authentication-token':
            case 'x-gcs-callerpassword':
                return $this->obfuscator->obfuscate($value);
            default:
                return $value;
        }
    }
}
