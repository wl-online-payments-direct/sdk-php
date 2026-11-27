<?php

namespace OnlinePayments\Sdk\Unit\Configuration;

use OnlinePayments\Sdk\CommunicatorConfiguration;
use OnlinePayments\Sdk\ProxyConfiguration;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

#[Group('configuration')]
class CommunicatorConfigurationTest extends TestCase
{
    public function testCommunicatorConfiguration_ConstructWithoutProxy_SetsPropertiesCorrectly(): void
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com/',
            'OnlinePayments',
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

    public function testCommunicatorConfiguration_ConstructWithProxyWithoutAuthentication_SetsProxyPropertiesCorrectly(): void
    {
        $proxy = new ProxyConfiguration('proxy.example.com', 8080);

        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com',
            'OnlinePayments',
            $proxy,
        );

        $this->assertSame($proxy, $configuration->getProxyConfiguration());
        $this->assertSame('proxy.example.com:8080', $proxy->getCurlProxy());
        $this->assertSame('', $proxy->getCurlProxyUserPwd());
    }

    public function testCommunicatorConfiguration_ConstructWithProxyWithAuthentication_SetsProxyPropertiesCorrectly(): void
    {
        $proxy = new ProxyConfiguration('proxy.example.com', 8080, 'user', 'pass');

        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com',
            'OnlinePayments',
            $proxy,
        );

        $this->assertSame($proxy, $configuration->getProxyConfiguration());
        $this->assertSame('proxy.example.com:8080', $proxy->getCurlProxy());
        $this->assertSame('user:pass', $proxy->getCurlProxyUserPwd());
    }

    public function testCommunicatorConfiguration_ConstructWithTimeouts_SetsConnectAndReadTimeoutsCorrectly(): void
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com',
            'OnlinePayments',
            null,
            5,
            10,
        );

        $this->assertSame(5, $configuration->getConnectTimeout());
        $this->assertSame(10, $configuration->getReadTimeout());
    }

    public function testCommunicatorConfiguration_ConstructWithHostAndScheme_SetsApiEndpointCorrectly(): void
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com',
            'OnlinePayments',
        );

        $this->assertSame('https://payment.preprod.online-payments.com', $configuration->getApiEndpoint());
    }

    public function testCommunicatorConfiguration_ConstructWithHostAndPort_SetsApiEndpointCorrectly(): void
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com:443',
            'OnlinePayments',
        );

        $this->assertSame('https://payment.preprod.online-payments.com:443', $configuration->getApiEndpoint());
    }

    public function testCommunicatorConfiguration_ConstructWithHostSchemeAndPort_SetsApiEndpointCorrectly(): void
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com:8443',
            'OnlinePayments',
        );

        $this->assertSame('https://payment.preprod.online-payments.com:8443', $configuration->getApiEndpoint());
    }

    public function testCommunicatorConfiguration_ConstructWithIPv6Host_SetsApiEndpointCorrectly(): void
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://[2001:db8::1]',
            'OnlinePayments',
        );

        $this->assertSame('https://[2001:db8::1]', $configuration->getApiEndpoint());
    }

    public function testCommunicatorConfiguration_Setters_UpdateValuesCorrectly(): void
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com',
            'OnlinePayments',
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

    public function testCommunicatorConfiguration_SetApiEndpoint_WithTrailingSlash_RemovesTrailingSlash(): void
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com',
            'OnlinePayments',
        );

        $configuration->setApiEndpoint('https://example.org/');

        $this->assertSame('https://example.org', $configuration->getApiEndpoint());
    }

    public function testCommunicatorConfiguration_PrintR_MasksApiKeyIdAndApiSecret(): void
    {
        $configuration = new CommunicatorConfiguration(
            'myApiKeyId',
            'myApiSecret',
            'https://payment.preprod.online-payments.com',
            'OnlinePayments',
        );

        $output = print_r($configuration, true);

        $this->assertStringNotContainsString('myApiKeyId', $output);
        $this->assertStringNotContainsString('myApiSecret', $output);
        $this->assertStringContainsString('********', $output);
        $this->assertStringContainsString('https://payment.preprod.online-payments.com', $output);
    }

    #[DataProvider('invalidApiEndpointProvider')]
    public function testCommunicatorConfiguration_ConstructWithInvalidApiEndpoint_ThrowsUnexpectedValueException(string $apiEndpoint, string $message): void
    {
        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage($message);

        new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            $apiEndpoint,
            'OnlinePayments',
        );
    }

    #[DataProvider('invalidIntegratorProvider')]
    public function testCommunicatorConfiguration_ConstructWithInvalidIntegrator_ThrowsException(mixed $integrator, string $exceptionClass, string $message): void
    {
        $this->expectException($exceptionClass);
        $this->expectExceptionMessage($message);

        new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com',
            $integrator,
        );
    }

    public function testCommunicatorConfiguration_ConstructWithBlankApiKeyId_ThrowsUnexpectedValueException(): void
    {
        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage('apiKeyId is required');

        new CommunicatorConfiguration(
            '',
            'apiSecret',
            'https://payment.preprod.online-payments.com',
            'OnlinePayments',
        );
    }

    public function testCommunicatorConfiguration_ConstructWithBlankApiSecret_ThrowsUnexpectedValueException(): void
    {
        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage('apiSecret is required');

        new CommunicatorConfiguration(
            'apiKeyId',
            '   ',
            'https://payment.preprod.online-payments.com',
            'OnlinePayments',
        );
    }

    #[DataProvider('invalidEndpointForSetterProvider')]
    public function testCommunicatorConfiguration_SetApiEndpoint_WithInvalidValue_ThrowsUnexpectedValueException(string $apiEndpoint, string $message): void
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com',
            'OnlinePayments',
        );

        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage($message);

        $configuration->setApiEndpoint($apiEndpoint);
    }

    #[DataProvider('invalidIntegratorSetterProvider')]
    public function testCommunicatorConfiguration_SetIntegrator_WithInvalidValue_ThrowsException(mixed $integrator, string $exceptionClass, string $message): void
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com',
            'OnlinePayments',
        );

        $this->expectException($exceptionClass);
        $this->expectExceptionMessage($message);

        $configuration->setIntegrator($integrator);
    }

    public function testCommunicatorConfiguration_SetBlankApiKeyId_ThrowsUnexpectedValueException(): void
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com',
            'OnlinePayments',
        );

        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage('apiKeyId is required');

        $configuration->setApiKeyId('  ');
    }

    public function testCommunicatorConfiguration_SetBlankApiSecret_ThrowsUnexpectedValueException(): void
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://payment.preprod.online-payments.com',
            'OnlinePayments',
        );

        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage('apiSecret is required');

        $configuration->setApiSecret('');
    }

    /**
     * @return array<int, array{0: string, 1: string}>
     */
    public static function invalidApiEndpointProvider(): array
    {
        return [
            ['not-a-url', 'apiEndpoint must be an absolute HTTP or HTTPS URL with a host'],
            ['ftp://example.com', 'apiEndpoint must be an absolute HTTP or HTTPS URL with a host'],
            ['//example.com', 'apiEndpoint must be an absolute HTTP or HTTPS URL with a host'],
            ['https://example.com/path', 'apiEndpoint should not contain a path'],
            ['https://user@example.com', 'apiEndpoint should not contain user info, query or fragment'],
            ['https://example.com?foo=bar', 'apiEndpoint should not contain user info, query or fragment'],
            ['https://example.com#fragment', 'apiEndpoint should not contain user info, query or fragment'],
        ];
    }

    /**
     * @return array<int, array{0: string|null, 1: class-string<\Throwable>, 2: string}>
     */
    public static function invalidIntegratorProvider(): array
    {
        return [
            [null, \TypeError::class, 'must be of type string, null given'],
            ['', \UnexpectedValueException::class, 'integrator is required'],
            ['   ', \UnexpectedValueException::class, 'integrator is required'],
        ];
    }

    /**
     * @return array<int, array{0: string, 1: string}>
     */
    public static function invalidEndpointForSetterProvider(): array
    {
        return [
            ['not-a-url', 'apiEndpoint must be an absolute HTTP or HTTPS URL with a host'],
            ['ftp://example.com', 'apiEndpoint must be an absolute HTTP or HTTPS URL with a host'],
            ['//example.com', 'apiEndpoint must be an absolute HTTP or HTTPS URL with a host'],
            ['https://example.com/path', 'apiEndpoint should not contain a path'],
            ['https://user@example.com', 'apiEndpoint should not contain user info, query or fragment'],
            ['https://example.com?foo=bar', 'apiEndpoint should not contain user info, query or fragment'],
            ['https://example.com#fragment', 'apiEndpoint should not contain user info, query or fragment'],
        ];
    }

    /**
     * @return array<int, array{0: string|null, 1: class-string<\Throwable>, 2: string}>
     */
    public static function invalidIntegratorSetterProvider(): array
    {
        return [
            [null, \TypeError::class, 'must be of type string, null given'],
            ['', \UnexpectedValueException::class, 'integrator is required'],
            ['   ', \UnexpectedValueException::class, 'integrator is required'],
        ];
    }
}
