<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SessionData extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $hostedFieldsSessionId = null;

    /**
     * @var string|null
     */
    public ?string $locale = null;

    /**
     * @var string|null
     */
    public ?string $platformUrl = null;

    /**
     * @var string|null
     */
    public ?string $sessionToken = null;

    /**
     * @var string[]|null
     */
    public ?array $tokens = null;

    /**
     * @return string|null
     */
    public function getHostedFieldsSessionId(): ?string
    {
        return $this->hostedFieldsSessionId;
    }

    /**
     * @param string|null $value
     */
    public function setHostedFieldsSessionId(?string $value): void
    {
        $this->hostedFieldsSessionId = $value;
    }

    /**
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * @param string|null $value
     */
    public function setLocale(?string $value): void
    {
        $this->locale = $value;
    }

    /**
     * @return string|null
     */
    public function getPlatformUrl(): ?string
    {
        return $this->platformUrl;
    }

    /**
     * @param string|null $value
     */
    public function setPlatformUrl(?string $value): void
    {
        $this->platformUrl = $value;
    }

    /**
     * @return string|null
     */
    public function getSessionToken(): ?string
    {
        return $this->sessionToken;
    }

    /**
     * @param string|null $value
     */
    public function setSessionToken(?string $value): void
    {
        $this->sessionToken = $value;
    }

    /**
     * @return string[]|null
     */
    public function getTokens(): ?array
    {
        return $this->tokens;
    }

    /**
     * @param string[]|null $value
     */
    public function setTokens(?array $value): void
    {
        $this->tokens = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->hostedFieldsSessionId)) {
            $object->hostedFieldsSessionId = $this->hostedFieldsSessionId;
        }
        if (!is_null($this->locale)) {
            $object->locale = $this->locale;
        }
        if (!is_null($this->platformUrl)) {
            $object->platformUrl = $this->platformUrl;
        }
        if (!is_null($this->sessionToken)) {
            $object->sessionToken = $this->sessionToken;
        }
        if (!is_null($this->tokens)) {
            $object->tokens = [];
            foreach ($this->tokens as $element) {
                if (!is_null($element)) {
                    $object->tokens[] = $element;
                }
            }
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): SessionData
    {
        parent::fromObject($object);
        if (property_exists($object, 'hostedFieldsSessionId')) {
            $this->hostedFieldsSessionId = $object->hostedFieldsSessionId;
        }
        if (property_exists($object, 'locale')) {
            $this->locale = $object->locale;
        }
        if (property_exists($object, 'platformUrl')) {
            $this->platformUrl = $object->platformUrl;
        }
        if (property_exists($object, 'sessionToken')) {
            $this->sessionToken = $object->sessionToken;
        }
        if (property_exists($object, 'tokens')) {
            if (!is_array($object->tokens) && !is_object($object->tokens)) {
                throw new UnexpectedValueException('value \'' . print_r($object->tokens, true) . '\' is not an array or object');
            }
            $this->tokens = [];
            foreach ($object->tokens as $element) {
                $this->tokens[] = $element;
            }
        }
        return $this;
    }
}
