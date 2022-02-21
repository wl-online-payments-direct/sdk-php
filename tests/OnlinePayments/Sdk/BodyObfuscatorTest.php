<?php

namespace OnlinePayments\Sdk;

use PHPUnit\Framework\TestCase;

/**
 * @group obfuscation
 */
class BodyObfuscatorTest extends TestCase
{
    /**
     * @dataProvider jsonObfuscationProvider
     * @param string $jsonBody
     * @param string $obfuscatedJsonBody
     */
    public function testJsonObfuscation($jsonBody, $obfuscatedJsonBody)
    {
        $bodyObfuscator = new BodyObfuscator();
        $this->assertEquals(
            $obfuscatedJsonBody,
            $bodyObfuscator->obfuscateBody(BodyObfuscator::MIME_APPLICATION_JSON, $jsonBody)
        );
    }

    /**
     * @dataProvider jsonObfuscationProvider
     * @param string $jsonBody
     * @param string $obfuscatedJsonBody
     */
    public function testJsonObfuscationUTF8($jsonBody, $obfuscatedJsonBody)
    {
        $bodyObfuscator = new BodyObfuscator();
        $this->assertEquals(
            $obfuscatedJsonBody,
            $bodyObfuscator->obfuscateBody(BodyObfuscator::MIME_APPLICATION_JSON . ';charset=UTF-8', $jsonBody)
        );
    }

    /**
     * @return array
     */
    public function jsonObfuscationProvider()
    {
        $testObjects = array(
            array(
                null,
                null
            ),
            array(
                true,
                true
            ),
            array(
                false,
                false
            ),
            array(
                123.45,
                123.45
            ),
            array(
                'foo',
                'foo'
            ),
            array(
                'secretkey',
                'secretkey'
            ),
            array(
                array(),
                array()
            ),
            array(
                array('foo'),
                array('foo')
            ),
            array(
                (object)array(),
                (object)array()
            ),
            array(
                (object)array('foo'),
                (object)array('foo')
            ),
            array(
                array('name' => 'foo'),
                array('name' => 'foo')
            ),
            array(
                array('secretKey' => 'foo'),
                array('secretKey' => '***')
            ),
            array(
                array('encryptedCustomerInput' => '74tk9s968z469z78th4z678h4zsth=='),
                array('encryptedCustomerInput' => '***')
            ),
            array(
                array('value' => 'foo'),
                array('value' => '*3')
            ),
            array(
                array('bin' => '1234567890'),
                array('bin' => '*10')
            ),
            array(
                array('iban' => 'NL12ABCD1234567890'),
                array('iban' => '*18')
            ),
            array(
                array('card' => array(array('cardNumber' => '1234567890123456'), array('expiryDate' => '1230'), array('cvv' => '123'), array('cardholderName' => 'Wile E. Coyote'))),
                array('card' => array(array('cardNumber' => '*16'), array('expiryDate' => '*4'), array('cvv' => '*3'), array('cardholderName' => '*14'))),
            ),
            array(
                array('personalInformation' => array(array('name' => array(array('firstName' => 'Wile'), array('surname' => 'Coyote'))), array('dateOfBirth' => '19370929'))),
                array('personalInformation' => array(array('name' => array(array('firstName' => '*4'), array('surname' => '*6'))), array('dateOfBirth' => '*8'))),
            ),
            array(
                array('billingAddress' => array(array('countryCode' => 'BE'), array('city' => 'Zaventem'), array('zip' => '1930'), array('street' => 'Da Vincilaan'), array('houseNumber' => '3'))),
                array('billingAddress' => array(array('countryCode' => 'BE'), array('city' => 'Zaventem'), array('zip' => '*4'), array('street' => '*12'), array('houseNumber' => '*1'))),
            ),
            array(
                array('contactDetails' => array(array('emailAddress' => 'wecoyote@acme.org'), array('faxNumber' => '+32 (0)2 286 96 16'), array('mobilePhoneNumber' => '+3222869611'), array('phoneNumber' => '02 585 56 80'), array('workPhoneNumber' => '003222869611'))),
                array('contactDetails' => array(array('emailAddress' => '*17'), array('faxNumber' => '*18'), array('mobilePhoneNumber' => '*11'), array('phoneNumber' => '*12'), array('workPhoneNumber' => '*12'))),
            ),
            array(
                array('fields' => array(array('name' => 'foo'), array('value' => 'foo'))),
                array('fields' => array(array('name' => 'foo'), array('value' => '*3')))
            )
        );
        return array_map(function (array $testObjectValues) {
            return array_map(function ($testObjectValue) {
                return json_encode($testObjectValue, JSON_PRETTY_PRINT);
            }, $testObjectValues);
        }, $testObjects);
    }

    /**
     * @dataProvider skipObfuscationProvider
     * @param string $contentType
     * @param string $value
     */
    public function testSkipObfuscation($contentType, $value)
    {
        $bodyObfuscator = new BodyObfuscator();
        $this->assertEquals($value, $bodyObfuscator->obfuscateBody($contentType, $value));
    }

    /**
     * @return array
     */
    public function skipObfuscationProvider()
    {
        return array(
            array(BodyObfuscator::MIME_APPLICATION_JSON, 'foo'),
            array(BodyObfuscator::MIME_APPLICATION_JSON, '{'),
            array('text/html', ''),
            array('text/html', 'foo'),
            array('text/html', '{'),
            array('text/html', '{"foo": "bar"'),
            array('', '')
        );
    }
}
