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
class OperationOutput extends DataObject
{
    /**
     * @var AmountOfMoney|null
     */
    public ?AmountOfMoney $amountOfMoney = null;

    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var OperationPaymentReferences|null
     */
    public ?OperationPaymentReferences $operationReferences = null;

    /**
     * @var string|null
     */
    public ?string $paymentMethod = null;

    /**
     * @var PaymentReferences|null
     */
    public ?PaymentReferences $references = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var PaymentStatusOutput|null
     */
    public ?PaymentStatusOutput $statusOutput = null;

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
     * @return $this
     */
    public function withAmountOfMoney(?AmountOfMoney $value): static
    {
        $this->amountOfMoney = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $value
     */
    public function setId(?string $value): void
    {
        $this->id = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withId(?string $value): static
    {
        $this->id = $value;
        return $this;
    }

    /**
     * @return OperationPaymentReferences|null
     */
    public function getOperationReferences(): ?OperationPaymentReferences
    {
        return $this->operationReferences;
    }

    /**
     * @param OperationPaymentReferences|null $value
     */
    public function setOperationReferences(?OperationPaymentReferences $value): void
    {
        $this->operationReferences = $value;
    }

    /**
     * @param OperationPaymentReferences|null $value
     * @return $this
     */
    public function withOperationReferences(?OperationPaymentReferences $value): static
    {
        $this->operationReferences = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentMethod(?string $value): void
    {
        $this->paymentMethod = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPaymentMethod(?string $value): static
    {
        $this->paymentMethod = $value;
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
     * @return $this
     */
    public function withReferences(?PaymentReferences $value): static
    {
        $this->references = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $value
     */
    public function setStatus(?string $value): void
    {
        $this->status = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withStatus(?string $value): static
    {
        $this->status = $value;
        return $this;
    }

    /**
     * @return PaymentStatusOutput|null
     */
    public function getStatusOutput(): ?PaymentStatusOutput
    {
        return $this->statusOutput;
    }

    /**
     * @param PaymentStatusOutput|null $value
     */
    public function setStatusOutput(?PaymentStatusOutput $value): void
    {
        $this->statusOutput = $value;
    }

    /**
     * @param PaymentStatusOutput|null $value
     * @return $this
     */
    public function withStatusOutput(?PaymentStatusOutput $value): static
    {
        $this->statusOutput = $value;
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
     * @return $this
     */
    public function withTransactionDate(?DateTime $value): static
    {
        $this->transactionDate = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->amountOfMoney !== null) {
            $object->amountOfMoney = $this->amountOfMoney->toObject();
        }
        if ($this->id !== null) {
            $object->id = $this->id;
        }
        if ($this->operationReferences !== null) {
            $object->operationReferences = $this->operationReferences->toObject();
        }
        if ($this->paymentMethod !== null) {
            $object->paymentMethod = $this->paymentMethod;
        }
        if ($this->references !== null) {
            $object->references = $this->references->toObject();
        }
        if ($this->status !== null) {
            $object->status = $this->status;
        }
        if ($this->statusOutput !== null) {
            $object->statusOutput = $this->statusOutput->toObject();
        }
        if ($this->transactionDate !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'amountOfMoney')) {
            if (!is_object($object->amountOfMoney)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amountOfMoney, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->amountOfMoney = $value->fromObject($object->amountOfMoney);
        }
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'operationReferences')) {
            if (!is_object($object->operationReferences)) {
                throw new UnexpectedValueException('value \'' . print_r($object->operationReferences, true) . '\' is not an object');
            }
            $value = new OperationPaymentReferences();
            $this->operationReferences = $value->fromObject($object->operationReferences);
        }
        if (property_exists($object, 'paymentMethod')) {
            $this->paymentMethod = $object->paymentMethod;
        }
        if (property_exists($object, 'references')) {
            if (!is_object($object->references)) {
                throw new UnexpectedValueException('value \'' . print_r($object->references, true) . '\' is not an object');
            }
            $value = new PaymentReferences();
            $this->references = $value->fromObject($object->references);
        }
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        if (property_exists($object, 'statusOutput')) {
            if (!is_object($object->statusOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->statusOutput, true) . '\' is not an object');
            }
            $value = new PaymentStatusOutput();
            $this->statusOutput = $value->fromObject($object->statusOutput);
        }
        if (property_exists($object, 'transactionDate')) {
            $this->transactionDate = new DateTime($object->transactionDate);
        }
        return $this;
    }
}
