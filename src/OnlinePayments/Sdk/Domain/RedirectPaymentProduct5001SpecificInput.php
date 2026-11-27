<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct5001SpecificInput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $exemptionRequest = null;

    /**
     * @var string|null
     */
    public ?string $subsequentType = null;

    /**
     * @return string|null
     */
    public function getExemptionRequest(): ?string
    {
        return $this->exemptionRequest;
    }

    /**
     * @param string|null $value
     */
    public function setExemptionRequest(?string $value): void
    {
        $this->exemptionRequest = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withExemptionRequest(?string $value): static
    {
        $this->exemptionRequest = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubsequentType(): ?string
    {
        return $this->subsequentType;
    }

    /**
     * @param string|null $value
     */
    public function setSubsequentType(?string $value): void
    {
        $this->subsequentType = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withSubsequentType(?string $value): static
    {
        $this->subsequentType = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->exemptionRequest !== null) {
            $object->exemptionRequest = $this->exemptionRequest;
        }
        if ($this->subsequentType !== null) {
            $object->subsequentType = $this->subsequentType;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'exemptionRequest')) {
            $this->exemptionRequest = $object->exemptionRequest;
        }
        if (property_exists($object, 'subsequentType')) {
            $this->subsequentType = $object->subsequentType;
        }
        return $this;
    }
}
