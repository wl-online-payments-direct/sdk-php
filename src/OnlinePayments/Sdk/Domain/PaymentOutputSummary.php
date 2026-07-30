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
class PaymentOutputSummary extends DataObject
{
    /**
     * @var AmountOfMoney|null
     */
    public ?AmountOfMoney $amountOfMoney = null;

    /**
     * @var CardPaymentMethodSpecificOutputSummary|null
     */
    public ?CardPaymentMethodSpecificOutputSummary $cardPaymentMethodSpecificOutput = null;

    /**
     * @var PaymentReferences|null
     */
    public ?PaymentReferences $references = null;

    /**
     * @var DateTime|null
     */
    public ?DateTime $transactionDate = null;

    /**
     * @return AmountOfMoney|null
     */
    public function getAmountOfMoney(): ?AmountOfMoney
    {
        return $this->amountOfMoney;
    }

    /**
     * @param AmountOfMoney|null $value
     */
    public function setAmountOfMoney(?AmountOfMoney $value): void
    {
        $this->amountOfMoney = $value;
    }

    /**
     * @return CardPaymentMethodSpecificOutputSummary|null
     */
    public function getCardPaymentMethodSpecificOutput(): ?CardPaymentMethodSpecificOutputSummary
    {
        return $this->cardPaymentMethodSpecificOutput;
    }

    /**
     * @param CardPaymentMethodSpecificOutputSummary|null $value
     */
    public function setCardPaymentMethodSpecificOutput(?CardPaymentMethodSpecificOutputSummary $value): void
    {
        $this->cardPaymentMethodSpecificOutput = $value;
    }

    /**
     * @return PaymentReferences|null
     */
    public function getReferences(): ?PaymentReferences
    {
        return $this->references;
    }

    /**
     * @param PaymentReferences|null $value
     */
    public function setReferences(?PaymentReferences $value): void
    {
        $this->references = $value;
    }

    /**
     * @return DateTime|null
     */
    public function getTransactionDate(): ?DateTime
    {
        return $this->transactionDate;
    }

    /**
     * @param DateTime|null $value
     */
    public function setTransactionDate(?DateTime $value): void
    {
        $this->transactionDate = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->amountOfMoney)) {
            $object->amountOfMoney = $this->amountOfMoney->toObject();
        }
        if (!is_null($this->cardPaymentMethodSpecificOutput)) {
            $object->cardPaymentMethodSpecificOutput = $this->cardPaymentMethodSpecificOutput->toObject();
        }
        if (!is_null($this->references)) {
            $object->references = $this->references->toObject();
        }
        if (!is_null($this->transactionDate)) {
            $object->transactionDate = $this->transactionDate->format('Y-m-d\\TH:i:s.vP');
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentOutputSummary
    {
        parent::fromObject($object);
        if (property_exists($object, 'amountOfMoney')) {
            if (!is_object($object->amountOfMoney)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amountOfMoney, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->amountOfMoney = $value->fromObject($object->amountOfMoney);
        }
        if (property_exists($object, 'cardPaymentMethodSpecificOutput')) {
            if (!is_object($object->cardPaymentMethodSpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardPaymentMethodSpecificOutput, true) . '\' is not an object');
            }
            $value = new CardPaymentMethodSpecificOutputSummary();
            $this->cardPaymentMethodSpecificOutput = $value->fromObject($object->cardPaymentMethodSpecificOutput);
        }
        if (property_exists($object, 'references')) {
            if (!is_object($object->references)) {
                throw new UnexpectedValueException('value \'' . print_r($object->references, true) . '\' is not an object');
            }
            $value = new PaymentReferences();
            $this->references = $value->fromObject($object->references);
        }
        if (property_exists($object, 'transactionDate')) {
            $this->transactionDate = new DateTime($object->transactionDate);
        }
        return $this;
    }
}
