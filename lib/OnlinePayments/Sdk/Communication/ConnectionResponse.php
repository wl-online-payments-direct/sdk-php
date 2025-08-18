<?php

namespace OnlinePayments\Sdk\Communication;

/**
 * Class ConnectionResponse
 *
 * @package OnlinePayments\Sdk\Communication
 */
class ConnectionResponse implements ConnectionResponseInterface
{
    /** @var int */
    private int $httpStatusCode;

    /** @var array */
    private array $headers;

    /** @var array */
    private array $lowerCasedHeaderKeyMap;

    /** @var string */
    private string $body;

    /**
     * @param int $httpStatusCode
     * @param array $headers
     * @param string $body
     */
    public function __construct(int $httpStatusCode, array $headers, string $body)
    {
        $this->httpStatusCode = $httpStatusCode;
        $this->headers = $headers;
        $this->lowerCasedHeaderKeyMap = array();
        foreach (array_keys($headers) as $headerKey) {
            $this->lowerCasedHeaderKeyMap[strtolower($headerKey)] = $headerKey;
        }
        $this->body = $body;
    }

    /**
     * @return int
     */
    public function getHttpStatusCode(): int
    {
        return $this->httpStatusCode;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @param string $name
     * @return string|array
     */
    public function getHeaderValue(string $name)
    {
        $lowerCasedName = strtolower($name);
        if (array_key_exists($lowerCasedName, $this->lowerCasedHeaderKeyMap)) {
            return $this->headers[$this->lowerCasedHeaderKeyMap[$lowerCasedName]];
        }
        return '';
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param array $headers
     * @return string|null The value of the filename parameter of the Content-Disposition header from the given headers,
     *                     or null if there was no such header or parameter.
     */
    public static function getDispositionFilename(array $headers): ?string
    {
        $headerValue = null;
        foreach ($headers as $key => $value)
        {
            if (strtolower($key) === 'content-disposition') {
                $headerValue = $value;
                break;
            }
        }
        if (!$headerValue) {
            return null;
        }
        if (preg_match('/(?i)(?:^|;)\s*fileName\s*=\s*(.*?)\s*(?:;|$)/', $headerValue, $matches)) {
            $filename = $matches[1];
            return self::trimQuotes($filename);
        }
        return null;
    }

    private static function trimQuotes(string $filename): string
    {
        $len = strlen($filename);
        if ($len < 2) {
            return $filename;
        }
        if ((strrpos($filename, '"', -$len) === 0 && strpos($filename, '"', $len - 1) === $len - 1)
            || (strrpos($filename, "'", -$len) === 0 && strpos($filename, "'", $len - 1) === $len - 1)) {
            return substr($filename, 1, $len - 2);
        }
        return $filename;
    }
}
