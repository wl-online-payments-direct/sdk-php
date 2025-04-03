<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct809SpecificInput extends DataObject
{
    /**
     * @var string
     */
    public $issuerId = null;

    /**
     * @return string
     */
    public function getIssuerId()
    {
        return $this->issuerId;
    }

    /**
     * @param string
     */
    public function setIssuerId($value)
    {
        $this->issuerId = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->issuerId)) {
            $object->issuerId = $this->issuerId;
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
        if (property_exists($object, 'issuerId')) {
            $this->issuerId = $object->issuerId;
        }
        return $this;
    }
}
