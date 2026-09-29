<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SurchargeCalculationCard extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $cardNumber = null;

    /**
     * @var int|null
    */
    public ?int $paymentProductId = null;

    /**
     * @return string|null
    */
    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    /**
     * @param string|null $value
    */
    public function setCardNumber(?string $value): void
    {
        $this->cardNumber = $value;
    }

    /**
     * @param string|null $value
     * @return SurchargeCalculationCard
    */
    public function withCardNumber(?string $value): SurchargeCalculationCard
    {
        $this->cardNumber = $value;
        return $this;
    }

    /**
     * @return int|null
    */
    public function getPaymentProductId(): ?int
    {
        return $this->paymentProductId;
    }

    /**
     * @param int|null $value
    */
    public function setPaymentProductId(?int $value): void
    {
        $this->paymentProductId = $value;
    }

    /**
     * @param int|null $value
     * @return SurchargeCalculationCard
    */
    public function withPaymentProductId(?int $value): SurchargeCalculationCard
    {
        $this->paymentProductId = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->cardNumber)) {
            $object->cardNumber = $this->cardNumber;
        }
        if (!is_null($this->paymentProductId)) {
            $object->paymentProductId = $this->paymentProductId;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): SurchargeCalculationCard
    {
        parent::fromObject($object);
        if (property_exists($object, 'cardNumber')) {
            $this->cardNumber = $object->cardNumber;
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        return $this;
    }
}
