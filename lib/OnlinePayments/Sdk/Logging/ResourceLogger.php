<?php
namespace OnlinePayments\Sdk\Logging;

use Exception;
use UnexpectedValueException;

/**
 * Class ResourceLogger
 *
 * @package OnlinePayments\Sdk\Logging
 */
class ResourceLogger implements CommunicatorLogger
{
    /** */
    const DATE_FORMAT_STRING = DATE_ATOM;

    /** @var resource */
    protected $resource;

    /** @param resource $resource */
    public function __construct($resource)
    {
        if (!is_resource($resource)) {
            throw new UnexpectedValueException('resource expected');
        }
        $this->resource = $resource;
    }

    /** @inheritdoc */
    public function log(string $message): void
    {
        fwrite($this->resource, $this->getDatePrefix() . $message . PHP_EOL);
    }

    /** @inheritdoc */
    public function logException(string $message, Exception $exception): void
    {
        fwrite($this->resource, $this->getDatePrefix() . $message . PHP_EOL . $exception . PHP_EOL);
    }

    /** @return string */
    protected function getDatePrefix(): string
    {
        return date(static::DATE_FORMAT_STRING) . ' ';
    }
}
