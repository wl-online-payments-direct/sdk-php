<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreatePayoutRequest extends DataObject
{
    /**
     * @var AmountOfMoney|null
     */
    public ?AmountOfMoney $amountOfMoney = null;

    /**
     * @var CardPayoutMethodSpecificInput|null
     */
    public ?CardPayoutMethodSpecificInput $cardPayoutMethodSpecificInput = null;

    /**
     * @var string|null
     */
    public ?string $descriptor = null;

    /**
     * @var Feedbacks|null
     */
    public ?Feedbacks $feedbacks = null;

    /**
     * @var OmnichannelPayoutSpecificInput|null
     */
    public ?OmnichannelPayoutSpecificInput $omnichannelPayoutSpecificInput = null;

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
     * @return CardPayoutMethodSpecificInput|null
     */
    public function getCardPayoutMethodSpecificInput(): ?CardPayoutMethodSpecificInput
    {
        return $this->cardPayoutMethodSpecificInput;
    }

    /**
     * @param CardPayoutMethodSpecificInput|null $value
     */
    public function setCardPayoutMethodSpecificInput(?CardPayoutMethodSpecificInput $value): void
    {
        $this->cardPayoutMethodSpecificInput = $value;
    }

    /**
     * @return string|null
     */
    public function getDescriptor(): ?string
    {
        return $this->descriptor;
    }

    /**
     * @param string|null $value
     */
    public function setDescriptor(?string $value): void
    {
        $this->descriptor = $value;
    }

    /**
     * @return Feedbacks|null
     */
    public function getFeedbacks(): ?Feedbacks
    {
        return $this->feedbacks;
    }

    /**
     * @param Feedbacks|null $value
     */
    public function setFeedbacks(?Feedbacks $value): void
    {
        $this->feedbacks = $value;
    }

    /**
     * @return OmnichannelPayoutSpecificInput|null
     */
    public function getOmnichannelPayoutSpecificInput(): ?OmnichannelPayoutSpecificInput
    {
        return $this->omnichannelPayoutSpecificInput;
    }

    /**
     * @param OmnichannelPayoutSpecificInput|null $value
     */
    public function setOmnichannelPayoutSpecificInput(?OmnichannelPayoutSpecificInput $value): void
    {
        $this->omnichannelPayoutSpecificInput = $value;
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
        if (!is_null($this->cardPayoutMethodSpecificInput)) {
            $object->cardPayoutMethodSpecificInput = $this->cardPayoutMethodSpecificInput->toObject();
        }
        if (!is_null($this->descriptor)) {
            $object->descriptor = $this->descriptor;
        }
        if (!is_null($this->feedbacks)) {
            $object->feedbacks = $this->feedbacks->toObject();
        }
        if (!is_null($this->omnichannelPayoutSpecificInput)) {
            $object->omnichannelPayoutSpecificInput = $this->omnichannelPayoutSpecificInput->toObject();
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
    public function fromObject(object $object): CreatePayoutRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'amountOfMoney')) {
            if (!is_object($object->amountOfMoney)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amountOfMoney, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->amountOfMoney = $value->fromObject($object->amountOfMoney);
        }
        if (property_exists($object, 'cardPayoutMethodSpecificInput')) {
            if (!is_object($object->cardPayoutMethodSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardPayoutMethodSpecificInput, true) . '\' is not an object');
            }
            $value = new CardPayoutMethodSpecificInput();
            $this->cardPayoutMethodSpecificInput = $value->fromObject($object->cardPayoutMethodSpecificInput);
        }
        if (property_exists($object, 'descriptor')) {
            $this->descriptor = $object->descriptor;
        }
        if (property_exists($object, 'feedbacks')) {
            if (!is_object($object->feedbacks)) {
                throw new UnexpectedValueException('value \'' . print_r($object->feedbacks, true) . '\' is not an object');
            }
            $value = new Feedbacks();
            $this->feedbacks = $value->fromObject($object->feedbacks);
        }
        if (property_exists($object, 'omnichannelPayoutSpecificInput')) {
            if (!is_object($object->omnichannelPayoutSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->omnichannelPayoutSpecificInput, true) . '\' is not an object');
            }
            $value = new OmnichannelPayoutSpecificInput();
            $this->omnichannelPayoutSpecificInput = $value->fromObject($object->omnichannelPayoutSpecificInput);
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
