<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class DccCardSource extends DataObject
{
    /**
     * @var CardInfo
     */
    public $card = null;

    /**
     * @var string
     */
    public $encryptedCustomerInput = null;

    /**
     * @var string
     */
    public $hostedTokenizationId = null;

    /**
     * @var string
     */
    public $token = null;

    /**
     * @return CardInfo
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param CardInfo
     */
    public function setCard($value)
    {
        $this->card = $value;
    }

    /**
     * @return string
     */
    public function getEncryptedCustomerInput()
    {
        return $this->encryptedCustomerInput;
    }

    /**
     * @param string
     */
    public function setEncryptedCustomerInput($value)
    {
        $this->encryptedCustomerInput = $value;
    }

    /**
     * @return string
     */
    public function getHostedTokenizationId()
    {
        return $this->hostedTokenizationId;
    }

    /**
     * @param string
     */
    public function setHostedTokenizationId($value)
    {
        $this->hostedTokenizationId = $value;
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
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->card)) {
            $object->card = $this->card->toObject();
        }
        if (!is_null($this->encryptedCustomerInput)) {
            $object->encryptedCustomerInput = $this->encryptedCustomerInput;
        }
        if (!is_null($this->hostedTokenizationId)) {
            $object->hostedTokenizationId = $this->hostedTokenizationId;
        }
        if (!is_null($this->token)) {
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
            $value = new CardInfo();
            $this->card = $value->fromObject($object->card);
        }
        if (property_exists($object, 'encryptedCustomerInput')) {
            $this->encryptedCustomerInput = $object->encryptedCustomerInput;
        }
        if (property_exists($object, 'hostedTokenizationId')) {
            $this->hostedTokenizationId = $object->hostedTokenizationId;
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        return $this;
    }
}
