<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CapturePaymentRequest extends DataObject
{
    /**
     * @var int
     */
    public $amount = null;

    /**
     * @var bool
     */
    public $isFinal = null;

    /**
     * @var OperationPaymentReferences
     */
    public $operationReferences = null;

    /**
     * @var PaymentReferences
     */
    public $references = null;

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int
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
     * @param bool
     */
    public function setIsFinal($value)
    {
        $this->isFinal = $value;
    }

    /**
     * @return OperationPaymentReferences
     */
    public function getOperationReferences()
    {
        return $this->operationReferences;
    }

    /**
     * @param OperationPaymentReferences
     */
    public function setOperationReferences($value)
    {
        $this->operationReferences = $value;
    }

    /**
     * @return PaymentReferences
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * @param PaymentReferences
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
        if (!is_null($this->amount)) {
            $object->amount = $this->amount;
        }
        if (!is_null($this->isFinal)) {
            $object->isFinal = $this->isFinal;
        }
        if (!is_null($this->operationReferences)) {
            $object->operationReferences = $this->operationReferences->toObject();
        }
        if (!is_null($this->references)) {
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
        if (property_exists($object, 'operationReferences')) {
            if (!is_object($object->operationReferences)) {
                throw new UnexpectedValueException('value \'' . print_r($object->operationReferences, true) . '\' is not an object');
            }
            $value = new OperationPaymentReferences();
            $this->operationReferences = $value->fromObject($object->operationReferences);
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
