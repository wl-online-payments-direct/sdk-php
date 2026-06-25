<?php

namespace OnlinePayments\Sdk\Unit\Communication\Http;

use OnlinePayments\Sdk\BodyHandler;
use PHPUnit\Framework\TestCase;

/**
 * @group communication
 * @group http
 */
class BodyHandlerTest extends TestCase
{
    public function testBodyHandler_HandleBodyPart_FirstCall_InitializesOnceAndProcessesAllParts()
    {
        $handler = new class extends BodyHandler {
            public array $initHeaders = [];
            public array $parts = [];
            public int $cleanupCount = 0;

            protected function initialize(array $headers): void
            {
                $this->initHeaders = $headers;
            }

            protected function doHandleBodyPart(string $bodyPart): void
            {
                $this->parts[] = $bodyPart;
            }

            protected function doCleanup(): void
            {
                $this->cleanupCount++;
            }
        };

        $headers = ['Content-Type' => 'application/json'];

        $handler->handleBodyPart('part1', $headers);
        $handler->handleBodyPart('part2', $headers);

        $this->assertEquals($headers, $handler->initHeaders);
        $this->assertEquals(['part1', 'part2'], $handler->parts);

        $handler->close();

        $this->assertEquals(1, $handler->cleanupCount);
    }

    public function testBodyHandler_Close_AfterHandlingParts_ResetsInitializationState()
    {
        $handler = new class extends BodyHandler {
            public int $initCount = 0;

            protected function initialize(array $headers): void
            {
                $this->initCount++;
            }
        };

        $handler->handleBodyPart('a', []);
        $handler->close();
        $handler->handleBodyPart('b', []);

        $this->assertEquals(2, $handler->initCount);
    }
}
