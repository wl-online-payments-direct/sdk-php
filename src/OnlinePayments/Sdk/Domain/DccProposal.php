<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class DccProposal extends DataObject
{
    /**
     * @var AmountOfMoney|null
     */
    public ?AmountOfMoney $baseAmount = null;

    /**
     * @var string|null
     */
    public ?string $disclaimerDisplay = null;

    /**
     * @var string|null
     */
    public ?string $disclaimerReceipt = null;

    /**
     * @var RateDetails|null
     */
    public ?RateDetails $rate = null;

    /**
     * @var AmountOfMoney|null
     */
    public ?AmountOfMoney $targetAmount = null;

    /**
     * @return AmountOfMoney|null
     */
    public function getBaseAmount(): ?AmountOfMoney
    {
        return $this->baseAmount;
    }

    /**
     * @param AmountOfMoney|null $value
     */
    public function setBaseAmount(?AmountOfMoney $value): void
    {
        $this->baseAmount = $value;
    }

    /**
     * @param AmountOfMoney|null $value
     * @return $this
     */
    public function withBaseAmount(?AmountOfMoney $value): static
    {
        $this->baseAmount = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDisclaimerDisplay(): ?string
    {
        return $this->disclaimerDisplay;
    }

    /**
     * @param string|null $value
     */
    public function setDisclaimerDisplay(?string $value): void
    {
        $this->disclaimerDisplay = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withDisclaimerDisplay(?string $value): static
    {
        $this->disclaimerDisplay = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDisclaimerReceipt(): ?string
    {
        return $this->disclaimerReceipt;
    }

    /**
     * @param string|null $value
     */
    public function setDisclaimerReceipt(?string $value): void
    {
        $this->disclaimerReceipt = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withDisclaimerReceipt(?string $value): static
    {
        $this->disclaimerReceipt = $value;
        return $this;
    }

    /**
     * @return RateDetails|null
     */
    public function getRate(): ?RateDetails
    {
        return $this->rate;
    }

    /**
     * @param RateDetails|null $value
     */
    public function setRate(?RateDetails $value): void
    {
        $this->rate = $value;
    }

    /**
     * @param RateDetails|null $value
     * @return $this
     */
    public function withRate(?RateDetails $value): static
    {
        $this->rate = $value;
        return $this;
    }

    /**
     * @return AmountOfMoney|null
     */
    public function getTargetAmount(): ?AmountOfMoney
    {
        return $this->targetAmount;
    }

    /**
     * @param AmountOfMoney|null $value
     */
    public function setTargetAmount(?AmountOfMoney $value): void
    {
        $this->targetAmount = $value;
    }

    /**
     * @param AmountOfMoney|null $value
     * @return $this
     */
    public function withTargetAmount(?AmountOfMoney $value): static
    {
        $this->targetAmount = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->baseAmount !== null) {
            $object->baseAmount = $this->baseAmount->toObject();
        }
        if ($this->disclaimerDisplay !== null) {
            $object->disclaimerDisplay = $this->disclaimerDisplay;
        }
        if ($this->disclaimerReceipt !== null) {
            $object->disclaimerReceipt = $this->disclaimerReceipt;
        }
        if ($this->rate !== null) {
            $object->rate = $this->rate->toObject();
        }
        if ($this->targetAmount !== null) {
            $object->targetAmount = $this->targetAmount->toObject();
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
        if (property_exists($object, 'baseAmount')) {
            if (!is_object($object->baseAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->baseAmount, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->baseAmount = $value->fromObject($object->baseAmount);
        }
        if (property_exists($object, 'disclaimerDisplay')) {
            $this->disclaimerDisplay = $object->disclaimerDisplay;
        }
        if (property_exists($object, 'disclaimerReceipt')) {
            $this->disclaimerReceipt = $object->disclaimerReceipt;
        }
        if (property_exists($object, 'rate')) {
            if (!is_object($object->rate)) {
                throw new UnexpectedValueException('value \'' . print_r($object->rate, true) . '\' is not an object');
            }
            $value = new RateDetails();
            $this->rate = $value->fromObject($object->rate);
        }
        if (property_exists($object, 'targetAmount')) {
            if (!is_object($object->targetAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->targetAmount, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->targetAmount = $value->fromObject($object->targetAmount);
        }
        return $this;
    }
}
