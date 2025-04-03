<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use DateTime;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct5410SpecificInput extends DataObject
{
    /**
     * @var DateTime
     */
    public $secondInstallmentPaymentDate = null;

    /**
     * @return DateTime
     */
    public function getSecondInstallmentPaymentDate()
    {
        return $this->secondInstallmentPaymentDate;
    }

    /**
     * @param DateTime
     */
    public function setSecondInstallmentPaymentDate($value)
    {
        $this->secondInstallmentPaymentDate = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->secondInstallmentPaymentDate)) {
            $object->secondInstallmentPaymentDate = $this->secondInstallmentPaymentDate->format('Y-m-d');
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
        if (property_exists($object, 'secondInstallmentPaymentDate')) {
            $this->secondInstallmentPaymentDate = new DateTime($object->secondInstallmentPaymentDate);
        }
        return $this;
    }
}
