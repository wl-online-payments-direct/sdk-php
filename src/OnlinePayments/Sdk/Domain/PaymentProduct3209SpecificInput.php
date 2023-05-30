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
class PaymentProduct3209SpecificInput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $merchantFinanceCode;

    // Methods
    /**
     * @return string
     */
    public function getMerchantFinanceCode()
    {
        return $this->merchantFinanceCode;
    }
    /**
     * @var string
     */
    public function setMerchantFinanceCode($value)
    {
        $this->merchantFinanceCode = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->merchantFinanceCode !== null) {
            $object->merchantFinanceCode = $this->merchantFinanceCode;
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
        if (property_exists($object, 'merchantFinanceCode')) {
            $this->merchantFinanceCode = $object->merchantFinanceCode;
        }
        return $this;
    }
}
