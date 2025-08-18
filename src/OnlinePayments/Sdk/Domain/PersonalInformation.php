<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PersonalInformation extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $dateOfBirth = null;

    /**
     * @var string|null
     */
    public ?string $gender = null;

    /**
     * @var PersonalName|null
     */
    public ?PersonalName $name = null;

    /**
     * @return string|null
     */
    public function getDateOfBirth(): ?string
    {
        return $this->dateOfBirth;
    }

    /**
     * @param string|null $value
     */
    public function setDateOfBirth(?string $value): void
    {
        $this->dateOfBirth = $value;
    }

    /**
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param string|null $value
     */
    public function setGender(?string $value): void
    {
        $this->gender = $value;
    }

    /**
     * @return PersonalName|null
     */
    public function getName(): ?PersonalName
    {
        return $this->name;
    }

    /**
     * @param PersonalName|null $value
     */
    public function setName(?PersonalName $value): void
    {
        $this->name = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->dateOfBirth)) {
            $object->dateOfBirth = $this->dateOfBirth;
        }
        if (!is_null($this->gender)) {
            $object->gender = $this->gender;
        }
        if (!is_null($this->name)) {
            $object->name = $this->name->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PersonalInformation
    {
        parent::fromObject($object);
        if (property_exists($object, 'dateOfBirth')) {
            $this->dateOfBirth = $object->dateOfBirth;
        }
        if (property_exists($object, 'gender')) {
            $this->gender = $object->gender;
        }
        if (property_exists($object, 'name')) {
            if (!is_object($object->name)) {
                throw new UnexpectedValueException('value \'' . print_r($object->name, true) . '\' is not an object');
            }
            $value = new PersonalName();
            $this->name = $value->fromObject($object->name);
        }
        return $this;
    }
}
