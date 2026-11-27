<?php

namespace OnlinePayments\Sdk\Communication;

/**
 * Class UuidGenerator
 * Generator class for v4 UUID's
 *
 * @package OnlinePayments\Sdk\Communication
 */
class UuidGenerator
{
    private function __construct() {}

    /**
     * Returns a random (version 4) UUID.
     *
     * @return string
     */
    public static function generatedUuid(): string
    {
        $bytes = random_bytes(16);
        $bytes[6] = chr((ord($bytes[6]) & 0x0f) | 0x40);
        $bytes[8] = chr((ord($bytes[8]) & 0x3f) | 0x80);
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($bytes), 4));
    }
}
