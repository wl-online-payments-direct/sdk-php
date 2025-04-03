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
     * @var string
     * @deprecated This field is not used by any payment product Relative URL that can be used to retrieve an image for the tooltip image.
     */
    public $image = null;

    /**
     * @var string
     */
    public $label = null;

    /**
     * @return string
     * @deprecated This field is not used by any payment product Relative URL that can be used to retrieve an image for the tooltip image.
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string
     * @deprecated This field is not used by any payment product Relative URL that can be used to retrieve an image for the tooltip image.
     */
    public function setImage($value)
    {
        $this->image = $value;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string
     */
    public function setLabel($value)
    {
        $this->label = $value;
    }

    /**
     * @return object
     */
    public function toObject()
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
    public function fromObject($object)
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
