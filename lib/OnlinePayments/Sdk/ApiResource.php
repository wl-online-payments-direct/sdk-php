<?php

namespace OnlinePayments\Sdk;

use InvalidArgumentException;

/**
 * Class ApiResource
 *
 * @package OnlinePayments\Sdk
 */
class ApiResource
{
    /**
     * Creates a new proxy object for an API resource.
     *
     * @param ApiResource|null $parent The parent resource.
     * @param array<string, string|int> $context An associative array that maps URI parameters to values.
     */
    public function __construct(
        private readonly ?ApiResource $parent = null,
        protected array $context = [],
    ) {}

    /**
     * Returns the connection associated with this resource.
     *
     * @return CommunicatorInterface
     */
    protected function getCommunicator(): CommunicatorInterface
    {
        return $this->parent->getCommunicator();
    }

    /**
     * Returns the client headers with this resource.
     *
     * @return string
     */
    protected function getClientMetaInfo(): string
    {
        return $this->parent->getClientMetaInfo();
    }

    /**
     * Converts a URI template to a fully qualified URI by replacing
     * URI parameters ('{...}') by their corresponding value in
     * $this->context. Each value is percent-encoded as a single path segment.
     *
     * @param string $template The URL template to instantiate.
     * @return string The URL in which the URI parameters have been replaced.
     * @throws InvalidArgumentException
     */
    protected function instantiateUri(string $template): string
    {
        // We assume that API URLs follow the recommendations in
        // RFC 1738, and therefore do not use unencoded { and }.
        foreach ($this->context as $name => $value) {
            $placeholder = '{' . $name . '}';
            if (str_contains($template, $placeholder)) {
                $template = str_replace($placeholder, self::encodePathSegment($name, $value), $template);
            }
        }
        return $template;
    }

    /**
     * @param string $name
     * @param string|int $value
     * @return string
     * @throws InvalidArgumentException
     */
    private static function encodePathSegment(string $name, string|int $value): string
    {
        $segment = (string) $value;
        if ($segment === '') {
            throw new InvalidArgumentException($name . ' is required');
        }
        if ($segment === '.' || $segment === '..') {
            throw new InvalidArgumentException($name . " must not be '" . $segment . "'");
        }
        return rawurlencode($segment);
    }
}
