<?php

namespace OnlinePayments\Sdk\Unit\Logging;

use OnlinePayments\Sdk\Logging\HeaderObfuscator;
use PHPUnit\Framework\TestCase;

/**
 * @group logging
 */
class HeaderObfuscatorTest extends TestCase
{
    /**
     * @dataProvider headerObfuscatorProvider
     * @param string[] $headers
     * @param string[] $obfuscatedHeaders
     */
    public function testHeaderObfuscator_ObfuscateStandardHeaders_ReturnsObfuscatedAuthorization(
        array $headers,
        array $obfuscatedHeaders
    ) {
        $headerObfuscator = new HeaderObfuscator();
        $this->assertEquals($obfuscatedHeaders, $headerObfuscator->obfuscateHeaders($headers));
    }

    /**
     * @dataProvider customHeaderObfuscatorProvider
     * @param string[] $headers
     * @param string[] $obfuscatedHeaders
     */
    public function testHeaderObfuscator_ObfuscateCustomHeaders_AppliesCustomRules(
        array $headers,
        array $obfuscatedHeaders
    ) {
        $headerObfuscator = new HeaderObfuscator();

        $headerObfuscator->setCustomRule('content-type', function ($value, $valueObfuscator) {
            return $valueObfuscator->obfuscateAll($value);
        });

        $headerObfuscator->setCustomRule('authorization', function ($value) {
            return '*****';
        });

        $this->assertEquals(
            $obfuscatedHeaders,
            $headerObfuscator->obfuscateHeaders($headers)
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

    public function headerObfuscatorProvider(): array
    {
        return array(
            array(
                array(),array()
            ),
            array(
                array('Authorization' => 'foo'),
                array('Authorization' => '********')
            ),
            array(
                array('authorization' => 'foo'),
                array('authorization' => '********')
            ),
            array(
                array('Authorisation' => 'foo'),
                array('Authorisation' => 'foo')
            ),
            array(
                array('Authorization' => 'foo', 'Content-Type' => 'application/json'),
                array('Authorization' => '********', 'Content-Type' => 'application/json')
            ),
            array(
                array(0 => 'HTTP/1.1 200 OK'),
                array(0 => 'HTTP/1.1 200 OK')
            ),
            array(
                array('Authorization' => array('foo', 'bar')),
                array('Authorization' => array('********', '********'))
            )
        );
    }

    public function customHeaderObfuscatorProvider(): array
    {
        return array(
            array(
                array(),array()
            ),
            array(
                array('Authorization' => 'foo'),
                array('Authorization' => '*****')
            ),
            array(
                array('authorization' => 'foo'),
                array('authorization' => '*****')
            ),
            array(
                array('Authorisation' => 'foo'),
                array('Authorisation' => 'foo')
            ),
            array(
                array('Authorization' => 'foo', 'Content-Type' => 'application/json'),
                array('Authorization' => '*****', 'Content-Type' => '****************')
            ),
            array(
                array(0 => 'HTTP/1.1 200 OK'),
                array(0 => 'HTTP/1.1 200 OK')
            ),
            array(
                array('Authorization' => array('foo', 'bar')),
                array('Authorization' => array('*****', '*****'))
            )
        );
    }
}
