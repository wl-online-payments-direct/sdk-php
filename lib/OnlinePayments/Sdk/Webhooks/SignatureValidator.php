<?php
namespace OnlinePayments\Sdk\Webhooks;

/**
 * Class SignatureValidator
 *
 * @package OnlinePayments\Sdk\Webhooks
 */
class SignatureValidator
{
    /** @var SecretKeyStore */
    private $secretKeyStore;

    /**
     * @param SecretKeyStore $secretKeyStore
     */
    public function __construct(SecretKeyStore $secretKeyStore)
    {
        $this->secretKeyStore = $secretKeyStore;
    }

    /**
     * Validates the given body using the given request headers.
     * @param string $body
     * @param array $requestHeaders
     * @throws SignatureValidationException
     */
    public function validate($body, $requestHeaders)
    {
        $this->validateBody($body, $requestHeaders);
    }

    // utility methods

    private function validateBody($body, $requestHeaders)
    {
        $signature = $this->getHeaderValue($requestHeaders, 'X-GCS-Signature');
        $keyId = $this->getHeaderValue($requestHeaders, 'X-GCS-KeyId');
        $secretKey = $this->secretKeyStore->getSecretKey($keyId);

        $expectedSignature = base64_encode(hash_hmac("sha256", $body, $secretKey, true));

        $isValid = hash_equals($signature, $expectedSignature);
        if (!$isValid) {
            throw new SignatureValidationException("failed to validate signature '$signature'");
        }
    }

    // general utility methods

    private function getHeaderValue($requestHeaders, $headerName) {
        $lowerCaseHeaderName = strtolower($headerName);
        foreach ($requestHeaders as $name => $value) {
            if ($lowerCaseHeaderName === strtolower($name)) {
                return $value;
            }
        }
        throw new SignatureValidationException("could not find header '$headerName'");
    }
}
