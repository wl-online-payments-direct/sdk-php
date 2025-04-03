<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class GetIINDetailsRequest extends DataObject
{
    /**
     * @var string
     */
    public $bin = null;

    /**
     * @var PaymentContext
     */
    public $paymentContext = null;

    /**
     * @return string
     */
    public function getBin()
    {
        return $this->bin;
    }

    /**
     * @param string
     */
    public function setBin($value)
    {
        $this->bin = $value;
    }

    /**
     * @return PaymentContext
     */
    public function getPaymentContext()
    {
        return $this->paymentContext;
    }

    /**
     * @param PaymentContext
     */
    public function setPaymentContext($value)
    {
        $this->paymentContext = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->bin)) {
            $object->bin = $this->bin;
        }
        if (!is_null($this->paymentContext)) {
            $object->paymentContext = $this->paymentContext->toObject();
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
        if (property_exists($object, 'bin')) {
            $this->bin = $object->bin;
        }
        if (property_exists($object, 'paymentContext')) {
            if (!is_object($object->paymentContext)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentContext, true) . '\' is not an object');
            }
            $value = new PaymentContext();
            $this->paymentContext = $value->fromObject($object->paymentContext);
        }
        return $this;
    }
}
