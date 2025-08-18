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
     * @return array
     */
    public function getHeaders(): array;

    /**
     * @param string $name
     * @return mixed
     */
    public function getHeaderValue(string $name);

    /**
     * @return string
     */
    public function getBody(): string;
}
