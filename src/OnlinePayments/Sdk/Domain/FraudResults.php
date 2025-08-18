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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->fraudServiceResult)) {
            $object->fraudServiceResult = $this->fraudServiceResult;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): FraudResults
    {
        parent::fromObject($object);
        if (property_exists($object, 'fraudServiceResult')) {
            $this->fraudServiceResult = $object->fraudServiceResult;
        }
        return $this;
    }
}
