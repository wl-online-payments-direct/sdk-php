<?php

namespace OnlinePayments\Sdk\TestUtil\Unit;

use RuntimeException;

class MockUtil
{
    /**
     * @var int|null PID of the mock server
     */
    private ?int $mockServerPid = null;

    /**
     * Start a PHP built-in mock HTTP server for a specific test.
     * @return string Base URL of the mock server
     * @throws RuntimeException
     */
    public  function startMockServerForTest(): string
    {
        $mockServerScript = __DIR__ . '/../../../../mockHttpServer.php';
        if (!file_exists($mockServerScript)) {
            throw new RuntimeException("Mock server script not found: $mockServerScript");
        }

        $cmd = sprintf(
            "php -S 127.0.0.1:8080 %s > /dev/null 2>&1 & echo $!",
            escapeshellarg($mockServerScript)
        );

        $pid = (int)shell_exec($cmd);
        if ($pid === 0) {
            throw new RuntimeException("Failed to start mock server");
        }

        $this->mockServerPid = $pid;
        usleep(200_000); // Give server a moment to start

        return 'http://127.0.0.1:8080';
    }

    /**
     * Stop the mock server for a test
     */
    public function stopMockServerForTest(): void
    {
        if ($this->mockServerPid) {
            exec("kill {$this->mockServerPid}");
            $this->mockServerPid = null;
        }
    }
}
