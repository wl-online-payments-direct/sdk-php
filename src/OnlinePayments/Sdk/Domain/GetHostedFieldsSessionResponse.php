<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class GetHostedFieldsSessionResponse extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $sessionId = null;

    /**
     * @var TokenInfo|null
     */
    public ?TokenInfo $token = null;

    /**
     * @return string|null
     */
    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }

    /**
     * @param string|null $value
     */
    public function setSessionId(?string $value): void
    {
        $this->sessionId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withSessionId(?string $value): static
    {
        $this->sessionId = $value;
        return $this;
    }

    /**
     * @return TokenInfo|null
     */
    public function getToken(): ?TokenInfo
    {
        return $this->token;
    }

    /**
     * @param TokenInfo|null $value
     */
    public function setToken(?TokenInfo $value): void
    {
        $this->token = $value;
    }

    /**
     * @param TokenInfo|null $value
     * @return $this
     */
    public function withToken(?TokenInfo $value): static
    {
        $this->token = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->sessionId !== null) {
            $object->sessionId = $this->sessionId;
        }
        if ($this->token !== null) {
            $object->token = $this->token->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'sessionId')) {
            $this->sessionId = $object->sessionId;
        }
        if (property_exists($object, 'token')) {
            if (!is_object($object->token)) {
                throw new UnexpectedValueException('value \'' . print_r($object->token, true) . '\' is not an object');
            }
            $value = new TokenInfo();
            $this->token = $value->fromObject($object->token);
        }
        return $this;
    }
}
