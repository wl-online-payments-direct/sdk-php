<?php
namespace OnlinePayments\Sdk\Unit\Logging;

use OnlinePayments\Sdk\Logging\ValueObfuscator;
use PHPUnit\Framework\TestCase;

/**
 * @group logging
 */
class ValueObfuscatorTest extends TestCase
{
    /**
     * @dataProvider valueObfuscatorProvider
     * @param $value
     * @param $obfuscationLength
     * @param $valueStartObfuscated
     * @param $valueEndObfuscated
     * @param $valueAllObfuscated
     * @param $obfuscatedFixedLength
     */
    public function testValueObfuscator_ObfuscatesAllVariants_CorrectlyBasedOnInputAndLength(
        $value,
        $obfuscationLength,
        $valueStartObfuscated,
        $valueEndObfuscated,
        $valueAllObfuscated,
        $obfuscatedFixedLength
    ) {
        $valueObfuscator = new ValueObfuscator();
        $this->assertEquals($valueStartObfuscated, $valueObfuscator->obfuscateAllKeepEnd($value, $obfuscationLength));
        $this->assertEquals($valueEndObfuscated, $valueObfuscator->obfuscateAllKeepStart($value, $obfuscationLength));
        $this->assertEquals($valueAllObfuscated, $valueObfuscator->obfuscateAll($value));
        $this->assertEquals($obfuscatedFixedLength, $valueObfuscator->obfuscateFixedLength($obfuscationLength));
    }

    public function valueObfuscatorProvider(): array
    {
        return array(
            array('', 0, '', '', '', ''),
            array('', 3, '', '', '', '***'),
            array('foo', -1, '***', '***', '***', ''),
            array('foo', 0, '***', '***', '***', ''),
            array('foo', 1, '**o', 'f**', '***', '*'),
            array('foo', 2, '*oo', 'fo*', '***', '**'),
            array('foo', 3, 'foo', 'foo', '***', '***'),
            array('foo', 4, 'foo', 'foo', '***', '****'),
            array('fóo', 1, '**o', 'f**', '***', '*'),
            array('fóo', 2, '*óo', 'fó*', '***', '**'),
            array('fóo', 3, 'fóo', 'fóo', '***', '***')
        );
    }
}
