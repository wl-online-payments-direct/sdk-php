<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct5002defaultBrandParameters extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $srcDpaId = null;

    /**
     * @var string|null
     */
    public ?string $srcInitiatorId = null;

    /**
     * @return string|null
     */
    public function getSrcDpaId(): ?string
    {
        return $this->srcDpaId;
    }

    /**
     * @param string|null $value
     */
    public function setSrcDpaId(?string $value): void
    {
        $this->srcDpaId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withSrcDpaId(?string $value): static
    {
        $this->srcDpaId = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSrcInitiatorId(): ?string
    {
        return $this->srcInitiatorId;
    }

    /**
     * @param string|null $value
     */
    public function setSrcInitiatorId(?string $value): void
    {
        $this->srcInitiatorId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withSrcInitiatorId(?string $value): static
    {
        $this->srcInitiatorId = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->srcDpaId !== null) {
            $object->srcDpaId = $this->srcDpaId;
        }
        if ($this->srcInitiatorId !== null) {
            $object->srcInitiatorId = $this->srcInitiatorId;
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
        if (property_exists($object, 'srcDpaId')) {
            $this->srcDpaId = $object->srcDpaId;
        }
        if (property_exists($object, 'srcInitiatorId')) {
            $this->srcInitiatorId = $object->srcInitiatorId;
        }
        return $this;
    }
}
