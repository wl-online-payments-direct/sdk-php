<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PersonalInformationToken extends DataObject
{
    /**
     * @var PersonalNameToken|null
     */
    public ?PersonalNameToken $name = null;

    /**
     * @return PersonalNameToken|null
     */
    public function getName(): ?PersonalNameToken
    {
        return $this->name;
    }

    /**
     * @param PersonalNameToken|null $value
     */
    public function setName(?PersonalNameToken $value): void
    {
        $this->name = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
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
    public function fromObject(object $object): PersonalInformationToken
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
