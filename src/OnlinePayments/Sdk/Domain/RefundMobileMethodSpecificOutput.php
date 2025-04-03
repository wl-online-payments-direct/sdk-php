<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RefundMobileMethodSpecificOutput extends DataObject
{
    /**
     * @var string
     */
    public $network = null;

    /**
     * @var int
     */
    public $totalAmountPaid = null;

    /**
     * @var int
     */
    public $totalAmountRefunded = null;

    /**
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * @param string
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
     * @param int
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
     * @param int
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
        if (!is_null($this->network)) {
            $object->network = $this->network;
        }
        if (!is_null($this->totalAmountPaid)) {
            $object->totalAmountPaid = $this->totalAmountPaid;
        }
        if (!is_null($this->totalAmountRefunded)) {
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
