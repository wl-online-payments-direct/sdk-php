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
     * @var string
     */
    public $RETURNMAC = null;

    /**
     * @var string
     */
    public $hostedCheckoutId = null;

    /**
     * @var string[]
     */
    public $invalidTokens = null;

    /**
     * @var string
     */
    public $merchantReference = null;

    /**
     * @var string
     */
    public $partialRedirectUrl = null;

    /**
     * @var string
     */
    public $redirectUrl = null;

    /**
     * @return string
     */
    public function getRETURNMAC()
    {
        return $this->RETURNMAC;
    }

    /**
     * @param string
     */
    public function setRETURNMAC($value)
    {
        $this->RETURNMAC = $value;
    }

    /**
     * @return string
     */
    public function getHostedCheckoutId()
    {
        return $this->hostedCheckoutId;
    }

    /**
     * @param string
     */
    public function setHostedCheckoutId($value)
    {
        $this->hostedCheckoutId = $value;
    }

    /**
     * @return string[]
     */
    public function getInvalidTokens()
    {
        return $this->invalidTokens;
    }

    /**
     * @param string[]
     */
    public function setInvalidTokens($value)
    {
        $this->invalidTokens = $value;
    }

    /**
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->merchantReference;
    }

    /**
     * @param string
     */
    public function setMerchantReference($value)
    {
        $this->merchantReference = $value;
    }

    /**
     * @return string
     */
    public function getPartialRedirectUrl()
    {
        return $this->partialRedirectUrl;
    }

    /**
     * @param string
     */
    public function setPartialRedirectUrl($value)
    {
        $this->partialRedirectUrl = $value;
    }

    /**
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param string
     */
    public function setRedirectUrl($value)
    {
        $this->redirectUrl = $value;
    }

    /**
     * @return object
     */
    public function toObject()
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
    public function fromObject($object)
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
