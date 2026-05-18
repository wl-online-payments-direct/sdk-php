<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MultiplePaymentInformation extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $paymentPattern = null;

    /**
     * @var int|null
     */
    public ?int $totalNumberOfPayments = null;

    /**
     * @return string|null
     */
    public function getPaymentPattern(): ?string
    {
        return $this->paymentPattern;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentPattern(?string $value): void
    {
        $this->paymentPattern = $value;
    }

    /**
     * @return int|null
     */
    public function getTotalNumberOfPayments(): ?int
    {
        return $this->totalNumberOfPayments;
    }

    /**
     * @param int|null $value
     */
    public function setTotalNumberOfPayments(?int $value): void
    {
        $this->totalNumberOfPayments = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->paymentPattern)) {
            $object->paymentPattern = $this->paymentPattern;
        }
        if (!is_null($this->totalNumberOfPayments)) {
            $object->totalNumberOfPayments = $this->totalNumberOfPayments;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): MultiplePaymentInformation
    {
        parent::fromObject($object);
        if (property_exists($object, 'paymentPattern')) {
            $this->paymentPattern = $object->paymentPattern;
        }
        if (property_exists($object, 'totalNumberOfPayments')) {
            $this->totalNumberOfPayments = $object->totalNumberOfPayments;
        }
        return $this;
    }
}
