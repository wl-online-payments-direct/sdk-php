<?php

namespace OnlinePayments\Sdk\Unit\Configuration;

use DateTime;
use OnlinePayments\Sdk\CallContext;
use PHPUnit\Framework\TestCase;

/**
 * @group configuration
 */
class CallContextTest extends TestCase
{
    public function testCallContext_IdempotenceKey_SetAndGet_ReturnsSameValue()
    {
        $context = new CallContext();

        $context->setIdempotenceKey('test-key');

        $this->assertSame('test-key', $context->getIdempotenceKey());
    }

    public function testCallContext_IdempotenceRequestTimestamp_SetAndGet_ReturnsSameValue()
    {
        $context = new CallContext();

        $context->setIdempotenceRequestTimestamp('2026-04-15T10:00:00Z');

        $this->assertSame('2026-04-15T10:00:00Z', $context->getIdempotenceRequestTimestamp());
    }

    public function testCallContext_IdempotenceResponseDateTime_SetAndGet_ReturnsSameValue()
    {
        $context = new CallContext();
        $dateTime = new DateTime('2026-04-15 10:00:00');

        $context->setIdempotenceResponseDateTime($dateTime);

        $this->assertSame($dateTime, $context->getIdempotenceResponseDateTime());
    }

    public function testCallContext_GzipFlag_SetAndGet_ReturnsSameValue()
    {
        $context = new CallContext();

        $context->setGzip(true);

        $this->assertTrue($context->getGzip());
    }
}
