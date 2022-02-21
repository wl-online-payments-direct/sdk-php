<?php

namespace OnlinePayments\Sdk;

use Exception;

/**
 * Class RequestObject
 *
 * @package OnlinePayments\Sdk
 */
abstract class RequestObject
{
    /**
     * @param $name
     * @param $value
     * @throws Exception
     */
    public function __set($name, $value)
    {
        throw new Exception('Cannot add new property ' . $name . ' to instances of class ' . get_class($this));
    }

    /**
     * @return array
     */
    abstract public function toArray();
}
