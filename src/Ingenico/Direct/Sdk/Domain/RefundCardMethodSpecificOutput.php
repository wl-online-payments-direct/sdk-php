<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference/index.html
 */
namespace Ingenico\Direct\Sdk\Domain;

use Ingenico\Direct\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package Ingenico\Direct\Sdk\Domain
 */
class RefundCardMethodSpecificOutput extends DataObject
{
    // Properties
    /**
     * @var int
     */
    private $totalAmountPaid;

    /**
     * @var int
     */
    private $totalAmountRefunded;

    // Methods
    /**
     * @return int
     */
    public function getTotalAmountPaid()
    {
        return $this->totalAmountPaid;
    }
    /**
     * @var int
     */
    public function setTotalAmountPaid($value)
    {
        $this->totalAmountPaid = $value;
    }

    /**
     * @return int
     */
    public function getTotalAmountRefunded()
    {
        return $this->totalAmountRefunded;
    }
    /**
     * @var int
     */
    public function setTotalAmountRefunded($value)
    {
        $this->totalAmountRefunded = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->totalAmountPaid !== null) {
            $object->totalAmountPaid = $this->totalAmountPaid;
        }
        if ($this->totalAmountRefunded !== null) {
            $object->totalAmountRefunded = $this->totalAmountRefunded;
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
        if (property_exists($object, 'totalAmountPaid')) {
            $this->totalAmountPaid = $object->totalAmountPaid;
        }
        if (property_exists($object, 'totalAmountRefunded')) {
            $this->totalAmountRefunded = $object->totalAmountRefunded;
        }
        return $this;
    }
}
