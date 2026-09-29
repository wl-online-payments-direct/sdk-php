<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MandatePersonalInformationResponse extends DataObject
{
    /**
     * @var MandatePersonalNameResponse|null
    */
    public ?MandatePersonalNameResponse $name = null;

    /**
     * @var string|null
    */
    public ?string $title = null;

    /**
     * @return MandatePersonalNameResponse|null
    */
    public function getName(): ?MandatePersonalNameResponse
    {
        return $this->name;
    }

    /**
     * @param MandatePersonalNameResponse|null $value
    */
    public function setName(?MandatePersonalNameResponse $value): void
    {
        $this->name = $value;
    }

    /**
     * @param MandatePersonalNameResponse|null $value
     * @return MandatePersonalInformationResponse
    */
    public function withName(?MandatePersonalNameResponse $value): MandatePersonalInformationResponse
    {
        $this->name = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $value
    */
    public function setTitle(?string $value): void
    {
        $this->title = $value;
    }

    /**
     * @param string|null $value
     * @return MandatePersonalInformationResponse
    */
    public function withTitle(?string $value): MandatePersonalInformationResponse
    {
        $this->title = $value;
        return $this;
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
        if (!is_null($this->title)) {
            $object->title = $this->title;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): MandatePersonalInformationResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'name')) {
            if (!is_object($object->name)) {
                throw new UnexpectedValueException('value \'' . print_r($object->name, true) . '\' is not an object');
            }
            $value = new MandatePersonalNameResponse();
            $this->name = $value->fromObject($object->name);
        }
        if (property_exists($object, 'title')) {
            $this->title = $object->title;
        }
        return $this;
    }
}
