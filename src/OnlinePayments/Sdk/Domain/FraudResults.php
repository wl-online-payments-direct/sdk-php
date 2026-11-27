<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class FraudResults extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $fraudServiceResult = null;

    /**
     * @return string|null
     */
    public function getFraudServiceResult(): ?string
    {
        return $this->fraudServiceResult;
    }

    /**
     * @param string|null $value
     */
    public function setFraudServiceResult(?string $value): void
    {
        $this->fraudServiceResult = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withFraudServiceResult(?string $value): static
    {
        $this->fraudServiceResult = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->fraudServiceResult !== null) {
            $object->fraudServiceResult = $this->fraudServiceResult;
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
        if (property_exists($object, 'fraudServiceResult')) {
            $this->fraudServiceResult = $object->fraudServiceResult;
        }
        return $this;
    }
}
