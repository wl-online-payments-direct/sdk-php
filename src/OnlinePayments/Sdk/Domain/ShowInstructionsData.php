<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ShowInstructionsData extends DataObject
{
    /**
     * @var string
     */
    public $showData = null;

    /**
     * @return string
     */
    public function getShowData()
    {
        return $this->showData;
    }

    /**
     * @param string
     */
    public function setShowData($value)
    {
        $this->showData = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->showData)) {
            $object->showData = $this->showData;
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
        if (property_exists($object, 'showData')) {
            $this->showData = $object->showData;
        }
        return $this;
    }
}
