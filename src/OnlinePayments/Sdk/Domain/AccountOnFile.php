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
class AccountOnFile extends DataObject
{
    // Properties
    /**
     * @var AccountOnFileAttribute[]
     */
    private $attributes;

    /**
     * @var AccountOnFileDisplayHints
     */
    private $displayHints;

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $paymentProductId;

    // Methods
    /**
     * @return AccountOnFileAttribute[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
    /**
     * @var AccountOnFileAttribute[]
     */
    public function setAttributes($value)
    {
        $this->attributes = $value;
    }

    /**
     * @return AccountOnFileDisplayHints
     */
    public function getDisplayHints()
    {
        return $this->displayHints;
    }
    /**
     * @var AccountOnFileDisplayHints
     */
    public function setDisplayHints($value)
    {
        $this->displayHints = $value;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var int
     */
    public function setId($value)
    {
        $this->id = $value;
    }

    /**
     * @return int
     */
    public function getPaymentProductId()
    {
        return $this->paymentProductId;
    }
    /**
     * @var int
     */
    public function setPaymentProductId($value)
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->attributes !== null) {
            $object->attributes = [];
            foreach ($this->attributes as $element) {
                if ($element !== null) {
                    $object->attributes[] = $element->toObject();
                }
            }
        }
        if ($this->displayHints !== null) {
            $object->displayHints = $this->displayHints->toObject();
        }
        if ($this->id !== null) {
            $object->id = $this->id;
        }
        if ($this->paymentProductId !== null) {
            $object->paymentProductId = $this->paymentProductId;
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
        if (property_exists($object, 'attributes')) {
            if (!is_array($object->attributes) && !is_object($object->attributes)) {
                throw new UnexpectedValueException('value \'' . print_r($object->attributes, true) . '\' is not an array or object');
            }
            $this->attributes = [];
            foreach ($object->attributes as $element) {
                $value = new AccountOnFileAttribute();
                $this->attributes[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'displayHints')) {
            if (!is_object($object->displayHints)) {
                throw new UnexpectedValueException('value \'' . print_r($object->displayHints, true) . '\' is not an object');
            }
            $value = new AccountOnFileDisplayHints();
            $this->displayHints = $value->fromObject($object->displayHints);
        }
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        return $this;
    }
}
