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
     * @var CardWithoutCvv
     */
    public $cardWithoutCvv = null;

    /**
     * @var string
     */
    public $cobrandSelectionIndicator = null;

    /**
     * @return CardWithoutCvv
     */
    public function getCardWithoutCvv()
    {
        return $this->cardWithoutCvv;
    }

    /**
     * @param CardWithoutCvv
     */
    public function setCardWithoutCvv($value)
    {
        $this->cardWithoutCvv = $value;
    }

    /**
     * @return string
     */
    public function getCobrandSelectionIndicator()
    {
        return $this->cobrandSelectionIndicator;
    }

    /**
     * @param string
     */
    public function setCobrandSelectionIndicator($value)
    {
        $this->cobrandSelectionIndicator = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
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
        if (property_exists($object, 'cobrandSelectionIndicator')) {
            $this->cobrandSelectionIndicator = $object->cobrandSelectionIndicator;
        }
        return $this;
    }
}
