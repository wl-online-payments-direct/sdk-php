<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MandateMerchantAction extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $actionType = null;

    /**
     * @var MandateRedirectData|null
    */
    public ?MandateRedirectData $redirectData = null;

    /**
     * @return string|null
    */
    public function getActionType(): ?string
    {
        return $this->actionType;
    }

    /**
     * @param string|null $value
    */
    public function setActionType(?string $value): void
    {
        $this->actionType = $value;
    }

    /**
     * @param string|null $value
     * @return MandateMerchantAction
    */
    public function withActionType(?string $value): MandateMerchantAction
    {
        $this->actionType = $value;
        return $this;
    }

    /**
     * @return MandateRedirectData|null
    */
    public function getRedirectData(): ?MandateRedirectData
    {
        return $this->redirectData;
    }

    /**
     * @param MandateRedirectData|null $value
    */
    public function setRedirectData(?MandateRedirectData $value): void
    {
        $this->redirectData = $value;
    }

    /**
     * @param MandateRedirectData|null $value
     * @return MandateMerchantAction
    */
    public function withRedirectData(?MandateRedirectData $value): MandateMerchantAction
    {
        $this->redirectData = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->actionType)) {
            $object->actionType = $this->actionType;
        }
        if (!is_null($this->redirectData)) {
            $object->redirectData = $this->redirectData->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): MandateMerchantAction
    {
        parent::fromObject($object);
        if (property_exists($object, 'actionType')) {
            $this->actionType = $object->actionType;
        }
        if (property_exists($object, 'redirectData')) {
            if (!is_object($object->redirectData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->redirectData, true) . '\' is not an object');
            }
            $value = new MandateRedirectData();
            $this->redirectData = $value->fromObject($object->redirectData);
        }
        return $this;
    }
}
