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
class SepaDirectDebitPaymentProduct771SpecificInput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $existingUniqueMandateReference;

    /**
     * @var CreateMandateWithReturnUrl
     */
    private $mandate;

    // Methods
    /**
     * @return string
     */
    public function getExistingUniqueMandateReference()
    {
        return $this->existingUniqueMandateReference;
    }
    /**
     * @var string
     */
    public function setExistingUniqueMandateReference($value)
    {
        $this->existingUniqueMandateReference = $value;
    }

    /**
     * @return CreateMandateWithReturnUrl
     */
    public function getMandate()
    {
        return $this->mandate;
    }
    /**
     * @var CreateMandateWithReturnUrl
     */
    public function setMandate($value)
    {
        $this->mandate = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->existingUniqueMandateReference !== null) {
            $object->existingUniqueMandateReference = $this->existingUniqueMandateReference;
        }
        if ($this->mandate !== null) {
            $object->mandate = $this->mandate->toObject();
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
        if (property_exists($object, 'existingUniqueMandateReference')) {
            $this->existingUniqueMandateReference = $object->existingUniqueMandateReference;
        }
        if (property_exists($object, 'mandate')) {
            if (!is_object($object->mandate)) {
                throw new UnexpectedValueException('value \'' . print_r($object->mandate, true) . '\' is not an object');
            }
            $value = new CreateMandateWithReturnUrl();
            $this->mandate = $value->fromObject($object->mandate);
        }
        return $this;
    }
}
