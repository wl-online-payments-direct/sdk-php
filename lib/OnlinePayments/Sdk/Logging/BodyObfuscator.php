<?php

namespace OnlinePayments\Sdk\Logging;

use JsonException;
use UnexpectedValueException;

/**
 * Class BodyObfuscator
 *
 * @package OnlinePayments\Sdk\Logging
 */
class BodyObfuscator
{
    public const MIME_APPLICATION_JSON = 'application/json';
    public const MIME_APPLICATION_PROBLEM_JSON = 'application/problem+json';

    /** @var ValueObfuscator */
    protected ValueObfuscator $valueObfuscator;

    /** @var array<string, callable> */
    private array $customRules = [];

    public function __construct()
    {
        $this->valueObfuscator = new ValueObfuscator();
    }

    /**
     * @param string $contentType
     * @param string $body
     * @return string
     */
    public function obfuscateBody(string $contentType, string $body): string
    {
        if (!$this->isJsonContentType($contentType)) {
            return $body;
        }
        try {
            $decodedJsonBody = json_decode($body, false, 512, JSON_BIGINT_AS_STRING | JSON_THROW_ON_ERROR);
        } catch (JsonException) {
            return $body;
        }
        try {
            return json_encode(
                $this->obfuscateDecodedJsonPart($decodedJsonBody),
                JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR,
            );
        } catch (JsonException $e) {
            return '<the body could not be obfuscated: ' . $e->getMessage() . '>';
        }
    }

    /**
     * @param string $contentType
     * @return bool
     */
    private function isJsonContentType(string $contentType): bool
    {
        return str_starts_with($contentType, static::MIME_APPLICATION_JSON)
            || str_starts_with($contentType, static::MIME_APPLICATION_PROBLEM_JSON);
    }

    /**
     * @param mixed $value
     * @return mixed
     */
    protected function obfuscateDecodedJsonPart(mixed $value): mixed
    {
        if (is_object($value)) {
            foreach ($value as $propertyName => $propertyValue) {
                if (is_scalar($propertyValue)) {
                    $value->$propertyName = $this->obfuscateScalarValue($propertyName, $propertyValue);
                } else {
                    $value->$propertyName = $this->obfuscateDecodedJsonPart($propertyValue);
                }
            }
        }
        if (is_array($value)) {
            foreach ($value as $elementKey => &$elementValue) {
                if (is_scalar($elementValue)) {
                    $elementValue = $this->obfuscateScalarValue($elementKey, $elementValue);
                } else {
                    $elementValue = $this->obfuscateDecodedJsonPart($elementValue);
                }
            }
        }
        return $value;
    }

    /**
     * Returns the obfuscated value if the key has an obfuscation rule, or the value unchanged otherwise.
     *
     * @param string $key
     * @param scalar $value
     * @return string|int|float|bool
     */
    protected function obfuscateScalarValue(string $key, mixed $value): mixed
    {
        if (!is_scalar($value)) {
            throw new UnexpectedValueException('scalar value expected');
        }
        $lowerKey = mb_strtolower($key, 'UTF-8');
        if (isset($this->customRules[$lowerKey])) {
            return ($this->customRules[$lowerKey])($value, $this->valueObfuscator);
        }

        return match ($lowerKey) {
            'additionalinfo',
            'cardholdername',
            'dateofbirth',
            'emailaddress',
            'faxnumber',
            'firstname',
            'housenumber',
            'mobilephonenumber',
            'passengername',
            'phonenumber',
            'street',
            'workphonenumber',
            'zip',
            'cvv',
            'value' => $this->valueObfuscator->obfuscateAll($value),
            'keyid',
            'secretkey',
            'publickey',
            'userauthenticationtoken',
            'encryptedpayload',
            'decryptedpayload',
            'encryptedcustomerinput' => $this->valueObfuscator->obfuscateFixedLength(8),
            'bin' => $this->valueObfuscator->obfuscateAllKeepStart($value, 6),
            'accountnumber',
            'cardnumber',
            'iban',
            'reformattedaccountnumber' => $this->valueObfuscator->obfuscateAllKeepEnd($value, 4),
            'expirydate' => $this->valueObfuscator->obfuscateAllKeepEnd($value, 2),
            default => $value,
        };
    }

    /**
     * @param string $propertyName
     * @param callable $customRule Callable accepting the value and a ValueObfuscator, returning the obfuscated value
     */
    public function setCustomRule(string $propertyName, callable $customRule): void
    {
        $lowerName = mb_strtolower($propertyName, 'UTF-8');
        $this->customRules[$lowerName] = $customRule;
    }
}
