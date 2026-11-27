<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreateHostedTokenizationResponse extends DataObject
{
    /**
     * @var string[]|null
     */
    public ?array $expiredCardTokens = null;

    /**
     * @var string|null
     */
    public ?string $hostedTokenizationId = null;

    /**
     * @var string|null
     */
    public ?string $hostedTokenizationUrl = null;

    /**
     * @var string[]|null
     */
    public ?array $invalidTokens = null;

    /**
     * @var string|null
     *
     * @deprecated Deprecated
     */
    public ?string $partialRedirectUrl = null;

    /**
     * @var string|null
     */
    public ?string $sri = null;

    /**
     * @return string[]|null
     */
    public function getExpiredCardTokens(): ?array
    {
        return $this->expiredCardTokens;
    }

    /**
     * @param string[]|null $value
     */
    public function setExpiredCardTokens(?array $value): void
    {
        $this->expiredCardTokens = $value;
    }

    /**
     * @param string[]|null $value
     * @return $this
     */
    public function withExpiredCardTokens(?array $value): static
    {
        $this->expiredCardTokens = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHostedTokenizationId(): ?string
    {
        return $this->hostedTokenizationId;
    }

    /**
     * @param string|null $value
     */
    public function setHostedTokenizationId(?string $value): void
    {
        $this->hostedTokenizationId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withHostedTokenizationId(?string $value): static
    {
        $this->hostedTokenizationId = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHostedTokenizationUrl(): ?string
    {
        return $this->hostedTokenizationUrl;
    }

    /**
     * @param string|null $value
     */
    public function setHostedTokenizationUrl(?string $value): void
    {
        $this->hostedTokenizationUrl = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withHostedTokenizationUrl(?string $value): static
    {
        $this->hostedTokenizationUrl = $value;
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
     *
     * @deprecated Deprecated
     */
    public function getPartialRedirectUrl(): ?string
    {
        return $this->partialRedirectUrl;
    }

    /**
     * @param string|null $value
     *
     * @deprecated Deprecated
     */
    public function setPartialRedirectUrl(?string $value): void
    {
        $this->partialRedirectUrl = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     *
     * @deprecated Deprecated
     */
    public function withPartialRedirectUrl(?string $value): static
    {
        $this->partialRedirectUrl = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSri(): ?string
    {
        return $this->sri;
    }

    /**
     * @param string|null $value
     */
    public function setSri(?string $value): void
    {
        $this->sri = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withSri(?string $value): static
    {
        $this->sri = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->expiredCardTokens !== null) {
            $object->expiredCardTokens = [];
            foreach ($this->expiredCardTokens as $element) {
                if ($element !== null) {
                    $object->expiredCardTokens[] = $element;
                }
            }
        }
        if ($this->hostedTokenizationId !== null) {
            $object->hostedTokenizationId = $this->hostedTokenizationId;
        }
        if ($this->hostedTokenizationUrl !== null) {
            $object->hostedTokenizationUrl = $this->hostedTokenizationUrl;
        }
        if ($this->invalidTokens !== null) {
            $object->invalidTokens = [];
            foreach ($this->invalidTokens as $element) {
                if ($element !== null) {
                    $object->invalidTokens[] = $element;
                }
            }
        }
        if ($this->partialRedirectUrl !== null) {
            $object->partialRedirectUrl = $this->partialRedirectUrl;
        }
        if ($this->sri !== null) {
            $object->sri = $this->sri;
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
        if (property_exists($object, 'expiredCardTokens')) {
            if (!is_array($object->expiredCardTokens) && !is_object($object->expiredCardTokens)) {
                throw new UnexpectedValueException('value \'' . print_r($object->expiredCardTokens, true) . '\' is not an array or object');
            }
            $this->expiredCardTokens = [];
            foreach ($object->expiredCardTokens as $element) {
                    $this->expiredCardTokens[] = $element;
            }
        }
        if (property_exists($object, 'hostedTokenizationId')) {
            $this->hostedTokenizationId = $object->hostedTokenizationId;
        }
        if (property_exists($object, 'hostedTokenizationUrl')) {
            $this->hostedTokenizationUrl = $object->hostedTokenizationUrl;
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
        if (property_exists($object, 'partialRedirectUrl')) {
            $this->partialRedirectUrl = $object->partialRedirectUrl;
        }
        if (property_exists($object, 'sri')) {
            $this->sri = $object->sri;
        }
        return $this;
    }
}
