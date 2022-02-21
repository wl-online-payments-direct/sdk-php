<?php

namespace OnlinePayments\Sdk;

use Exception;

/**
 * Class CommunicatorLogger
 *
 * @package OnlinePayments\Sdk
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
