<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreateHostedCheckoutResponse extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $RETURNMAC = null;

    /**
     * @var string|null
     */
    public ?string $hostedCheckoutId = null;

    /**
     * @var string[]|null
     */
    public ?array $invalidTokens = null;

    /**
     * @var string|null
     */
    public ?string $merchantReference = null;

    /**
     * @var string|null
     */
    public ?string $partialRedirectUrl = null;

    /**
     * @var string|null
     */
    public ?string $redirectUrl = null;

    /**
     * @return string|null
     */
    public function getRETURNMAC(): ?string
    {
        return $this->RETURNMAC;
    }

    /**
     * @param string|null $value
     */
    public function setRETURNMAC(?string $value): void
    {
        $this->RETURNMAC = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withRETURNMAC(?string $value): static
    {
        $this->RETURNMAC = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHostedCheckoutId(): ?string
    {
        return $this->hostedCheckoutId;
    }

    /**
     * @param string|null $value
     */
    public function setHostedCheckoutId(?string $value): void
    {
        $this->hostedCheckoutId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withHostedCheckoutId(?string $value): static
    {
        $this->hostedCheckoutId = $value;
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
    public function getMerchantReference(): ?string
    {
        return $this->merchantReference;
    }

    /**
     * @param string|null $value
     */
    public function setMerchantReference(?string $value): void
    {
        $this->merchantReference = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withMerchantReference(?string $value): static
    {
        $this->merchantReference = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPartialRedirectUrl(): ?string
    {
        return $this->partialRedirectUrl;
    }

    /**
     * @param string|null $value
     */
    public function setPartialRedirectUrl(?string $value): void
    {
        $this->partialRedirectUrl = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPartialRedirectUrl(?string $value): static
    {
        $this->partialRedirectUrl = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRedirectUrl(): ?string
    {
        return $this->redirectUrl;
    }

    /**
     * @param string|null $value
     */
    public function setRedirectUrl(?string $value): void
    {
        $this->redirectUrl = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withRedirectUrl(?string $value): static
    {
        $this->redirectUrl = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->RETURNMAC !== null) {
            $object->RETURNMAC = $this->RETURNMAC;
        }
        if ($this->hostedCheckoutId !== null) {
            $object->hostedCheckoutId = $this->hostedCheckoutId;
        }
        if ($this->invalidTokens !== null) {
            $object->invalidTokens = [];
            foreach ($this->invalidTokens as $element) {
                if ($element !== null) {
                    $object->invalidTokens[] = $element;
                }
            }
        }
        if ($this->merchantReference !== null) {
            $object->merchantReference = $this->merchantReference;
        }
        if ($this->partialRedirectUrl !== null) {
            $object->partialRedirectUrl = $this->partialRedirectUrl;
        }
        if ($this->redirectUrl !== null) {
            $object->redirectUrl = $this->redirectUrl;
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
        if (property_exists($object, 'RETURNMAC')) {
            $this->RETURNMAC = $object->RETURNMAC;
        }
        if (property_exists($object, 'hostedCheckoutId')) {
            $this->hostedCheckoutId = $object->hostedCheckoutId;
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
        if (property_exists($object, 'merchantReference')) {
            $this->merchantReference = $object->merchantReference;
        }
        if (property_exists($object, 'partialRedirectUrl')) {
            $this->partialRedirectUrl = $object->partialRedirectUrl;
        }
        if (property_exists($object, 'redirectUrl')) {
            $this->redirectUrl = $object->redirectUrl;
        }
        return $this;
    }
}
