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
class PaymentProductFieldTooltip extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $label;

    // Methods
    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * @var string
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
     * @var string
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
