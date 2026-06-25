<?php

namespace OnlinePayments\Sdk\Unit\Logging;

use OnlinePayments\Sdk\Logging\BodyObfuscator;
use OnlinePayments\Sdk\Logging\ValueObfuscator;
use PHPUnit\Framework\TestCase;

/**
 * @group logging
 */
class BodyObfuscatorTest extends TestCase
{
    public function testBodyObfuscator_ObfuscateBodyWithNullBody_ReturnsNullString()
    {
        $bodyObfuscator = new BodyObfuscator();
        $mimeType = BodyObfuscator::MIME_APPLICATION_JSON;
        $inputBody = 'null';

        $result = $bodyObfuscator->obfuscateBody($mimeType, $inputBody);

        $this->assertEquals('null', $result);
    }

    public function testBodyObfuscator_ObfuscateBodyWithEmptyBody_ReturnsEmptyString()
    {
        $bodyObfuscator = new BodyObfuscator();
        $mimeType = BodyObfuscator::MIME_APPLICATION_JSON;
        $inputBody = '';

        $result = $bodyObfuscator->obfuscateBody($mimeType, $inputBody);

        $this->assertEquals('', $result);
    }

    public function testBodyObfuscator_ObfuscateBodyWithCard_ObfuscatesSensitiveCardFields()
    {
        $bodyObfuscator = new BodyObfuscator();

        $body = json_encode([
            'cardNumber' => '1234567890123456',
            'expiryDate' => '1225',
            'cvv' => '123'
        ], JSON_PRETTY_PRINT);

        $result = json_decode(
            $bodyObfuscator->obfuscateBody(
                BodyObfuscator::MIME_APPLICATION_JSON,
                $body
            )
        );

        $this->assertEquals('************3456', $result->cardNumber);
        $this->assertEquals('**25', $result->expiryDate);
        $this->assertEquals('***', $result->cvv);
    }

    public function testBodyObfuscator_ObfuscateBodyWithCustomCardRule_AppliesCustomMasking()
    {
        $bodyObfuscator = new BodyObfuscator();

        $bodyObfuscator->setCustomRule('cardnumber', function ($value) {
            return mb_substr($value, 0, 6)
                . str_repeat('*', 6)
                . mb_substr($value, mb_strlen($value, 'UTF-8') - 4);
        });

        $body = json_encode([
            'cardNumber' => '1234567890123456'
        ], JSON_PRETTY_PRINT);

        $result = json_decode(
            $bodyObfuscator->obfuscateBody(
                BodyObfuscator::MIME_APPLICATION_JSON,
                $body
            )
        );

        $this->assertEquals('123456******3456', $result->cardNumber);
    }

    public function testBodyObfuscator_ObfuscateBodyWithIban_ObfuscatesIban()
    {
        $bodyObfuscator = new BodyObfuscator();

        $body = json_encode([
            'iban' => 'NL12ABCD1234567890'
        ], JSON_PRETTY_PRINT);

        $result = json_decode(
            $bodyObfuscator->obfuscateBody(
                BodyObfuscator::MIME_APPLICATION_JSON,
                $body
            )
        );

        $this->assertEquals('**************7890', $result->iban);
    }

    public function testBodyObfuscator_ObfuscateBodyWithBin_ObfuscatesBin()
    {
        $bodyObfuscator = new BodyObfuscator();

        $body = json_encode([
            'bin' => '1234567890'
        ], JSON_PRETTY_PRINT);

        $result = json_decode(
            $bodyObfuscator->obfuscateBody(
                BodyObfuscator::MIME_APPLICATION_JSON,
                $body
            )
        );

        $this->assertEquals('123456****', $result->bin);
    }

    public function testBodyObfuscator_ObfuscateBodyWithNoMatches_ReturnsOriginalBody()
    {
        $bodyObfuscator = new BodyObfuscator();

        $body = json_encode([
            'name' => 'foo'
        ], JSON_PRETTY_PRINT);

        $result = $bodyObfuscator->obfuscateBody(
            BodyObfuscator::MIME_APPLICATION_JSON,
            $body
        );

        $this->assertEquals($body, $result);
    }

