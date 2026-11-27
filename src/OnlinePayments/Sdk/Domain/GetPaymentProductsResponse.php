<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class GetPaymentProductsResponse extends DataObject
{
    /**
     * @var PaymentProduct[]|null
     */
    public ?array $paymentProducts = null;

    /**
     * @return PaymentProduct[]|null
     */
    public function getPaymentProducts(): ?array
    {
        return $this->paymentProducts;
    }

    /**
     * @param PaymentProduct[]|null $value
     */
    public function setPaymentProducts(?array $value): void
    {
        $this->paymentProducts = $value;
    }

    /**
     * @param PaymentProduct[]|null $value
     * @return $this
     */
    public function withPaymentProducts(?array $value): static
    {
        $this->paymentProducts = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->paymentProducts !== null) {
            $object->paymentProducts = [];
            foreach ($this->paymentProducts as $element) {
                if ($element !== null) {
                    $object->paymentProducts[] = $element->toObject();
                }
            }
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'paymentProducts')) {
            if (!is_array($object->paymentProducts) && !is_object($object->paymentProducts)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProducts, true) . '\' is not an array or object');
            }
            $this->paymentProducts = [];
            foreach ($object->paymentProducts as $element) {
                $value = new PaymentProduct();
                $this->paymentProducts[] = $value->fromObject($element);
            }
        }
        return $this;
    }
}
