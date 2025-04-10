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
    private $splFileObject;

    /** @param SplFileObject $splFileObject */
    public function __construct(SplFileObject $splFileObject)
    {
        $this->splFileObject = $splFileObject;
    }

    /** @return SplFileObject */
    public function getSplFileObject()
    {
        return $this->splFileObject;
    }

    /** @inheritdoc */
    public function log($message)
    {
        $this->splFileObject->fwrite($this->getDatePrefix() . $message . PHP_EOL);
    }

    /** @inheritdoc */
    public function logException($message, Exception $exception)
    {
        $this->splFileObject->fwrite($this->getDatePrefix() . $message . PHP_EOL . $exception . PHP_EOL);
    }

    /** @return string */
    protected function getDatePrefix()
    {
        return date(static::DATE_FORMAT_STRING) . ' ';
    }
}