    public function testBodyObfuscator_ObfuscateBodyWithObject_ObfuscatesNestedValues()
    {
        $bodyObfuscator = new BodyObfuscator();

        $body = json_encode([
            'fields' => [
                ['name' => 'foo'],
                ['value' => 'foo']
            ]
        ], JSON_PRETTY_PRINT);

        $result = json_decode(
            $bodyObfuscator->obfuscateBody(
                BodyObfuscator::MIME_APPLICATION_JSON,
                $body
            )
        );

        $this->assertEquals('foo', $result->fields[0]->name);
        $this->assertEquals('***', $result->fields[1]->value);
    }

    /**
     * @dataProvider jsonObfuscationProvider
     */
    public function testBodyObfuscator_ObfuscateBodyWithJsonProvider_ObfuscatesCorrectly($jsonBody, $obfuscatedJsonBody)
    {
        $bodyObfuscator = new BodyObfuscator();

        $this->assertEquals(
            $obfuscatedJsonBody,
            $bodyObfuscator->obfuscateBody(BodyObfuscator::MIME_APPLICATION_JSON, $jsonBody)
        );
    }

    /**
     * @dataProvider jsonObfuscationProvider
     */
    public function testBodyObfuscator_ObfuscateBodyWithJsonProviderUtf8_ObfuscatesCorrectly($jsonBody, $obfuscatedJsonBody)
    {
        $bodyObfuscator = new BodyObfuscator();

        $this->assertEquals(
            $obfuscatedJsonBody,
            $bodyObfuscator->obfuscateBody(BodyObfuscator::MIME_APPLICATION_JSON . ';charset=UTF-8', $jsonBody)
        );
    }

    /**
     * @dataProvider skipObfuscationProvider
     */
    public function testBodyObfuscator_SkipObfuscationForSkippedContentTypes_ReturnsOriginalValue($contentType, $value)
    {
        $bodyObfuscator = new BodyObfuscator();

        $this->assertEquals($value, $bodyObfuscator->obfuscateBody($contentType, $value));
    }

    public function testBodyObfuscator_ValueObfuscators_WorkAsExpected()
    {
        $valueObfuscator = new ValueObfuscator();
        $this->assertEquals('***', $valueObfuscator->obfuscateAll('foo'));
        $this->assertEquals('********', $valueObfuscator->obfuscateFixedLength(8));
        $this->assertEquals('', $valueObfuscator->obfuscateFixedLength(0));
        $this->assertEquals('**34', $valueObfuscator->obfuscateAllKeepEnd('1234', 2));
        $this->assertEquals('12**', $valueObfuscator->obfuscateAllKeepStart('1234', 2));
        $this->assertEquals('1234', $valueObfuscator->obfuscateAllKeepEnd('1234', 6));
        $this->assertEquals('1234', $valueObfuscator->obfuscateAllKeepStart('1234', 6));
    }

    /**
     * @dataProvider jsonCustomObfuscationProvider
     */
    public function testBodyObfuscator_ObfuscateBodyWithCustomRules_ObfuscatesAccordingToCustomRules($jsonBody, $obfuscatedJsonBody)
    {
        $bodyObfuscator = new BodyObfuscator();

        $bodyObfuscator->setCustomRule('cardnumber', function ($value) {
            return mb_substr($value, 0, 6)
                . str_repeat('*', 6)
                . mb_substr($value, mb_strlen($value, 'UTF-8') - 4);
        });

        $bodyObfuscator->setCustomRule('iban', function ($value, $valueObfuscator) {
            return $valueObfuscator->obfuscateAll($value);
        });

        $result = $bodyObfuscator->obfuscateBody(
            BodyObfuscator::MIME_APPLICATION_JSON,
            $jsonBody
        );

        $this->assertEquals($obfuscatedJsonBody, $result);
    }

    public function testBodyObfuscator_ObfuscateBodyWithProblemJson_UsesJsonRules(): void
    {
        $bodyObfuscator = new BodyObfuscator();

        $body = json_encode([
            'cardNumber' => '1234567890123456',
            'emailAddress' => 'user@example.com',
        ], JSON_PRETTY_PRINT);

        $result = json_decode(
            $bodyObfuscator->obfuscateBody(
                BodyObfuscator::MIME_APPLICATION_PROBLEM_JSON,
                $body
            )
        );

        $this->assertSame('************3456', $result->cardNumber);
        $this->assertSame('****************', $result->emailAddress);
    }

