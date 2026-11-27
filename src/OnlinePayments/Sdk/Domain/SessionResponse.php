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
     * @return $this
     */
    public function withAssetUrl(?string $value): static
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
     * @return $this
     */
    public function withClientApiUrl(?string $value): static
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
     * @return $this
     */
    public function withClientSessionId(?string $value): static
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
     * @return $this
     */
    public function withCustomerId(?string $value): static
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
     * @return $this
     */
    public function withInvalidTokens(?array $value): static
    {
        $this->invalidTokens = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->assetUrl !== null) {
            $object->assetUrl = $this->assetUrl;
        }
        if ($this->clientApiUrl !== null) {
            $object->clientApiUrl = $this->clientApiUrl;
        }
        if ($this->clientSessionId !== null) {
            $object->clientSessionId = $this->clientSessionId;
        }
        if ($this->customerId !== null) {
            $object->customerId = $this->customerId;
        }
        if ($this->invalidTokens !== null) {
            $object->invalidTokens = [];
            foreach ($this->invalidTokens as $element) {
                if ($element !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
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
