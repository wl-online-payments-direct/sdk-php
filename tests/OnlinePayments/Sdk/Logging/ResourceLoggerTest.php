<?php
namespace OnlinePayments\Sdk\Logging;

use PHPUnit\Framework\TestCase;
use OnlinePayments\Sdk\Communication\ConnectionResponse;
use OnlinePayments\Sdk\Communication\InvalidResponseException;

/**
 * @group logging
 */
class ResourceLoggerTest extends TestCase
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
        $exception = new InvalidResponseException(new ConnectionResponse(500, array(), ''));
        $logger->logException($message, $exception);
        // 25 is length of DATE_ATOM
        fseek($temp, 26);
        $content = fread($temp, 4096);
        $this->assertEquals($message . PHP_EOL . $exception . PHP_EOL, $content);
    }
}
