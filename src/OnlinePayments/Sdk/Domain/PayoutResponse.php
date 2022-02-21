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
class PayoutResponse extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $id;

    /**
     * @var PayoutOutput
     */
    private $payoutOutput;

    /**
     * @var string
     */
    private $status;

    /**
     * @var PayoutStatusOutput
     */
    private $statusOutput;

    // Methods
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string
     */
    public function setId($value)
    {
        $this->id = $value;
    }

    /**
     * @return PayoutOutput
     */
    public function getPayoutOutput()
    {
        return $this->payoutOutput;
    }
    /**
     * @var PayoutOutput
     */
    public function setPayoutOutput($value)
    {
        $this->payoutOutput = $value;
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
     * @return PayoutStatusOutput
     */
    public function getStatusOutput()
    {
        return $this->statusOutput;
    }
    /**
     * @var PayoutStatusOutput
     */
    public function setStatusOutput($value)
    {
        $this->statusOutput = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->id !== null) {
            $object->id = $this->id;
        }
        if ($this->payoutOutput !== null) {
            $object->payoutOutput = $this->payoutOutput->toObject();
        }
        if ($this->status !== null) {
            $object->status = $this->status;
        }
        if ($this->statusOutput !== null) {
            $object->statusOutput = $this->statusOutput->toObject();
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
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'payoutOutput')) {
            if (!is_object($object->payoutOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->payoutOutput, true) . '\' is not an object');
            }
            $value = new PayoutOutput();
            $this->payoutOutput = $value->fromObject($object->payoutOutput);
        }
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        if (property_exists($object, 'statusOutput')) {
            if (!is_object($object->statusOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->statusOutput, true) . '\' is not an object');
            }
            $value = new PayoutStatusOutput();
            $this->statusOutput = $value->fromObject($object->statusOutput);
        }
        return $this;
    }
}
