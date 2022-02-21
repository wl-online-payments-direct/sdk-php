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
class SepaDirectDebitPaymentMethodSpecificInput extends DataObject
{
    // Properties
    /**
     * @var SepaDirectDebitPaymentProduct771SpecificInput
     */
    private $paymentProduct771SpecificInput;

    /**
     * @var int
     */
    private $paymentProductId;

    // Methods
    /**
     * @return SepaDirectDebitPaymentProduct771SpecificInput
     */
    public function getPaymentProduct771SpecificInput()
    {
        return $this->paymentProduct771SpecificInput;
    }
    /**
     * @var SepaDirectDebitPaymentProduct771SpecificInput
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
     * @var int
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
        if ($this->paymentProduct771SpecificInput !== null) {
            $object->paymentProduct771SpecificInput = $this->paymentProduct771SpecificInput->toObject();
        }
        if ($this->paymentProductId !== null) {
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
            $value = new SepaDirectDebitPaymentProduct771SpecificInput();
            $this->paymentProduct771SpecificInput = $value->fromObject($object->paymentProduct771SpecificInput);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        return $this;
    }
}
