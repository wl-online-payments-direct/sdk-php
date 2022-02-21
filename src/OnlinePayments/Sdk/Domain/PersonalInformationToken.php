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
class PersonalInformationToken extends DataObject
{
    // Properties
    /**
     * @var PersonalNameToken
     */
    private $name;

    // Methods
    /**
     * @return PersonalNameToken
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var PersonalNameToken
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
        if (property_exists($object, 'name')) {
            if (!is_object($object->name)) {
                throw new UnexpectedValueException('value \'' . print_r($object->name, true) . '\' is not an object');
            }
            $value = new PersonalNameToken();
            $this->name = $value->fromObject($object->name);
        }
        return $this;
    }
}
