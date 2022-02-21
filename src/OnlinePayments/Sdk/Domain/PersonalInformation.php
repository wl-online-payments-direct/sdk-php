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
class PersonalInformation extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $dateOfBirth;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var PersonalName
     */
    private $name;

    // Methods
    /**
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }
    /**
     * @var string
     */
    public function setDateOfBirth($value)
    {
        $this->dateOfBirth = $value;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }
    /**
     * @var string
     */
    public function setGender($value)
    {
        $this->gender = $value;
    }

    /**
     * @return PersonalName
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var PersonalName
     */
    public function setName($value)
    {
        $this->name = $value;
    }

    /**
     * @return object
     */
    public function toObject()
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
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
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
