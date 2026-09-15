<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ApiParameters extends DataObject
{
    /**
     * @var Amex|null
     */
    public ?Amex $amex = null;

    /**
     * @var PaymentProduct5002defaultBrandParameters|null
     */
    public ?PaymentProduct5002defaultBrandParameters $cb = null;

    /**
     * @var PaymentProduct5002defaultBrandParameters|null
     */
    public ?PaymentProduct5002defaultBrandParameters $eftpos = null;

    /**
     * @var Mastercard|null
     */
    public ?Mastercard $mastercard = null;

    /**
     * @var Visa|null
     */
    public ?Visa $visa = null;

    /**
     * @return Amex|null
     */
    public function getAmex(): ?Amex
    {
        return $this->amex;
    }

    /**
     * @param Amex|null $value
     */
    public function setAmex(?Amex $value): void
    {
        $this->amex = $value;
    }

    /**
     * @return PaymentProduct5002defaultBrandParameters|null
     */
    public function getCb(): ?PaymentProduct5002defaultBrandParameters
    {
        return $this->cb;
    }

    /**
     * @param PaymentProduct5002defaultBrandParameters|null $value
     */
    public function setCb(?PaymentProduct5002defaultBrandParameters $value): void
    {
        $this->cb = $value;
    }

    /**
     * @return PaymentProduct5002defaultBrandParameters|null
     */
    public function getEftpos(): ?PaymentProduct5002defaultBrandParameters
    {
        return $this->eftpos;
    }

    /**
     * @param PaymentProduct5002defaultBrandParameters|null $value
     */
    public function setEftpos(?PaymentProduct5002defaultBrandParameters $value): void
    {
        $this->eftpos = $value;
    }

    /**
     * @return Mastercard|null
     */
    public function getMastercard(): ?Mastercard
    {
        return $this->mastercard;
    }

    /**
     * @param Mastercard|null $value
     */
    public function setMastercard(?Mastercard $value): void
    {
        $this->mastercard = $value;
    }

    /**
     * @return Visa|null
     */
    public function getVisa(): ?Visa
    {
        return $this->visa;
    }

    /**
     * @param Visa|null $value
     */
    public function setVisa(?Visa $value): void
    {
        $this->visa = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->amex)) {
            $object->amex = $this->amex->toObject();
        }
        if (!is_null($this->cb)) {
            $object->cb = $this->cb->toObject();
        }
        if (!is_null($this->eftpos)) {
            $object->eftpos = $this->eftpos->toObject();
        }
        if (!is_null($this->mastercard)) {
            $object->mastercard = $this->mastercard->toObject();
        }
        if (!is_null($this->visa)) {
            $object->visa = $this->visa->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ApiParameters
    {
        parent::fromObject($object);
        if (property_exists($object, 'amex')) {
            if (!is_object($object->amex)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amex, true) . '\' is not an object');
            }
            $value = new Amex();
            $this->amex = $value->fromObject($object->amex);
        }
        if (property_exists($object, 'cb')) {
            if (!is_object($object->cb)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cb, true) . '\' is not an object');
            }
            $value = new PaymentProduct5002defaultBrandParameters();
            $this->cb = $value->fromObject($object->cb);
        }
        if (property_exists($object, 'eftpos')) {
            if (!is_object($object->eftpos)) {
                throw new UnexpectedValueException('value \'' . print_r($object->eftpos, true) . '\' is not an object');
            }
            $value = new PaymentProduct5002defaultBrandParameters();
            $this->eftpos = $value->fromObject($object->eftpos);
        }
        if (property_exists($object, 'mastercard')) {
            if (!is_object($object->mastercard)) {
                throw new UnexpectedValueException('value \'' . print_r($object->mastercard, true) . '\' is not an object');
            }
            $value = new Mastercard();
            $this->mastercard = $value->fromObject($object->mastercard);
        }
        if (property_exists($object, 'visa')) {
            if (!is_object($object->visa)) {
                throw new UnexpectedValueException('value \'' . print_r($object->visa, true) . '\' is not an object');
            }
            $value = new Visa();
            $this->visa = $value->fromObject($object->visa);
        }
        return $this;
    }
}
