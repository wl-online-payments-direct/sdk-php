<?php
namespace OnlinePayments\Sdk\Logging;

/**
 * Class HeaderObfuscator
 *
 * @package OnlinePayments\Sdk\Logging
 */
class HeaderObfuscator
{
    /** @var ValueObfuscator */
    protected $valueObfuscator;

    /** @var array<string, callable> */
    private $customRules = array();

    public function __construct()
    {
        $this->valueObfuscator = new ValueObfuscator();
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
     * @param string $key
     * @param array|string $value
     * @return array|string
     */
    protected function obfuscateHeaderValue($key, $value)
    {
        $lowerKey = mb_strtolower(strval($key), 'UTF-8');
        if (isset($this->customRules[$lowerKey])) {
            return $this->replaceHeaderValueWithCustomRule($value, $this->customRules[$lowerKey]);
        }

        switch ($lowerKey) {
            case 'x-gcs-callerpassword':
            case 'x-gcs-authentication-token':
                return $this->valueObfuscator->obfuscateFixedLength(8);
            case 'authorization':
            case 'www-authenticate':
            case 'proxy-authenticate':
            case 'proxy-authorization':
                return $this->replaceHeaderValueWithFixedNumberOfCharacters($value, 8);
            default:
                return $value;
        }
    }

    /**
     * @param array|string $value
     * @param int $numberOfCharacters
     * @return array|string
     */
    protected function replaceHeaderValueWithFixedNumberOfCharacters($value, $numberOfCharacters)
    {
        if (is_array($value)) {
            return array_fill(0, count($value), $this->valueObfuscator->obfuscateFixedLength($numberOfCharacters));
        } else {
            return $this->valueObfuscator->obfuscateFixedLength($numberOfCharacters);
        }
    }

    /**
     * @param array|string $value
     * @param callable $customRule
     * @return array|string
     */
    protected function replaceHeaderValueWithCustomRule($value, callable $customRule)
    {
        if (is_array($value)) {
            return array_map(function ($v) use ($customRule) {
                return call_user_func($customRule, $v, $this->valueObfuscator);
            }, $value);
        } else {
            return call_user_func($customRule, $value, $this->valueObfuscator);
        }
    }

    /**
     * @param string $headerName
     * @param callable $customRule
     */
    public function setCustomRule($headerName, callable $customRule)
    {
        $lowerName = mb_strtolower(strval($headerName), 'UTF-8');
        $this->customRules[$lowerName] = $customRule;
    }
}
