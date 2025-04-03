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
     * @var MandatePersonalNameResponse
     */
    public $name = null;

    /**
     * @var string
     */
    public $title = null;

    /**
     * @return MandatePersonalNameResponse
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param MandatePersonalNameResponse
     */
    public function setName($value)
    {
        $this->name = $value;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string
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
            $value = new MandatePersonalNameResponse();
            $this->name = $value->fromObject($object->name);
        }
        if (property_exists($object, 'title')) {
            $this->title = $object->title;
        }
        return $this;
    }
}
