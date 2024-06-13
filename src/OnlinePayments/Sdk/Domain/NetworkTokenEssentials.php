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
class NetworkTokenEssentials extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $bin;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string
     */
    private $networkToken;

    /**
     * @var string
     */
    private $tokenExpiryDate;

    // Methods
    /**
     * @return string
     */
    public function getBin()
    {
        return $this->bin;
    }
    /**
     * @var string
     */
    public function setBin($value)
    {
        $this->bin = $value;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * @var string
     */
    public function setCountryCode($value)
    {
        $this->countryCode = $value;
    }

    /**
     * @return string
     */
    public function getNetworkToken()
    {
        return $this->networkToken;
    }
    /**
     * @var string
     */
    public function setNetworkToken($value)
    {
        $this->networkToken = $value;
    }

    /**
     * @return string
     */
    public function getTokenExpiryDate()
    {
        return $this->tokenExpiryDate;
    }
    /**
     * @var string
     */
    public function setTokenExpiryDate($value)
    {
        $this->tokenExpiryDate = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->bin !== null) {
            $object->bin = $this->bin;
        }
        if ($this->countryCode !== null) {
            $object->countryCode = $this->countryCode;
        }
        if ($this->networkToken !== null) {
            $object->networkToken = $this->networkToken;
        }
        if ($this->tokenExpiryDate !== null) {
            $object->tokenExpiryDate = $this->tokenExpiryDate;
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
        if (property_exists($object, 'bin')) {
            $this->bin = $object->bin;
        }
        if (property_exists($object, 'countryCode')) {
            $this->countryCode = $object->countryCode;
        }
        if (property_exists($object, 'networkToken')) {
            $this->networkToken = $object->networkToken;
        }
        if (property_exists($object, 'tokenExpiryDate')) {
            $this->tokenExpiryDate = $object->tokenExpiryDate;
        }
        return $this;
    }
}
