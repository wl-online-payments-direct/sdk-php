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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->dpaData)) {
            $object->dpaData = $this->dpaData->toObject();
        }
        if (!is_null($this->dpaTransactionOptions)) {
            $object->dpaTransactionOptions = $this->dpaTransactionOptions->toObject();
        }
        if (!is_null($this->srcInitiatorId)) {
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
    public function fromObject(object $object): Amex
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
