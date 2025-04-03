<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CustomerPaymentActivity extends DataObject
{
    /**
     * @var int
     */
    public $numberOfPaymentAttemptsLast24Hours = null;

    /**
     * @var int
     */
    public $numberOfPaymentAttemptsLastYear = null;

    /**
     * @var int
     */
    public $numberOfPurchasesLast6Months = null;

    /**
     * @return int
     */
    public function getNumberOfPaymentAttemptsLast24Hours()
    {
        return $this->numberOfPaymentAttemptsLast24Hours;
    }

    /**
     * @param int
     */
    public function setNumberOfPaymentAttemptsLast24Hours($value)
    {
        $this->numberOfPaymentAttemptsLast24Hours = $value;
    }

    /**
     * @return int
     */
    public function getNumberOfPaymentAttemptsLastYear()
    {
        return $this->numberOfPaymentAttemptsLastYear;
    }

    /**
     * @param int
     */
    public function setNumberOfPaymentAttemptsLastYear($value)
    {
        $this->numberOfPaymentAttemptsLastYear = $value;
    }

    /**
     * @return int
     */
    public function getNumberOfPurchasesLast6Months()
    {
        return $this->numberOfPurchasesLast6Months;
    }

    /**
     * @param int
     */
    public function setNumberOfPurchasesLast6Months($value)
    {
        $this->numberOfPurchasesLast6Months = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->numberOfPaymentAttemptsLast24Hours)) {
            $object->numberOfPaymentAttemptsLast24Hours = $this->numberOfPaymentAttemptsLast24Hours;
        }
        if (!is_null($this->numberOfPaymentAttemptsLastYear)) {
            $object->numberOfPaymentAttemptsLastYear = $this->numberOfPaymentAttemptsLastYear;
        }
        if (!is_null($this->numberOfPurchasesLast6Months)) {
            $object->numberOfPurchasesLast6Months = $this->numberOfPurchasesLast6Months;
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
        if (property_exists($object, 'numberOfPaymentAttemptsLast24Hours')) {
            $this->numberOfPaymentAttemptsLast24Hours = $object->numberOfPaymentAttemptsLast24Hours;
        }
        if (property_exists($object, 'numberOfPaymentAttemptsLastYear')) {
            $this->numberOfPaymentAttemptsLastYear = $object->numberOfPaymentAttemptsLastYear;
        }
        if (property_exists($object, 'numberOfPurchasesLast6Months')) {
            $this->numberOfPurchasesLast6Months = $object->numberOfPurchasesLast6Months;
        }
        return $this;
    }
}
