<?php

namespace OnlinePayments\Sdk\Communication;

/**
 * Interface ConnectionResponseInterface
 *
 * @package OnlinePayments\Sdk\Communication
 */
interface ConnectionResponseInterface
{
    /**
     * @return int
     */
    public function getHttpStatusCode(): int;

    /**
     * @return array<int|string, string|string[]>
     */
    public function getHeaders(): array;

    /**
     * @param string $name
     * @return string The value of the header with the given name (case-insensitive); the first value if the header
     *                occurs more than once, or an empty string if there is no such header.
     */
    public function getHeaderValue(string $name);

    /**
     * @return string
     */
    public function getBody(): string;
}
