<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreateHostedCheckoutResponse extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $RETURNMAC;

    /**
     * @var string
     */
    private $hostedCheckoutId;

    /**
     * @var string[]
     */
    private $invalidTokens;

    /**
     * @var string
     */
    private $merchantReference;

    /**
     * @var string
     */
    private $partialRedirectUrl;

    /**
     * @var string
     */
    private $redirectUrl;

    // Methods
    /**
     * @return string
     */
    public function getRETURNMAC()
    {
        return $this->RETURNMAC;
    }
    /**
     * @var string
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
     * @var string
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
     * @var string[]
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
     * @var string
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
     * @var string
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
     * @var string
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
