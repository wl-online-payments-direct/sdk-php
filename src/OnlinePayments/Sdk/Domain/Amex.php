<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class Amex extends DataObject
{
    /**
     * @var DpaData|null
     */
    public ?DpaData $dpaData = null;

    /**
     * @var DpaTransactionOptions|null
     */
    public ?DpaTransactionOptions $dpaTransactionOptions = null;

    /**
     * @var string|null
     */
    public ?string $srcInitiatorId = null;

    /**
     * @return DpaData|null
     */
    public function getDpaData(): ?DpaData
    {
        return $this->dpaData;
    }

    /**
     * @param DpaData|null $value
     */
    public function setDpaData(?DpaData $value): void
    {
        $this->dpaData = $value;
    }

    /**
     * @param DpaData|null $value
     * @return $this
     */
    public function withDpaData(?DpaData $value): static
    {
        $this->dpaData = $value;
        return $this;
    }

    /**
     * @return DpaTransactionOptions|null
     */
    public function getDpaTransactionOptions(): ?DpaTransactionOptions
    {
        return $this->dpaTransactionOptions;
    }

    /**
     * @param DpaTransactionOptions|null $value
     */
    public function setDpaTransactionOptions(?DpaTransactionOptions $value): void
    {
        $this->dpaTransactionOptions = $value;
    }

    /**
     * @param DpaTransactionOptions|null $value
     * @return $this
     */
    public function withDpaTransactionOptions(?DpaTransactionOptions $value): static
    {
        $this->dpaTransactionOptions = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSrcInitiatorId(): ?string
    {
        return $this->srcInitiatorId;
    }

    /**
     * @param string|null $value
     */
    public function setSrcInitiatorId(?string $value): void
    {
        $this->srcInitiatorId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withSrcInitiatorId(?string $value): static
    {
        $this->srcInitiatorId = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->dpaData !== null) {
            $object->dpaData = $this->dpaData->toObject();
        }
        if ($this->dpaTransactionOptions !== null) {
            $object->dpaTransactionOptions = $this->dpaTransactionOptions->toObject();
        }
        if ($this->srcInitiatorId !== null) {
            $object->srcInitiatorId = $this->srcInitiatorId;
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
        if (property_exists($object, 'dpaData')) {
            if (!is_object($object->dpaData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->dpaData, true) . '\' is not an object');
            }
            $value = new DpaData();
            $this->dpaData = $value->fromObject($object->dpaData);
        }
        if (property_exists($object, 'dpaTransactionOptions')) {
            if (!is_object($object->dpaTransactionOptions)) {
                throw new UnexpectedValueException('value \'' . print_r($object->dpaTransactionOptions, true) . '\' is not an object');
            }
            $value = new DpaTransactionOptions();
            $this->dpaTransactionOptions = $value->fromObject($object->dpaTransactionOptions);
        }
        if (property_exists($object, 'srcInitiatorId')) {
            $this->srcInitiatorId = $object->srcInitiatorId;
        }
        return $this;
    }
}
