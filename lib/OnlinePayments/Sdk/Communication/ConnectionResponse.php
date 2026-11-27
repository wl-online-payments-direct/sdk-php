<?php

namespace OnlinePayments\Sdk\Communication;

/**
 * Class ConnectionResponse
 *
 * @package OnlinePayments\Sdk\Communication
 */
class ConnectionResponse implements ConnectionResponseInterface
{
    /** @var array<string, int|string> */
    private readonly array $lowerCasedHeaderKeyMap;

    /**
     * @param int $httpStatusCode
     * @param array<int|string, string|string[]> $headers
     * @param string $body
     */
    public function __construct(
        private readonly int $httpStatusCode,
        private readonly array $headers,
        private readonly string $body,
    ) {
        $lowerCasedHeaderKeyMap = [];
        foreach (array_keys($headers) as $headerKey) {
            $lowerCasedHeaderKeyMap[strtolower($headerKey)] = $headerKey;
        }
        $this->lowerCasedHeaderKeyMap = $lowerCasedHeaderKeyMap;
    }

    /**
     * @return int
     */
    #[\Override]
    public function getHttpStatusCode(): int
    {
        return $this->httpStatusCode;
    }

    /**
     * @return array<int|string, string|string[]>
     */
    #[\Override]
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @param string $name
     * @return string The value of the header with the given name (case-insensitive); the first value if the header
     *                occurs more than once, or an empty string if there is no such header.
     */
    #[\Override]
    public function getHeaderValue(string $name): string
    {
        $lowerCasedName = strtolower($name);
        if (!array_key_exists($lowerCasedName, $this->lowerCasedHeaderKeyMap)) {
            return '';
        }
        $value = $this->headers[$this->lowerCasedHeaderKeyMap[$lowerCasedName]];
        if (is_array($value)) {
            return $value === [] ? '' : (string) reset($value);
        }
        return $value;
    }

    /**
     * @return string
     */
    #[\Override]
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param array<int|string, string|string[]> $headers
     * @return string|null The value of the filename parameter of the Content-Disposition header from the given headers,
     *                     or null if there was no such header or parameter.
     */
    public static function getDispositionFilename(array $headers): ?string
    {
        $headerValue = null;
        foreach ($headers as $key => $value) {
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

    /**
     * @param string $filename
     * @return string
     */
    private static function trimQuotes(string $filename): string
    {
        $len = strlen($filename);
        if ($len < 2) {
            return $filename;
        }
        if (
            (str_starts_with($filename, '"') && str_ends_with($filename, '"'))
            || (str_starts_with($filename, "'") && str_ends_with($filename, "'"))
        ) {
            return substr($filename, 1, $len - 2);
        }
        return $filename;
    }
}
