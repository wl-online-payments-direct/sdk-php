<?php
namespace OnlinePayments\Sdk\Logging;

use PHPUnit\Framework\TestCase;

/**
 * @group obfuscation
 */
class HeaderObfuscatorTest extends TestCase
{
    /**
     * @dataProvider headerObfuscatorProvider
     * @param string[] $headers
     * @param string[] $obfuscatedHeaders
     */
    public function testHeaderObfuscator(
        $headers,
        $obfuscatedHeaders
    ) {
        $headerObfuscator = new HeaderObfuscator();
        $this->assertEquals($obfuscatedHeaders, $headerObfuscator->obfuscateHeaders($headers));
    }

    /**
     * @return array
     */
    public function headerObfuscatorProvider()
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
    /**
     * @dataProvider customHeaderObfuscatorProvider
     * @param string[] $headers
     * @param string[] $obfuscatedHeaders
     */
    public function testCustomHeaderObfuscator(
        $headers,
        $obfuscatedHeaders
    ) {
        $headerObfuscator = new HeaderObfuscator();
        $headerObfuscator->setCustomRule('content-type', function ($value, $valueObfuscator) {
            return $valueObfuscator->obfuscateAll($value);
        });
        $headerObfuscator->setCustomRule('authorization', function ($value) {
            return '*****';
        });
        $this->assertEquals($obfuscatedHeaders, $headerObfuscator->obfuscateHeaders($headers));
    }

    /**
     * @return array
     */
    public function customHeaderObfuscatorProvider()
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
