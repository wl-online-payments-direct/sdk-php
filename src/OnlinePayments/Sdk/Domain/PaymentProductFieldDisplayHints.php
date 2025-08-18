<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductFieldDisplayHints extends DataObject
{
    /**
     * @var bool|null
     */
    public ?bool $alwaysShow = null;

    /**
     * @var int|null
     */
    public ?int $displayOrder = null;

    /**
     * @var PaymentProductFieldFormElement|null
     */
    public ?PaymentProductFieldFormElement $formElement = null;

    /**
     * @var string|null
     */
    public ?string $label = null;

    /**
     * @var string|null
     * @deprecated Deprecated
     */
    public ?string $link = null;

    /**
     * @var string|null
     */
    public ?string $mask = null;

    /**
     * @var bool|null
     */
    public ?bool $obfuscate = null;

    /**
     * @var string|null
     */
    public ?string $placeholderLabel = null;

    /**
     * @var string|null
     */
    public ?string $preferredInputType = null;

    /**
     * @var PaymentProductFieldTooltip|null
     */
    public ?PaymentProductFieldTooltip $tooltip = null;

    /**
     * @return bool|null
     */
    public function getAlwaysShow(): ?bool
    {
        return $this->alwaysShow;
    }

    /**
     * @param bool|null $value
     */
    public function setAlwaysShow(?bool $value): void
    {
        $this->alwaysShow = $value;
    }

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
     * @return PaymentProductFieldFormElement|null
     */
    public function getFormElement(): ?PaymentProductFieldFormElement
    {
        return $this->formElement;
    }

    /**
     * @param PaymentProductFieldFormElement|null $value
     */
    public function setFormElement(?PaymentProductFieldFormElement $value): void
    {
        $this->formElement = $value;
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
     * @return string|null
     * @deprecated Deprecated
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * @param string|null $value
     * @deprecated Deprecated
     */
    public function setLink(?string $value): void
    {
        $this->link = $value;
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
     * @return bool|null
     */
    public function getObfuscate(): ?bool
    {
        return $this->obfuscate;
    }

    /**
     * @param bool|null $value
     */
    public function setObfuscate(?bool $value): void
    {
        $this->obfuscate = $value;
    }

    /**
     * @return string|null
     */
    public function getPlaceholderLabel(): ?string
    {
        return $this->placeholderLabel;
    }

    /**
     * @param string|null $value
     */
    public function setPlaceholderLabel(?string $value): void
    {
        $this->placeholderLabel = $value;
    }

    /**
     * @return string|null
     */
    public function getPreferredInputType(): ?string
    {
        return $this->preferredInputType;
    }

    /**
     * @param string|null $value
     */
    public function setPreferredInputType(?string $value): void
    {
        $this->preferredInputType = $value;
    }

    /**
     * @return PaymentProductFieldTooltip|null
     */
    public function getTooltip(): ?PaymentProductFieldTooltip
    {
        return $this->tooltip;
    }

    /**
     * @param PaymentProductFieldTooltip|null $value
     */
    public function setTooltip(?PaymentProductFieldTooltip $value): void
    {
        $this->tooltip = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->alwaysShow)) {
            $object->alwaysShow = $this->alwaysShow;
        }
        if (!is_null($this->displayOrder)) {
            $object->displayOrder = $this->displayOrder;
        }
        if (!is_null($this->formElement)) {
            $object->formElement = $this->formElement->toObject();
        }
        if (!is_null($this->label)) {
            $object->label = $this->label;
        }
        if (!is_null($this->link)) {
            $object->link = $this->link;
        }
        if (!is_null($this->mask)) {
            $object->mask = $this->mask;
        }
        if (!is_null($this->obfuscate)) {
            $object->obfuscate = $this->obfuscate;
        }
        if (!is_null($this->placeholderLabel)) {
            $object->placeholderLabel = $this->placeholderLabel;
        }
        if (!is_null($this->preferredInputType)) {
            $object->preferredInputType = $this->preferredInputType;
        }
        if (!is_null($this->tooltip)) {
            $object->tooltip = $this->tooltip->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProductFieldDisplayHints
    {
        parent::fromObject($object);
        if (property_exists($object, 'alwaysShow')) {
            $this->alwaysShow = $object->alwaysShow;
        }
        if (property_exists($object, 'displayOrder')) {
            $this->displayOrder = $object->displayOrder;
        }
        if (property_exists($object, 'formElement')) {
            if (!is_object($object->formElement)) {
                throw new UnexpectedValueException('value \'' . print_r($object->formElement, true) . '\' is not an object');
            }
            $value = new PaymentProductFieldFormElement();
            $this->formElement = $value->fromObject($object->formElement);
        }
        if (property_exists($object, 'label')) {
            $this->label = $object->label;
        }
        if (property_exists($object, 'link')) {
            $this->link = $object->link;
        }
        if (property_exists($object, 'mask')) {
            $this->mask = $object->mask;
        }
        if (property_exists($object, 'obfuscate')) {
            $this->obfuscate = $object->obfuscate;
        }
        if (property_exists($object, 'placeholderLabel')) {
            $this->placeholderLabel = $object->placeholderLabel;
        }
        if (property_exists($object, 'preferredInputType')) {
            $this->preferredInputType = $object->preferredInputType;
        }
        if (property_exists($object, 'tooltip')) {
            if (!is_object($object->tooltip)) {
                throw new UnexpectedValueException('value \'' . print_r($object->tooltip, true) . '\' is not an object');
            }
            $value = new PaymentProductFieldTooltip();
            $this->tooltip = $value->fromObject($object->tooltip);
        }
        return $this;
    }
}
