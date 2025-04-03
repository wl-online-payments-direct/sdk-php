<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductField extends DataObject
{
    /**
     * @var PaymentProductFieldDataRestrictions
     */
    public $dataRestrictions = null;

    /**
     * @var PaymentProductFieldDisplayHints
     */
    public $displayHints = null;

    /**
     * @var string
     */
    public $id = null;

    /**
     * @var string
     */
    public $type = null;

    /**
     * @return PaymentProductFieldDataRestrictions
     */
    public function getDataRestrictions()
    {
        return $this->dataRestrictions;
    }

    /**
     * @param PaymentProductFieldDataRestrictions
     */
    public function setDataRestrictions($value)
    {
        $this->dataRestrictions = $value;
    }

    /**
     * @return PaymentProductFieldDisplayHints
     */
    public function getDisplayHints()
    {
        return $this->displayHints;
    }

    /**
     * @param PaymentProductFieldDisplayHints
     */
    public function setDisplayHints($value)
    {
        $this->displayHints = $value;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string
     */
    public function setId($value)
    {
        $this->id = $value;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string
     */
    public function setType($value)
    {
        $this->type = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->dataRestrictions)) {
            $object->dataRestrictions = $this->dataRestrictions->toObject();
        }
        if (!is_null($this->displayHints)) {
            $object->displayHints = $this->displayHints->toObject();
        }
        if (!is_null($this->id)) {
            $object->id = $this->id;
        }
        if (!is_null($this->type)) {
            $object->type = $this->type;
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
        if (property_exists($object, 'dataRestrictions')) {
            if (!is_object($object->dataRestrictions)) {
                throw new UnexpectedValueException('value \'' . print_r($object->dataRestrictions, true) . '\' is not an object');
            }
            $value = new PaymentProductFieldDataRestrictions();
            $this->dataRestrictions = $value->fromObject($object->dataRestrictions);
        }
        if (property_exists($object, 'displayHints')) {
            if (!is_object($object->displayHints)) {
                throw new UnexpectedValueException('value \'' . print_r($object->displayHints, true) . '\' is not an object');
            }
            $value = new PaymentProductFieldDisplayHints();
            $this->displayHints = $value->fromObject($object->displayHints);
        }
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'type')) {
            $this->type = $object->type;
        }
        return $this;
    }
}
