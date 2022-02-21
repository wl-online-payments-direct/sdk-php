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
class CustomerPaymentActivity extends DataObject
{
    // Properties
    /**
     * @var int
     */
    private $numberOfPaymentAttemptsLast24Hours;

    /**
     * @var int
     */
    private $numberOfPaymentAttemptsLastYear;

    /**
     * @var int
     */
    private $numberOfPurchasesLast6Months;

    // Methods
    /**
     * @return int
     */
    public function getNumberOfPaymentAttemptsLast24Hours()
    {
        return $this->numberOfPaymentAttemptsLast24Hours;
    }
    /**
     * @var int
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
     * @var int
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
     * @var int
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
        if ($this->numberOfPaymentAttemptsLast24Hours !== null) {
            $object->numberOfPaymentAttemptsLast24Hours = $this->numberOfPaymentAttemptsLast24Hours;
        }
        if ($this->numberOfPaymentAttemptsLastYear !== null) {
            $object->numberOfPaymentAttemptsLastYear = $this->numberOfPaymentAttemptsLastYear;
        }
        if ($this->numberOfPurchasesLast6Months !== null) {
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
