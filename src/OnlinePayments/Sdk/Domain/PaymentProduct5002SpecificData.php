<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct5002SpecificData extends DataObject
{
    /**
     * @var ApiParameters|null
     */
    public ?ApiParameters $apiParameters = null;

    /**
     * @return ApiParameters|null
     */
    public function getApiParameters(): ?ApiParameters
    {
        return $this->apiParameters;
    }

    /**
     * @param ApiParameters|null $value
     */
    public function setApiParameters(?ApiParameters $value): void
    {
        $this->apiParameters = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->apiParameters)) {
            $object->apiParameters = $this->apiParameters->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProduct5002SpecificData
    {
        parent::fromObject($object);
        if (property_exists($object, 'apiParameters')) {
            if (!is_object($object->apiParameters)) {
                throw new UnexpectedValueException('value \'' . print_r($object->apiParameters, true) . '\' is not an object');
            }
            $value = new ApiParameters();
            $this->apiParameters = $value->fromObject($object->apiParameters);
        }
        return $this;
    }
}
