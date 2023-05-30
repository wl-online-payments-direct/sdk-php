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
class CurrencyConversionSpecificInput extends DataObject
{
    // Properties
    /**
     * @var bool
     */
    private $dccEnabled;

    // Methods
    /**
     * @return bool
     */
    public function getDccEnabled()
    {
        return $this->dccEnabled;
    }
    /**
     * @var bool
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
        if ($this->dccEnabled !== null) {
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
