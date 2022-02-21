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
class CreatedTokenResponse extends DataObject
{
    // Properties
    /**
     * @var CardWithoutCvv
     */
    private $card;

    /**
     * @var ExternalTokenLinked
     */
    private $externalTokenLinked;

    /**
     * @var bool
     */
    private $isNewToken;

    /**
     * @var string
     */
    private $token;

    /**
     * @var string
     */
    private $tokenStatus;

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
     * @return ExternalTokenLinked
     */
    public function getExternalTokenLinked()
    {
        return $this->externalTokenLinked;
    }
    /**
     * @var ExternalTokenLinked
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
     * @return string
     */
    public function getTokenStatus()
    {
        return $this->tokenStatus;
    }
    /**
     * @var string
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
        if ($this->card !== null) {
            $object->card = $this->card->toObject();
        }
        if ($this->externalTokenLinked !== null) {
            $object->externalTokenLinked = $this->externalTokenLinked->toObject();
        }
        if ($this->isNewToken !== null) {
            $object->isNewToken = $this->isNewToken;
        }
        if ($this->token !== null) {
            $object->token = $this->token;
        }
        if ($this->tokenStatus !== null) {
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
