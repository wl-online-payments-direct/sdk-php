<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RefundRequest extends DataObject
{
    /**
     * @var AmountOfMoney|null
     */
    public ?AmountOfMoney $amountOfMoney = null;

    /**
     * @var string|null
     */
    public ?string $captureId = null;

    /**
     * @var OmnichannelRefundSpecificInput|null
     */
    public ?OmnichannelRefundSpecificInput $omnichannelRefundSpecificInput = null;

    /**
     * @var OperationPaymentReferences|null
     */
    public ?OperationPaymentReferences $operationReferences = null;

    /**
     * @var string|null
     */
    public ?string $reason = null;

    /**
     * @var PaymentReferences|null
     */
    public ?PaymentReferences $references = null;

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
     * @return string|null
     */
    public function getCaptureId(): ?string
    {
        return $this->captureId;
    }

    /**
     * @param string|null $value
     */
    public function setCaptureId(?string $value): void
    {
        $this->captureId = $value;
    }

    /**
     * @return OmnichannelRefundSpecificInput|null
     */
    public function getOmnichannelRefundSpecificInput(): ?OmnichannelRefundSpecificInput
    {
        return $this->omnichannelRefundSpecificInput;
    }

    /**
     * @param OmnichannelRefundSpecificInput|null $value
     */
    public function setOmnichannelRefundSpecificInput(?OmnichannelRefundSpecificInput $value): void
    {
        $this->omnichannelRefundSpecificInput = $value;
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
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param string|null $value
     */
    public function setReason(?string $value): void
    {
        $this->reason = $value;
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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->amountOfMoney)) {
            $object->amountOfMoney = $this->amountOfMoney->toObject();
        }
        if (!is_null($this->captureId)) {
            $object->captureId = $this->captureId;
        }
        if (!is_null($this->omnichannelRefundSpecificInput)) {
            $object->omnichannelRefundSpecificInput = $this->omnichannelRefundSpecificInput->toObject();
        }
        if (!is_null($this->operationReferences)) {
            $object->operationReferences = $this->operationReferences->toObject();
        }
        if (!is_null($this->reason)) {
            $object->reason = $this->reason;
        }
        if (!is_null($this->references)) {
            $object->references = $this->references->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RefundRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'amountOfMoney')) {
            if (!is_object($object->amountOfMoney)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amountOfMoney, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->amountOfMoney = $value->fromObject($object->amountOfMoney);
        }
        if (property_exists($object, 'captureId')) {
            $this->captureId = $object->captureId;
        }
        if (property_exists($object, 'omnichannelRefundSpecificInput')) {
            if (!is_object($object->omnichannelRefundSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->omnichannelRefundSpecificInput, true) . '\' is not an object');
            }
            $value = new OmnichannelRefundSpecificInput();
            $this->omnichannelRefundSpecificInput = $value->fromObject($object->omnichannelRefundSpecificInput);
        }
        if (property_exists($object, 'operationReferences')) {
            if (!is_object($object->operationReferences)) {
                throw new UnexpectedValueException('value \'' . print_r($object->operationReferences, true) . '\' is not an object');
            }
            $value = new OperationPaymentReferences();
            $this->operationReferences = $value->fromObject($object->operationReferences);
        }
        if (property_exists($object, 'reason')) {
            $this->reason = $object->reason;
        }
        if (property_exists($object, 'references')) {
            if (!is_object($object->references)) {
                throw new UnexpectedValueException('value \'' . print_r($object->references, true) . '\' is not an object');
            }
            $value = new PaymentReferences();
            $this->references = $value->fromObject($object->references);
        }
        return $this;
    }
}
