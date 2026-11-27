<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct3013SpecificInput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $marketNumber = null;

    /**
     * @var string|null
     */
    public ?string $purchasingBuyerReference1 = null;

    /**
     * @var string|null
     */
    public ?string $purchasingBuyerReference2 = null;

    /**
     * @return string|null
     */
    public function getMarketNumber(): ?string
    {
        return $this->marketNumber;
    }

    /**
     * @param string|null $value
     */
    public function setMarketNumber(?string $value): void
    {
        $this->marketNumber = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withMarketNumber(?string $value): static
    {
        $this->marketNumber = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPurchasingBuyerReference1(): ?string
    {
        return $this->purchasingBuyerReference1;
    }

    /**
     * @param string|null $value
     */
    public function setPurchasingBuyerReference1(?string $value): void
    {
        $this->purchasingBuyerReference1 = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPurchasingBuyerReference1(?string $value): static
    {
        $this->purchasingBuyerReference1 = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPurchasingBuyerReference2(): ?string
    {
        return $this->purchasingBuyerReference2;
    }

    /**
     * @param string|null $value
     */
    public function setPurchasingBuyerReference2(?string $value): void
    {
        $this->purchasingBuyerReference2 = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPurchasingBuyerReference2(?string $value): static
    {
        $this->purchasingBuyerReference2 = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->marketNumber !== null) {
            $object->marketNumber = $this->marketNumber;
        }
        if ($this->purchasingBuyerReference1 !== null) {
            $object->purchasingBuyerReference1 = $this->purchasingBuyerReference1;
        }
        if ($this->purchasingBuyerReference2 !== null) {
            $object->purchasingBuyerReference2 = $this->purchasingBuyerReference2;
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
        if (property_exists($object, 'marketNumber')) {
            $this->marketNumber = $object->marketNumber;
        }
        if (property_exists($object, 'purchasingBuyerReference1')) {
            $this->purchasingBuyerReference1 = $object->purchasingBuyerReference1;
        }
        if (property_exists($object, 'purchasingBuyerReference2')) {
            $this->purchasingBuyerReference2 = $object->purchasingBuyerReference2;
        }
        return $this;
    }
}
