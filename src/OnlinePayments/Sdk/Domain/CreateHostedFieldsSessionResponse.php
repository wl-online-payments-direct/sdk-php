<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreateHostedFieldsSessionResponse extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $sdkSri = null;

    /**
     * @var string|null
     */
    public ?string $sdkUrl = null;

    /**
     * @var SessionData|null
     */
    public ?SessionData $sessionData = null;

    /**
     * @return string|null
     */
    public function getSdkSri(): ?string
    {
        return $this->sdkSri;
    }

    /**
     * @param string|null $value
     */
    public function setSdkSri(?string $value): void
    {
        $this->sdkSri = $value;
    }

    /**
     * @return string|null
     */
    public function getSdkUrl(): ?string
    {
        return $this->sdkUrl;
    }

    /**
     * @param string|null $value
     */
    public function setSdkUrl(?string $value): void
    {
        $this->sdkUrl = $value;
    }

    /**
     * @return SessionData|null
     */
    public function getSessionData(): ?SessionData
    {
        return $this->sessionData;
    }

    /**
     * @param SessionData|null $value
     */
    public function setSessionData(?SessionData $value): void
    {
        $this->sessionData = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->sdkSri)) {
            $object->sdkSri = $this->sdkSri;
        }
        if (!is_null($this->sdkUrl)) {
            $object->sdkUrl = $this->sdkUrl;
        }
        if (!is_null($this->sessionData)) {
            $object->sessionData = $this->sessionData->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CreateHostedFieldsSessionResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'sdkSri')) {
            $this->sdkSri = $object->sdkSri;
        }
        if (property_exists($object, 'sdkUrl')) {
            $this->sdkUrl = $object->sdkUrl;
        }
        if (property_exists($object, 'sessionData')) {
            if (!is_object($object->sessionData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->sessionData, true) . '\' is not an object');
            }
            $value = new SessionData();
            $this->sessionData = $value->fromObject($object->sessionData);
        }
        return $this;
    }
}
