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
     * @param string|null $value
     * @return $this
     */
    public function withClassId(?string $value): static
    {
        $this->classId = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withIdentificationNumber(?string $value): static
    {
        $this->identificationNumber = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->classId !== null) {
            $object->classId = $this->classId;
        }
        if ($this->identificationNumber !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
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
