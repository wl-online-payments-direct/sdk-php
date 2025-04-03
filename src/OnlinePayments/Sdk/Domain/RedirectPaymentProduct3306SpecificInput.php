<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct3306SpecificInput extends DataObject
{
    /**
     * @var string
     */
    public $extraMerchantData = null;

    /**
     * @return string
     */
    public function getExtraMerchantData()
    {
        return $this->extraMerchantData;
    }

    /**
     * @param string
     */
    public function setExtraMerchantData($value)
    {
        $this->extraMerchantData = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->extraMerchantData)) {
            $object->extraMerchantData = $this->extraMerchantData;
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
        if (property_exists($object, 'extraMerchantData')) {
            $this->extraMerchantData = $object->extraMerchantData;
        }
        return $this;
    }
}
