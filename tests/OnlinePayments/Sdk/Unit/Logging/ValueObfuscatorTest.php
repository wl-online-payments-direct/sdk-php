<?php

namespace OnlinePayments\Sdk\Unit\Logging;

use OnlinePayments\Sdk\Logging\ValueObfuscator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

#[Group('logging')]
class ValueObfuscatorTest extends TestCase
{
    /**
     * @param string $value
     * @param int $obfuscationLength
     * @param string $valueStartObfuscated
     * @param string $valueEndObfuscated
     * @param string $valueAllObfuscated
     * @param string $obfuscatedFixedLength
     */
    #[DataProvider('valueObfuscatorProvider')]
    public function testValueObfuscator_ObfuscatesAllVariants_CorrectlyBasedOnInputAndLength(
        string $value,
        int $obfuscationLength,
        string $valueStartObfuscated,
        string $valueEndObfuscated,
        string $valueAllObfuscated,
        string $obfuscatedFixedLength,
    ): void {
        $valueObfuscator = new ValueObfuscator();
        $this->assertEquals($valueStartObfuscated, $valueObfuscator->obfuscateAllKeepEnd($value, $obfuscationLength));
        $this->assertEquals($valueEndObfuscated, $valueObfuscator->obfuscateAllKeepStart($value, $obfuscationLength));
        $this->assertEquals($valueAllObfuscated, $valueObfuscator->obfuscateAll($value));
        $this->assertEquals($obfuscatedFixedLength, $valueObfuscator->obfuscateFixedLength($obfuscationLength));
    }

    /**
     * @return array<int, array{0: string, 1: int, 2: string, 3: string, 4: string, 5: string}>
     */
    public static function valueObfuscatorProvider(): array
    {
        return [
            ['', 0, '', '', '', ''],
            ['', 3, '', '', '', '***'],
            ['foo', -1, '***', '***', '***', ''],
            ['foo', 0, '***', '***', '***', ''],
            ['foo', 1, '**o', 'f**', '***', '*'],
            ['foo', 2, '*oo', 'fo*', '***', '**'],
            ['foo', 3, 'foo', 'foo', '***', '***'],
            ['foo', 4, 'foo', 'foo', '***', '****'],
            ['fóo', 1, '**o', 'f**', '***', '*'],
            ['fóo', 2, '*óo', 'fó*', '***', '**'],
            ['fóo', 3, 'fóo', 'fóo', '***', '***'],
        ];
    }
}
