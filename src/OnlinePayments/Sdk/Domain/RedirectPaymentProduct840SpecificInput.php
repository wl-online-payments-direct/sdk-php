<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct840SpecificInput extends DataObject
{
    /**
     * @var bool|null
    */
    public ?bool $JavaScriptSdkFlow = null;

    /**
     * @var bool|null
    */
    public ?bool $addressSelectionAtPayPal = null;

    /**
     * @var string|null
    */
    public ?string $custom = null;

    /**
     * @var bool|null
    */
    public ?bool $payLater = null;

    /**
     * @return bool|null
    */
    public function getJavaScriptSdkFlow(): ?bool
    {
        return $this->JavaScriptSdkFlow;
    }

    /**
     * @param bool|null $value
    */
    public function setJavaScriptSdkFlow(?bool $value): void
    {
        $this->JavaScriptSdkFlow = $value;
    }

    /**
     * @param bool|null $value
     * @return RedirectPaymentProduct840SpecificInput
    */
    public function withJavaScriptSdkFlow(?bool $value): RedirectPaymentProduct840SpecificInput
    {
        $this->JavaScriptSdkFlow = $value;
        return $this;
    }

    /**
     * @return bool|null
    */
    public function getAddressSelectionAtPayPal(): ?bool
    {
        return $this->addressSelectionAtPayPal;
    }

    /**
     * @param bool|null $value
    */
    public function setAddressSelectionAtPayPal(?bool $value): void
    {
        $this->addressSelectionAtPayPal = $value;
    }

    /**
     * @param bool|null $value
     * @return RedirectPaymentProduct840SpecificInput
    */
    public function withAddressSelectionAtPayPal(?bool $value): RedirectPaymentProduct840SpecificInput
    {
        $this->addressSelectionAtPayPal = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getCustom(): ?string
    {
        return $this->custom;
    }

    /**
     * @param string|null $value
    */
    public function setCustom(?string $value): void
    {
        $this->custom = $value;
    }

    /**
     * @param string|null $value
     * @return RedirectPaymentProduct840SpecificInput
    */
    public function withCustom(?string $value): RedirectPaymentProduct840SpecificInput
    {
        $this->custom = $value;
        return $this;
    }

    /**
     * @return bool|null
    */
    public function getPayLater(): ?bool
    {
        return $this->payLater;
    }

    /**
     * @param bool|null $value
    */
    public function setPayLater(?bool $value): void
    {
        $this->payLater = $value;
    }

    /**
     * @param bool|null $value
     * @return RedirectPaymentProduct840SpecificInput
    */
    public function withPayLater(?bool $value): RedirectPaymentProduct840SpecificInput
    {
        $this->payLater = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->JavaScriptSdkFlow)) {
            $object->JavaScriptSdkFlow = $this->JavaScriptSdkFlow;
        }
        if (!is_null($this->addressSelectionAtPayPal)) {
            $object->addressSelectionAtPayPal = $this->addressSelectionAtPayPal;
        }
        if (!is_null($this->custom)) {
            $object->custom = $this->custom;
        }
        if (!is_null($this->payLater)) {
            $object->payLater = $this->payLater;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RedirectPaymentProduct840SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'JavaScriptSdkFlow')) {
            $this->JavaScriptSdkFlow = $object->JavaScriptSdkFlow;
        }
        if (property_exists($object, 'addressSelectionAtPayPal')) {
            $this->addressSelectionAtPayPal = $object->addressSelectionAtPayPal;
        }
        if (property_exists($object, 'custom')) {
            $this->custom = $object->custom;
        }
        if (property_exists($object, 'payLater')) {
            $this->payLater = $object->payLater;
        }
        return $this;
    }
}
