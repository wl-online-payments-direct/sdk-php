<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CapturePaymentRequest extends DataObject
{
    /**
     * @var int|null
     */
    public ?int $amount = null;

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
     * @var PaymentReferences|null
     */
    public ?PaymentReferences $references = null;

    /**
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int|null $value
     */
    public function setAmount(?int $value): void
    {
        $this->amount = $value;
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
        if (!is_null($this->amount)) {
            $object->amount = $this->amount;
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
    public function fromObject(object $object): CapturePaymentRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'amount')) {
            $this->amount = $object->amount;
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
