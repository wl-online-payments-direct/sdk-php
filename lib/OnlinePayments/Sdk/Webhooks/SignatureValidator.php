<?php

namespace OnlinePayments\Sdk\Webhooks;

/**
 * Class SignatureValidator
 *
 * @package OnlinePayments\Sdk\Webhooks
 */
class SignatureValidator
{
    /**
     * @param SecretKeyStore $secretKeyStore
     */
    public function __construct(private readonly SecretKeyStore $secretKeyStore) {}

    /**
     * Validates the given body using the given request headers.
     *
     * @param string $body
     * @param array<string, mixed> $requestHeaders
     * @throws SignatureValidationException
     */
    public function validate(string $body, array $requestHeaders): void
    {
        $this->validateBody($body, $requestHeaders);
    }

    // utility methods

    /**
     * @param string $body
     * @param array<string, mixed> $requestHeaders
     * @throws SignatureValidationException
     */
    private function validateBody(string $body, array $requestHeaders): void
    {
        $signature = $this->getHeaderValue($requestHeaders, 'X-GCS-Signature');
        $keyId = $this->getHeaderValue($requestHeaders, 'X-GCS-KeyId');
        $secretKey = $this->secretKeyStore->getSecretKey($keyId);

        $expectedSignature = base64_encode(hash_hmac('sha256', $body, $secretKey, true));

        $isValid = hash_equals($expectedSignature, $signature);
        if (!$isValid) {
            throw new SignatureValidationException("failed to validate signature '$signature'");
        }
    }

    // general utility methods

    /**
     * Returns the value of the header with the given name (case-insensitive).
     *
     * @param array<string, mixed> $requestHeaders
     * @param string $headerName
     * @return string
     * @throws SignatureValidationException
     */
    private function getHeaderValue(array $requestHeaders, string $headerName): string
    {
        $lowerCaseHeaderName = strtolower($headerName);
        $values = [];
        foreach ($requestHeaders as $name => $value) {
            if ($lowerCaseHeaderName === strtolower($name)) {
                array_push($values, ...(is_array($value) ? array_values($value) : [$value]));
            }
        }
        if ($values === []) {
            throw new SignatureValidationException("could not find header '$headerName'");
        }
        if (count($values) > 1) {
            throw new SignatureValidationException("encountered multiple occurrences of header '$headerName'");
        }
        return (string) $values[0];
    }
}
