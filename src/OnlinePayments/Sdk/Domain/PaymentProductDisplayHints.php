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
     * @var int
     */
    public $displayOrder = null;

    /**
     * @var string
     */
    public $label = null;

    /**
     * @var string
     */
    public $logo = null;

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->displayOrder;
    }

    /**
     * @param int
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
     * @param string
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
     * @param string
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
