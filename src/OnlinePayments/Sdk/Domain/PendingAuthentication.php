<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PendingAuthentication extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $pollingUrl = null;

    /**
     * @return string|null
     */
    public function getPollingUrl(): ?string
    {
        return $this->pollingUrl;
    }

    /**
     * @param string|null $value
     */
    public function setPollingUrl(?string $value): void
    {
        $this->pollingUrl = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPollingUrl(?string $value): static
    {
        $this->pollingUrl = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->pollingUrl !== null) {
            $object->pollingUrl = $this->pollingUrl;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'pollingUrl')) {
            $this->pollingUrl = $object->pollingUrl;
        }
        return $this;
    }
}
