<?php
namespace Ingenico\Direct\Sdk;

use Exception;

/**
 * Class CommunicatorLogger
 *
 * @package Ingenico\Direct\Sdk
 */
interface CommunicatorLogger
{
    /**
     * @param $message
     */
    public function log($message);

    /**
     * @param $message
     * @param Exception $exception
     */
    public function logException($message, Exception $exception);
}
