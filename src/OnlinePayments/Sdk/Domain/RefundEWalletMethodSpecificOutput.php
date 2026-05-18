<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RefundEWalletMethodSpecificOutput extends DataObject
{
    /**
     * @var RefundPaymentProduct840SpecificOutput|null
     */
    public ?RefundPaymentProduct840SpecificOutput $paymentProduct840SpecificOutput = null;

    /**
     * @var int|null
     */
    public ?int $totalAmountPaid = null;

    /**
     * @var int|null
     */
    public ?int $totalAmountRefunded = null;

    /**
     * @return RefundPaymentProduct840SpecificOutput|null
     */
    public function getPaymentProduct840SpecificOutput(): ?RefundPaymentProduct840SpecificOutput
    {
        return $this->paymentProduct840SpecificOutput;
    }

    /**
     * @param RefundPaymentProduct840SpecificOutput|null $value
     */
    public function setPaymentProduct840SpecificOutput(?RefundPaymentProduct840SpecificOutput $value): void
    {
        $this->paymentProduct840SpecificOutput = $value;
    }

    /**
     * @return int|null
     */
    public function getTotalAmountPaid(): ?int
    {
        return $this->totalAmountPaid;
    }

    /**
     * @param int|null $value
     */
    public function setTotalAmountPaid(?int $value): void
    {
        $this->totalAmountPaid = $value;
    }

    /**
     * @return int|null
     */
    public function getTotalAmountRefunded(): ?int
    {
        return $this->totalAmountRefunded;
    }

    /**
     * @param int|null $value
     */
    public function setTotalAmountRefunded(?int $value): void
    {
        $this->totalAmountRefunded = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->paymentProduct840SpecificOutput)) {
            $object->paymentProduct840SpecificOutput = $this->paymentProduct840SpecificOutput->toObject();
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
    public function fromObject(object $object): RefundEWalletMethodSpecificOutput
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
