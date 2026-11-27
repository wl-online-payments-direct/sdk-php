<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreateHostedFieldsSessionResponse extends DataObject
{
    /**
     * @var CardToken[]|null
     */
    public ?array $cardTokens = null;

    /**
     * @var string|null
     */
    public ?string $hostedFieldsSessionId = null;

    /**
     * @var string[]|null
     */
    public ?array $invalidTokens = null;

    /**
     * @var string|null
     */
    public ?string $sdkSri = null;

    /**
     * @var string|null
     */
    public ?string $sdkUrl = null;

    /**
     * @var SessionData|null
     */
    public ?SessionData $sessionData = null;

    /**
     * @return CardToken[]|null
     */
    public function getCardTokens(): ?array
    {
        return $this->cardTokens;
    }

    /**
     * @param CardToken[]|null $value
     */
    public function setCardTokens(?array $value): void
    {
        $this->cardTokens = $value;
    }

    /**
     * @param CardToken[]|null $value
     * @return $this
     */
    public function withCardTokens(?array $value): static
    {
        $this->cardTokens = $value;
        return $this;
    }

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
     * @return string[]|null
     */
    public function getInvalidTokens(): ?array
    {
        return $this->invalidTokens;
    }

    /**
     * @param string[]|null $value
     */
    public function setInvalidTokens(?array $value): void
    {
        $this->invalidTokens = $value;
    }

    /**
     * @param string[]|null $value
     * @return $this
     */
    public function withInvalidTokens(?array $value): static
    {
        $this->invalidTokens = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSdkSri(): ?string
    {
        return $this->sdkSri;
    }

    /**
     * @param string|null $value
     */
    public function setSdkSri(?string $value): void
    {
        $this->sdkSri = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withSdkSri(?string $value): static
    {
        $this->sdkSri = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSdkUrl(): ?string
    {
        return $this->sdkUrl;
    }

    /**
     * @param string|null $value
     */
    public function setSdkUrl(?string $value): void
    {
        $this->sdkUrl = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withSdkUrl(?string $value): static
    {
        $this->sdkUrl = $value;
        return $this;
    }

    /**
     * @return SessionData|null
     */
    public function getSessionData(): ?SessionData
    {
        return $this->sessionData;
    }

    /**
     * @param SessionData|null $value
     */
    public function setSessionData(?SessionData $value): void
    {
        $this->sessionData = $value;
    }

    /**
     * @param SessionData|null $value
     * @return $this
     */
    public function withSessionData(?SessionData $value): static
    {
        $this->sessionData = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->cardTokens !== null) {
            $object->cardTokens = [];
            foreach ($this->cardTokens as $element) {
                if ($element !== null) {
                    $object->cardTokens[] = $element->toObject();
                }
            }
        }
        if ($this->hostedFieldsSessionId !== null) {
            $object->hostedFieldsSessionId = $this->hostedFieldsSessionId;
        }
        if ($this->invalidTokens !== null) {
            $object->invalidTokens = [];
            foreach ($this->invalidTokens as $element) {
                if ($element !== null) {
                    $object->invalidTokens[] = $element;
                }
            }
        }
        if ($this->sdkSri !== null) {
            $object->sdkSri = $this->sdkSri;
        }
        if ($this->sdkUrl !== null) {
            $object->sdkUrl = $this->sdkUrl;
        }
        if ($this->sessionData !== null) {
            $object->sessionData = $this->sessionData->toObject();
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
        if (property_exists($object, 'cardTokens')) {
            if (!is_array($object->cardTokens) && !is_object($object->cardTokens)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardTokens, true) . '\' is not an array or object');
            }
            $this->cardTokens = [];
            foreach ($object->cardTokens as $element) {
                $value = new CardToken();
                $this->cardTokens[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'hostedFieldsSessionId')) {
            $this->hostedFieldsSessionId = $object->hostedFieldsSessionId;
        }
        if (property_exists($object, 'invalidTokens')) {
            if (!is_array($object->invalidTokens) && !is_object($object->invalidTokens)) {
                throw new UnexpectedValueException('value \'' . print_r($object->invalidTokens, true) . '\' is not an array or object');
            }
            $this->invalidTokens = [];
            foreach ($object->invalidTokens as $element) {
                    $this->invalidTokens[] = $element;
            }
        }
        if (property_exists($object, 'sdkSri')) {
            $this->sdkSri = $object->sdkSri;
        }
        if (property_exists($object, 'sdkUrl')) {
            $this->sdkUrl = $object->sdkUrl;
        }
        if (property_exists($object, 'sessionData')) {
            if (!is_object($object->sessionData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->sessionData, true) . '\' is not an object');
            }
            $value = new SessionData();
            $this->sessionData = $value->fromObject($object->sessionData);
        }
        return $this;
    }
}
