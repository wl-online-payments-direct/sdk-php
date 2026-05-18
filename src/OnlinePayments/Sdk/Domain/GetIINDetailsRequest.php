<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class GetIINDetailsRequest extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $bin = null;

    /**
     * @var PaymentContext|null
     */
    public ?PaymentContext $paymentContext = null;

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
     * @return PaymentContext|null
     */
    public function getPaymentContext(): ?PaymentContext
    {
        return $this->paymentContext;
    }

    /**
     * @param PaymentContext|null $value
     */
    public function setPaymentContext(?PaymentContext $value): void
    {
        $this->paymentContext = $value;
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
        if (!is_null($this->paymentContext)) {
            $object->paymentContext = $this->paymentContext->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): GetIINDetailsRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'bin')) {
            $this->bin = $object->bin;
        }
        if (property_exists($object, 'paymentContext')) {
            if (!is_object($object->paymentContext)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentContext, true) . '\' is not an object');
            }
            $value = new PaymentContext();
            $this->paymentContext = $value->fromObject($object->paymentContext);
        }
        return $this;
    }
}
