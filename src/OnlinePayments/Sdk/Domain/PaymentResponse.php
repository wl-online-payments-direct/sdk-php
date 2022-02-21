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
class PaymentResponse extends DataObject
{
    // Properties
    /**
     * @var HostedCheckoutSpecificOutput
     */
    private $hostedCheckoutSpecificOutput;

    /**
     * @var string
     */
    private $id;

    /**
     * @var PaymentOutput
     */
    private $paymentOutput;

    /**
     * @var string
     */
    private $status;

    /**
     * @var PaymentStatusOutput
     */
    private $statusOutput;

    // Methods
    /**
     * @return HostedCheckoutSpecificOutput
     */
    public function getHostedCheckoutSpecificOutput()
    {
        return $this->hostedCheckoutSpecificOutput;
    }
    /**
     * @var HostedCheckoutSpecificOutput
     */
    public function setHostedCheckoutSpecificOutput($value)
    {
        $this->hostedCheckoutSpecificOutput = $value;
    }

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
     * @return PaymentOutput
     */
    public function getPaymentOutput()
    {
        return $this->paymentOutput;
    }
    /**
     * @var PaymentOutput
     */
    public function setPaymentOutput($value)
    {
        $this->paymentOutput = $value;
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
     * @return PaymentStatusOutput
     */
    public function getStatusOutput()
    {
        return $this->statusOutput;
    }
    /**
     * @var PaymentStatusOutput
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
        if ($this->hostedCheckoutSpecificOutput !== null) {
            $object->hostedCheckoutSpecificOutput = $this->hostedCheckoutSpecificOutput->toObject();
        }
        if ($this->id !== null) {
            $object->id = $this->id;
        }
        if ($this->paymentOutput !== null) {
            $object->paymentOutput = $this->paymentOutput->toObject();
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
        if (property_exists($object, 'hostedCheckoutSpecificOutput')) {
            if (!is_object($object->hostedCheckoutSpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->hostedCheckoutSpecificOutput, true) . '\' is not an object');
            }
            $value = new HostedCheckoutSpecificOutput();
            $this->hostedCheckoutSpecificOutput = $value->fromObject($object->hostedCheckoutSpecificOutput);
        }
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'paymentOutput')) {
            if (!is_object($object->paymentOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentOutput, true) . '\' is not an object');
            }
            $value = new PaymentOutput();
            $this->paymentOutput = $value->fromObject($object->paymentOutput);
        }
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        if (property_exists($object, 'statusOutput')) {
            if (!is_object($object->statusOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->statusOutput, true) . '\' is not an object');
            }
            $value = new PaymentStatusOutput();
            $this->statusOutput = $value->fromObject($object->statusOutput);
        }
        return $this;
    }
}
