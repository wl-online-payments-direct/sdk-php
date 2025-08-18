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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->RETURNMAC)) {
            $object->RETURNMAC = $this->RETURNMAC;
        }
        if (!is_null($this->hostedCheckoutId)) {
            $object->hostedCheckoutId = $this->hostedCheckoutId;
        }
        if (!is_null($this->invalidTokens)) {
            $object->invalidTokens = [];
            foreach ($this->invalidTokens as $element) {
                if (!is_null($element)) {
                    $object->invalidTokens[] = $element;
                }
            }
        }
        if (!is_null($this->merchantReference)) {
            $object->merchantReference = $this->merchantReference;
        }
        if (!is_null($this->partialRedirectUrl)) {
            $object->partialRedirectUrl = $this->partialRedirectUrl;
        }
        if (!is_null($this->redirectUrl)) {
            $object->redirectUrl = $this->redirectUrl;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CreateHostedCheckoutResponse
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
