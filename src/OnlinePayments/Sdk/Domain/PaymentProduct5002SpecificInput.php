<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct5002SpecificInput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $checkoutResponseSignature;

    /**
     * @var string
     */
    private $creditCardBrand;

    /**
     * @var string
     */
    private $dpaId;

    // Methods
    /**
     * @return string
     */
    public function getCheckoutResponseSignature()
    {
        return $this->checkoutResponseSignature;
    }
    /**
     * @var string
     */
    public function setCheckoutResponseSignature($value)
    {
        $this->checkoutResponseSignature = $value;
    }

    /**
     * @return string
     */
    public function getCreditCardBrand()
    {
        return $this->creditCardBrand;
    }
    /**
     * @var string
     */
    public function setCreditCardBrand($value)
    {
        $this->creditCardBrand = $value;
    }

    /**
     * @return string
     */
    public function getDpaId()
    {
        return $this->dpaId;
    }
    /**
     * @var string
     */
    public function setDpaId($value)
    {
        $this->dpaId = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->checkoutResponseSignature !== null) {
            $object->checkoutResponseSignature = $this->checkoutResponseSignature;
        }
        if ($this->creditCardBrand !== null) {
            $object->creditCardBrand = $this->creditCardBrand;
        }
        if ($this->dpaId !== null) {
            $object->dpaId = $this->dpaId;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'checkoutResponseSignature')) {
            $this->checkoutResponseSignature = $object->checkoutResponseSignature;
        }
        if (property_exists($object, 'creditCardBrand')) {
            $this->creditCardBrand = $object->creditCardBrand;
        }
        if (property_exists($object, 'dpaId')) {
            $this->dpaId = $object->dpaId;
        }
        return $this;
    }
}
