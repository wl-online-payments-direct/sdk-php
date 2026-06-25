<?php
namespace OnlinePayments\Sdk\Unit\Authentication;

use OnlinePayments\Sdk\Authentication\V1HmacAuthenticator;
use OnlinePayments\Sdk\CommunicatorConfiguration;
use PHPUnit\Framework\TestCase;

/**
 * @group authentication
 */
class V1HmacAuthenticatorTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testAuthorization_DefaultConfiguration_ContainsV1Hmac()
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'secretKey',
            'https://example.com',
            'integrator'
        );

        $authenticator = new V1HmacAuthenticator($configuration);

        $signature = $authenticator->getAuthorization(
            "POST",
            "v2/1/services%20bla/testconnection?aap=noot&mies=geen%20noot"
        );

        $this->assertStringContainsString(
            V1HmacAuthenticator::AUTHORIZATION_TYPE,
            $signature
        );

        $this->assertStringStartsWith(
            V1HmacAuthenticator::AUTHORIZATION_ID . ' ' .
            V1HmacAuthenticator::AUTHORIZATION_TYPE . ':',
            $signature
        );
    }

    /**
     * @throws \Exception
     */
    public function testHeader_CanonicalizeWithWhitespaceAndNewlines_ReturnsNormalizedValue()
    {
        $configuration = $this->getCommunicatorConfiguration();
        $configuration->setApiKeyId('apiKeyId');
        $configuration->setApiSecret('secretApiKey');
        $authenticator = new V1HmacAuthenticator($configuration);

        $headersWithWhitespace = [
            'Date' => 'Fri, 06 Jun 2014 13:39:43 GMT',
            'x-gcs-header' => "value  with   spaces\n  and newline",
        ];

        $headersNormalized = [
            'Date' => 'Fri, 06 Jun 2014 13:39:43 GMT',
            'x-gcs-header' => 'value  with   spaces and newline',
        ];

        $signatureWithUnnormalizedHeaders = $authenticator->getAuthorization(
            "GET",
            "/v2/1/tokens/1",
            $headersWithWhitespace
        );

        $signatureWithNormalizedHeaders = $authenticator->getAuthorization(
            "GET",
            "/v2/1/tokens/1",
            $headersNormalized
        );

        $this->assertEquals($signatureWithUnnormalizedHeaders, $signatureWithNormalizedHeaders);
    }

    /**
     * @throws \Exception
     */
    public function testSignature_DataToSignWithValidHeaders_ReturnsCanonicalString()
    {
        $configuration = $this->getCommunicatorConfiguration();
        $configuration->setApiKeyId('apiKeyId');
        $configuration->setApiSecret('secretApiKey');
        $authenticator = new V1HmacAuthenticator($configuration);

        $requestHeaders = [
            'Content-Type' => 'application/json',
            'Date' => 'Fri, 06 Jun 2014 13:39:43 GMT',
            'x-gcs-clientmetainfo' => 'processed header value',
        ];

        $signature = $authenticator->getAuthorization("POST", "/v2/1/tokens", $requestHeaders);
        $this->assertStringStartsWith('GCS v1HMAC:apiKeyId:', $signature);
    }

    /**
     * @throws \Exception
     */
    public function testAuthenticationSignature_DeleteRequest_ReturnsExpectedSignature()
    {
        $configuration = $this->getCommunicatorConfiguration();
        $configuration->setApiKeyId('apiKeyId');
        $configuration->setApiSecret('secretApiKey');
        $authenticator = new V1HmacAuthenticator($configuration);

        $requestHeaders = [
            'Content-Type' => 'application/json',
            'Date' => 'Fri, 06 Jun 2014 13:39:43 GMT',
            'x-gcs-clientmetainfo' => 'processed header value',
            'x-gcs-customerheader' => 'processed header value',
            'x-gcs-servermetainfo' => 'processed header value',
        ];

        $signature = $authenticator->getAuthorization("DELETE", "/v2/1/tokens/2", $requestHeaders);

        $this->assertEquals('GCS v1HMAC:apiKeyId:jXG/ESTtRWawO4OOyxOrtWcQA8XkrZKeoHeGGIj4jws=', $signature);
    }

    /**
     * @throws \Exception
     */
    public function testAuthenticationSignature_GetRequest_ReturnsExpectedSignature()
    {
        $configuration = $this->getCommunicatorConfiguration();
        $configuration->setApiKeyId('EC36A74A98D21');
        $configuration->setApiSecret('6Kj5HT0MQKC6D8eb7W3lTg71kVKVDSt1');
        $authenticator = new V1HmacAuthenticator($configuration);

        $requestHeaders = [
            'Date' => 'Fri, 06 Jun 2014 13:39:43 GMT',
        ];

        $signature = $authenticator->getAuthorization("GET", "/v2/1/tokens/2", $requestHeaders);
        $this->assertEquals('GCS v1HMAC:EC36A74A98D21:vCos01y77soPNJOW6kDCm4Bu5b2darAZ09PP7Wa+jRA=', $signature);
    }

    /**
     * @throws \Exception
     */
    public function testAuthorization_MinimalExample_ReturnsExpectedHeader()
    {
        $configuration = $this->getCommunicatorConfiguration();
        $configuration->setApiKeyId('apiKeyId');
        $configuration->setApiSecret('secretApiKey');
        $authenticator = new V1HmacAuthenticator($configuration);

        $signature = $authenticator->getAuthorization("GET", "/v2/1/tokens/2", [
            'Date' => 'Fri, 06 Jun 2014 13:39:43 GMT',
        ]);

        $this->assertMatchesRegularExpression('/^GCS v1HMAC:apiKeyId:[A-Za-z0-9+\/]+=*$/', $signature);
    }

    /**
     * @throws \Exception
     */
    public function testAuthorization_FullExample_ReturnsExpectedHeader()
    {
        $configuration = $this->getCommunicatorConfiguration();
        $configuration->setApiKeyId('apiKeyId');
        $configuration->setApiSecret('secretApiKey');
        $authenticator = new V1HmacAuthenticator($configuration);

        $requestHeaders = [
            'Content-Type' => 'application/json',
            'Date' => 'Fri, 06 Jun 2014 13:39:43 GMT',
            'x-gcs-clientmetainfo' => 'processed header value',
            'x-gcs-customerheader' => 'processed header value',
            'x-gcs-servermetainfo' => 'processed header value',
        ];

        $signature = $authenticator->getAuthorization("POST", "/v2/1/tokens", $requestHeaders);
        $this->assertMatchesRegularExpression('/^GCS v1HMAC:apiKeyId:[A-Za-z0-9+\/]+=*$/', $signature);
    }

    /**
     * @throws \Exception
     */
    public function testSignature_SpecialCharactersInPath_DifferentEncodingProducesDifferentSignatures()
    {
        $configuration = $this->getCommunicatorConfiguration();
        $configuration->setApiKeyId('apiKeyId');
        $configuration->setApiSecret('secretApiKey');
        $authenticator = new V1HmacAuthenticator($configuration);

        $signatureWithEncodedPath = $authenticator->getAuthorization(
            "GET",
            "/v2/1/services%20bla/testconnection?aap=noot&mies=geen%20noot",
            ['Date' => 'Fri, 06 Jun 2014 13:39:43 GMT']
        );

        $signatureWithRawPath = $authenticator->getAuthorization(
            "GET",
            "/v2/1/services bla/testconnection?aap=noot&mies=geen noot",
            ['Date' => 'Fri, 06 Jun 2014 13:39:43 GMT']
        );

        $this->assertNotEquals($signatureWithEncodedPath, $signatureWithRawPath);
        $this->assertStringStartsWith('GCS v1HMAC:apiKeyId:', $signatureWithEncodedPath);
    }

    /**
     * @throws \Exception
     */
    public function testGetAuthorization_XGcsHeaders_AreSortedAlphabetically(): void
    {
        $configuration = $this->getCommunicatorConfiguration();
        $configuration->setApiKeyId('apiKeyId');
        $configuration->setApiSecret('secretApiKey');
        $authenticator = new V1HmacAuthenticator($configuration);

        $headersReverseOrder = [
            'Date'                 => 'Fri, 06 Jun 2014 13:39:43 GMT',
            'x-gcs-servermetainfo' => 'server-value',
            'x-gcs-customerheader' => 'customer-value',
            'x-gcs-clientmetainfo' => 'client-value',
        ];

        $headersAlphaOrder = [
            'Date'                 => 'Fri, 06 Jun 2014 13:39:43 GMT',
            'x-gcs-clientmetainfo' => 'client-value',
            'x-gcs-customerheader' => 'customer-value',
            'x-gcs-servermetainfo' => 'server-value',
        ];

        $sigReverse = $authenticator->getAuthorization('GET', '/v2/1/tokens', $headersReverseOrder);
        $sigAlpha   = $authenticator->getAuthorization('GET', '/v2/1/tokens', $headersAlphaOrder);

        $this->assertEquals($sigAlpha, $sigReverse);
    }

    /**
     * @throws \Exception
     */
    public function testGetAuthorization_NonXGcsHeaders_AreExcludedFromCanonicalString(): void
    {
        $configuration = $this->getCommunicatorConfiguration();
        $configuration->setApiKeyId('apiKeyId');
        $configuration->setApiSecret('secretApiKey');
        $authenticator = new V1HmacAuthenticator($configuration);

        $headersWithExtra = [
            'Date'         => 'Fri, 06 Jun 2014 13:39:43 GMT',
            'Accept'       => 'application/json',
            'x-gcs-header' => 'value',
        ];

        $headersWithoutExtra = [
            'Date'         => 'Fri, 06 Jun 2014 13:39:43 GMT',
            'x-gcs-header' => 'value',
        ];

        $sigWithExtra    = $authenticator->getAuthorization('GET', '/v2/1/tokens', $headersWithExtra);
        $sigWithoutExtra = $authenticator->getAuthorization('GET', '/v2/1/tokens', $headersWithoutExtra);

        $this->assertEquals($sigWithoutExtra, $sigWithExtra);
    }

    /**
     * @throws \Exception
     */
    public function testGetAuthorization_EmptyHeadersArray_DoesNotThrow(): void
    {
        $configuration = $this->getCommunicatorConfiguration();
        $configuration->setApiKeyId('apiKeyId');
        $configuration->setApiSecret('secretApiKey');
        $authenticator = new V1HmacAuthenticator($configuration);

        $signature = $authenticator->getAuthorization('GET', '/v2/1/tokens', []);

        $this->assertStringStartsWith('GCS v1HMAC:apiKeyId:', $signature);
    }

    /**
     * @throws \Exception
     */
    public function testGetAuthorization_MissingContentType_ProducesDifferentSignatureThanWithContentType(): void
    {
        $configuration = $this->getCommunicatorConfiguration();
        $configuration->setApiKeyId('apiKeyId');
        $configuration->setApiSecret('secretApiKey');
        $authenticator = new V1HmacAuthenticator($configuration);

        $headersWithContentType = [
            'Content-Type' => 'application/json',
            'Date'         => 'Fri, 06 Jun 2014 13:39:43 GMT',
        ];

        $headersWithoutContentType = [
            'Date' => 'Fri, 06 Jun 2014 13:39:43 GMT',
        ];

        $sigWith    = $authenticator->getAuthorization('POST', '/v2/1/tokens', $headersWithContentType);
        $sigWithout = $authenticator->getAuthorization('POST', '/v2/1/tokens', $headersWithoutContentType);

        $this->assertNotEquals($sigWith, $sigWithout);
        $this->assertStringStartsWith('GCS v1HMAC:apiKeyId:', $sigWithout);
    }

    /**
     * @throws \Exception
     */
    public function testGetAuthorization_XGcsHeaderCanonicalization_LowercasedInSignature(): void
    {
        $configuration = $this->getCommunicatorConfiguration();
        $configuration->setApiKeyId('apiKeyId');
        $configuration->setApiSecret('secretApiKey');
        $authenticator = new V1HmacAuthenticator($configuration);

        $headersUpperCase = [
            'Date'                   => 'Fri, 06 Jun 2014 13:39:43 GMT',
            'X-GCS-ClientMetaInfo'   => 'some-value',
        ];

        $headersLowerCase = [
            'Date'                   => 'Fri, 06 Jun 2014 13:39:43 GMT',
            'x-gcs-clientmetainfo'   => 'some-value',
        ];

        $sigUpper = $authenticator->getAuthorization('GET', '/v2/1/tokens', $headersUpperCase);
        $sigLower = $authenticator->getAuthorization('GET', '/v2/1/tokens', $headersLowerCase);

        $this->assertEquals($sigLower, $sigUpper);
    }

    private function getCommunicatorConfiguration(): CommunicatorConfiguration
    {
        return new CommunicatorConfiguration(
            'apiKeyId',
            'secretKey',
            'https://example.com',
            'integrator'
        );
    }
}
