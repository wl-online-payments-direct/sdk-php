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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->fallbackLevel)) {
            $object->fallbackLevel = $this->fallbackLevel;
        }
        if (!is_null($this->result)) {
            $object->result = $this->result;
        }
        if (!is_null($this->ruleName)) {
            $object->ruleName = $this->ruleName;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): AcquirerSelectionInformation
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
