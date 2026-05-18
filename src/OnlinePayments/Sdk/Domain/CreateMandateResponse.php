<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreateMandateResponse extends DataObject
{
    /**
     * @var MandateResponse|null
     */
    public ?MandateResponse $mandate = null;

    /**
     * @var MandateMerchantAction|null
     */
    public ?MandateMerchantAction $merchantAction = null;

    /**
     * @return MandateResponse|null
     */
    public function getMandate(): ?MandateResponse
    {
        return $this->mandate;
    }

    /**
     * @param MandateResponse|null $value
     */
    public function setMandate(?MandateResponse $value): void
    {
        $this->mandate = $value;
    }

    /**
     * @return MandateMerchantAction|null
     */
    public function getMerchantAction(): ?MandateMerchantAction
    {
        return $this->merchantAction;
    }

    /**
     * @param MandateMerchantAction|null $value
     */
    public function setMerchantAction(?MandateMerchantAction $value): void
    {
        $this->merchantAction = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->mandate)) {
            $object->mandate = $this->mandate->toObject();
        }
        if (!is_null($this->merchantAction)) {
            $object->merchantAction = $this->merchantAction->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CreateMandateResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'mandate')) {
            if (!is_object($object->mandate)) {
                throw new UnexpectedValueException('value \'' . print_r($object->mandate, true) . '\' is not an object');
            }
            $value = new MandateResponse();
            $this->mandate = $value->fromObject($object->mandate);
        }
        if (property_exists($object, 'merchantAction')) {
            if (!is_object($object->merchantAction)) {
                throw new UnexpectedValueException('value \'' . print_r($object->merchantAction, true) . '\' is not an object');
            }
            $value = new MandateMerchantAction();
            $this->merchantAction = $value->fromObject($object->merchantAction);
        }
        return $this;
    }
}
