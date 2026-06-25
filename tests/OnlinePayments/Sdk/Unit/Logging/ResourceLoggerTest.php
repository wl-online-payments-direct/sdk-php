<?php
namespace OnlinePayments\Sdk\Unit\Logging;

use OnlinePayments\Sdk\Logging\ResourceLogger;
use PHPUnit\Framework\TestCase;
use OnlinePayments\Sdk\Communication\ConnectionResponse;
use OnlinePayments\Sdk\Communication\InvalidResponseException;

/**
 * @group logging
 */
class ResourceLoggerTest extends TestCase
{
    public function testResourceLogger_LogMessage_WritesMessageToResource()
    {
        $tempFileResource = tmpfile();
        $logger = new ResourceLogger($tempFileResource);
        $message = "test log";

        $logger->log($message);

        fseek($tempFileResource, 26);
        $content = fread($tempFileResource, 4096);

        $this->assertEquals($message . PHP_EOL, $content);
    }

    public function testResourceLogger_LogException_WritesMessageAndExceptionToResource()
    {
        $tempFileResource = tmpfile();
        $logger = new ResourceLogger($tempFileResource);
        $message = "test log";
        $exception = new InvalidResponseException(
            new ConnectionResponse(500, [], '')
        );

        $logger->logException($message, $exception);

        fseek($tempFileResource, 26);
        $content = fread($tempFileResource, 4096);

        $this->assertEquals(
            $message . PHP_EOL . $exception . PHP_EOL,
            $content
        );
    }

    public function testResourceLogger_LogUnicodeMessage_WritesUnicodeCorrectly()
    {
        $tempFileResource = tmpfile();
        $logger = new ResourceLogger($tempFileResource);

        $message = "Unicode test: Привет, こんにちは, مرحبا, 😀";
        $logger->log($message);

        fseek($tempFileResource, 26);
        $content = fread($tempFileResource, 4096);

        $this->assertEquals($message . PHP_EOL, $content);
    }

    public function testResourceLogger_Constructor_WithInvalidResource_ThrowsException(): void
    {
        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage('resource expected');

        /** @var mixed $invalid */
        $invalid = 'not-a-resource';

        new ResourceLogger($invalid);
    }
}
