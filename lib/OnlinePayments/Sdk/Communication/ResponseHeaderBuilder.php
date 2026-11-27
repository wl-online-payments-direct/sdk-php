<?php

namespace OnlinePayments\Sdk\Communication;

/**
 * Class ResponseHeaderBuilder
 *
 * @package OnlinePayments\Sdk\Communication
 */
class ResponseHeaderBuilder
{
    /** @var string */
    private string $headerString = '';

    /** @var array<int|string, string|string[]>|null */
    private ?array $headers = null;

    /** @var string|null */
    private ?string $contentType = null;

    /**
     * @param string $data
     */
    public function append(string $data): void
    {
        $this->headerString .= $data;
        $this->headers = null;
    }

    /**
     * @return array<int|string, string|string[]>
     */
    public function getHeaders(): array
    {
        if ($this->headers === null) {
            $this->headers = HttpHeaderHelper::parseRawHeaders(explode("\r\n", $this->headerString));
        }
        return $this->headers;
    }

    /**
     * @return string|null
     */
    public function getContentType(): ?string
    {
        if ($this->contentType === null) {
            $headers = $this->getHeaders();
            foreach ($headers as $headerKey => $headerValue) {
                if (strtolower($headerKey) === 'content-type') {
                    $this->contentType = is_array($headerValue) ? (string) reset($headerValue) : $headerValue;
                    break;
                }
            }
        }
        return $this->contentType;
    }
}
