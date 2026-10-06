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
     * @return OperationOutput
    */
    public function withAmountOfMoney(?AmountOfMoney $value): OperationOutput
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
     * @return OperationOutput
    */
    public function withId(?string $value): OperationOutput
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
     * @return OperationOutput
    */
    public function withOperationReferences(?OperationPaymentReferences $value): OperationOutput
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
     * @return OperationOutput
    */
    public function withPaymentMethod(?string $value): OperationOutput
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
     * @return OperationOutput
    */
    public function withReferences(?PaymentReferences $value): OperationOutput
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
     * @return OperationOutput
    */
    public function withStatus(?string $value): OperationOutput
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
     * @return OperationOutput
    */
    public function withStatusOutput(?PaymentStatusOutput $value): OperationOutput
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
     * @return OperationOutput
    */
    public function withTransactionDate(?DateTime $value): OperationOutput
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
        if (!is_null($this->id)) {
            $object->id = $this->id;
        }
        if (!is_null($this->operationReferences)) {
            $object->operationReferences = $this->operationReferences->toObject();
        }
        if (!is_null($this->paymentMethod)) {
            $object->paymentMethod = $this->paymentMethod;
        }
        if (!is_null($this->references)) {
            $object->references = $this->references->toObject();
        }
        if (!is_null($this->status)) {
            $object->status = $this->status;
        }
        if (!is_null($this->statusOutput)) {
            $object->statusOutput = $this->statusOutput->toObject();
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
    public function fromObject(object $object): OperationOutput
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
