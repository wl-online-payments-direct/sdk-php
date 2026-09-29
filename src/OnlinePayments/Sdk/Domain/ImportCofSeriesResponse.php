<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ImportCofSeriesResponse extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $paymentId = null;

    /**
     * @return string|null
    */
    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    /**
     * @param string|null $value
    */
    public function setPaymentId(?string $value): void
    {
        $this->paymentId = $value;
    }

    /**
     * @param string|null $value
     * @return ImportCofSeriesResponse
    */
    public function withPaymentId(?string $value): ImportCofSeriesResponse
    {
        $this->paymentId = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->paymentId)) {
            $object->paymentId = $this->paymentId;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ImportCofSeriesResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'paymentId')) {
            $this->paymentId = $object->paymentId;
        }
        return $this;
    }
}
