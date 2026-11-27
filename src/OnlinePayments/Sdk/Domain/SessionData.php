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
     * @param string|null $value
     * @return $this
     */
    public function withHostedFieldsSessionId(?string $value): static
    {
        $this->hostedFieldsSessionId = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withLocale(?string $value): static
    {
        $this->locale = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withPlatformUrl(?string $value): static
    {
        $this->platformUrl = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withSessionToken(?string $value): static
    {
        $this->sessionToken = $value;
        return $this;
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
     * @param string[]|null $value
     * @return $this
     */
    public function withTokens(?array $value): static
    {
        $this->tokens = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->hostedFieldsSessionId !== null) {
            $object->hostedFieldsSessionId = $this->hostedFieldsSessionId;
        }
        if ($this->locale !== null) {
            $object->locale = $this->locale;
        }
        if ($this->platformUrl !== null) {
            $object->platformUrl = $this->platformUrl;
        }
        if ($this->sessionToken !== null) {
            $object->sessionToken = $this->sessionToken;
        }
        if ($this->tokens !== null) {
            $object->tokens = [];
            foreach ($this->tokens as $element) {
                if ($element !== null) {
                    $object->tokens[] = $element;
                }
            }
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
