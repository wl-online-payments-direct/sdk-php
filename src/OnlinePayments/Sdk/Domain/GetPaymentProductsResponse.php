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
     * @var PaymentProduct[]
     */
    public $paymentProducts = null;

    /**
     * @return PaymentProduct[]
     */
    public function getPaymentProducts()
    {
        return $this->paymentProducts;
    }

    /**
     * @param PaymentProduct[]
     */
    public function setPaymentProducts($value)
    {
        $this->paymentProducts = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->paymentProducts)) {
            $object->paymentProducts = [];
            foreach ($this->paymentProducts as $element) {
                if (!is_null($element)) {
                    $object->paymentProducts[] = $element->toObject();
                }
            }
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
