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
class PersonalName extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $surname;

    /**
     * @var string
     */
    private $title;

    // Methods
    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * @var string
     */
    public function setFirstName($value)
    {
        $this->firstName = $value;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }
    /**
     * @var string
     */
    public function setSurname($value)
    {
        $this->surname = $value;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * @var string
     */
    public function setTitle($value)
    {
        $this->title = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->firstName !== null) {
            $object->firstName = $this->firstName;
        }
        if ($this->surname !== null) {
            $object->surname = $this->surname;
        }
        if ($this->title !== null) {
            $object->title = $this->title;
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
        if (property_exists($object, 'firstName')) {
            $this->firstName = $object->firstName;
        }
        if (property_exists($object, 'surname')) {
            $this->surname = $object->surname;
        }
        if (property_exists($object, 'title')) {
            $this->title = $object->title;
        }
        return $this;
    }
}
