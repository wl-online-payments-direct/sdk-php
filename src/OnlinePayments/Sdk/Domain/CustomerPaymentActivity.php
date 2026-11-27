<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CustomerPaymentActivity extends DataObject
{
    /**
     * @var int|null
     */
    public ?int $numberOfPaymentAttemptsLast24Hours = null;

    /**
     * @var int|null
     */
    public ?int $numberOfPaymentAttemptsLastYear = null;

    /**
     * @var int|null
     */
    public ?int $numberOfPurchasesLast6Months = null;

    /**
     * @return int|null
     */
    public function getNumberOfPaymentAttemptsLast24Hours(): ?int
    {
        return $this->numberOfPaymentAttemptsLast24Hours;
    }

    /**
     * @param int|null $value
     */
    public function setNumberOfPaymentAttemptsLast24Hours(?int $value): void
    {
        $this->numberOfPaymentAttemptsLast24Hours = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withNumberOfPaymentAttemptsLast24Hours(?int $value): static
    {
        $this->numberOfPaymentAttemptsLast24Hours = $value;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfPaymentAttemptsLastYear(): ?int
    {
        return $this->numberOfPaymentAttemptsLastYear;
    }

    /**
     * @param int|null $value
     */
    public function setNumberOfPaymentAttemptsLastYear(?int $value): void
    {
        $this->numberOfPaymentAttemptsLastYear = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withNumberOfPaymentAttemptsLastYear(?int $value): static
    {
        $this->numberOfPaymentAttemptsLastYear = $value;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfPurchasesLast6Months(): ?int
    {
        return $this->numberOfPurchasesLast6Months;
    }

    /**
     * @param int|null $value
     */
    public function setNumberOfPurchasesLast6Months(?int $value): void
    {
        $this->numberOfPurchasesLast6Months = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withNumberOfPurchasesLast6Months(?int $value): static
    {
        $this->numberOfPurchasesLast6Months = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->numberOfPaymentAttemptsLast24Hours !== null) {
            $object->numberOfPaymentAttemptsLast24Hours = $this->numberOfPaymentAttemptsLast24Hours;
        }
        if ($this->numberOfPaymentAttemptsLastYear !== null) {
            $object->numberOfPaymentAttemptsLastYear = $this->numberOfPaymentAttemptsLastYear;
        }
        if ($this->numberOfPurchasesLast6Months !== null) {
            $object->numberOfPurchasesLast6Months = $this->numberOfPurchasesLast6Months;
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
        if (property_exists($object, 'numberOfPaymentAttemptsLast24Hours')) {
            $this->numberOfPaymentAttemptsLast24Hours = $object->numberOfPaymentAttemptsLast24Hours;
        }
        if (property_exists($object, 'numberOfPaymentAttemptsLastYear')) {
            $this->numberOfPaymentAttemptsLastYear = $object->numberOfPaymentAttemptsLastYear;
        }
        if (property_exists($object, 'numberOfPurchasesLast6Months')) {
            $this->numberOfPurchasesLast6Months = $object->numberOfPurchasesLast6Months;
        }
        return $this;
    }
}
