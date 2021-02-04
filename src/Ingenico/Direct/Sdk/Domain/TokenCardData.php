<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference
 */
namespace Ingenico\Direct\Sdk\Domain;

use Ingenico\Direct\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package Ingenico\Direct\Sdk\Domain
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
