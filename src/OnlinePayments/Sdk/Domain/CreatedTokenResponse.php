<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreatedTokenResponse extends DataObject
{
    /**
     * @var CardWithoutCvv
     */
    public $card = null;

    /**
     * @var ExternalTokenLinked
     */
    public $externalTokenLinked = null;

    /**
     * @var bool
     */
    public $isNewToken = null;

    /**
     * @var string
     */
    public $token = null;

    /**
     * @var string
     */
    public $tokenStatus = null;

    /**
     * @return CardWithoutCvv
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param CardWithoutCvv
     */
    public function setCard($value)
    {
        $this->card = $value;
    }

    /**
     * @return ExternalTokenLinked
     */
    public function getExternalTokenLinked()
    {
        return $this->externalTokenLinked;
    }

    /**
     * @param ExternalTokenLinked
     */
    public function setExternalTokenLinked($value)
    {
        $this->externalTokenLinked = $value;
    }

    /**
     * @return bool
     */
    public function getIsNewToken()
    {
        return $this->isNewToken;
    }

    /**
     * @param bool
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
     * @param string
     */
    public function setToken($value)
    {
        $this->token = $value;
    }

    /**
     * @return string
     */
    public function getTokenStatus()
    {
        return $this->tokenStatus;
    }

    /**
     * @param string
     */
    public function setTokenStatus($value)
    {
        $this->tokenStatus = $value;
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
        if (!is_null($this->externalTokenLinked)) {
            $object->externalTokenLinked = $this->externalTokenLinked->toObject();
        }
        if (!is_null($this->isNewToken)) {
            $object->isNewToken = $this->isNewToken;
        }
        if (!is_null($this->token)) {
            $object->token = $this->token;
        }
        if (!is_null($this->tokenStatus)) {
            $object->tokenStatus = $this->tokenStatus;
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
        if (property_exists($object, 'externalTokenLinked')) {
            if (!is_object($object->externalTokenLinked)) {
                throw new UnexpectedValueException('value \'' . print_r($object->externalTokenLinked, true) . '\' is not an object');
            }
            $value = new ExternalTokenLinked();
            $this->externalTokenLinked = $value->fromObject($object->externalTokenLinked);
        }
        if (property_exists($object, 'isNewToken')) {
            $this->isNewToken = $object->isNewToken;
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        if (property_exists($object, 'tokenStatus')) {
            $this->tokenStatus = $object->tokenStatus;
        }
        return $this;
    }
}
