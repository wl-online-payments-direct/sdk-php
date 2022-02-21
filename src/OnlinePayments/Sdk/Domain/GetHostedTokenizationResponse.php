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
class GetHostedTokenizationResponse extends DataObject
{
    // Properties
    /**
     * @var TokenResponse
     */
    private $token;

    /**
     * @var string
     */
    private $tokenStatus;

    // Methods
    /**
     * @return TokenResponse
     */
    public function getToken()
    {
        return $this->token;
    }
    /**
     * @var TokenResponse
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
        if ($this->token !== null) {
            $object->token = $this->token->toObject();
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
        if (property_exists($object, 'token')) {
            if (!is_object($object->token)) {
                throw new UnexpectedValueException('value \'' . print_r($object->token, true) . '\' is not an object');
            }
            $value = new TokenResponse();
            $this->token = $value->fromObject($object->token);
        }
        if (property_exists($object, 'tokenStatus')) {
            $this->tokenStatus = $object->tokenStatus;
        }
        return $this;
    }
}
