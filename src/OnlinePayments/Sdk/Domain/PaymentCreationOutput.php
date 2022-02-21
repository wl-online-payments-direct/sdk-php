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
class PaymentCreationOutput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $externalReference;

    /**
     * @var bool
     */
    private $isNewToken;

    /**
     * @var string
     */
    private $token;

    /**
     * @var bool
     */
    private $tokenizationSucceeded;

    // Methods
    /**
     * @return string
     */
    public function getExternalReference()
    {
        return $this->externalReference;
    }
    /**
     * @var string
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
     * @return bool
     */
    public function getTokenizationSucceeded()
    {
        return $this->tokenizationSucceeded;
    }
    /**
     * @var bool
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
        if ($this->externalReference !== null) {
            $object->externalReference = $this->externalReference;
        }
        if ($this->isNewToken !== null) {
            $object->isNewToken = $this->isNewToken;
        }
        if ($this->token !== null) {
            $object->token = $this->token;
        }
        if ($this->tokenizationSucceeded !== null) {
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
