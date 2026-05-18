<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductFieldTooltip extends DataObject
{
    /**
     * @var string|null
     * @deprecated This field is not used by any payment product Relative URL that can be used to retrieve an image for the tooltip image.
     */
    public ?string $image = null;

    /**
     * @var string|null
     */
    public ?string $label = null;

    /**
     * @return string|null
     * @deprecated This field is not used by any payment product Relative URL that can be used to retrieve an image for the tooltip image.
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $value
     * @deprecated This field is not used by any payment product Relative URL that can be used to retrieve an image for the tooltip image.
     */
    public function setImage(?string $value): void
    {
        $this->image = $value;
    }

    /**
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @param string|null $value
     */
    public function setLabel(?string $value): void
    {
        $this->label = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->image)) {
            $object->image = $this->image;
        }
        if (!is_null($this->label)) {
            $object->label = $this->label;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProductFieldTooltip
    {
        parent::fromObject($object);
        if (property_exists($object, 'image')) {
            $this->image = $object->image;
        }
        if (property_exists($object, 'label')) {
            $this->label = $object->label;
        }
        return $this;
    }
}
