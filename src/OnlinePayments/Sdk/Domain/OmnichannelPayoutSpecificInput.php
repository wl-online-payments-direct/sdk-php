<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class OmnichannelPayoutSpecificInput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $operatorId = null;

    /**
     * @var string|null
     */
    public ?string $paymentId = null;

    /**
     * @return string|null
     */
    public function getOperatorId(): ?string
    {
        return $this->operatorId;
    }

    /**
     * @param string|null $value
     */
    public function setOperatorId(?string $value): void
    {
        $this->operatorId = $value;
    }

    /**
     * @return string|null
     */
    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentId(?string $value): void
    {
        $this->paymentId = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->operatorId)) {
            $object->operatorId = $this->operatorId;
        }
        if (!is_null($this->paymentId)) {
            $object->paymentId = $this->paymentId;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): OmnichannelPayoutSpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'operatorId')) {
            $this->operatorId = $object->operatorId;
        }
        if (property_exists($object, 'paymentId')) {
            $this->paymentId = $object->paymentId;
        }
        return $this;
    }
}
