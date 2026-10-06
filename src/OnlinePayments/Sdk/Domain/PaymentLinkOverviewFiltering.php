<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentLinkOverviewFiltering extends DataObject
{
    /**
     * @var string[]|null
    */
    public ?array $merchantIds = null;

    /**
     * @var string[]|null
    */
    public ?array $status = null;

    /**
     * @return string[]|null
    */
    public function getMerchantIds(): ?array
    {
        return $this->merchantIds;
    }

    /**
     * @param string[]|null $value
    */
    public function setMerchantIds(?array $value): void
    {
        $this->merchantIds = $value;
    }

    /**
     * @param string[]|null $value
     * @return PaymentLinkOverviewFiltering
    */
    public function withMerchantIds(?array $value): PaymentLinkOverviewFiltering
    {
        $this->merchantIds = $value;
        return $this;
    }

    /**
     * @return string[]|null
    */
    public function getStatus(): ?array
    {
        return $this->status;
    }

    /**
     * @param string[]|null $value
    */
    public function setStatus(?array $value): void
    {
        $this->status = $value;
    }

    /**
     * @param string[]|null $value
     * @return PaymentLinkOverviewFiltering
    */
    public function withStatus(?array $value): PaymentLinkOverviewFiltering
    {
        $this->status = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->merchantIds)) {
            $object->merchantIds = [];
            foreach ($this->merchantIds as $element) {
                if (!is_null($element)) {
                    $object->merchantIds[] = $element;
                }
            }
        }
        if (!is_null($this->status)) {
            $object->status = [];
            foreach ($this->status as $element) {
                if (!is_null($element)) {
                    $object->status[] = $element;
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
    public function fromObject(object $object): PaymentLinkOverviewFiltering
    {
        parent::fromObject($object);
        if (property_exists($object, 'merchantIds')) {
            if (!is_array($object->merchantIds) && !is_object($object->merchantIds)) {
                throw new UnexpectedValueException('value \'' . print_r($object->merchantIds, true) . '\' is not an array or object');
            }
            $this->merchantIds = [];
            foreach ($object->merchantIds as $element) {
                    $this->merchantIds[] = $element;
            }
        }
        if (property_exists($object, 'status')) {
            if (!is_array($object->status) && !is_object($object->status)) {
                throw new UnexpectedValueException('value \'' . print_r($object->status, true) . '\' is not an array or object');
            }
            $this->status = [];
            foreach ($object->status as $element) {
                    $this->status[] = $element;
            }
        }
        return $this;
    }
}
