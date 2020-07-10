<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference/index.html
 */
namespace Ingenico\Direct\Sdk\Domain;

use Ingenico\Direct\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package Ingenico\Direct\Sdk\Domain
 */
class CreatedTokenResponse extends DataObject
{
    // Properties
    /**
     * @var CardWithoutCvv
     */
    private $card;

    /**
     * @var bool
     */
    private $isNewToken;

    /**
     * @var string
     */
    private $token;

    // Methods
    /**
     * @return CardWithoutCvv
     */
    public function getCard()
    {
        return $this->card;
    }
    /**
     * @var CardWithoutCvv
     */
    public function setCard($value)
    {
        $this->card = $value;
    }

    /**
     * @return bool
     */
    public function getIsNewToken()
    {
        return $this->isNewToken;
    }
    /**
     * @var bool
     */
    public function setIsNewToken($value)
    {
        $this->isNewToken = $value;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
    /**
     * @var string
     */
    public function setToken($value)
    {
        $this->token = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->card !== null) {
            $object->card = $this->card->toObject();
        }
        if ($this->isNewToken !== null) {
            $object->isNewToken = $this->isNewToken;
        }
        if ($this->token !== null) {
            $object->token = $this->token;
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
            $value = new CardWithoutCvv();
            $this->card = $value->fromObject($object->card);
        }
        if (property_exists($object, 'isNewToken')) {
            $this->isNewToken = $object->isNewToken;
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        return $this;
    }
}
