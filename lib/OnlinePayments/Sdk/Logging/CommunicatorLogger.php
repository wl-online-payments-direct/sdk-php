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
    public function log($message);

    /**
     * @param string $message
     * @param Exception $exception
     */
    public function logException($message, Exception $exception);
}
