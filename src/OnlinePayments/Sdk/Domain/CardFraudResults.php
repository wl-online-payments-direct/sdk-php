<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CardFraudResults extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $avsResult = null;

    /**
     * @var string|null
    */
    public ?string $cvvResult = null;

    /**
     * @var string|null
    */
    public ?string $fraudServiceResult = null;

    /**
     * @return string|null
    */
    public function getAvsResult(): ?string
    {
        return $this->avsResult;
    }

    /**
     * @param string|null $value
    */
    public function setAvsResult(?string $value): void
    {
        $this->avsResult = $value;
    }

    /**
     * @param string|null $value
     * @return CardFraudResults
    */
    public function withAvsResult(?string $value): CardFraudResults
    {
        $this->avsResult = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getCvvResult(): ?string
    {
        return $this->cvvResult;
    }

    /**
     * @param string|null $value
    */
    public function setCvvResult(?string $value): void
    {
        $this->cvvResult = $value;
    }

    /**
     * @param string|null $value
     * @return CardFraudResults
    */
    public function withCvvResult(?string $value): CardFraudResults
    {
        $this->cvvResult = $value;
        return $this;
    }

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
     * @return CardFraudResults
    */
    public function withFraudServiceResult(?string $value): CardFraudResults
    {
        $this->fraudServiceResult = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->avsResult)) {
            $object->avsResult = $this->avsResult;
        }
        if (!is_null($this->cvvResult)) {
            $object->cvvResult = $this->cvvResult;
        }
        if (!is_null($this->fraudServiceResult)) {
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
    public function fromObject(object $object): CardFraudResults
    {
        parent::fromObject($object);
        if (property_exists($object, 'avsResult')) {
            $this->avsResult = $object->avsResult;
        }
        if (property_exists($object, 'cvvResult')) {
            $this->cvvResult = $object->cvvResult;
        }
        if (property_exists($object, 'fraudServiceResult')) {
            $this->fraudServiceResult = $object->fraudServiceResult;
        }
        return $this;
    }
}
