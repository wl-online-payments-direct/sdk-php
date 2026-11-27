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
     *
     * @deprecated This field is not used by any payment product Relative URL that can be used to retrieve an image for the tooltip image.
     */
    public ?string $image = null;

    /**
     * @var string|null
     */
    public ?string $label = null;

    /**
     * @return string|null
     *
     * @deprecated This field is not used by any payment product Relative URL that can be used to retrieve an image for the tooltip image.
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $value
     *
     * @deprecated This field is not used by any payment product Relative URL that can be used to retrieve an image for the tooltip image.
     */
    public function setImage(?string $value): void
    {
        $this->image = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     *
     * @deprecated This field is not used by any payment product Relative URL that can be used to retrieve an image for the tooltip image.
     */
    public function withImage(?string $value): static
    {
        $this->image = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withLabel(?string $value): static
    {
        $this->label = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->image !== null) {
            $object->image = $this->image;
        }
        if ($this->label !== null) {
            $object->label = $this->label;
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
        if (property_exists($object, 'image')) {
            $this->image = $object->image;
        }
        if (property_exists($object, 'label')) {
            $this->label = $object->label;
        }
        return $this;
    }
}
