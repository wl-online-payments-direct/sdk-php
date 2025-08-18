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
     * @var PaymentProductFieldDataRestrictions|null
     */
    public ?PaymentProductFieldDataRestrictions $dataRestrictions = null;

    /**
     * @var PaymentProductFieldDisplayHints|null
     */
    public ?PaymentProductFieldDisplayHints $displayHints = null;

    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @return PaymentProductFieldDataRestrictions|null
     */
    public function getDataRestrictions(): ?PaymentProductFieldDataRestrictions
    {
        return $this->dataRestrictions;
    }

    /**
     * @param PaymentProductFieldDataRestrictions|null $value
     */
    public function setDataRestrictions(?PaymentProductFieldDataRestrictions $value): void
    {
        $this->dataRestrictions = $value;
    }

    /**
     * @return PaymentProductFieldDisplayHints|null
     */
    public function getDisplayHints(): ?PaymentProductFieldDisplayHints
    {
        return $this->displayHints;
    }

    /**
     * @param PaymentProductFieldDisplayHints|null $value
     */
    public function setDisplayHints(?PaymentProductFieldDisplayHints $value): void
    {
        $this->displayHints = $value;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $value
     */
    public function setId(?string $value): void
    {
        $this->id = $value;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $value
     */
    public function setType(?string $value): void
    {
        $this->type = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): PaymentProductField
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
