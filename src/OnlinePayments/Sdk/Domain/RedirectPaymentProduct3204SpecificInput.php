<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct3204SpecificInput extends DataObject
{
    /**
     * @var string
     */
    public $blikCode = null;

    /**
     * @return string
     */
    public function getBlikCode()
    {
        return $this->blikCode;
    }

    /**
     * @param string
     */
    public function setBlikCode($value)
    {
        $this->blikCode = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->blikCode)) {
            $object->blikCode = $this->blikCode;
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
        if (property_exists($object, 'blikCode')) {
            $this->blikCode = $object->blikCode;
        }
        return $this;
    }
}
