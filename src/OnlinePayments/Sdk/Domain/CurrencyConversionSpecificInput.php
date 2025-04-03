<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CurrencyConversionSpecificInput extends DataObject
{
    /**
     * @var bool
     */
    public $dccEnabled = null;

    /**
     * @return bool
     */
    public function getDccEnabled()
    {
        return $this->dccEnabled;
    }

    /**
     * @param bool
     */
    public function setDccEnabled($value)
    {
        $this->dccEnabled = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->dccEnabled)) {
            $object->dccEnabled = $this->dccEnabled;
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
        if (property_exists($object, 'dccEnabled')) {
            $this->dccEnabled = $object->dccEnabled;
        }
        return $this;
    }
}
