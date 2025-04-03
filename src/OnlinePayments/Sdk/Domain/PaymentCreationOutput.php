<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentCreationOutput extends DataObject
{
    /**
     * @var string
     */
    public $externalReference = null;

    /**
     * @var bool
     */
    public $isNewToken = null;

    /**
     * @var string
     */
    public $token = null;

    /**
     * @var bool
     */
    public $tokenizationSucceeded = null;

    /**
     * @return string
     */
    public function getExternalReference()
    {
        return $this->externalReference;
    }

    /**
     * @param string
     */
    public function setExternalReference($value)
    {
        $this->externalReference = $value;
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
     * @return bool
     */
    public function getTokenizationSucceeded()
    {
        return $this->tokenizationSucceeded;
    }

    /**
     * @param bool
     */
    public function setTokenizationSucceeded($value)
    {
        $this->tokenizationSucceeded = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->externalReference)) {
            $object->externalReference = $this->externalReference;
        }
        if (!is_null($this->isNewToken)) {
            $object->isNewToken = $this->isNewToken;
        }
        if (!is_null($this->token)) {
            $object->token = $this->token;
        }
        if (!is_null($this->tokenizationSucceeded)) {
            $object->tokenizationSucceeded = $this->tokenizationSucceeded;
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
        if (property_exists($object, 'externalReference')) {
            $this->externalReference = $object->externalReference;
        }
        if (property_exists($object, 'isNewToken')) {
            $this->isNewToken = $object->isNewToken;
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        if (property_exists($object, 'tokenizationSucceeded')) {
            $this->tokenizationSucceeded = $object->tokenizationSucceeded;
        }
        return $this;
    }
}
