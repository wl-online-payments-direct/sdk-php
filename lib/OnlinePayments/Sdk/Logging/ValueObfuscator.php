<?php
namespace OnlinePayments\Sdk\Logging;

/**
 * Class ValueObfuscator
 *
 * @package OnlinePayments\Sdk\Logging
 */
class ValueObfuscator
{
    /** */
    const MASK_CHARACTER = '*';

    /**
     * @param string $value
     * @param int $numberOfCharactersToKeep
     * @return string
     */
    public function obfuscateAllKeepEnd(string $value, int $numberOfCharactersToKeep): string
    {
        if ($numberOfCharactersToKeep <= 0) {
            return $this->obfuscateAll($value);
        }
        if (mb_strlen($value, 'UTF-8') <= $numberOfCharactersToKeep) {
            return $value;
        }
        return
            str_repeat(static::MASK_CHARACTER, mb_strlen($value, 'UTF-8') - $numberOfCharactersToKeep) .
            mb_substr($value, mb_strlen($value, 'UTF-8') - $numberOfCharactersToKeep, null, 'UTF-8')
            ;
    }

    /**
     * @param string $value
     * @param int $numberOfCharactersToKeep
     * @return string
     */
    public function obfuscateAllKeepStart(string $value, int $numberOfCharactersToKeep): string
    {
        if ($numberOfCharactersToKeep <= 0) {
            return $this->obfuscateAll($value);
        }
        if (mb_strlen($value, 'UTF-8') <= $numberOfCharactersToKeep) {
            return $value;
        }
        return
            mb_substr($value, 0, $numberOfCharactersToKeep, 'UTF-8') .
            str_repeat(static::MASK_CHARACTER, mb_strlen($value, 'UTF-8') - $numberOfCharactersToKeep)
            ;
    }

    /**
     * @param string $value
     * @return string
     */
    public function obfuscateAll(string $value): string
    {
        return str_repeat(static::MASK_CHARACTER, mb_strlen($value, 'UTF-8'));
    }

    /**
     * @param int $length
     * @return string
     */
    public function obfuscateFixedLength(int $length): string
    {
        if ($length <= 0) {
            return '';
        }
        return str_repeat(static::MASK_CHARACTER, $length);
    }
}
