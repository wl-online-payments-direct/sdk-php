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
    private $groupCards;

    // Methods
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
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->groupCards !== null) {
            $object->groupCards = $this->groupCards;
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
        if (property_exists($object, 'groupCards')) {
            $this->groupCards = $object->groupCards;
        }
        return $this;
    }
}
