<?php
namespace Ingenico\Direct\Sdk;

use Exception;

/**
 * Class MultipartDataObject
 *
 * @package Ingenico\Direct\Sdk
 */
abstract class MultipartDataObject
{
    /**
     * @return MultipartFormDataObject
     */
    public abstract function toMultipartFormDataObject();

    /**
     * @param $name
     * @param $value
     * @throws Exception
     */
    public function __set($name, $value)
    {
        throw new Exception('Cannot add new property ' . $name . ' to instances of class ' . get_class($this));
    }
}
