<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct3209SpecificInput extends DataObject
{
    /**
     * @var string
     */
    public $merchantFinanceCode = null;

    /**
     * @return string
     */
    public function getMerchantFinanceCode()
    {
        return $this->merchantFinanceCode;
    }

    /**
     * @param string
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
        if (!is_null($this->merchantFinanceCode)) {
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
