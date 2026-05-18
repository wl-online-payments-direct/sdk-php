<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class GetMandateResponse extends DataObject
{
    /**
     * @var MandateResponse|null
     */
    public ?MandateResponse $mandate = null;

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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->mandate)) {
            $object->mandate = $this->mandate->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): GetMandateResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'mandate')) {
            if (!is_object($object->mandate)) {
                throw new UnexpectedValueException('value \'' . print_r($object->mandate, true) . '\' is not an object');
            }
            $value = new MandateResponse();
            $this->mandate = $value->fromObject($object->mandate);
        }
        return $this;
    }
}
