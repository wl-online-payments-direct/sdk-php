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
class PaymentProduct3012SpecificInput extends DataObject
{
    // Properties
    /**
     * @var bool
     */
    private $forceAuthentication;

    /**
     * @var bool
     */
    private $isWipTransaction;

    // Methods
    /**
     * @return bool
     */
    public function getForceAuthentication()
    {
        return $this->forceAuthentication;
    }
    /**
     * @var bool
     */
    public function setForceAuthentication($value)
    {
        $this->forceAuthentication = $value;
    }

    /**
     * @return bool
     */
    public function getIsWipTransaction()
    {
        return $this->isWipTransaction;
    }
    /**
     * @var bool
     */
    public function setIsWipTransaction($value)
    {
        $this->isWipTransaction = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->forceAuthentication !== null) {
            $object->forceAuthentication = $this->forceAuthentication;
        }
        if ($this->isWipTransaction !== null) {
            $object->isWipTransaction = $this->isWipTransaction;
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
        if (property_exists($object, 'forceAuthentication')) {
            $this->forceAuthentication = $object->forceAuthentication;
        }
        if (property_exists($object, 'isWipTransaction')) {
            $this->isWipTransaction = $object->isWipTransaction;
        }
        return $this;
    }
}
