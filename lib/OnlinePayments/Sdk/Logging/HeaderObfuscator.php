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
    protected ValueObfuscator $valueObfuscator;

    /** @var array<string, callable> */
    private array $customRules = [];

    public function __construct()
    {
        $this->valueObfuscator = new ValueObfuscator();
    }

    /**
     * @param array<int|string, string|string[]> $headers
     * @return array<int|string, string|string[]>
     */
    public function obfuscateHeaders(array $headers): array
    {
        foreach ($headers as $headerName => &$headerValue) {
            $headerValue = $this->obfuscateHeaderValue($headerName, $headerValue);
        }
        return $headers;
    }

    /**
     * @param string $key
     * @param string|string[] $value
     * @return string|string[]
     */
    protected function obfuscateHeaderValue(string $key, string|array $value): mixed
    {
        $lowerKey = mb_strtolower($key, 'UTF-8');
        if (isset($this->customRules[$lowerKey])) {
            return $this->replaceHeaderValueWithCustomRule($value, $this->customRules[$lowerKey]);
        }

        return match ($lowerKey) {
            'x-gcs-authentication-token',
            'x-gcs-callerpassword' => $this->valueObfuscator->obfuscateFixedLength(8),
            'authorization',
            'www-authenticate',
            'proxy-authenticate',
            'proxy-authorization' => $this->replaceHeaderValueWithFixedNumberOfCharacters($value, 8),
            default => $value,
        };
    }

    /**
     * @param string|string[] $value
     * @param int $numberOfCharacters
     * @return string|string[]
     */
    protected function replaceHeaderValueWithFixedNumberOfCharacters(string|array $value, int $numberOfCharacters): string|array
    {
        if (is_array($value)) {
            return array_fill(0, count($value), $this->valueObfuscator->obfuscateFixedLength($numberOfCharacters));
        } else {
            return $this->valueObfuscator->obfuscateFixedLength($numberOfCharacters);
        }
    }

    /**
     * @param string|string[] $value
     * @param callable $customRule
     * @return string|string[]
     */
    protected function replaceHeaderValueWithCustomRule(string|array $value, callable $customRule): mixed
    {
        if (is_array($value)) {
            return array_map(fn($v) => $customRule($v, $this->valueObfuscator), $value);
        } else {
            return $customRule($value, $this->valueObfuscator);
        }
    }

    /**
     * @param string $headerName
     * @param callable $customRule Callable accepting the value and a ValueObfuscator, returning the obfuscated value
     */
    public function setCustomRule(string $headerName, callable $customRule): void
    {
        $lowerName = mb_strtolower($headerName, 'UTF-8');
        $this->customRules[$lowerName] = $customRule;
    }
}
