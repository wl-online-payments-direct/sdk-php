<?php

namespace OnlinePayments\Sdk;

use UnexpectedValueException;

/**
 * Class BodyObfuscator
 *
 * @package OnlinePayments\Sdk
 */
class BodyObfuscator
{
    const MIME_APPLICATION_JSON = 'application/json';

    /** @var  ValueObfuscator */
    protected $valueObfuscator;
    protected $sensitiveValueObfuscator;

    public function __construct()
    {
        $this->valueObfuscator = new ValueObfuscator();
        $this->sensitiveValueObfuscator = new SensitiveValueObfuscator();
    }

    /**
     * @param string $contentType
     * @param string $body
     * @return mixed
     */
    public function obfuscateBody($contentType, $body)
    {
        if (!$this->isJsonContentType($contentType)) {
            return $body;
        }
        $decodedJsonBody = json_decode($body);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $body;
        }
        return json_encode($this->obfuscateDecodedJsonPart($decodedJsonBody), JSON_PRETTY_PRINT);
    }

    private function isJsonContentType($contentType)
    {
        return $contentType === static::MIME_APPLICATION_JSON
            || substr($contentType, 0, strlen(static::MIME_APPLICATION_JSON)) === static::MIME_APPLICATION_JSON;
    }

    /**
     * @param $value
     * @return mixed
     */
    protected function obfuscateDecodedJsonPart($value)
    {
        if (is_object($value)) {
            foreach ($value as $propertyName => $propertyValue) {
                if (is_scalar($propertyValue)) {
                    $value->$propertyName = $this->obfuscateScalarValue($propertyName, $propertyValue);
                    continue;
                }
                $value->$propertyName = $this->obfuscateDecodedJsonPart($propertyValue);
            }
        }
        if (is_array($value)) {
            foreach ($value as $elementKey => &$elementValue) {
                if (is_scalar($elementValue)) {
                    $elementValue = $this->obfuscateScalarValue($elementKey, $elementValue);
                    continue;
                }
                $elementValue = $this->obfuscateDecodedJsonPart($elementValue);
            }

        }
        return $value;
    }

    /**
     * @param $key
     * @param $value
     * @return string
     */
    protected function obfuscateScalarValue($key, $value)
    {
        if (!is_scalar($value)) {
            throw new UnexpectedValueException('scalar value expected');
        }
        switch (strval($key)) {
            case 'accountNumber':
            case 'additionalInfo':
            case 'bin':
            case 'cardholderName':
            case 'cardNumber':
            case 'cvv':
            case 'dateOfBirth':
            case 'emailAddress':
            case 'expiryDate':
            case 'faxNumber':
            case 'firstName':
            case 'houseNumber':
            case 'iban':
            case 'mobilePhoneNumber':
            case 'passengerName':
            case 'phoneNumber':
            case 'reformattedAccountNumber':
            case 'street':
            case 'surname':
            case 'value':
            case 'workPhoneNumber':
            case 'zip':
                return $this->valueObfuscator->obfuscate($value);
            case 'decryptedPayload':
            case 'encryptedCustomerInput':
            case 'encryptedPayload':
            case 'keyId':
            case 'publicKey':
            case 'secretKey':
            case 'userAuthenticationToken':
                return $this->sensitiveValueObfuscator->obfuscate($value);
            default:
                return $value;
        }
    }
}
