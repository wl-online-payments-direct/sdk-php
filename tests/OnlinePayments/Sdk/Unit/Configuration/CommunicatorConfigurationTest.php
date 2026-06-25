<?php

namespace OnlinePayments\Sdk\Unit\Configuration;

use OnlinePayments\Sdk\CommunicatorConfiguration;
use OnlinePayments\Sdk\ProxyConfiguration;
use PHPUnit\Framework\TestCase;

/**
 * @group configuration
 */
class CommunicatorConfigurationTest extends TestCase
{
    public function testCommunicatorConfiguration_ConstructWithoutProxy_SetsPropertiesCorrectly()
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com/',
            'OnlinePayments'
        );

        $this->assertSame('apiKeyId', $configuration->getApiKeyId());
        $this->assertSame('apiSecret', $configuration->getApiSecret());
        $this->assertSame('https://payment.preprod.online-payments.com', $configuration->getApiEndpoint());
        $this->assertSame('OnlinePayments', $configuration->getIntegrator());
        $this->assertSame(-1, $configuration->getConnectTimeout());
        $this->assertSame(-1, $configuration->getReadTimeout());
        $this->assertNull($configuration->getProxyConfiguration());
        $this->assertNull($configuration->getShoppingCartExtension());
    }

    public function testCommunicatorConfiguration_ConstructWithProxyWithoutAuthentication_SetsProxyPropertiesCorrectly()
    {
        $proxy = new ProxyConfiguration('proxy.example.com', 8080);

        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com',
            'OnlinePayments',
            $proxy
        );

        $this->assertSame($proxy, $configuration->getProxyConfiguration());
        $this->assertSame('proxy.example.com:8080', $proxy->getCurlProxy());
        $this->assertSame('', $proxy->getCurlProxyUserPwd());
    }

    public function testCommunicatorConfiguration_ConstructWithProxyWithAuthentication_SetsProxyPropertiesCorrectly()
    {
        $proxy = new ProxyConfiguration('proxy.example.com', 8080, 'user', 'pass');

        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com',
            'OnlinePayments',
            $proxy
        );

        $this->assertSame($proxy, $configuration->getProxyConfiguration());
        $this->assertSame('proxy.example.com:8080', $proxy->getCurlProxy());
        $this->assertSame('user:pass', $proxy->getCurlProxyUserPwd());
    }

    public function testCommunicatorConfiguration_ConstructWithTimeouts_SetsConnectAndReadTimeoutsCorrectly()
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com',
            'OnlinePayments',
            null,
            5,
            10
        );

        $this->assertSame(5, $configuration->getConnectTimeout());
        $this->assertSame(10, $configuration->getReadTimeout());
    }

    public function testCommunicatorConfiguration_ConstructWithHostAndScheme_SetsApiEndpointCorrectly()
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com',
            'OnlinePayments'
        );

        $this->assertSame('https://payment.preprod.online-payments.com', $configuration->getApiEndpoint());
    }

    public function testCommunicatorConfiguration_ConstructWithHostAndPort_SetsApiEndpointCorrectly()
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com:443',
            'OnlinePayments'
        );

        $this->assertSame('https://payment.preprod.online-payments.com:443', $configuration->getApiEndpoint());
    }

    public function testCommunicatorConfiguration_ConstructWithHostSchemeAndPort_SetsApiEndpointCorrectly()
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com:8443',
            'OnlinePayments'
        );

        $this->assertSame('https://payment.preprod.online-payments.com:8443', $configuration->getApiEndpoint());
    }

    public function testCommunicatorConfiguration_ConstructWithIPv6Host_SetsApiEndpointCorrectly()
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://[2001:db8::1]',
            'OnlinePayments'
        );

        $this->assertSame('https://[2001:db8::1]', $configuration->getApiEndpoint());
    }

    public function testCommunicatorConfiguration_Setters_UpdateValuesCorrectly(): void
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com',
            'OnlinePayments'
        );

        $proxy = new ProxyConfiguration('proxy.example.com', 8080, 'user', 'pass');

        $configuration->setApiKeyId('newApiKeyId');
        $configuration->setApiSecret('newApiSecret');
        $configuration->setApiEndpoint('https://example.org');
        $configuration->setProxyConfiguration($proxy);
        $configuration->setConnectTimeout(5);
        $configuration->setReadTimeout(10);
        $configuration->setIntegrator('NewIntegrator');
        $configuration->setShoppingCartExtension(null);

        $this->assertSame('newApiKeyId', $configuration->getApiKeyId());
        $this->assertSame('newApiSecret', $configuration->getApiSecret());
        $this->assertSame('https://example.org', $configuration->getApiEndpoint());
        $this->assertSame($proxy, $configuration->getProxyConfiguration());
        $this->assertSame(5, $configuration->getConnectTimeout());
        $this->assertSame(10, $configuration->getReadTimeout());
        $this->assertSame('NewIntegrator', $configuration->getIntegrator());
        $this->assertNull($configuration->getShoppingCartExtension());
    }

    /**
     * @dataProvider invalidApiEndpointProvider
     */
    public function testCommunicatorConfiguration_ConstructWithInvalidApiEndpoint_ThrowsUnexpectedValueException(string $apiEndpoint, string $message): void
    {
        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage($message);

        new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            $apiEndpoint,
            'OnlinePayments'
        );
    }

    /**
     * @dataProvider invalidIntegratorProvider
     */
    public function testCommunicatorConfiguration_ConstructWithInvalidIntegrator_ThrowsUnexpectedValueException($integrator, string $message): void
    {
        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage($message);

        new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com',
            $integrator
        );
    }

    /**
     * @dataProvider invalidEndpointForSetterProvider
     */
    public function testCommunicatorConfiguration_SetApiEndpoint_WithInvalidValue_ThrowsUnexpectedValueException(string $apiEndpoint, string $message): void
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com',
            'OnlinePayments'
        );

        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage($message);

        $configuration->setApiEndpoint($apiEndpoint);
    }

    /**
     * @dataProvider invalidIntegratorSetterProvider
     */
    public function testCommunicatorConfiguration_SetIntegrator_WithInvalidValue_ThrowsUnexpectedValueException($integrator, string $message): void
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com',
            'OnlinePayments'
        );

        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage($message);

        $configuration->setIntegrator($integrator);
    }

    public function invalidApiEndpointProvider(): array
    {
        return [
            ['not-a-url', 'apiEndpoint should not contain a path'],
            ['https://example.com/path', 'apiEndpoint should not contain a path'],
            ['https://user@example.com', 'apiEndpoint should not contain user info, query or fragment'],
            ['https://example.com?foo=bar', 'apiEndpoint should not contain user info, query or fragment'],
            ['https://example.com#fragment', 'apiEndpoint should not contain user info, query or fragment'],
        ];
    }

    public function invalidIntegratorProvider(): array
    {
        return [
            [null, 'integrator is required'],
            ['', 'integrator is required'],
            ['   ', 'integrator is required'],
        ];
    }

    public function invalidEndpointForSetterProvider(): array
    {
        return [
            ['not-a-url', 'apiEndpoint should not contain a path'],
            ['https://example.com/path', 'apiEndpoint should not contain a path'],
            ['https://user@example.com', 'apiEndpoint should not contain user info, query or fragment'],
            ['https://example.com?foo=bar', 'apiEndpoint should not contain user info, query or fragment'],
            ['https://example.com#fragment', 'apiEndpoint should not contain user info, query or fragment'],
        ];
    }

    public function invalidIntegratorSetterProvider(): array
    {
        return [
            [null, 'integrator is required'],
            ['', 'integrator is required'],
            ['   ', 'integrator is required'],
        ];
    }
}
