<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class FraudFields extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $blackListData = null;

    /**
     * @var string|null
     *
     * @deprecated Use order.customer.device.ipAddress instead.  The IP Address of the customer that is making the payment
     */
    public ?string $customerIpAddress = null;

    /**
     * @var string[]|null
     */
    public ?array $productCategories = null;

    /**
     * @return string|null
     */
    public function getBlackListData(): ?string
    {
        return $this->blackListData;
    }

    /**
     * @param string|null $value
     */
    public function setBlackListData(?string $value): void
    {
        $this->blackListData = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withBlackListData(?string $value): static
    {
        $this->blackListData = $value;
        return $this;
    }

    /**
     * @return string|null
     *
     * @deprecated Use order.customer.device.ipAddress instead.  The IP Address of the customer that is making the payment
     */
    public function getCustomerIpAddress(): ?string
    {
        return $this->customerIpAddress;
    }

    /**
     * @param string|null $value
     *
     * @deprecated Use order.customer.device.ipAddress instead.  The IP Address of the customer that is making the payment
     */
    public function setCustomerIpAddress(?string $value): void
    {
        $this->customerIpAddress = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     *
     * @deprecated Use order.customer.device.ipAddress instead.  The IP Address of the customer that is making the payment
     */
    public function withCustomerIpAddress(?string $value): static
    {
        $this->customerIpAddress = $value;
        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getProductCategories(): ?array
    {
        return $this->productCategories;
    }

    /**
     * @param string[]|null $value
     */
    public function setProductCategories(?array $value): void
    {
        $this->productCategories = $value;
    }

    /**
     * @param string[]|null $value
     * @return $this
     */
    public function withProductCategories(?array $value): static
    {
        $this->productCategories = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->blackListData !== null) {
            $object->blackListData = $this->blackListData;
        }
        if ($this->customerIpAddress !== null) {
            $object->customerIpAddress = $this->customerIpAddress;
        }
        if ($this->productCategories !== null) {
            $object->productCategories = [];
            foreach ($this->productCategories as $element) {
                if ($element !== null) {
                    $object->productCategories[] = $element;
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
        if (property_exists($object, 'blackListData')) {
            $this->blackListData = $object->blackListData;
        }
        if (property_exists($object, 'customerIpAddress')) {
            $this->customerIpAddress = $object->customerIpAddress;
        }
        if (property_exists($object, 'productCategories')) {
            if (!is_array($object->productCategories) && !is_object($object->productCategories)) {
                throw new UnexpectedValueException('value \'' . print_r($object->productCategories, true) . '\' is not an array or object');
            }
            $this->productCategories = [];
            foreach ($object->productCategories as $element) {
                    $this->productCategories[] = $element;
            }
        }
        return $this;
    }
}
