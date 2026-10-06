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
class PayoutOutput extends DataObject
{
    /**
     * @var AmountOfMoney|null
    */
    public ?AmountOfMoney $amountOfMoney = null;

    /**
     * @var DateTime|null
    */
    public ?DateTime $paymentCreationDate = null;

    /**
     * @var PayoutCardPaymentMethodSpecificOutput|null
    */
    public ?PayoutCardPaymentMethodSpecificOutput $payoutCardPaymentMethodSpecificOutput = null;

    /**
     * @var string|null
    */
    public ?string $payoutReason = null;

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
     * @param AmountOfMoney|null $value
     * @return PayoutOutput
    */
    public function withAmountOfMoney(?AmountOfMoney $value): PayoutOutput
    {
        $this->amountOfMoney = $value;
        return $this;
    }

    /**
     * @return DateTime|null
    */
    public function getPaymentCreationDate(): ?DateTime
    {
        return $this->paymentCreationDate;
    }

    /**
     * @param DateTime|null $value
    */
    public function setPaymentCreationDate(?DateTime $value): void
    {
        $this->paymentCreationDate = $value;
    }

    /**
     * @param DateTime|null $value
     * @return PayoutOutput
    */
    public function withPaymentCreationDate(?DateTime $value): PayoutOutput
    {
        $this->paymentCreationDate = $value;
        return $this;
    }

    /**
     * @return PayoutCardPaymentMethodSpecificOutput|null
    */
    public function getPayoutCardPaymentMethodSpecificOutput(): ?PayoutCardPaymentMethodSpecificOutput
    {
        return $this->payoutCardPaymentMethodSpecificOutput;
    }

    /**
     * @param PayoutCardPaymentMethodSpecificOutput|null $value
    */
    public function setPayoutCardPaymentMethodSpecificOutput(?PayoutCardPaymentMethodSpecificOutput $value): void
    {
        $this->payoutCardPaymentMethodSpecificOutput = $value;
    }

    /**
     * @param PayoutCardPaymentMethodSpecificOutput|null $value
     * @return PayoutOutput
    */
    public function withPayoutCardPaymentMethodSpecificOutput(?PayoutCardPaymentMethodSpecificOutput $value): PayoutOutput
    {
        $this->payoutCardPaymentMethodSpecificOutput = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getPayoutReason(): ?string
    {
        return $this->payoutReason;
    }

    /**
     * @param string|null $value
    */
    public function setPayoutReason(?string $value): void
    {
        $this->payoutReason = $value;
    }

    /**
     * @param string|null $value
     * @return PayoutOutput
    */
    public function withPayoutReason(?string $value): PayoutOutput
    {
        $this->payoutReason = $value;
        return $this;
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
     * @param PaymentReferences|null $value
     * @return PayoutOutput
    */
    public function withReferences(?PaymentReferences $value): PayoutOutput
    {
        $this->references = $value;
        return $this;
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
     * @param DateTime|null $value
     * @return PayoutOutput
    */
    public function withTransactionDate(?DateTime $value): PayoutOutput
    {
        $this->transactionDate = $value;
        return $this;
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
        if (!is_null($this->paymentCreationDate)) {
            $object->paymentCreationDate = $this->paymentCreationDate->format('Y-m-d\\TH:i:s.vP');
        }
        if (!is_null($this->payoutCardPaymentMethodSpecificOutput)) {
            $object->payoutCardPaymentMethodSpecificOutput = $this->payoutCardPaymentMethodSpecificOutput->toObject();
        }
        if (!is_null($this->payoutReason)) {
            $object->payoutReason = $this->payoutReason;
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
    public function fromObject(object $object): PayoutOutput
    {
        parent::fromObject($object);
        if (property_exists($object, 'amountOfMoney')) {
            if (!is_object($object->amountOfMoney)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amountOfMoney, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->amountOfMoney = $value->fromObject($object->amountOfMoney);
        }
        if (property_exists($object, 'paymentCreationDate')) {
            $this->paymentCreationDate = new DateTime($object->paymentCreationDate);
        }
        if (property_exists($object, 'payoutCardPaymentMethodSpecificOutput')) {
            if (!is_object($object->payoutCardPaymentMethodSpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->payoutCardPaymentMethodSpecificOutput, true) . '\' is not an object');
            }
            $value = new PayoutCardPaymentMethodSpecificOutput();
            $this->payoutCardPaymentMethodSpecificOutput = $value->fromObject($object->payoutCardPaymentMethodSpecificOutput);
        }
        if (property_exists($object, 'payoutReason')) {
            $this->payoutReason = $object->payoutReason;
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
