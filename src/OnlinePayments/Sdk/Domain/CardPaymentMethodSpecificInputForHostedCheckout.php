<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CardPaymentMethodSpecificInputForHostedCheckout extends DataObject
{
    /**
     * @var bool|null
     */
    public ?bool $clickToPay = null;

    /**
     * @var bool|null
     */
    public ?bool $groupCards = null;

    /**
     * @var int[]|null
     */
    public ?array $paymentProductPreferredOrder = null;

    /**
     * @var string|null
     */
    public ?string $tokenizationMode = null;

    /**
     * @return bool|null
     */
    public function getClickToPay(): ?bool
    {
        return $this->clickToPay;
    }

    /**
     * @param bool|null $value
     */
    public function setClickToPay(?bool $value): void
    {
        $this->clickToPay = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function withClickToPay(?bool $value): static
    {
        $this->clickToPay = $value;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getGroupCards(): ?bool
    {
        return $this->groupCards;
    }

    /**
     * @param bool|null $value
     */
    public function setGroupCards(?bool $value): void
    {
        $this->groupCards = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function withGroupCards(?bool $value): static
    {
        $this->groupCards = $value;
        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getPaymentProductPreferredOrder(): ?array
    {
        return $this->paymentProductPreferredOrder;
    }

    /**
     * @param int[]|null $value
     */
    public function setPaymentProductPreferredOrder(?array $value): void
    {
        $this->paymentProductPreferredOrder = $value;
    }

    /**
     * @param int[]|null $value
     * @return $this
     */
    public function withPaymentProductPreferredOrder(?array $value): static
    {
        $this->paymentProductPreferredOrder = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTokenizationMode(): ?string
    {
        return $this->tokenizationMode;
    }

    /**
     * @param string|null $value
     */
    public function setTokenizationMode(?string $value): void
    {
        $this->tokenizationMode = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withTokenizationMode(?string $value): static
    {
        $this->tokenizationMode = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->clickToPay !== null) {
            $object->clickToPay = $this->clickToPay;
        }
        if ($this->groupCards !== null) {
            $object->groupCards = $this->groupCards;
        }
        if ($this->paymentProductPreferredOrder !== null) {
            $object->paymentProductPreferredOrder = [];
            foreach ($this->paymentProductPreferredOrder as $element) {
                if ($element !== null) {
                    $object->paymentProductPreferredOrder[] = $element;
                }
            }
        }
        if ($this->tokenizationMode !== null) {
            $object->tokenizationMode = $this->tokenizationMode;
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
        if (property_exists($object, 'clickToPay')) {
            $this->clickToPay = $object->clickToPay;
        }
        if (property_exists($object, 'groupCards')) {
            $this->groupCards = $object->groupCards;
        }
        if (property_exists($object, 'paymentProductPreferredOrder')) {
            if (!is_array($object->paymentProductPreferredOrder) && !is_object($object->paymentProductPreferredOrder)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProductPreferredOrder, true) . '\' is not an array or object');
            }
            $this->paymentProductPreferredOrder = [];
            foreach ($object->paymentProductPreferredOrder as $element) {
                    $this->paymentProductPreferredOrder[] = $element;
            }
        }
        if (property_exists($object, 'tokenizationMode')) {
            $this->tokenizationMode = $object->tokenizationMode;
        }
        return $this;
    }
}
