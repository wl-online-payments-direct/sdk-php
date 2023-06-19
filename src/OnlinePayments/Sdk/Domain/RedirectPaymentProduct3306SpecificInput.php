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
class RedirectPaymentProduct3306SpecificInput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $extraMerchantData;

    // Methods
    /**
     * @return string
     */
    public function getExtraMerchantData()
    {
        return $this->extraMerchantData;
    }
    /**
     * @var string
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
        if ($this->extraMerchantData !== null) {
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
