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
     * @param string|null $value
     * @return $this
     */
    public function withPaymentPattern(?string $value): static
    {
        $this->paymentPattern = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withTotalNumberOfPayments(?int $value): static
    {
        $this->totalNumberOfPayments = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->paymentPattern !== null) {
            $object->paymentPattern = $this->paymentPattern;
        }
        if ($this->totalNumberOfPayments !== null) {
            $object->totalNumberOfPayments = $this->totalNumberOfPayments;
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
        if (property_exists($object, 'paymentPattern')) {
            $this->paymentPattern = $object->paymentPattern;
        }
        if (property_exists($object, 'totalNumberOfPayments')) {
            $this->totalNumberOfPayments = $object->totalNumberOfPayments;
        }
        return $this;
    }
}
