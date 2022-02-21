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
class PaymentProductDisplayHints extends DataObject
{
    // Properties
    /**
     * @var int
     */
    private $displayOrder;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $logo;

    // Methods
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
    public function getLogo()
    {
        return $this->logo;
    }
    /**
     * @var string
     */
    public function setLogo($value)
    {
        $this->logo = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->displayOrder !== null) {
            $object->displayOrder = $this->displayOrder;
        }
        if ($this->label !== null) {
            $object->label = $this->label;
        }
        if ($this->logo !== null) {
            $object->logo = $this->logo;
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
