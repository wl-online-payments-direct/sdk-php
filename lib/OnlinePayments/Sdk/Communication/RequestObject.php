<?php

namespace OnlinePayments\Sdk\Communication;

use Exception;

/**
 * Class RequestObject
 *
 * @package OnlinePayments\Sdk\Communication
 */
abstract class RequestObject
{
    /**
     * @param string $name
     * @param mixed $value
     * @throws Exception
     */
    public function __set(string $name, mixed $value): void
    {
        throw new Exception('Cannot add new property ' . $name . ' to instances of class ' . static::class);
    }
}
