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
     * @param float|null $value
     * @return $this
     */
    public function withExchangeRate(?float $value): static
    {
        $this->exchangeRate = $value;
        return $this;
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
     * @param float|null $value
     * @return $this
     */
    public function withInvertedExchangeRate(?float $value): static
    {
        $this->invertedExchangeRate = $value;
        return $this;
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
     * @param float|null $value
     * @return $this
     */
    public function withMarkUpRate(?float $value): static
    {
        $this->markUpRate = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withQuotationDateTime(?string $value): static
    {
        $this->quotationDateTime = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withSource(?string $value): static
    {
        $this->source = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->exchangeRate !== null) {
            $object->exchangeRate = $this->exchangeRate;
        }
        if ($this->invertedExchangeRate !== null) {
            $object->invertedExchangeRate = $this->invertedExchangeRate;
        }
        if ($this->markUpRate !== null) {
            $object->markUpRate = $this->markUpRate;
        }
        if ($this->quotationDateTime !== null) {
            $object->quotationDateTime = $this->quotationDateTime;
        }
        if ($this->source !== null) {
            $object->source = $this->source;
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
