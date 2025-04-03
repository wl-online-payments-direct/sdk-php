<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class GetHostedCheckoutResponse extends DataObject
{
    /**
     * @var CreatedPaymentOutput
     */
    public $createdPaymentOutput = null;

    /**
     * @var string
     */
    public $status = null;

    /**
     * @return CreatedPaymentOutput
     */
    public function getCreatedPaymentOutput()
    {
        return $this->createdPaymentOutput;
    }

    /**
     * @param CreatedPaymentOutput
     */
    public function setCreatedPaymentOutput($value)
    {
        $this->createdPaymentOutput = $value;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string
     */
    public function setStatus($value)
    {
        $this->status = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->createdPaymentOutput)) {
            $object->createdPaymentOutput = $this->createdPaymentOutput->toObject();
        }
        if (!is_null($this->status)) {
            $object->status = $this->status;
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
        if (property_exists($object, 'createdPaymentOutput')) {
            if (!is_object($object->createdPaymentOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->createdPaymentOutput, true) . '\' is not an object');
            }
            $value = new CreatedPaymentOutput();
            $this->createdPaymentOutput = $value->fromObject($object->createdPaymentOutput);
        }
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        return $this;
    }
}
