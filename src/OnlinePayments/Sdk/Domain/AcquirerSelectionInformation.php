<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AcquirerSelectionInformation extends DataObject
{
    /**
     * @var int|null
     */
    public ?int $fallbackLevel = null;

    /**
     * @var string|null
     */
    public ?string $result = null;

    /**
     * @var string|null
     */
    public ?string $ruleName = null;

    /**
     * @return int|null
     */
    public function getFallbackLevel(): ?int
    {
        return $this->fallbackLevel;
    }

    /**
     * @param int|null $value
     */
    public function setFallbackLevel(?int $value): void
    {
        $this->fallbackLevel = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withFallbackLevel(?int $value): static
    {
        $this->fallbackLevel = $value;
        return $this;
    }

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
    public function getRuleName(): ?string
    {
        return $this->ruleName;
    }

    /**
     * @param string|null $value
     */
    public function setRuleName(?string $value): void
    {
        $this->ruleName = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withRuleName(?string $value): static
    {
        $this->ruleName = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->fallbackLevel !== null) {
            $object->fallbackLevel = $this->fallbackLevel;
        }
        if ($this->result !== null) {
            $object->result = $this->result;
        }
        if ($this->ruleName !== null) {
            $object->ruleName = $this->ruleName;
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
        if (property_exists($object, 'fallbackLevel')) {
            $this->fallbackLevel = $object->fallbackLevel;
        }
        if (property_exists($object, 'result')) {
            $this->result = $object->result;
        }
        if (property_exists($object, 'ruleName')) {
            $this->ruleName = $object->ruleName;
        }
        return $this;
    }
}
