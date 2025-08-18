<?php
namespace OnlinePayments\Sdk\Logging;

use Exception;

/**
 * Class CommunicatorLogger
 *
 * @package OnlinePayments\Sdk\Logging
 */
interface CommunicatorLogger
{
    /**
     * @param string $message
     */
    public function log(string $message): void;

    /**
     * @param string $message
     * @param Exception $exception
     */
    public function logException(string $message, Exception $exception): void;
}
