<?php

namespace OnlinePayments\Sdk\Logging;

use UnexpectedValueException;
use Throwable;

/**
 * Class ResourceLogger
 *
 * @package OnlinePayments\Sdk\Logging
 */
class ResourceLogger implements CommunicatorLogger
{
    public const string DATE_FORMAT_STRING = DATE_ATOM;

    /** @var resource */
    protected $resource;

    /**
     * @param resource $resource
     */
    public function __construct($resource)
    {
        if (!is_resource($resource)) {
            throw new UnexpectedValueException('resource expected');
        }
        $this->resource = $resource;
    }

    /**
     * @param string $message
     */
    #[\Override]
    public function log(string $message): void
    {
        fwrite($this->resource, $this->getDatePrefix() . $message . PHP_EOL);
    }

    /**
     * @param string $message
     * @param Throwable $exception
     */
    #[\Override]
    public function logException(string $message, Throwable $exception): void
    {
        fwrite($this->resource, $this->getDatePrefix() . $message . PHP_EOL . $exception . PHP_EOL);
    }

    /**
     * @return string
     */
    protected function getDatePrefix(): string
    {
        return date(static::DATE_FORMAT_STRING) . ' ';
    }
}
