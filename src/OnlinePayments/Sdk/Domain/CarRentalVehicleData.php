<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CarRentalVehicleData extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $classId = null;

    /**
     * @var string|null
     */
    public ?string $identificationNumber = null;

    /**
     * @return string|null
     */
    public function getClassId(): ?string
    {
        return $this->classId;
    }

    /**
     * @param string|null $value
     */
    public function setClassId(?string $value): void
    {
        $this->classId = $value;
    }

    /**
     * @return string|null
     */
    public function getIdentificationNumber(): ?string
    {
        return $this->identificationNumber;
    }

    /**
     * @param string|null $value
     */
    public function setIdentificationNumber(?string $value): void
    {
        $this->identificationNumber = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->classId)) {
            $object->classId = $this->classId;
        }
        if (!is_null($this->identificationNumber)) {
            $object->identificationNumber = $this->identificationNumber;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CarRentalVehicleData
    {
        parent::fromObject($object);
        if (property_exists($object, 'classId')) {
            $this->classId = $object->classId;
        }
        if (property_exists($object, 'identificationNumber')) {
            $this->identificationNumber = $object->identificationNumber;
        }
        return $this;
    }
}
