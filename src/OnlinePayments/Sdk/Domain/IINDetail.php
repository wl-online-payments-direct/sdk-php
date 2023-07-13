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
class IINDetail extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $cardType;

    /**
     * @var bool
     */
    private $isAllowedInContext;

    /**
     * @var int
     */
    private $paymentProductId;

    // Methods
    /**
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }
    /**
     * @var string
     */
    public function setCardType($value)
    {
        $this->cardType = $value;
    }

    /**
     * @return bool
     */
    public function getIsAllowedInContext()
    {
        return $this->isAllowedInContext;
    }
    /**
     * @var bool
     */
    public function setIsAllowedInContext($value)
    {
        $this->isAllowedInContext = $value;
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
        if ($this->cardType !== null) {
            $object->cardType = $this->cardType;
        }
        if ($this->isAllowedInContext !== null) {
            $object->isAllowedInContext = $this->isAllowedInContext;
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
        if (property_exists($object, 'cardType')) {
            $this->cardType = $object->cardType;
        }
        if (property_exists($object, 'isAllowedInContext')) {
            $this->isAllowedInContext = $object->isAllowedInContext;
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        return $this;
    }
}
