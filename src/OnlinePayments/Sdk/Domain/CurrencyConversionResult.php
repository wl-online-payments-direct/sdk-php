<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CurrencyConversionResult extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $result = null;

    /**
     * @var string|null
     */
    public ?string $resultReason = null;

    /**
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->result;
    }

    /**
     * @param string|null $value
     */
    public function setResult(?string $value): void
    {
        $this->result = $value;
    }

    /**
     * @return string|null
     */
    public function getResultReason(): ?string
    {
        return $this->resultReason;
    }

    /**
     * @param string|null $value
     */
    public function setResultReason(?string $value): void
    {
        $this->resultReason = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->result)) {
            $object->result = $this->result;
        }
        if (!is_null($this->resultReason)) {
            $object->resultReason = $this->resultReason;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CurrencyConversionResult
    {
        parent::fromObject($object);
        if (property_exists($object, 'result')) {
            $this->result = $object->result;
        }
        if (property_exists($object, 'resultReason')) {
            $this->resultReason = $object->resultReason;
        }
        return $this;
    }
}
