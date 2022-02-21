<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductFieldDisplayHints extends DataObject
{
    // Properties
    /**
     * @var bool
     */
    private $alwaysShow;

    /**
     * @var int
     */
    private $displayOrder;

    /**
     * @var PaymentProductFieldFormElement
     */
    private $formElement;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $mask;

    /**
     * @var bool
     */
    private $obfuscate;

    /**
     * @var string
     */
    private $placeholderLabel;

    /**
     * @var string
     */
    private $preferredInputType;

    /**
     * @var PaymentProductFieldTooltip
     */
    private $tooltip;

    // Methods
    /**
     * @return bool
     */
    public function getAlwaysShow()
    {
        return $this->alwaysShow;
    }
    /**
     * @var bool
     */
    public function setAlwaysShow($value)
    {
        $this->alwaysShow = $value;
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->displayOrder;
    }
    /**
     * @var int
     */
    public function setDisplayOrder($value)
    {
        $this->displayOrder = $value;
    }

    /**
     * @return PaymentProductFieldFormElement
     */
    public function getFormElement()
    {
        return $this->formElement;
    }
    /**
     * @var PaymentProductFieldFormElement
     */
    public function setFormElement($value)
    {
        $this->formElement = $value;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * @var string
     */
    public function setLabel($value)
    {
        $this->label = $value;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }
    /**
     * @var string
     */
    public function setLink($value)
    {
        $this->link = $value;
    }

    /**
     * @return string
     */
    public function getMask()
    {
        return $this->mask;
    }
    /**
     * @var string
     */
    public function setMask($value)
    {
        $this->mask = $value;
    }

    /**
     * @return bool
     */
    public function getObfuscate()
    {
        return $this->obfuscate;
    }
    /**
     * @var bool
     */
    public function setObfuscate($value)
    {
        $this->obfuscate = $value;
    }

    /**
     * @return string
     */
    public function getPlaceholderLabel()
    {
        return $this->placeholderLabel;
    }
    /**
     * @var string
     */
    public function setPlaceholderLabel($value)
    {
        $this->placeholderLabel = $value;
    }

    /**
     * @return string
     */
    public function getPreferredInputType()
    {
        return $this->preferredInputType;
    }
    /**
     * @var string
     */
    public function setPreferredInputType($value)
    {
        $this->preferredInputType = $value;
    }

    /**
     * @return PaymentProductFieldTooltip
     */
    public function getTooltip()
    {
        return $this->tooltip;
    }
    /**
     * @var PaymentProductFieldTooltip
     */
    public function setTooltip($value)
    {
        $this->tooltip = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->alwaysShow !== null) {
            $object->alwaysShow = $this->alwaysShow;
        }
        if ($this->displayOrder !== null) {
            $object->displayOrder = $this->displayOrder;
        }
        if ($this->formElement !== null) {
            $object->formElement = $this->formElement->toObject();
        }
        if ($this->label !== null) {
            $object->label = $this->label;
        }
        if ($this->link !== null) {
            $object->link = $this->link;
        }
        if ($this->mask !== null) {
            $object->mask = $this->mask;
        }
        if ($this->obfuscate !== null) {
            $object->obfuscate = $this->obfuscate;
        }
        if ($this->placeholderLabel !== null) {
            $object->placeholderLabel = $this->placeholderLabel;
        }
        if ($this->preferredInputType !== null) {
            $object->preferredInputType = $this->preferredInputType;
        }
        if ($this->tooltip !== null) {
            $object->tooltip = $this->tooltip->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
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
