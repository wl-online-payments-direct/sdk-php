<?php
namespace Ingenico\Direct\Sdk;

use Exception;

/**
 * Class RequestObject
 *
 * @package Ingenico\Direct\Sdk
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
