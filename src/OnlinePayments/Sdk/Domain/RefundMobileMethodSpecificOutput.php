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
class RefundMobileMethodSpecificOutput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $network;

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
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }
    /**
     * @var string
     */
    public function setNetwork($value)
    {
        $this->network = $value;
    }

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
        if ($this->network !== null) {
            $object->network = $this->network;
        }
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
        if (property_exists($object, 'network')) {
            $this->network = $object->network;
        }
        if (property_exists($object, 'totalAmountPaid')) {
            $this->totalAmountPaid = $object->totalAmountPaid;
        }
        if (property_exists($object, 'totalAmountRefunded')) {
            $this->totalAmountRefunded = $object->totalAmountRefunded;
        }
        return $this;
    }
}
