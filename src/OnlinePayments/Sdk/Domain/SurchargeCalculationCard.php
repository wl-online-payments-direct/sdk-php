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
class SurchargeCalculationCard extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $cardNumber;

    /**
     * @var int
     */
    private $paymentProductId;

    // Methods
    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }
    /**
     * @var string
     */
    public function setCardNumber($value)
    {
        $this->cardNumber = $value;
    }

    /**
     * @return int
     */
    public function getPaymentProductId()
    {
        return $this->paymentProductId;
    }
    /**
     * @var int
     */
    public function setPaymentProductId($value)
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->cardNumber !== null) {
            $object->cardNumber = $this->cardNumber;
        }
        if ($this->paymentProductId !== null) {
            $object->paymentProductId = $this->paymentProductId;
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
        if (property_exists($object, 'cardNumber')) {
            $this->cardNumber = $object->cardNumber;
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        return $this;
    }
}
