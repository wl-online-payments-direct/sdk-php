<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SepaDirectDebitPaymentProduct771SpecificInputBase extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $existingUniqueMandateReference = null;

    /**
     * @var CreateMandateRequest|null
     */
    public ?CreateMandateRequest $mandate = null;

    /**
     * @return string|null
     */
    public function getExistingUniqueMandateReference(): ?string
    {
        return $this->existingUniqueMandateReference;
    }

    /**
     * @param string|null $value
     */
    public function setExistingUniqueMandateReference(?string $value): void
    {
        $this->existingUniqueMandateReference = $value;
    }

    /**
     * @return CreateMandateRequest|null
     */
    public function getMandate(): ?CreateMandateRequest
    {
        return $this->mandate;
    }

    /**
     * @param CreateMandateRequest|null $value
     */
    public function setMandate(?CreateMandateRequest $value): void
    {
        $this->mandate = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->existingUniqueMandateReference)) {
            $object->existingUniqueMandateReference = $this->existingUniqueMandateReference;
        }
        if (!is_null($this->mandate)) {
            $object->mandate = $this->mandate->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): SepaDirectDebitPaymentProduct771SpecificInputBase
    {
        parent::fromObject($object);
        if (property_exists($object, 'existingUniqueMandateReference')) {
            $this->existingUniqueMandateReference = $object->existingUniqueMandateReference;
        }
        if (property_exists($object, 'mandate')) {
            if (!is_object($object->mandate)) {
                throw new UnexpectedValueException('value \'' . print_r($object->mandate, true) . '\' is not an object');
            }
            $value = new CreateMandateRequest();
            $this->mandate = $value->fromObject($object->mandate);
        }
        return $this;
    }
}
