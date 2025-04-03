<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class GetHostedTokenizationResponse extends DataObject
{
    /**
     * @var TokenResponse
     */
    public $token = null;

    /**
     * @var string
     */
    public $tokenStatus = null;

    /**
     * @return TokenResponse
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param TokenResponse
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
        if (!is_null($this->token)) {
            $object->token = $this->token->toObject();
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
