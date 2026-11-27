<?php

namespace OnlinePayments\Sdk\Logging;

use SplFileObject;
use Throwable;

/**
 * Class SplFileObjectLogger
 *
 * @package OnlinePayments\Sdk\Logging
 */
class SplFileObjectLogger implements CommunicatorLogger
{
    public const string DATE_FORMAT_STRING = DATE_ATOM;

    /**
     * @param SplFileObject $splFileObject
     */
    public function __construct(private readonly SplFileObject $splFileObject) {}

    /**
     * @return SplFileObject
     */
    public function getSplFileObject(): SplFileObject
    {
        return $this->splFileObject;
    }

    /**
     * @param string $message
     */
    #[\Override]
    public function log(string $message): void
    {
        $this->splFileObject->fwrite($this->getDatePrefix() . $message . PHP_EOL);
    }

    /**
     * @param string $message
     * @param Throwable $exception
     */
    #[\Override]
    public function logException(string $message, Throwable $exception): void
    {
        $this->splFileObject->fwrite($this->getDatePrefix() . $message . PHP_EOL . $exception . PHP_EOL);
    }

    /**
     * @return string
     */
    protected function getDatePrefix(): string
    {
        return date(static::DATE_FORMAT_STRING) . ' ';
    }
}
