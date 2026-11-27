<?php

namespace OnlinePayments\Sdk\Communication;

use InvalidArgumentException;

/**
 * Class HttpHeaderHelper
 *
 * @package OnlinePayments\Sdk\Communication
 */
class HttpHeaderHelper
{
    private function __construct() {}

    /**
     * Parses a raw array of HTTP headers into an associative array with the same structure as the output
     * of the get_headers method using the $format = 1 parameter
     *
     * @param string[] $rawHeaders
     * @return array<int|string, string|string[]>
     */
    public static function parseRawHeaders(array $rawHeaders): array
    {
        $headers = [];
        $key = '';
        foreach ($rawHeaders as $rawHeader) {
            $rawHeaderLineParts = explode(':', $rawHeader, 2);
            if (isset($rawHeaderLineParts[1])) {
                $key = $rawHeaderLineParts[0];
                $value = trim($rawHeaderLineParts[1]);
                if (!isset($headers[$key])) {
                    $headers[$key] = $value;
                } elseif (is_array($headers[$key])) {
                    $headers[$key][] = $value;
                } else {
                    $headers[$key] = [$headers[$key], $value];
                }
            } elseif (strlen($rawHeaderLineParts[0]) > 0) {
                if (!$key) {
                    $headers[0] = trim($rawHeaderLineParts[0]);
                } elseif (str_starts_with($rawHeaderLineParts[0], ' ') || str_starts_with($rawHeaderLineParts[0], "\t")) {
                    if (is_array($headers[$key])) {
                        $lastValue = array_pop($headers[$key]);
                        $headers[$key][] = $lastValue . "\r\n" . rtrim($rawHeaderLineParts[0]);
                    } else {
                        $headers[$key] .= "\r\n" . rtrim($rawHeaderLineParts[0]);
                    }
                }
            }
        }
        return $headers;
    }

    /**
     * Generates an array of raw headers from an associative array of headers with the same structure as the output
     * of the get_headers method using the $format = 1 parameter
     *
     * @param array<int|string, string|string[]> $headers
     * @return string[]
     */
    public static function generateRawHeaders(array $headers): array
    {
        $rawHeaders = [];
        foreach ($headers as $key => $values) {
            if ($key !== 0 && (str_contains((string) $key, "\r") || str_contains((string) $key, "\n"))) {
                throw new InvalidArgumentException('HTTP header names must not contain line breaks');
            }
            if (!is_array($values)) {
                $values = [$values];
            }
            foreach ($values as $value) {
                if (str_contains($value, "\r") || str_contains($value, "\n")) {
                    throw new InvalidArgumentException('HTTP header values must not contain line breaks');
                }
                if ($key !== 0) {
                    $rawHeader = $key . ': ' . $value;
                } else {
                    $rawHeader = $value;
                }
                $rawHeaders[] = $rawHeader;
            }
        }
        return $rawHeaders;
    }
}
