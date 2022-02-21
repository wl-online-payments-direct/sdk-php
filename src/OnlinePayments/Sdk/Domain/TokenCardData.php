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
class TokenCardData extends DataObject
{
    // Properties
    /**
     * @var CardWithoutCvv
     */
    private $cardWithoutCvv;

    // Methods
    /**
     * @return CardWithoutCvv
     */
    public function getCardWithoutCvv()
    {
        return $this->cardWithoutCvv;
    }
    /**
     * @var CardWithoutCvv
     */
    public function setCardWithoutCvv($value)
    {
        $this->cardWithoutCvv = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->cardWithoutCvv !== null) {
            $object->cardWithoutCvv = $this->cardWithoutCvv->toObject();
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
        if (property_exists($object, 'cardWithoutCvv')) {
            if (!is_object($object->cardWithoutCvv)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardWithoutCvv, true) . '\' is not an object');
            }
            $value = new CardWithoutCvv();
            $this->cardWithoutCvv = $value->fromObject($object->cardWithoutCvv);
        }
        return $this;
    }
}
