<?php
namespace OnlinePayments\Sdk\Unit\Logging;

use OnlinePayments\Sdk\Logging\SplFileObjectLogger;
use PHPUnit\Framework\TestCase;
use SplTempFileObject;
use OnlinePayments\Sdk\Communication\ConnectionResponse;
use OnlinePayments\Sdk\Communication\InvalidResponseException;

/**
 * @group logging
 */
class SplFileObjectLoggerTest extends TestCase
{
    public function testSpFileObjectLogger_LogMessage_WritesMessageToResource()
    {
        $tempFileResource = new SplTempFileObject();
        $logger = new SplFileObjectLogger($tempFileResource);
        $message = "test log";

        $logger->log($message);

        $tempFileResource->fseek(26);
        $content = "";

        while (!$tempFileResource->eof()) {
            $content .= $tempFileResource->fgets();
        }

        $this->assertEquals($message . PHP_EOL, $content);
    }

    public function testSpFileObjectLogger_LogException_WritesMessageAndExceptionToResource()
    {
        $tempFileResource = new SplTempFileObject();
        $logger = new SplFileObjectLogger($tempFileResource);

        $message = "test log";
        $exception = new InvalidResponseException(new ConnectionResponse(500, array(), ''));
        $logger->logException($message, $exception);

        $tempFileResource->fseek(26);
        $content = "";

        while (!$tempFileResource->eof()) {
            $content .= $tempFileResource->fgets();
        }

        $this->assertEquals($message . PHP_EOL . $exception . PHP_EOL, $content);
    }

    public function testSpFileObjectLogger_LogUnicodeMessage_WritesUnicodeCorrectly()
    {
        $tempFileResource = new SplTempFileObject();
        $logger = new SplFileObjectLogger($tempFileResource);

        $message = "Unicode test: Привет, こんにちは, مرحبا, 😀";
        $logger->log($message);

        $tempFileResource->fseek(26);
        $content = "";
        while (!$tempFileResource->eof()) {
            $content .= $tempFileResource->fgets();
        }

        $this->assertEquals($message . PHP_EOL, $content);
    }

    public function testSplFileObjectLogger_Getter_ReturnsSameInstance(): void
    {
        $file = new SplTempFileObject();
        $logger = new SplFileObjectLogger($file);

        $this->assertSame($file, $logger->getSplFileObject());
    }
}
