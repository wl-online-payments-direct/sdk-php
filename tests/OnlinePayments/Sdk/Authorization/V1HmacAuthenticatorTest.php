<?php

namespace OnlinePayments\Sdk\Authentication;

use OnlinePayments\Sdk\CommunicatorConfiguration;
use OnlinePayments\Sdk\TestCase;

/**
 * @group authentication
 *
 */
class V1HmacAuthenticatorTest extends TestCase
{
    public function testGetAuthorization()
    {
        $configuration = $this->getCommunicatorConfiguration();
        $authenticator = new V1HmacAuthenticator($configuration);

        $signature = $authenticator->getAuthorization("POST", "http://localhost:8080/v2/1/services%20bla/testconnection?aap=noot&mies=geen%20noot");

        $this->assertStringContainsString(V1HmacAuthenticator::AUTHORIZATION_TYPE, $signature);
    }

    public function testCreateAuthenticationSignature()
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

    public function testCreateAuthenticationSignature2()
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
}
