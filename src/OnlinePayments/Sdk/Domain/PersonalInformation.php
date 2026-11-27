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
     * @param string|null $value
     * @return $this
     */
    public function withDateOfBirth(?string $value): static
    {
        $this->dateOfBirth = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withGender(?string $value): static
    {
        $this->gender = $value;
        return $this;
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
     * @param PersonalName|null $value
     * @return $this
     */
    public function withName(?PersonalName $value): static
    {
        $this->name = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->dateOfBirth !== null) {
            $object->dateOfBirth = $this->dateOfBirth;
        }
        if ($this->gender !== null) {
            $object->gender = $this->gender;
        }
        if ($this->name !== null) {
            $object->name = $this->name->toObject();
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
