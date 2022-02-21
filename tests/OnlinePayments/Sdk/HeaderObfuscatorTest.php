<?php

namespace OnlinePayments\Sdk;

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
    )
    {
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
                array(), array()
            ),
            array(
                array('Authorization' => 'foobar'),
                array('Authorization' => '***')
            ),
            array(
                array('authorization' => 'foobar'),
                array('authorization' => '***')
            ),
            array(
                array('Authorisation' => 'foobar'),
                array('Authorisation' => 'foobar')
            ),
            array(
                array('Authorization' => 'foobar', 'Content-Type' => 'application/json'),
                array('Authorization' => '***', 'Content-Type' => 'application/json')
            ),
            array(
                array(0 => 'HTTP/1.1 200 OK'),
                array(0 => 'HTTP/1.1 200 OK')
            ),
            array(
                array('Authorization' => array('foobar', 'barfoo')),
                array('Authorization' => '***')
            )
        );
    }
}
