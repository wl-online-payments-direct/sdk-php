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
class MultiplePaymentInformation extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $paymentPattern;

    /**
     * @var int
     */
    private $totalNumberOfPayments;

    // Methods
    /**
     * @return string
     */
    public function getPaymentPattern()
    {
        return $this->paymentPattern;
    }
    /**
     * @var string
     */
    public function setPaymentPattern($value)
    {
        $this->paymentPattern = $value;
    }

    /**
     * @return int
     */
    public function getTotalNumberOfPayments()
    {
        return $this->totalNumberOfPayments;
    }
    /**
     * @var int
     */
    public function setTotalNumberOfPayments($value)
    {
        $this->totalNumberOfPayments = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->paymentPattern !== null) {
            $object->paymentPattern = $this->paymentPattern;
        }
        if ($this->totalNumberOfPayments !== null) {
            $object->totalNumberOfPayments = $this->totalNumberOfPayments;
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
        if (property_exists($object, 'paymentPattern')) {
            $this->paymentPattern = $object->paymentPattern;
        }
        if (property_exists($object, 'totalNumberOfPayments')) {
            $this->totalNumberOfPayments = $object->totalNumberOfPayments;
        }
        return $this;
    }
}
