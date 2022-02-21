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
class LineItemInvoiceData extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $description;

    // Methods
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @var string
     */
    public function setDescription($value)
    {
        $this->description = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->description !== null) {
            $object->description = $this->description;
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
        if (property_exists($object, 'description')) {
            $this->description = $object->description;
        }
        return $this;
    }
}
