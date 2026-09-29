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
     * @return CreateHostedTokenizationResponse
    */
    public function withExpiredCardTokens(?array $value): CreateHostedTokenizationResponse
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
     * @return CreateHostedTokenizationResponse
    */
    public function withHostedTokenizationId(?string $value): CreateHostedTokenizationResponse
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
     * @return CreateHostedTokenizationResponse
    */
    public function withHostedTokenizationUrl(?string $value): CreateHostedTokenizationResponse
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
     * @return CreateHostedTokenizationResponse
    */
    public function withInvalidTokens(?array $value): CreateHostedTokenizationResponse
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
     * @return CreateHostedTokenizationResponse
     *
     * @deprecated Deprecated
    */
    public function withPartialRedirectUrl(?string $value): CreateHostedTokenizationResponse
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
     * @return CreateHostedTokenizationResponse
    */
    public function withSri(?string $value): CreateHostedTokenizationResponse
    {
        $this->sri = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->expiredCardTokens)) {
            $object->expiredCardTokens = [];
            foreach ($this->expiredCardTokens as $element) {
                if (!is_null($element)) {
                    $object->expiredCardTokens[] = $element;
                }
            }
        }
        if (!is_null($this->hostedTokenizationId)) {
            $object->hostedTokenizationId = $this->hostedTokenizationId;
        }
        if (!is_null($this->hostedTokenizationUrl)) {
            $object->hostedTokenizationUrl = $this->hostedTokenizationUrl;
        }
        if (!is_null($this->invalidTokens)) {
            $object->invalidTokens = [];
            foreach ($this->invalidTokens as $element) {
                if (!is_null($element)) {
                    $object->invalidTokens[] = $element;
                }
            }
        }
        if (!is_null($this->partialRedirectUrl)) {
            $object->partialRedirectUrl = $this->partialRedirectUrl;
        }
        if (!is_null($this->sri)) {
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
    public function fromObject(object $object): CreateHostedTokenizationResponse
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
