<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CardPaymentMethodSpecificInputForHostedCheckout extends DataObject
{
    // Properties
    /**
     * @var bool
     */
    private $clickToPay;

    /**
     * @var bool
     */
    private $groupCards;

    /**
     * @var int[]
     */
    private $paymentProductPreferredOrder;

    // Methods
    /**
     * @return bool
     */
    public function getClickToPay()
    {
        return $this->clickToPay;
    }
    /**
     * @var bool
     */
    public function setClickToPay($value)
    {
        $this->clickToPay = $value;
    }

    /**
     * @return bool
     */
    public function getGroupCards()
    {
        return $this->groupCards;
    }
    /**
     * @var bool
     */
    public function setGroupCards($value)
    {
        $this->groupCards = $value;
    }

    /**
     * @return int[]
     */
    public function getPaymentProductPreferredOrder()
    {
        return $this->paymentProductPreferredOrder;
    }
    /**
     * @var int[]
     */
    public function setPaymentProductPreferredOrder($value)
    {
        $this->paymentProductPreferredOrder = $value;
    }

    /**
     * @return object
     */
    public function toObject()
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
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
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
