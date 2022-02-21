<?php

namespace OnlinePayments\Sdk;

use PHPUnit\Framework\TestCase;

/**
 * @group obfuscation
 */
class ValueObfuscatorTest extends TestCase
{
    /**
     * @dataProvider valueObfuscatorProvider
     * @param $value
     * @param $valueObfuscated
     */
    public function testValueObfuscators(
        $value,
        $valueObfuscated
    )
    {
        $valueObfuscator = new ValueObfuscator();
        $this->assertEquals($valueObfuscated, $valueObfuscator->obfuscate($value));
    }

    public function valueObfuscatorProvider()
    {
        return array(
            array(NULL, NULL),
            array('', ''),
            array('f', '*1'),
            array('foo', '*3'),
            array('fóo', '*3')
        );
    }
}
