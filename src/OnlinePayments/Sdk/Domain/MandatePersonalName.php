<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MandatePersonalName extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $firstName = null;

    /**
     * @var string|null
    */
    public ?string $surname = null;

    /**
     * @return string|null
    */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $value
    */
    public function setFirstName(?string $value): void
    {
        $this->firstName = $value;
    }

    /**
     * @param string|null $value
     * @return MandatePersonalName
    */
    public function withFirstName(?string $value): MandatePersonalName
    {
        $this->firstName = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getSurname(): ?string
    {
        return $this->surname;
    }

    /**
     * @param string|null $value
    */
    public function setSurname(?string $value): void
    {
        $this->surname = $value;
    }

    /**
     * @param string|null $value
     * @return MandatePersonalName
    */
    public function withSurname(?string $value): MandatePersonalName
    {
        $this->surname = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->firstName)) {
            $object->firstName = $this->firstName;
        }
        if (!is_null($this->surname)) {
            $object->surname = $this->surname;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): MandatePersonalName
    {
        parent::fromObject($object);
        if (property_exists($object, 'firstName')) {
            $this->firstName = $object->firstName;
        }
        if (property_exists($object, 'surname')) {
            $this->surname = $object->surname;
        }
        return $this;
    }
}
