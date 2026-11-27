<?php

namespace OnlinePayments\Sdk\Communication;

/**
 * Class ResponseBuilder
 *
 * @package OnlinePayments\Sdk\Communication
 */
class ResponseBuilder
{
    /** @var int */
    private int $httpStatusCode = 0;

    /** @var array<int|string, string|string[]> */
    private array $headers = [];

    /** @var string */
    private string $body = '';

    /**
     * @param int $httpStatusCode
     */
    public function setHttpStatusCode(int $httpStatusCode): void
    {
        $this->httpStatusCode = $httpStatusCode;
    }

    /**
     * @param array<int|string, string|string[]> $headers
     */
    public function setHeaders(array $headers): void
    {
        $this->headers = $headers;
    }

    /**
     * @param string $data
     */
    public function appendBody(string $data): void
    {
        $this->body .= $data;
    }

    /**
     * @param string $body
     */
    public function setBody(string $body): void
    {
        $this->body = $body;
    }

    /**
     * @return ConnectionResponse
     */
    public function getResponse(): ConnectionResponse
    {
        return new ConnectionResponse($this->httpStatusCode, $this->headers, $this->body);
    }
}
