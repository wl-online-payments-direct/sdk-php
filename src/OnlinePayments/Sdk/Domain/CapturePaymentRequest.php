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
class CapturePaymentRequest extends DataObject
{
    // Properties
    /**
     * @var int
     */
    private $amount;

    /**
     * @var bool
     */
    private $isFinal;

    /**
     * @var PaymentReferences
     */
    private $references;

    // Methods
    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * @var int
     */
    public function setAmount($value)
    {
        $this->amount = $value;
    }

    /**
     * @return bool
     */
    public function getIsFinal()
    {
        return $this->isFinal;
    }
    /**
     * @var bool
     */
    public function setIsFinal($value)
    {
        $this->isFinal = $value;
    }

    /**
     * @return PaymentReferences
     */
    public function getReferences()
    {
        return $this->references;
    }
    /**
     * @var PaymentReferences
     */
    public function setReferences($value)
    {
        $this->references = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->amount !== null) {
            $object->amount = $this->amount;
        }
        if ($this->isFinal !== null) {
            $object->isFinal = $this->isFinal;
        }
        if ($this->references !== null) {
            $object->references = $this->references->toObject();
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
        if (property_exists($object, 'amount')) {
            $this->amount = $object->amount;
        }
        if (property_exists($object, 'isFinal')) {
            $this->isFinal = $object->isFinal;
        }
        if (property_exists($object, 'references')) {
            if (!is_object($object->references)) {
                throw new UnexpectedValueException('value \'' . print_r($object->references, true) . '\' is not an object');
            }
            $value = new PaymentReferences();
            $this->references = $value->fromObject($object->references);
        }
        return $this;
    }
}
