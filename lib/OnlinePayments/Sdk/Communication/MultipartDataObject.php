<?php

namespace OnlinePayments\Sdk\Communication;

use Exception;

/**
 * Class MultipartDataObject
 *
 * @package OnlinePayments\Sdk\Communication
 */
abstract class MultipartDataObject
{
    /**
     * @return MultipartFormDataObject
     */
    abstract public function toMultipartFormDataObject(): MultipartFormDataObject;

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
