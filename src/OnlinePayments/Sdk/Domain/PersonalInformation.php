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
     * @var string
     */
    public $dateOfBirth = null;

    /**
     * @var string
     */
    public $gender = null;

    /**
     * @var PersonalName
     */
    public $name = null;

    /**
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param string
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
     * @param string
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
     * @param PersonalName
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
