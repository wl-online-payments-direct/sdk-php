<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ImportCofSeriesRequest extends DataObject
{
    /**
     * @var CardDataWithoutCvv|null
     */
    public ?CardDataWithoutCvv $card = null;

    /**
     * @var string|null
     */
    public ?string $currencyCode = null;

    /**
     * @var int|null
     */
    public ?int $paymentProductId = null;

    /**
     * @var string|null
     */
    public ?string $schemeReferenceData = null;

    /**
     * @var string|null
     */
    public ?string $tokenId = null;

    /**
     * @return CardDataWithoutCvv|null
     */
    public function getCard(): ?CardDataWithoutCvv
    {
        return $this->card;
    }

    /**
     * @param CardDataWithoutCvv|null $value
     */
    public function setCard(?CardDataWithoutCvv $value): void
    {
        $this->card = $value;
    }

    /**
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * @param string|null $value
     */
    public function setCurrencyCode(?string $value): void
    {
        $this->currencyCode = $value;
    }

    /**
     * @return int|null
     */
    public function getPaymentProductId(): ?int
    {
        return $this->paymentProductId;
    }

    /**
     * @param int|null $value
     */
    public function setPaymentProductId(?int $value): void
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return string|null
     */
    public function getSchemeReferenceData(): ?string
    {
        return $this->schemeReferenceData;
    }

    /**
     * @param string|null $value
     */
    public function setSchemeReferenceData(?string $value): void
    {
        $this->schemeReferenceData = $value;
    }

    /**
     * @return string|null
     */
    public function getTokenId(): ?string
    {
        return $this->tokenId;
    }

    /**
     * @param string|null $value
     */
    public function setTokenId(?string $value): void
    {
        $this->tokenId = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->card)) {
            $object->card = $this->card->toObject();
        }
        if (!is_null($this->currencyCode)) {
            $object->currencyCode = $this->currencyCode;
        }
        if (!is_null($this->paymentProductId)) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if (!is_null($this->schemeReferenceData)) {
            $object->schemeReferenceData = $this->schemeReferenceData;
        }
        if (!is_null($this->tokenId)) {
            $object->tokenId = $this->tokenId;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ImportCofSeriesRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'card')) {
            if (!is_object($object->card)) {
                throw new UnexpectedValueException('value \'' . print_r($object->card, true) . '\' is not an object');
            }
            $value = new CardDataWithoutCvv();
            $this->card = $value->fromObject($object->card);
        }
        if (property_exists($object, 'currencyCode')) {
            $this->currencyCode = $object->currencyCode;
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        if (property_exists($object, 'schemeReferenceData')) {
            $this->schemeReferenceData = $object->schemeReferenceData;
        }
        if (property_exists($object, 'tokenId')) {
            $this->tokenId = $object->tokenId;
        }
        return $this;
    }
}
