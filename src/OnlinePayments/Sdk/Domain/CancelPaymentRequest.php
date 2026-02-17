<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CancelPaymentRequest extends DataObject
{
    /**
     * @var AmountOfMoney|null
     */
    public ?AmountOfMoney $amountOfMoney = null;

    /**
     * @var bool|null
     */
    public ?bool $isFinal = null;

    /**
     * @var LineItemDetail[]|null
     */
    public ?array $lineItemDetails = null;

    /**
     * @var OperationPaymentReferences|null
     */
    public ?OperationPaymentReferences $operationReferences = null;

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
     * @return bool|null
     */
    public function getIsFinal(): ?bool
    {
        return $this->isFinal;
    }

    /**
     * @param bool|null $value
     */
    public function setIsFinal(?bool $value): void
    {
        $this->isFinal = $value;
    }

    /**
     * @return LineItemDetail[]|null
     */
    public function getLineItemDetails(): ?array
    {
        return $this->lineItemDetails;
    }

    /**
     * @param LineItemDetail[]|null $value
     */
    public function setLineItemDetails(?array $value): void
    {
        $this->lineItemDetails = $value;
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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->amountOfMoney)) {
            $object->amountOfMoney = $this->amountOfMoney->toObject();
        }
        if (!is_null($this->isFinal)) {
            $object->isFinal = $this->isFinal;
        }
        if (!is_null($this->lineItemDetails)) {
            $object->lineItemDetails = [];
            foreach ($this->lineItemDetails as $element) {
                if (!is_null($element)) {
                    $object->lineItemDetails[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->operationReferences)) {
            $object->operationReferences = $this->operationReferences->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CancelPaymentRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'amountOfMoney')) {
            if (!is_object($object->amountOfMoney)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amountOfMoney, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->amountOfMoney = $value->fromObject($object->amountOfMoney);
        }
        if (property_exists($object, 'isFinal')) {
            $this->isFinal = $object->isFinal;
        }
        if (property_exists($object, 'lineItemDetails')) {
            if (!is_array($object->lineItemDetails) && !is_object($object->lineItemDetails)) {
                throw new UnexpectedValueException('value \'' . print_r($object->lineItemDetails, true) . '\' is not an array or object');
            }
            $this->lineItemDetails = [];
            foreach ($object->lineItemDetails as $element) {
                $value = new LineItemDetail();
                $this->lineItemDetails[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'operationReferences')) {
            if (!is_object($object->operationReferences)) {
                throw new UnexpectedValueException('value \'' . print_r($object->operationReferences, true) . '\' is not an object');
            }
            $value = new OperationPaymentReferences();
            $this->operationReferences = $value->fromObject($object->operationReferences);
        }
        return $this;
    }
}
