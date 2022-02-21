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
class RefundEWalletMethodSpecificOutput extends DataObject
{
    // Properties
    /**
     * @var RefundPaymentProduct840SpecificOutput
     */
    private $paymentProduct840SpecificOutput;

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
     * @return RefundPaymentProduct840SpecificOutput
     */
    public function getPaymentProduct840SpecificOutput()
    {
        return $this->paymentProduct840SpecificOutput;
    }
    /**
     * @var RefundPaymentProduct840SpecificOutput
     */
    public function setPaymentProduct840SpecificOutput($value)
    {
        $this->paymentProduct840SpecificOutput = $value;
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
        if ($this->paymentProduct840SpecificOutput !== null) {
            $object->paymentProduct840SpecificOutput = $this->paymentProduct840SpecificOutput->toObject();
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
        if (property_exists($object, 'paymentProduct840SpecificOutput')) {
            if (!is_object($object->paymentProduct840SpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct840SpecificOutput, true) . '\' is not an object');
            }
            $value = new RefundPaymentProduct840SpecificOutput();
            $this->paymentProduct840SpecificOutput = $value->fromObject($object->paymentProduct840SpecificOutput);
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
