<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentResponse extends DataObject
{
    /**
     * @var HostedCheckoutSpecificOutput
     */
    public $hostedCheckoutSpecificOutput = null;

    /**
     * @var string
     */
    public $id = null;

    /**
     * @var PaymentOutput
     */
    public $paymentOutput = null;

    /**
     * @var string
     */
    public $status = null;

    /**
     * @var PaymentStatusOutput
     */
    public $statusOutput = null;

    /**
     * @return HostedCheckoutSpecificOutput
     */
    public function getHostedCheckoutSpecificOutput()
    {
        return $this->hostedCheckoutSpecificOutput;
    }

    /**
     * @param HostedCheckoutSpecificOutput
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
     * @param string
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
     * @param PaymentOutput
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
     * @param string
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
     * @param PaymentStatusOutput
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
        if (!is_null($this->hostedCheckoutSpecificOutput)) {
            $object->hostedCheckoutSpecificOutput = $this->hostedCheckoutSpecificOutput->toObject();
        }
        if (!is_null($this->id)) {
            $object->id = $this->id;
        }
        if (!is_null($this->paymentOutput)) {
            $object->paymentOutput = $this->paymentOutput->toObject();
        }
        if (!is_null($this->status)) {
            $object->status = $this->status;
        }
        if (!is_null($this->statusOutput)) {
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
