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
class RedirectPaymentProduct809SpecificInput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $issuerId;

    // Methods
    /**
     * @return string
     */
    public function getIssuerId()
    {
        return $this->issuerId;
    }
    /**
     * @var string
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
        if ($this->issuerId !== null) {
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
