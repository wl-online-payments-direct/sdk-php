<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AccountOnFile extends DataObject
{
    /**
     * @var AccountOnFileAttribute[]
     */
    public $attributes = null;

    /**
     * @var AccountOnFileDisplayHints
     */
    public $displayHints = null;

    /**
     * @var int
     */
    public $id = null;

    /**
     * @var int
     */
    public $paymentProductId = null;

    /**
     * @return AccountOnFileAttribute[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param AccountOnFileAttribute[]
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
     * @param AccountOnFileDisplayHints
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
     * @param int
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
     * @param int
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
        if (!is_null($this->attributes)) {
            $object->attributes = [];
            foreach ($this->attributes as $element) {
                if (!is_null($element)) {
                    $object->attributes[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->displayHints)) {
            $object->displayHints = $this->displayHints->toObject();
        }
        if (!is_null($this->id)) {
            $object->id = $this->id;
        }
        if (!is_null($this->paymentProductId)) {
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
