<?php

namespace OnlinePayments\Sdk\Unit\Logging;

use OnlinePayments\Sdk\Logging\HeaderObfuscator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

#[Group('logging')]
class HeaderObfuscatorTest extends TestCase
{
    /**
     * @param string[] $headers
     * @param string[] $obfuscatedHeaders
     */
    #[DataProvider('headerObfuscatorProvider')]
    public function testHeaderObfuscator_ObfuscateStandardHeaders_ReturnsObfuscatedAuthorization(
        array $headers,
        array $obfuscatedHeaders,
    ): void {
        $headerObfuscator = new HeaderObfuscator();
        $this->assertEquals($obfuscatedHeaders, $headerObfuscator->obfuscateHeaders($headers));
    }

    /**
     * @param string[] $headers
     * @param string[] $obfuscatedHeaders
     */
    #[DataProvider('customHeaderObfuscatorProvider')]
    public function testHeaderObfuscator_ObfuscateCustomHeaders_AppliesCustomRules(
        array $headers,
        array $obfuscatedHeaders,
    ): void {
        $headerObfuscator = new HeaderObfuscator();

        $headerObfuscator->setCustomRule('content-type', function ($value, $valueObfuscator) {
            return $valueObfuscator->obfuscateAll($value);
        });

        $headerObfuscator->setCustomRule('authorization', function ($value) {
            return '*****';
        });

        $this->assertEquals(
            $obfuscatedHeaders,
            $headerObfuscator->obfuscateHeaders($headers),
        );
    }

    public function testHeaderObfuscator_ObfuscateTokenAndPasswordHeaders_MasksAsFixedLength(): void
    {
        $headerObfuscator = new HeaderObfuscator();

        $headers = [
            'X-GCS-Authentication-Token' => 'token-value',
            'X-GCS-CallerPassword' => 'caller-password',
        ];

        $expected = [
            'X-GCS-Authentication-Token' => '********',
            'X-GCS-CallerPassword' => '********',
        ];

        $this->assertSame($expected, $headerObfuscator->obfuscateHeaders($headers));
    }

    public function testHeaderObfuscator_ObfuscateWwwAuthenticate_MasksAsFixedLength(): void
    {
        $headerObfuscator = new HeaderObfuscator();

        $headers = ['www-authenticate' => 'Bearer realm="example"'];

        $obfuscated = $headerObfuscator->obfuscateHeaders($headers);

        $this->assertSame(['www-authenticate' => '********'], $obfuscated);
    }

    public function testHeaderObfuscator_ObfuscateProxyAuthorization_MasksAsFixedLength(): void
    {
        $headerObfuscator = new HeaderObfuscator();

        $headers = ['Proxy-Authorization' => 'Basic dXNlcjpwYXNz'];

        $obfuscated = $headerObfuscator->obfuscateHeaders($headers);

        $this->assertSame(['Proxy-Authorization' => '********'], $obfuscated);
    }

    public function testHeaderObfuscator_EmptyAuthorizationValue_ReturnsFixedLength(): void
    {
        $headerObfuscator = new HeaderObfuscator();

        $headers = ['Authorization' => ''];

        $obfuscated = $headerObfuscator->obfuscateHeaders($headers);

        $this->assertSame(['Authorization' => '********'], $obfuscated);
    }

    /**
     * @return array<int, array{0: array<int|string, string|string[]>, 1: array<int|string, string|string[]>}>
     */
    public static function headerObfuscatorProvider(): array
    {
        return [
            [
                [],[],
            ],
            [
                ['Authorization' => 'foo'],
                ['Authorization' => '********'],
            ],
            [
                ['authorization' => 'foo'],
                ['authorization' => '********'],
            ],
            [
                ['Authorisation' => 'foo'],
                ['Authorisation' => 'foo'],
            ],
            [
                ['Authorization' => 'foo', 'Content-Type' => 'application/json'],
                ['Authorization' => '********', 'Content-Type' => 'application/json'],
            ],
            [
                [0 => 'HTTP/1.1 200 OK'],
                [0 => 'HTTP/1.1 200 OK'],
            ],
            [
                ['Authorization' => ['foo', 'bar']],
                ['Authorization' => ['********', '********']],
            ],
        ];
    }

    /**
     * @return array<int, array{0: array<int|string, string|string[]>, 1: array<int|string, string|string[]>}>
     */
    public static function customHeaderObfuscatorProvider(): array
    {
        return [
            [
                [],[],
            ],
            [
                ['Authorization' => 'foo'],
                ['Authorization' => '*****'],
            ],
            [
                ['authorization' => 'foo'],
                ['authorization' => '*****'],
            ],
            [
                ['Authorisation' => 'foo'],
                ['Authorisation' => 'foo'],
            ],
            [
                ['Authorization' => 'foo', 'Content-Type' => 'application/json'],
                ['Authorization' => '*****', 'Content-Type' => '****************'],
            ],
            [
                [0 => 'HTTP/1.1 200 OK'],
                [0 => 'HTTP/1.1 200 OK'],
            ],
            [
                ['Authorization' => ['foo', 'bar']],
                ['Authorization' => ['*****', '*****']],
            ],
        ];
    }
}
