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
class PaymentProductField extends DataObject
{
    // Properties
    /**
     * @var PaymentProductFieldDataRestrictions
     */
    private $dataRestrictions;

    /**
     * @var PaymentProductFieldDisplayHints
     */
    private $displayHints;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    // Methods
    /**
     * @return PaymentProductFieldDataRestrictions
     */
    public function getDataRestrictions()
    {
        return $this->dataRestrictions;
    }
    /**
     * @var PaymentProductFieldDataRestrictions
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
     * @var PaymentProductFieldDisplayHints
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
     * @var string
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
     * @var string
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
        if ($this->dataRestrictions !== null) {
            $object->dataRestrictions = $this->dataRestrictions->toObject();
        }
        if ($this->displayHints !== null) {
            $object->displayHints = $this->displayHints->toObject();
        }
        if ($this->id !== null) {
            $object->id = $this->id;
        }
        if ($this->type !== null) {
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
