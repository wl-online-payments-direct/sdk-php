<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct350 extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $appSwitchLink = null;

    /**
     * @var string|null
     */
    public ?string $paymentRequestToken = null;

    /**
     * @return string|null
     */
    public function getAppSwitchLink(): ?string
    {
        return $this->appSwitchLink;
    }

    /**
     * @param string|null $value
     */
    public function setAppSwitchLink(?string $value): void
    {
        $this->appSwitchLink = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withAppSwitchLink(?string $value): static
    {
        $this->appSwitchLink = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentRequestToken(): ?string
    {
        return $this->paymentRequestToken;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentRequestToken(?string $value): void
    {
        $this->paymentRequestToken = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPaymentRequestToken(?string $value): static
    {
        $this->paymentRequestToken = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->appSwitchLink !== null) {
            $object->appSwitchLink = $this->appSwitchLink;
        }
        if ($this->paymentRequestToken !== null) {
            $object->paymentRequestToken = $this->paymentRequestToken;
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
        if (property_exists($object, 'appSwitchLink')) {
            $this->appSwitchLink = $object->appSwitchLink;
        }
        if (property_exists($object, 'paymentRequestToken')) {
            $this->paymentRequestToken = $object->paymentRequestToken;
        }
        return $this;
    }
}
