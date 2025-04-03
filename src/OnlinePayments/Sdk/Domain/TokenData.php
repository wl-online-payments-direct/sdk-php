<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class TokenData extends DataObject
{
    /**
     * @var Card
     */
    public $card = null;

    /**
     * @var string
     */
    public $cobrandSelectionIndicator = null;

    /**
     * @return Card
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param Card
     */
    public function setCard($value)
    {
        $this->card = $value;
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
        if (!is_null($this->card)) {
            $object->card = $this->card->toObject();
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
        if (property_exists($object, 'card')) {
            if (!is_object($object->card)) {
                throw new UnexpectedValueException('value \'' . print_r($object->card, true) . '\' is not an object');
            }
            $value = new Card();
            $this->card = $value->fromObject($object->card);
        }
        if (property_exists($object, 'cobrandSelectionIndicator')) {
            $this->cobrandSelectionIndicator = $object->cobrandSelectionIndicator;
        }
        return $this;
    }
}
