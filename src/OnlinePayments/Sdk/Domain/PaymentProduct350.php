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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->appSwitchLink)) {
            $object->appSwitchLink = $this->appSwitchLink;
        }
        if (!is_null($this->paymentRequestToken)) {
            $object->paymentRequestToken = $this->paymentRequestToken;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProduct350
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
