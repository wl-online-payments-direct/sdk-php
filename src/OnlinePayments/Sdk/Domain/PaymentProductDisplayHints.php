<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductDisplayHints extends DataObject
{
    /**
     * @var int|null
    */
    public ?int $displayOrder = null;

    /**
     * @var string|null
    */
    public ?string $label = null;

    /**
     * @var string|null
    */
    public ?string $logo = null;

    /**
     * @return int|null
    */
    public function getDisplayOrder(): ?int
    {
        return $this->displayOrder;
    }

    /**
     * @param int|null $value
    */
    public function setDisplayOrder(?int $value): void
    {
        $this->displayOrder = $value;
    }

    /**
     * @param int|null $value
     * @return PaymentProductDisplayHints
    */
    public function withDisplayOrder(?int $value): PaymentProductDisplayHints
    {
        $this->displayOrder = $value;
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
     * @return PaymentProductDisplayHints
    */
    public function withLabel(?string $value): PaymentProductDisplayHints
    {
        $this->label = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    /**
     * @param string|null $value
    */
    public function setLogo(?string $value): void
    {
        $this->logo = $value;
    }

    /**
     * @param string|null $value
     * @return PaymentProductDisplayHints
    */
    public function withLogo(?string $value): PaymentProductDisplayHints
    {
        $this->logo = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->displayOrder)) {
            $object->displayOrder = $this->displayOrder;
        }
        if (!is_null($this->label)) {
            $object->label = $this->label;
        }
        if (!is_null($this->logo)) {
            $object->logo = $this->logo;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProductDisplayHints
    {
        parent::fromObject($object);
        if (property_exists($object, 'displayOrder')) {
            $this->displayOrder = $object->displayOrder;
        }
        if (property_exists($object, 'label')) {
            $this->label = $object->label;
        }
        if (property_exists($object, 'logo')) {
            $this->logo = $object->logo;
        }
        return $this;
    }
}
