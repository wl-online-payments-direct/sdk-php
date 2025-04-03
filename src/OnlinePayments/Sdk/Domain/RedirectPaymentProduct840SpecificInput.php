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
     * @var bool
     */
    public $JavaScriptSdkFlow = null;

    /**
     * @var bool
     */
    public $addressSelectionAtPayPal = null;

    /**
     * @var string
     */
    public $custom = null;

    /**
     * @var bool
     */
    public $payLater = null;

    /**
     * @return bool
     */
    public function getJavaScriptSdkFlow()
    {
        return $this->JavaScriptSdkFlow;
    }

    /**
     * @param bool
     */
    public function setJavaScriptSdkFlow($value)
    {
        $this->JavaScriptSdkFlow = $value;
    }

    /**
     * @return bool
     */
    public function getAddressSelectionAtPayPal()
    {
        return $this->addressSelectionAtPayPal;
    }

    /**
     * @param bool
     */
    public function setAddressSelectionAtPayPal($value)
    {
        $this->addressSelectionAtPayPal = $value;
    }

    /**
     * @return string
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * @param string
     */
    public function setCustom($value)
    {
        $this->custom = $value;
    }

    /**
     * @return bool
     */
    public function getPayLater()
    {
        return $this->payLater;
    }

    /**
     * @param bool
     */
    public function setPayLater($value)
    {
        $this->payLater = $value;
    }

    /**
     * @return object
     */
    public function toObject()
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
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
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
