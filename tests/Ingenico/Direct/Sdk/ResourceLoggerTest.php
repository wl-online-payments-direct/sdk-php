<?php
namespace Ingenico\Direct\Sdk;

use Ingenico\Direct\Sdk\Domain\ErrorResponse;
use PHPUnit_Framework_TestCase;

/**
 * @group logging
 */
class ResourceLoggerTest extends PHPUnit_Framework_TestCase
{
    public function testLog()
    {
        $temp = tmpfile();
        $logger = new ResourceLogger($temp);
        $message = "test log";
        $logger->log($message);
        // 25 is length of DATE_ATOM
        fseek($temp, 26);
        $content = fread($temp, 4096);
        $this->assertEquals($message . PHP_EOL, $content);
    }

    public function testLogException()
    {
        $temp = tmpfile();
        $logger = new ResourceLogger($temp);
        $message = "test log";
        $exception = new ResponseException(500, new ErrorResponse());
        $logger->logException($message, $exception);
        // 25 is length of DATE_ATOM
        fseek($temp, 26);
        $content = fread($temp, 4096);
        $this->assertEquals($message . PHP_EOL . (string) $exception . PHP_EOL, $content);
    }
}
