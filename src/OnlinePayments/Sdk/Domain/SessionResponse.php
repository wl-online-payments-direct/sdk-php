<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SessionResponse extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $assetUrl = null;

    /**
     * @var string|null
    */
    public ?string $clientApiUrl = null;

    /**
     * @var string|null
    */
    public ?string $clientSessionId = null;

    /**
     * @var string|null
    */
    public ?string $customerId = null;

    /**
     * @var string[]|null
    */
    public ?array $invalidTokens = null;

    /**
     * @return string|null
    */
    public function getAssetUrl(): ?string
    {
        return $this->assetUrl;
    }

    /**
     * @param string|null $value
    */
    public function setAssetUrl(?string $value): void
    {
        $this->assetUrl = $value;
    }

    /**
     * @param string|null $value
     * @return SessionResponse
    */
    public function withAssetUrl(?string $value): SessionResponse
    {
        $this->assetUrl = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getClientApiUrl(): ?string
    {
        return $this->clientApiUrl;
    }

    /**
     * @param string|null $value
    */
    public function setClientApiUrl(?string $value): void
    {
        $this->clientApiUrl = $value;
    }

    /**
     * @param string|null $value
     * @return SessionResponse
    */
    public function withClientApiUrl(?string $value): SessionResponse
    {
        $this->clientApiUrl = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getClientSessionId(): ?string
    {
        return $this->clientSessionId;
    }

    /**
     * @param string|null $value
    */
    public function setClientSessionId(?string $value): void
    {
        $this->clientSessionId = $value;
    }

    /**
     * @param string|null $value
     * @return SessionResponse
    */
    public function withClientSessionId(?string $value): SessionResponse
    {
        $this->clientSessionId = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * @param string|null $value
    */
    public function setCustomerId(?string $value): void
    {
        $this->customerId = $value;
    }

    /**
     * @param string|null $value
     * @return SessionResponse
    */
    public function withCustomerId(?string $value): SessionResponse
    {
        $this->customerId = $value;
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
     * @return SessionResponse
    */
    public function withInvalidTokens(?array $value): SessionResponse
    {
        $this->invalidTokens = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->assetUrl)) {
            $object->assetUrl = $this->assetUrl;
        }
        if (!is_null($this->clientApiUrl)) {
            $object->clientApiUrl = $this->clientApiUrl;
        }
        if (!is_null($this->clientSessionId)) {
            $object->clientSessionId = $this->clientSessionId;
        }
        if (!is_null($this->customerId)) {
            $object->customerId = $this->customerId;
        }
        if (!is_null($this->invalidTokens)) {
            $object->invalidTokens = [];
            foreach ($this->invalidTokens as $element) {
                if (!is_null($element)) {
                    $object->invalidTokens[] = $element;
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
    public function fromObject(object $object): SessionResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'assetUrl')) {
            $this->assetUrl = $object->assetUrl;
        }
        if (property_exists($object, 'clientApiUrl')) {
            $this->clientApiUrl = $object->clientApiUrl;
        }
        if (property_exists($object, 'clientSessionId')) {
            $this->clientSessionId = $object->clientSessionId;
        }
        if (property_exists($object, 'customerId')) {
            $this->customerId = $object->customerId;
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
        return $this;
    }
}
