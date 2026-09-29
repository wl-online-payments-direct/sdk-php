<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class TokenCardData extends DataObject
{
    /**
     * @var CardBinDetails|null
    */
    public ?CardBinDetails $cardBinDetails = null;

    /**
     * @var CardWithoutCvv|null
    */
    public ?CardWithoutCvv $cardWithoutCvv = null;

    /**
     * @var string|null
    */
    public ?string $cobrandSelectionIndicator = null;

    /**
     * @return CardBinDetails|null
    */
    public function getCardBinDetails(): ?CardBinDetails
    {
        return $this->cardBinDetails;
    }

    /**
     * @param CardBinDetails|null $value
    */
    public function setCardBinDetails(?CardBinDetails $value): void
    {
        $this->cardBinDetails = $value;
    }

    /**
     * @param CardBinDetails|null $value
     * @return TokenCardData
    */
    public function withCardBinDetails(?CardBinDetails $value): TokenCardData
    {
        $this->cardBinDetails = $value;
        return $this;
    }

    /**
     * @return CardWithoutCvv|null
    */
    public function getCardWithoutCvv(): ?CardWithoutCvv
    {
        return $this->cardWithoutCvv;
    }

    /**
     * @param CardWithoutCvv|null $value
    */
    public function setCardWithoutCvv(?CardWithoutCvv $value): void
    {
        $this->cardWithoutCvv = $value;
    }

    /**
     * @param CardWithoutCvv|null $value
     * @return TokenCardData
    */
    public function withCardWithoutCvv(?CardWithoutCvv $value): TokenCardData
    {
        $this->cardWithoutCvv = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getCobrandSelectionIndicator(): ?string
    {
        return $this->cobrandSelectionIndicator;
    }

    /**
     * @param string|null $value
    */
    public function setCobrandSelectionIndicator(?string $value): void
    {
        $this->cobrandSelectionIndicator = $value;
    }

    /**
     * @param string|null $value
     * @return TokenCardData
    */
    public function withCobrandSelectionIndicator(?string $value): TokenCardData
    {
        $this->cobrandSelectionIndicator = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->cardBinDetails)) {
            $object->cardBinDetails = $this->cardBinDetails->toObject();
        }
        if (!is_null($this->cardWithoutCvv)) {
            $object->cardWithoutCvv = $this->cardWithoutCvv->toObject();
        }
        if (!is_null($this->cobrandSelectionIndicator)) {
            $object->cobrandSelectionIndicator = $this->cobrandSelectionIndicator;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): TokenCardData
    {
        parent::fromObject($object);
        if (property_exists($object, 'cardBinDetails')) {
            if (!is_object($object->cardBinDetails)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardBinDetails, true) . '\' is not an object');
            }
            $value = new CardBinDetails();
            $this->cardBinDetails = $value->fromObject($object->cardBinDetails);
        }
        if (property_exists($object, 'cardWithoutCvv')) {
            if (!is_object($object->cardWithoutCvv)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardWithoutCvv, true) . '\' is not an object');
            }
            $value = new CardWithoutCvv();
            $this->cardWithoutCvv = $value->fromObject($object->cardWithoutCvv);
        }
        if (property_exists($object, 'cobrandSelectionIndicator')) {
            $this->cobrandSelectionIndicator = $object->cobrandSelectionIndicator;
        }
        return $this;
    }
}
