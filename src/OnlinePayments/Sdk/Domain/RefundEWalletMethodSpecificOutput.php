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
     * @param RefundPaymentProduct840SpecificOutput|null $value
     * @return $this
     */
    public function withPaymentProduct840SpecificOutput(?RefundPaymentProduct840SpecificOutput $value): static
    {
        $this->paymentProduct840SpecificOutput = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withTotalAmountPaid(?int $value): static
    {
        $this->totalAmountPaid = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withTotalAmountRefunded(?int $value): static
    {
        $this->totalAmountRefunded = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
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
