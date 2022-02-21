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
class GetHostedCheckoutResponse extends DataObject
{
    // Properties
    /**
     * @var CreatedPaymentOutput
     */
    private $createdPaymentOutput;

    /**
     * @var string
     */
    private $status;

    // Methods
    /**
     * @return CreatedPaymentOutput
     */
    public function getCreatedPaymentOutput()
    {
        return $this->createdPaymentOutput;
    }
    /**
     * @var CreatedPaymentOutput
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
     * @var string
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
        if ($this->createdPaymentOutput !== null) {
            $object->createdPaymentOutput = $this->createdPaymentOutput->toObject();
        }
        if ($this->status !== null) {
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
