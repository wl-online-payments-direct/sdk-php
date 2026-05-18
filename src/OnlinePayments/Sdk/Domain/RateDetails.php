<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RateDetails extends DataObject
{
    /**
     * @var float|null
     */
    public ?float $exchangeRate = null;

    /**
     * @var float|null
     */
    public ?float $invertedExchangeRate = null;

    /**
     * @var float|null
     */
    public ?float $markUpRate = null;

    /**
     * @var string|null
     */
    public ?string $quotationDateTime = null;

    /**
     * @var string|null
     */
    public ?string $source = null;

    /**
     * @return float|null
     */
    public function getExchangeRate(): ?float
    {
        return $this->exchangeRate;
    }

    /**
     * @param float|null $value
     */
    public function setExchangeRate(?float $value): void
    {
        $this->exchangeRate = $value;
    }

    /**
     * @return float|null
     */
    public function getInvertedExchangeRate(): ?float
    {
        return $this->invertedExchangeRate;
    }

    /**
     * @param float|null $value
     */
    public function setInvertedExchangeRate(?float $value): void
    {
        $this->invertedExchangeRate = $value;
    }

    /**
     * @return float|null
     */
    public function getMarkUpRate(): ?float
    {
        return $this->markUpRate;
    }

    /**
     * @param float|null $value
     */
    public function setMarkUpRate(?float $value): void
    {
        $this->markUpRate = $value;
    }

    /**
     * @return string|null
     */
    public function getQuotationDateTime(): ?string
    {
        return $this->quotationDateTime;
    }

    /**
     * @param string|null $value
     */
    public function setQuotationDateTime(?string $value): void
    {
        $this->quotationDateTime = $value;
    }

    /**
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string|null $value
     */
    public function setSource(?string $value): void
    {
        $this->source = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->exchangeRate)) {
            $object->exchangeRate = $this->exchangeRate;
        }
        if (!is_null($this->invertedExchangeRate)) {
            $object->invertedExchangeRate = $this->invertedExchangeRate;
        }
        if (!is_null($this->markUpRate)) {
            $object->markUpRate = $this->markUpRate;
        }
        if (!is_null($this->quotationDateTime)) {
            $object->quotationDateTime = $this->quotationDateTime;
        }
        if (!is_null($this->source)) {
            $object->source = $this->source;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RateDetails
    {
        parent::fromObject($object);
        if (property_exists($object, 'exchangeRate')) {
            $this->exchangeRate = $object->exchangeRate;
        }
        if (property_exists($object, 'invertedExchangeRate')) {
            $this->invertedExchangeRate = $object->invertedExchangeRate;
        }
        if (property_exists($object, 'markUpRate')) {
            $this->markUpRate = $object->markUpRate;
        }
        if (property_exists($object, 'quotationDateTime')) {
            $this->quotationDateTime = $object->quotationDateTime;
        }
        if (property_exists($object, 'source')) {
            $this->source = $object->source;
        }
        return $this;
    }
}
