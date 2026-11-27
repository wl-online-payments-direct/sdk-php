<?php

namespace OnlinePayments\Sdk\Logging;

use Throwable;

/**
 * Interface CommunicatorLogger
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
     * @param Throwable $exception
     */
    public function logException(string $message, Throwable $exception): void;
}
