<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SepaDirectDebitPaymentMethodSpecificInputBase extends DataObject
{
    /**
     * @var SepaDirectDebitPaymentProduct771SpecificInputBase
     */
    public $paymentProduct771SpecificInput = null;

    /**
     * @var int
     */
    public $paymentProductId = null;

    /**
     * @return SepaDirectDebitPaymentProduct771SpecificInputBase
     */
    public function getPaymentProduct771SpecificInput()
    {
        return $this->paymentProduct771SpecificInput;
    }

    /**
     * @param SepaDirectDebitPaymentProduct771SpecificInputBase
     */
    public function setPaymentProduct771SpecificInput($value)
    {
        $this->paymentProduct771SpecificInput = $value;
    }

    /**
     * @return int
     */
    public function getPaymentProductId()
    {
        return $this->paymentProductId;
    }

    /**
     * @param int
     */
    public function setPaymentProductId($value)
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->paymentProduct771SpecificInput)) {
            $object->paymentProduct771SpecificInput = $this->paymentProduct771SpecificInput->toObject();
        }
        if (!is_null($this->paymentProductId)) {
            $object->paymentProductId = $this->paymentProductId;
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
        if (property_exists($object, 'paymentProduct771SpecificInput')) {
            if (!is_object($object->paymentProduct771SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct771SpecificInput, true) . '\' is not an object');
            }
            $value = new SepaDirectDebitPaymentProduct771SpecificInputBase();
            $this->paymentProduct771SpecificInput = $value->fromObject($object->paymentProduct771SpecificInput);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        return $this;
    }
}
