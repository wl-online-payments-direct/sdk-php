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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->clickToPay)) {
            $object->clickToPay = $this->clickToPay;
        }
        if (!is_null($this->groupCards)) {
            $object->groupCards = $this->groupCards;
        }
        if (!is_null($this->paymentProductPreferredOrder)) {
            $object->paymentProductPreferredOrder = [];
            foreach ($this->paymentProductPreferredOrder as $element) {
                if (!is_null($element)) {
                    $object->paymentProductPreferredOrder[] = $element;
                }
            }
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CardPaymentMethodSpecificInputForHostedCheckout
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
        return $this;
    }
}
