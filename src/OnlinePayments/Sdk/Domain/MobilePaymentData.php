<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MobilePaymentData extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $dpan = null;

    /**
     * @var string|null
    */
    public ?string $expiryDate = null;

    /**
     * @return string|null
    */
    public function getDpan(): ?string
    {
        return $this->dpan;
    }

    /**
     * @param string|null $value
    */
    public function setDpan(?string $value): void
    {
        $this->dpan = $value;
    }

    /**
     * @param string|null $value
     * @return MobilePaymentData
    */
    public function withDpan(?string $value): MobilePaymentData
    {
        $this->dpan = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getExpiryDate(): ?string
    {
        return $this->expiryDate;
    }

    /**
     * @param string|null $value
    */
    public function setExpiryDate(?string $value): void
    {
        $this->expiryDate = $value;
    }

    /**
     * @param string|null $value
     * @return MobilePaymentData
    */
    public function withExpiryDate(?string $value): MobilePaymentData
    {
        $this->expiryDate = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->dpan)) {
            $object->dpan = $this->dpan;
        }
        if (!is_null($this->expiryDate)) {
            $object->expiryDate = $this->expiryDate;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): MobilePaymentData
    {
        parent::fromObject($object);
        if (property_exists($object, 'dpan')) {
            $this->dpan = $object->dpan;
        }
        if (property_exists($object, 'expiryDate')) {
            $this->expiryDate = $object->expiryDate;
        }
        return $this;
    }
}
