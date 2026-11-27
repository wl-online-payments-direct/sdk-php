<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 *
 * @deprecated Deprecated by pendingAuthentication. Contains the third party data for payment product 5001 (Bizum)
 */
class PaymentProduct5001 extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $message = null;

    /**
     * @var string|null
     */
    public ?string $pollingUrl = null;

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $value
     */
    public function setMessage(?string $value): void
    {
        $this->message = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withMessage(?string $value): static
    {
        $this->message = $value;
        return $this;
    }

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
        if ($this->message !== null) {
            $object->message = $this->message;
        }
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
        if (property_exists($object, 'message')) {
            $this->message = $object->message;
        }
        if (property_exists($object, 'pollingUrl')) {
            $this->pollingUrl = $object->pollingUrl;
        }
        return $this;
    }
}
