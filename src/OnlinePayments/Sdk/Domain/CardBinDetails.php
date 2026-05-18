<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use DateTime;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CardBinDetails extends DataObject
{
    /**
     * @var bool|null
     */
    public ?bool $cardCorporateIndicator = null;

    /**
     * @var DateTime|null
     */
    public ?DateTime $cardEffectiveDate = null;

    /**
     * @var bool|null
     */
    public ?bool $cardEffectiveDateIndicator = null;

    /**
     * @var string|null
     */
    public ?string $cardPanType = null;

    /**
     * @var string|null
     */
    public ?string $cardProductCode = null;

    /**
     * @var string|null
     */
    public ?string $cardProductName = null;

    /**
     * @var string|null
     */
    public ?string $cardProductUsageLabel = null;

    /**
     * @var string|null
     */
    public ?string $cardScheme = null;

    /**
     * @var string|null
     */
    public ?string $cardType = null;

    /**
     * @var string|null
     */
    public ?string $countryCode = null;

    /**
     * @var string|null
     */
    public ?string $issuerCode = null;

    /**
     * @var string|null
     */
    public ?string $issuerName = null;

    /**
     * @var string|null
     */
    public ?string $issuerRegionCode = null;

    /**
     * @var string|null
     */
    public ?string $issuingCountryCode = null;

    /**
     * @var int|null
     */
    public ?int $panLengthMax = null;

    /**
     * @var int|null
     */
    public ?int $panLengthMin = null;

    /**
     * @var bool|null
     */
    public ?bool $panLuhnCheck = null;

    /**
     * @var bool|null
     */
    public ?bool $virtualCardIndicator = null;

    /**
     * @return bool|null
     */
    public function getCardCorporateIndicator(): ?bool
    {
        return $this->cardCorporateIndicator;
    }

    /**
     * @param bool|null $value
     */
    public function setCardCorporateIndicator(?bool $value): void
    {
        $this->cardCorporateIndicator = $value;
    }

    /**
     * @return DateTime|null
     */
    public function getCardEffectiveDate(): ?DateTime
    {
        return $this->cardEffectiveDate;
    }

    /**
     * @param DateTime|null $value
     */
    public function setCardEffectiveDate(?DateTime $value): void
    {
        $this->cardEffectiveDate = $value;
    }

    /**
     * @return bool|null
     */
    public function getCardEffectiveDateIndicator(): ?bool
    {
        return $this->cardEffectiveDateIndicator;
    }

    /**
     * @param bool|null $value
     */
    public function setCardEffectiveDateIndicator(?bool $value): void
    {
        $this->cardEffectiveDateIndicator = $value;
    }

    /**
     * @return string|null
     */
    public function getCardPanType(): ?string
    {
        return $this->cardPanType;
    }

    /**
     * @param string|null $value
     */
    public function setCardPanType(?string $value): void
    {
        $this->cardPanType = $value;
    }

    /**
     * @return string|null
     */
    public function getCardProductCode(): ?string
    {
        return $this->cardProductCode;
    }

    /**
     * @param string|null $value
     */
    public function setCardProductCode(?string $value): void
    {
        $this->cardProductCode = $value;
    }

    /**
     * @return string|null
     */
    public function getCardProductName(): ?string
    {
        return $this->cardProductName;
    }

    /**
     * @param string|null $value
     */
    public function setCardProductName(?string $value): void
    {
        $this->cardProductName = $value;
    }

    /**
     * @return string|null
     */
    public function getCardProductUsageLabel(): ?string
    {
        return $this->cardProductUsageLabel;
    }

    /**
     * @param string|null $value
     */
    public function setCardProductUsageLabel(?string $value): void
    {
        $this->cardProductUsageLabel = $value;
    }

    /**
     * @return string|null
     */
    public function getCardScheme(): ?string
    {
        return $this->cardScheme;
    }

    /**
     * @param string|null $value
     */
    public function setCardScheme(?string $value): void
    {
        $this->cardScheme = $value;
    }

    /**
     * @return string|null
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }

    /**
     * @param string|null $value
     */
    public function setCardType(?string $value): void
    {
        $this->cardType = $value;
    }

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @param string|null $value
     */
    public function setCountryCode(?string $value): void
    {
        $this->countryCode = $value;
    }

    /**
     * @return string|null
     */
    public function getIssuerCode(): ?string
    {
        return $this->issuerCode;
    }

    /**
     * @param string|null $value
     */
    public function setIssuerCode(?string $value): void
    {
        $this->issuerCode = $value;
    }

    /**
     * @return string|null
     */
    public function getIssuerName(): ?string
    {
        return $this->issuerName;
    }

    /**
     * @param string|null $value
     */
    public function setIssuerName(?string $value): void
    {
        $this->issuerName = $value;
    }

    /**
     * @return string|null
     */
    public function getIssuerRegionCode(): ?string
    {
        return $this->issuerRegionCode;
    }

    /**
     * @param string|null $value
     */
    public function setIssuerRegionCode(?string $value): void
    {
        $this->issuerRegionCode = $value;
    }

    /**
     * @return string|null
     */
    public function getIssuingCountryCode(): ?string
    {
        return $this->issuingCountryCode;
    }

    /**
     * @param string|null $value
     */
    public function setIssuingCountryCode(?string $value): void
    {
        $this->issuingCountryCode = $value;
    }

    /**
     * @return int|null
     */
    public function getPanLengthMax(): ?int
    {
        return $this->panLengthMax;
    }

    /**
     * @param int|null $value
     */
    public function setPanLengthMax(?int $value): void
    {
        $this->panLengthMax = $value;
    }

    /**
     * @return int|null
     */
    public function getPanLengthMin(): ?int
    {
        return $this->panLengthMin;
    }

    /**
     * @param int|null $value
     */
    public function setPanLengthMin(?int $value): void
    {
        $this->panLengthMin = $value;
    }

    /**
     * @return bool|null
     */
    public function getPanLuhnCheck(): ?bool
    {
        return $this->panLuhnCheck;
    }

    /**
     * @param bool|null $value
     */
    public function setPanLuhnCheck(?bool $value): void
    {
        $this->panLuhnCheck = $value;
    }

    /**
     * @return bool|null
     */
    public function getVirtualCardIndicator(): ?bool
    {
        return $this->virtualCardIndicator;
    }

    /**
     * @param bool|null $value
     */
    public function setVirtualCardIndicator(?bool $value): void
    {
        $this->virtualCardIndicator = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->cardCorporateIndicator)) {
            $object->cardCorporateIndicator = $this->cardCorporateIndicator;
        }
        if (!is_null($this->cardEffectiveDate)) {
            $object->cardEffectiveDate = $this->cardEffectiveDate->format('Y-m-d');
        }
        if (!is_null($this->cardEffectiveDateIndicator)) {
            $object->cardEffectiveDateIndicator = $this->cardEffectiveDateIndicator;
        }
        if (!is_null($this->cardPanType)) {
            $object->cardPanType = $this->cardPanType;
        }
        if (!is_null($this->cardProductCode)) {
            $object->cardProductCode = $this->cardProductCode;
        }
        if (!is_null($this->cardProductName)) {
            $object->cardProductName = $this->cardProductName;
        }
        if (!is_null($this->cardProductUsageLabel)) {
            $object->cardProductUsageLabel = $this->cardProductUsageLabel;
        }
        if (!is_null($this->cardScheme)) {
            $object->cardScheme = $this->cardScheme;
        }
        if (!is_null($this->cardType)) {
            $object->cardType = $this->cardType;
        }
        if (!is_null($this->countryCode)) {
            $object->countryCode = $this->countryCode;
        }
        if (!is_null($this->issuerCode)) {
            $object->issuerCode = $this->issuerCode;
        }
        if (!is_null($this->issuerName)) {
            $object->issuerName = $this->issuerName;
        }
        if (!is_null($this->issuerRegionCode)) {
            $object->issuerRegionCode = $this->issuerRegionCode;
        }
        if (!is_null($this->issuingCountryCode)) {
            $object->issuingCountryCode = $this->issuingCountryCode;
        }
        if (!is_null($this->panLengthMax)) {
            $object->panLengthMax = $this->panLengthMax;
        }
        if (!is_null($this->panLengthMin)) {
            $object->panLengthMin = $this->panLengthMin;
        }
        if (!is_null($this->panLuhnCheck)) {
            $object->panLuhnCheck = $this->panLuhnCheck;
        }
        if (!is_null($this->virtualCardIndicator)) {
            $object->virtualCardIndicator = $this->virtualCardIndicator;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CardBinDetails
    {
        parent::fromObject($object);
        if (property_exists($object, 'cardCorporateIndicator')) {
            $this->cardCorporateIndicator = $object->cardCorporateIndicator;
        }
        if (property_exists($object, 'cardEffectiveDate')) {
            $this->cardEffectiveDate = new DateTime($object->cardEffectiveDate);
        }
        if (property_exists($object, 'cardEffectiveDateIndicator')) {
            $this->cardEffectiveDateIndicator = $object->cardEffectiveDateIndicator;
        }
        if (property_exists($object, 'cardPanType')) {
            $this->cardPanType = $object->cardPanType;
        }
        if (property_exists($object, 'cardProductCode')) {
            $this->cardProductCode = $object->cardProductCode;
        }
        if (property_exists($object, 'cardProductName')) {
            $this->cardProductName = $object->cardProductName;
        }
        if (property_exists($object, 'cardProductUsageLabel')) {
            $this->cardProductUsageLabel = $object->cardProductUsageLabel;
        }
        if (property_exists($object, 'cardScheme')) {
            $this->cardScheme = $object->cardScheme;
        }
        if (property_exists($object, 'cardType')) {
            $this->cardType = $object->cardType;
        }
        if (property_exists($object, 'countryCode')) {
            $this->countryCode = $object->countryCode;
        }
        if (property_exists($object, 'issuerCode')) {
            $this->issuerCode = $object->issuerCode;
        }
        if (property_exists($object, 'issuerName')) {
            $this->issuerName = $object->issuerName;
        }
        if (property_exists($object, 'issuerRegionCode')) {
            $this->issuerRegionCode = $object->issuerRegionCode;
        }
        if (property_exists($object, 'issuingCountryCode')) {
            $this->issuingCountryCode = $object->issuingCountryCode;
        }
        if (property_exists($object, 'panLengthMax')) {
            $this->panLengthMax = $object->panLengthMax;
        }
        if (property_exists($object, 'panLengthMin')) {
            $this->panLengthMin = $object->panLengthMin;
        }
        if (property_exists($object, 'panLuhnCheck')) {
            $this->panLuhnCheck = $object->panLuhnCheck;
        }
        if (property_exists($object, 'virtualCardIndicator')) {
            $this->virtualCardIndicator = $object->virtualCardIndicator;
        }
        return $this;
    }
}
