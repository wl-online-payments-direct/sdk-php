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
     * @param string|null $value
     * @return LabelTemplateElement
    */
    public function withAttributeKey(?string $value): LabelTemplateElement
    {
        $this->attributeKey = $value;
        return $this;
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
     * @param string|null $value
     * @return LabelTemplateElement
    */
    public function withMask(?string $value): LabelTemplateElement
    {
        $this->mask = $value;
        return $this;
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
     *
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
