<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MultiplePaymentInformation extends DataObject
{
    /**
     * @var string
     */
    public $paymentPattern = null;

    /**
     * @var int
     */
    public $totalNumberOfPayments = null;

    /**
     * @return string
     */
    public function getPaymentPattern()
    {
        return $this->paymentPattern;
    }

    /**
     * @param string
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
     * @param int
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
        if (!is_null($this->paymentPattern)) {
            $object->paymentPattern = $this->paymentPattern;
        }
        if (!is_null($this->totalNumberOfPayments)) {
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
