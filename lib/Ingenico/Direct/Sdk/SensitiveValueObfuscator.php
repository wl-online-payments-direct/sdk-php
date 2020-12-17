<?php
namespace Ingenico\Direct\Sdk;

/**
 * Class SensitiveValueObfuscator
 *
 * @package Ingenico\Direct\Sdk
 */
class SensitiveValueObfuscator
{
    /**
     * @param string $value
     * @return string
     */
    public function obfuscate($value)
    {
        return empty($value)
            ? $value
            : '***';
    }
}
