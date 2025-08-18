<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->message)) {
            $object->message = $this->message;
        }
        if (!is_null($this->pollingUrl)) {
            $object->pollingUrl = $this->pollingUrl;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProduct5001
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
