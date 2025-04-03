<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AcquirerInformation extends DataObject
{
    /**
     * @var AcquirerSelectionInformation
     */
    public $acquirerSelectionInformation = null;

    /**
     * @var string
     */
    public $name = null;

    /**
     * @return AcquirerSelectionInformation
     */
    public function getAcquirerSelectionInformation()
    {
        return $this->acquirerSelectionInformation;
    }

    /**
     * @param AcquirerSelectionInformation
     */
    public function setAcquirerSelectionInformation($value)
    {
        $this->acquirerSelectionInformation = $value;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string
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
        if (!is_null($this->acquirerSelectionInformation)) {
            $object->acquirerSelectionInformation = $this->acquirerSelectionInformation->toObject();
        }
        if (!is_null($this->name)) {
            $object->name = $this->name;
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
        if (property_exists($object, 'acquirerSelectionInformation')) {
            if (!is_object($object->acquirerSelectionInformation)) {
                throw new UnexpectedValueException('value \'' . print_r($object->acquirerSelectionInformation, true) . '\' is not an object');
            }
            $value = new AcquirerSelectionInformation();
            $this->acquirerSelectionInformation = $value->fromObject($object->acquirerSelectionInformation);
        }
        if (property_exists($object, 'name')) {
            $this->name = $object->name;
        }
        return $this;
    }
}
