<?php

namespace OnlinePayments\Sdk\Webhooks;

use RuntimeException;

/**
 * Class ApiVersionMismatchException
 *
 * @package OnlinePayments\Sdk\Webhooks
 */
class ApiVersionMismatchException extends RuntimeException
{
    /**
     * @param string|null $eventApiVersion The API version of the event; null if the event does not contain one.
     * @param string $sdkApiVersion
     */
    public function __construct(
        private readonly ?string $eventApiVersion,
        private readonly string $sdkApiVersion,
    ) {
        parent::__construct('event API version ' . $eventApiVersion . ' is not compatible with SDK API version ' . $sdkApiVersion);
    }

    /**
     * @return string|null
     */
    public function getEventApiVersion(): ?string
    {
        return $this->eventApiVersion;
    }

    /**
     * @return string
     */
    public function getSdkApiVersion(): string
    {
        return $this->sdkApiVersion;
    }
}
