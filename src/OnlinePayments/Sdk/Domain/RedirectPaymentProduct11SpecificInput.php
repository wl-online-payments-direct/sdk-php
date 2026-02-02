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
class RedirectPaymentProduct11SpecificInput extends DataObject
{
    /**
     * @var DateTime|null
     */
    public ?DateTime $firstInstallmentPaymentDate = null;

    /**
     * @return DateTime|null
     */
    public function getFirstInstallmentPaymentDate(): ?DateTime
    {
        return $this->firstInstallmentPaymentDate;
    }

    /**
     * @param DateTime|null $value
     */
    public function setFirstInstallmentPaymentDate(?DateTime $value): void
    {
        $this->firstInstallmentPaymentDate = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->firstInstallmentPaymentDate)) {
            $object->firstInstallmentPaymentDate = $this->firstInstallmentPaymentDate->format('Y-m-d');
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RedirectPaymentProduct11SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'firstInstallmentPaymentDate')) {
            $this->firstInstallmentPaymentDate = new DateTime($object->firstInstallmentPaymentDate);
        }
        return $this;
    }
}
