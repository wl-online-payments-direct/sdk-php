<?php
namespace OnlinePayments\Sdk\Logging;

use Exception;
use SplFileObject;

/**
 * Class SplFileObjectLogger
 *
 * @package OnlinePayments\Sdk\Logging
 */
class SplFileObjectLogger implements CommunicatorLogger
{
    /** */
    const DATE_FORMAT_STRING = DATE_ATOM;

    /** @var SplFileObject */
    private SplFileObject $splFileObject;

    /** @param SplFileObject $splFileObject */
    public function __construct(SplFileObject $splFileObject)
    {
        $this->splFileObject = $splFileObject;
    }

    /** @return SplFileObject */
    public function getSplFileObject(): SplFileObject
    {
        return $this->splFileObject;
    }

    /** @inheritdoc */
    public function log(string $message): void
    {
        $this->splFileObject->fwrite($this->getDatePrefix() . $message . PHP_EOL);
    }

    /** @inheritdoc */
    public function logException(string $message, Exception $exception): void
    {
        $this->splFileObject->fwrite($this->getDatePrefix() . $message . PHP_EOL . $exception . PHP_EOL);
    }

    /** @return string */
    protected function getDatePrefix(): string
    {
        return date(static::DATE_FORMAT_STRING) . ' ';
    }
}
