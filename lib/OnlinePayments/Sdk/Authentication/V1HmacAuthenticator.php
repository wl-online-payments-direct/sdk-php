<?php

namespace OnlinePayments\Sdk\Authentication;

use OnlinePayments\Sdk\CommunicatorConfiguration;

class V1HmacAuthenticator implements Authenticator
{
    public const AUTHORIZATION_ID = 'GCS';

    public const AUTHORIZATION_TYPE = 'v1HMAC';

    public const HASH_ALGORITHM = 'sha256';

    /**
     * API Key ID obtained in the merchant portal.
     *
     * @var string
     */
    private readonly string $apiKeyId;

    /**
     * API Secret obtained in the merchant portal.
     *
     * @var string
     */
    private readonly string $apiSecret;

    /**
     * @param CommunicatorConfiguration $communicatorConfiguration
     */
    public function __construct(CommunicatorConfiguration $communicatorConfiguration)
    {
        $this->apiKeyId = $communicatorConfiguration->getApiKeyId();
        $this->apiSecret = $communicatorConfiguration->getApiSecret();
    }

    /**
     * @param string $httpMethod
     * @param string $uriPath
     * @param array<string, string> $requestHeaders
     * @return string
     */
    #[\Override]
    public function getAuthorization(string $httpMethod, string $uriPath, array $requestHeaders = []): string
    {
        return $this->getAuthorizationHeaderValue($httpMethod, $uriPath, $requestHeaders);
    }

    /**
     * Generates authorization header value.
     *
     * @param string $httpMethod
     * @param string $uriPath
     * @param array<string, string> $requestHeaders
     * @return string
     */
    private function getAuthorizationHeaderValue(string $httpMethod, string $uriPath, array $requestHeaders): string
    {
        return static::AUTHORIZATION_ID . ' ' . static::AUTHORIZATION_TYPE . ':' . $this->apiKeyId . ':' . base64_encode(hash_hmac(static::HASH_ALGORITHM, $this->prepareDataForSignature($httpMethod, $uriPath, $requestHeaders), $this->apiSecret, true));
    }

    /**
     * Prepares data to be signed.
     *
     * @param string $httpMethod
     * @param string $uriPath
     * @param array<string, string> $requestHeaders
     * @return string
     */
    private function prepareDataForSignature(string $httpMethod, string $uriPath, array $requestHeaders): string
    {
        $signData = $httpMethod . "\n";

        if (isset($requestHeaders['Content-Type'])) {
            $signData .= $requestHeaders['Content-Type'] . "\n";
        } else {
            $signData .= "\n";
        }

        if (isset($requestHeaders['Date'])) {
            $signData .= $requestHeaders['Date'] . "\n";
        } else {
            $signData .= "\n";
        }

        $gcsHeaders = [];
        foreach ($requestHeaders as $headerKey => $headerValue) {
            if (preg_match('/X-GCS/i', $headerKey)) {
                $gcsHeaders[$headerKey] = $headerValue;
            }
        }

        ksort($gcsHeaders);
        foreach ($gcsHeaders as $gcsHeaderKey => $gcsHeaderValue) {
            $gcsEncodedHeaderValue = trim(preg_replace('/\r?\n\h*/', ' ', $gcsHeaderValue));

            $signData .= strtolower($gcsHeaderKey) . ':' . $gcsEncodedHeaderValue . "\n";
        }

        $signData .= $uriPath . "\n";

        return $signData;
    }
}
