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
     * @var TokenResponse|null
     */
    public ?TokenResponse $token = null;

    /**
     * @var string|null
     */
    public ?string $tokenStatus = null;

    /**
     * @return TokenResponse|null
     */
    public function getToken(): ?TokenResponse
    {
        return $this->token;
    }

    /**
     * @param TokenResponse|null $value
     */
    public function setToken(?TokenResponse $value): void
    {
        $this->token = $value;
    }

    /**
     * @return string|null
     */
    public function getTokenStatus(): ?string
    {
        return $this->tokenStatus;
    }

    /**
     * @param string|null $value
     */
    public function setTokenStatus(?string $value): void
    {
        $this->tokenStatus = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): GetHostedTokenizationResponse
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
