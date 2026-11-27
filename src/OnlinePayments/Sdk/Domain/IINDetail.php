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
class IINDetail extends DataObject
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
     * @var bool|null
     */
    public ?bool $isAllowedInContext = null;

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
    public ?string $issuerPrincipalMemberCode = null;

    /**
     * @var string|null
     */
    public ?string $issuerPrincipalMemberName = null;

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
     * @var int|null
     */
    public ?int $paymentProductId = null;

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
     * @param bool|null $value
     * @return $this
     */
    public function withCardCorporateIndicator(?bool $value): static
    {
        $this->cardCorporateIndicator = $value;
        return $this;
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
     * @param DateTime|null $value
     * @return $this
     */
    public function withCardEffectiveDate(?DateTime $value): static
    {
        $this->cardEffectiveDate = $value;
        return $this;
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
     * @param bool|null $value
     * @return $this
     */
    public function withCardEffectiveDateIndicator(?bool $value): static
    {
        $this->cardEffectiveDateIndicator = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withCardPanType(?string $value): static
    {
        $this->cardPanType = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withCardProductCode(?string $value): static
    {
        $this->cardProductCode = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withCardProductName(?string $value): static
    {
        $this->cardProductName = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withCardProductUsageLabel(?string $value): static
    {
        $this->cardProductUsageLabel = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withCardScheme(?string $value): static
    {
        $this->cardScheme = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withCardType(?string $value): static
    {
        $this->cardType = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withCountryCode(?string $value): static
    {
        $this->countryCode = $value;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsAllowedInContext(): ?bool
    {
        return $this->isAllowedInContext;
    }

    /**
     * @param bool|null $value
     */
    public function setIsAllowedInContext(?bool $value): void
    {
        $this->isAllowedInContext = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function withIsAllowedInContext(?bool $value): static
    {
        $this->isAllowedInContext = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withIssuerCode(?string $value): static
    {
        $this->issuerCode = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withIssuerName(?string $value): static
    {
        $this->issuerName = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssuerPrincipalMemberCode(): ?string
    {
        return $this->issuerPrincipalMemberCode;
    }

    /**
     * @param string|null $value
     */
    public function setIssuerPrincipalMemberCode(?string $value): void
    {
        $this->issuerPrincipalMemberCode = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withIssuerPrincipalMemberCode(?string $value): static
    {
        $this->issuerPrincipalMemberCode = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssuerPrincipalMemberName(): ?string
    {
        return $this->issuerPrincipalMemberName;
    }

    /**
     * @param string|null $value
     */
    public function setIssuerPrincipalMemberName(?string $value): void
    {
        $this->issuerPrincipalMemberName = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withIssuerPrincipalMemberName(?string $value): static
    {
        $this->issuerPrincipalMemberName = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withIssuerRegionCode(?string $value): static
    {
        $this->issuerRegionCode = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withIssuingCountryCode(?string $value): static
    {
        $this->issuingCountryCode = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withPanLengthMax(?int $value): static
    {
        $this->panLengthMax = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withPanLengthMin(?int $value): static
    {
        $this->panLengthMin = $value;
        return $this;
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
     * @param bool|null $value
     * @return $this
     */
    public function withPanLuhnCheck(?bool $value): static
    {
        $this->panLuhnCheck = $value;
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
     * @param bool|null $value
     * @return $this
     */
    public function withVirtualCardIndicator(?bool $value): static
    {
        $this->virtualCardIndicator = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->cardCorporateIndicator !== null) {
            $object->cardCorporateIndicator = $this->cardCorporateIndicator;
        }
        if ($this->cardEffectiveDate !== null) {
            $object->cardEffectiveDate = $this->cardEffectiveDate->format('Y-m-d');
        }
        if ($this->cardEffectiveDateIndicator !== null) {
            $object->cardEffectiveDateIndicator = $this->cardEffectiveDateIndicator;
        }
        if ($this->cardPanType !== null) {
            $object->cardPanType = $this->cardPanType;
        }
        if ($this->cardProductCode !== null) {
            $object->cardProductCode = $this->cardProductCode;
        }
        if ($this->cardProductName !== null) {
            $object->cardProductName = $this->cardProductName;
        }
        if ($this->cardProductUsageLabel !== null) {
            $object->cardProductUsageLabel = $this->cardProductUsageLabel;
        }
        if ($this->cardScheme !== null) {
            $object->cardScheme = $this->cardScheme;
        }
        if ($this->cardType !== null) {
            $object->cardType = $this->cardType;
        }
        if ($this->countryCode !== null) {
            $object->countryCode = $this->countryCode;
        }
        if ($this->isAllowedInContext !== null) {
            $object->isAllowedInContext = $this->isAllowedInContext;
        }
        if ($this->issuerCode !== null) {
            $object->issuerCode = $this->issuerCode;
        }
        if ($this->issuerName !== null) {
            $object->issuerName = $this->issuerName;
        }
        if ($this->issuerPrincipalMemberCode !== null) {
            $object->issuerPrincipalMemberCode = $this->issuerPrincipalMemberCode;
        }
        if ($this->issuerPrincipalMemberName !== null) {
            $object->issuerPrincipalMemberName = $this->issuerPrincipalMemberName;
        }
        if ($this->issuerRegionCode !== null) {
            $object->issuerRegionCode = $this->issuerRegionCode;
        }
        if ($this->issuingCountryCode !== null) {
            $object->issuingCountryCode = $this->issuingCountryCode;
        }
        if ($this->panLengthMax !== null) {
            $object->panLengthMax = $this->panLengthMax;
        }
        if ($this->panLengthMin !== null) {
            $object->panLengthMin = $this->panLengthMin;
        }
        if ($this->panLuhnCheck !== null) {
            $object->panLuhnCheck = $this->panLuhnCheck;
        }
        if ($this->paymentProductId !== null) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if ($this->virtualCardIndicator !== null) {
            $object->virtualCardIndicator = $this->virtualCardIndicator;
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
        if (property_exists($object, 'isAllowedInContext')) {
            $this->isAllowedInContext = $object->isAllowedInContext;
        }
        if (property_exists($object, 'issuerCode')) {
            $this->issuerCode = $object->issuerCode;
        }
        if (property_exists($object, 'issuerName')) {
            $this->issuerName = $object->issuerName;
        }
        if (property_exists($object, 'issuerPrincipalMemberCode')) {
            $this->issuerPrincipalMemberCode = $object->issuerPrincipalMemberCode;
        }
        if (property_exists($object, 'issuerPrincipalMemberName')) {
            $this->issuerPrincipalMemberName = $object->issuerPrincipalMemberName;
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
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        if (property_exists($object, 'virtualCardIndicator')) {
            $this->virtualCardIndicator = $object->virtualCardIndicator;
        }
        return $this;
    }
}
