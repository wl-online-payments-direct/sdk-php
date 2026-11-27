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
     * @var NetworkTokenData|null
     */
    public ?NetworkTokenData $networkTokenData = null;

    /**
     * @var int|null
     */
    public ?int $paymentProductId = null;

    /**
     * @var string|null
     */
    public ?string $schemeReferenceData = null;

    /**
     * @var SubMerchant|null
     */
    public ?SubMerchant $subMerchant = null;

    /**
     * @var string|null
     */
    public ?string $tokenId = null;

    /**
     * @var string|null
     */
    public ?string $transactionLinkIdentifier = null;

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
     * @param CardDataWithoutCvv|null $value
     * @return $this
     */
    public function withCard(?CardDataWithoutCvv $value): static
    {
        $this->card = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withCurrencyCode(?string $value): static
    {
        $this->currencyCode = $value;
        return $this;
    }

    /**
     * @return NetworkTokenData|null
     */
    public function getNetworkTokenData(): ?NetworkTokenData
    {
        return $this->networkTokenData;
    }

    /**
     * @param NetworkTokenData|null $value
     */
    public function setNetworkTokenData(?NetworkTokenData $value): void
    {
        $this->networkTokenData = $value;
    }

    /**
     * @param NetworkTokenData|null $value
     * @return $this
     */
    public function withNetworkTokenData(?NetworkTokenData $value): static
    {
        $this->networkTokenData = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withPaymentProductId(?int $value): static
    {
        $this->paymentProductId = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withSchemeReferenceData(?string $value): static
    {
        $this->schemeReferenceData = $value;
        return $this;
    }

    /**
     * @return SubMerchant|null
     */
    public function getSubMerchant(): ?SubMerchant
    {
        return $this->subMerchant;
    }

    /**
     * @param SubMerchant|null $value
     */
    public function setSubMerchant(?SubMerchant $value): void
    {
        $this->subMerchant = $value;
    }

    /**
     * @param SubMerchant|null $value
     * @return $this
     */
    public function withSubMerchant(?SubMerchant $value): static
    {
        $this->subMerchant = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withTokenId(?string $value): static
    {
        $this->tokenId = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransactionLinkIdentifier(): ?string
    {
        return $this->transactionLinkIdentifier;
    }

    /**
     * @param string|null $value
     */
    public function setTransactionLinkIdentifier(?string $value): void
    {
        $this->transactionLinkIdentifier = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withTransactionLinkIdentifier(?string $value): static
    {
        $this->transactionLinkIdentifier = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->card !== null) {
            $object->card = $this->card->toObject();
        }
        if ($this->currencyCode !== null) {
            $object->currencyCode = $this->currencyCode;
        }
        if ($this->networkTokenData !== null) {
            $object->networkTokenData = $this->networkTokenData->toObject();
        }
        if ($this->paymentProductId !== null) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if ($this->schemeReferenceData !== null) {
            $object->schemeReferenceData = $this->schemeReferenceData;
        }
        if ($this->subMerchant !== null) {
            $object->subMerchant = $this->subMerchant->toObject();
        }
        if ($this->tokenId !== null) {
            $object->tokenId = $this->tokenId;
        }
        if ($this->transactionLinkIdentifier !== null) {
            $object->transactionLinkIdentifier = $this->transactionLinkIdentifier;
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
        if (property_exists($object, 'networkTokenData')) {
            if (!is_object($object->networkTokenData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->networkTokenData, true) . '\' is not an object');
            }
            $value = new NetworkTokenData();
            $this->networkTokenData = $value->fromObject($object->networkTokenData);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        if (property_exists($object, 'schemeReferenceData')) {
            $this->schemeReferenceData = $object->schemeReferenceData;
        }
        if (property_exists($object, 'subMerchant')) {
            if (!is_object($object->subMerchant)) {
                throw new UnexpectedValueException('value \'' . print_r($object->subMerchant, true) . '\' is not an object');
            }
            $value = new SubMerchant();
            $this->subMerchant = $value->fromObject($object->subMerchant);
        }
        if (property_exists($object, 'tokenId')) {
            $this->tokenId = $object->tokenId;
        }
        if (property_exists($object, 'transactionLinkIdentifier')) {
            $this->transactionLinkIdentifier = $object->transactionLinkIdentifier;
        }
        return $this;
    }
}