    /**
     * @dataProvider additionalObfuscationFieldsProvider
     */
    public function testBodyObfuscator_ObfuscateBodyWithAdditionalSensitiveFields_ObfuscatesAccordingToRules(
        string $fieldName,
        string $value,
        string $expected
    ): void {
        $bodyObfuscator = new BodyObfuscator();

        $body = json_encode([
            $fieldName => $value,
        ], JSON_PRETTY_PRINT);

        $result = json_decode(
            $bodyObfuscator->obfuscateBody(
                BodyObfuscator::MIME_APPLICATION_JSON,
                $body
            )
        );

        $this->assertSame($expected, $result->{$fieldName});
    }

    public function jsonObfuscationProvider(): array
    {
        $testObjects = array(
            array(null, null),
            array(true, true),
            array(false, false),
            array(123.45, 123.45),
            array('foo', 'foo'),
            array('secretkey', 'secretkey'),
            array(array(), array()),
            array(array('foo'), array('foo')),
            array((object) array(), (object) array()),
            array((object) array('foo'), (object) array('foo')),
            array(array('name' => 'foo'), array('name' => 'foo')),
            array(array('secretKey' => 'foo'), array('secretKey' => '********')),
            array(array('value' => 'foo'), array('value' => '***')),
            array(array('bin' => '1234567890'), array('bin' => '123456****')),
            array(array('iban' => 'NL12ABCD1234567890'), array('iban' => '**************7890')),
            array(array('cardNumber' => '1234567890123456'), array('cardNumber' => '************3456')),
            array(array('expiryDate' => '1234'), array('expiryDate' => '**34')),
            array(
                array('fields' => array(array('name' => 'foo'), array('value' => 'foo'))),
                array('fields' => array(array('name' => 'foo'), array('value' => '***')))
            )
        );

        return array_map(function (array $testObjectValues) {
            return array_map(function ($testObjectValue) {
                return json_encode($testObjectValue, JSON_PRETTY_PRINT);
            }, $testObjectValues);
        }, $testObjects);
    }

    public function skipObfuscationProvider(): array
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

    public function jsonCustomObfuscationProvider(): array
    {
        $testObjects = array(
            array(null, null),
            array(true, true),
            array(false, false),
            array(123.45, 123.45),
            array('foo', 'foo'),
            array('secretkey', 'secretkey'),
            array(array(), array()),
            array(array('foo'), array('foo')),
            array((object) array(), (object) array()),
            array((object) array('foo'), (object) array('foo')),
            array(array('name' => 'foo'), array('name' => 'foo')),
            array(array('secretKey' => 'foo'), array('secretKey' => '********')),
            array(array('value' => 'foo'), array('value' => '***')),
            array(array('bin' => '1234567890'), array('bin' => '123456****')),
            array(array('iban' => 'NL12ABCD1234567890'), array('iban' => '******************')),
            array(array('cardNumber' => '1234567890123456'), array('cardNumber' => '123456******3456')),
            array(array('expiryDate' => '1234'), array('expiryDate' => '**34')),
            array(
                array('fields' => array(array('name' => 'foo'), array('value' => 'foo'))),
                array('fields' => array(array('name' => 'foo'), array('value' => '***')))
            )
        );

        return array_map(function (array $testObjectValues) {
            return array_map(function ($testObjectValue) {
                return json_encode($testObjectValue, JSON_PRETTY_PRINT);
            }, $testObjectValues);
        }, $testObjects);
    }

    public function additionalObfuscationFieldsProvider(): array
    {
        return [
            ['additionalInfo', 'secret', '******'],
            ['cardHolderName', 'John Doe', '********'],
            ['dateOfBirth', '1990-01-01', '**********'],
            ['emailAddress', 'user@example.com', '****************'],
            ['faxNumber', '123456', '******'],
            ['firstName', 'John', '****'],
            ['houseNumber', '12A', '***'],
            ['mobilePhoneNumber', '+31612345678', '************'],
            ['passengerName', 'John Doe', '********'],
            ['phoneNumber', '123456789', '*********'],
            ['street', 'Main Street', '***********'],
            ['workPhoneNumber', '123456789', '*********'],
            ['zip', '1234AB', '******'],
        ];
    }
}
