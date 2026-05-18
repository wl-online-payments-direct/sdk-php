<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use DateTime;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct5410SpecificInput extends DataObject
{
    /**
     * @var DateTime|null
     */
    public ?DateTime $secondInstallmentPaymentDate = null;

    /**
     * @return DateTime|null
     */
    public function getSecondInstallmentPaymentDate(): ?DateTime
    {
        return $this->secondInstallmentPaymentDate;
    }

    /**
     * @param DateTime|null $value
     */
    public function setSecondInstallmentPaymentDate(?DateTime $value): void
    {
        $this->secondInstallmentPaymentDate = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->secondInstallmentPaymentDate)) {
            $object->secondInstallmentPaymentDate = $this->secondInstallmentPaymentDate->format('Y-m-d');
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RedirectPaymentProduct5410SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'secondInstallmentPaymentDate')) {
            $this->secondInstallmentPaymentDate = new DateTime($object->secondInstallmentPaymentDate);
        }
        return $this;
    }
}
