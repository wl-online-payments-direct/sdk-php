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
     * @param string|null $value
     * @return $this
     */
    public function withResult(?string $value): static
    {
        $this->result = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withResultReason(?string $value): static
    {
        $this->resultReason = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->result !== null) {
            $object->result = $this->result;
        }
        if ($this->resultReason !== null) {
            $object->resultReason = $this->resultReason;
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
        if (property_exists($object, 'result')) {
            $this->result = $object->result;
        }
        if (property_exists($object, 'resultReason')) {
            $this->resultReason = $object->resultReason;
        }
        return $this;
    }
}
