<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class LabelTemplateElement extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $attributeKey = null;

    /**
     * @var string|null
     */
    public ?string $mask = null;

    /**
     * @return string|null
     */
    public function getAttributeKey(): ?string
    {
        return $this->attributeKey;
    }

    /**
     * @param string|null $value
     */
    public function setAttributeKey(?string $value): void
    {
        $this->attributeKey = $value;
    }

    /**
     * @return string|null
     */
    public function getMask(): ?string
    {
        return $this->mask;
    }

    /**
     * @param string|null $value
     */
    public function setMask(?string $value): void
    {
        $this->mask = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->attributeKey)) {
            $object->attributeKey = $this->attributeKey;
        }
        if (!is_null($this->mask)) {
            $object->mask = $this->mask;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): LabelTemplateElement
    {
        parent::fromObject($object);
        if (property_exists($object, 'attributeKey')) {
            $this->attributeKey = $object->attributeKey;
        }
        if (property_exists($object, 'mask')) {
            $this->mask = $object->mask;
        }
        return $this;
    }
}
