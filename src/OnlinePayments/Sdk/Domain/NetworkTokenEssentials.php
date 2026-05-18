<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class NetworkTokenEssentials extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $bin = null;

    /**
     * @var string|null
     */
    public ?string $countryCode = null;

    /**
     * @var string|null
     */
    public ?string $networkToken = null;

    /**
     * @var string|null
     */
    public ?string $networkTokenState = null;

    /**
     * @var bool|null
     */
    public ?bool $networkTokenUsed = null;

    /**
     * @var string|null
     */
    public ?string $tokenExpiryDate = null;

    /**
     * @return string|null
     */
    public function getBin(): ?string
    {
        return $this->bin;
    }

    /**
     * @param string|null $value
     */
    public function setBin(?string $value): void
    {
        $this->bin = $value;
    }

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @param string|null $value
     */
    public function setCountryCode(?string $value): void
    {
        $this->countryCode = $value;
    }

    /**
     * @return string|null
     */
    public function getNetworkToken(): ?string
    {
        return $this->networkToken;
    }

    /**
     * @param string|null $value
     */
    public function setNetworkToken(?string $value): void
    {
        $this->networkToken = $value;
    }

    /**
     * @return string|null
     */
    public function getNetworkTokenState(): ?string
    {
        return $this->networkTokenState;
    }

    /**
     * @param string|null $value
     */
    public function setNetworkTokenState(?string $value): void
    {
        $this->networkTokenState = $value;
    }

    /**
     * @return bool|null
     */
    public function getNetworkTokenUsed(): ?bool
    {
        return $this->networkTokenUsed;
    }

    /**
     * @param bool|null $value
     */
    public function setNetworkTokenUsed(?bool $value): void
    {
        $this->networkTokenUsed = $value;
    }

    /**
     * @return string|null
     */
    public function getTokenExpiryDate(): ?string
    {
        return $this->tokenExpiryDate;
    }

    /**
     * @param string|null $value
     */
    public function setTokenExpiryDate(?string $value): void
    {
        $this->tokenExpiryDate = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->bin)) {
            $object->bin = $this->bin;
        }
        if (!is_null($this->countryCode)) {
            $object->countryCode = $this->countryCode;
        }
        if (!is_null($this->networkToken)) {
            $object->networkToken = $this->networkToken;
        }
        if (!is_null($this->networkTokenState)) {
            $object->networkTokenState = $this->networkTokenState;
        }
        if (!is_null($this->networkTokenUsed)) {
            $object->networkTokenUsed = $this->networkTokenUsed;
        }
        if (!is_null($this->tokenExpiryDate)) {
            $object->tokenExpiryDate = $this->tokenExpiryDate;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): NetworkTokenEssentials
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
        if (property_exists($object, 'networkTokenState')) {
            $this->networkTokenState = $object->networkTokenState;
        }
        if (property_exists($object, 'networkTokenUsed')) {
            $this->networkTokenUsed = $object->networkTokenUsed;
        }
        if (property_exists($object, 'tokenExpiryDate')) {
            $this->tokenExpiryDate = $object->tokenExpiryDate;
        }
        return $this;
    }
}
