<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference
 */
namespace Ingenico\Direct\Sdk\Domain;

use Ingenico\Direct\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package Ingenico\Direct\Sdk\Domain
 */
class GetIINDetailsRequest extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $bin;

    /**
     * @var PaymentContext
     */
    private $paymentContext;

    // Methods
    /**
     * @return string
     */
    public function getBin()
    {
        return $this->bin;
    }
    /**
     * @var string
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
     * @var PaymentContext
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
        if ($this->bin !== null) {
            $object->bin = $this->bin;
        }
        if ($this->paymentContext !== null) {
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
