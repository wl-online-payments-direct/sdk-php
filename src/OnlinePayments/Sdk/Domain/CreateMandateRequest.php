<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreateMandateRequest extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $alias = null;

    /**
     * @var MandateCustomer|null
     */
    public ?MandateCustomer $customer = null;

    /**
     * @var string|null
     */
    public ?string $customerReference = null;

    /**
     * @var string|null
     */
    public ?string $language = null;

    /**
     * @var string|null
     */
    public ?string $recurrenceType = null;

    /**
     * @var string|null
     */
    public ?string $returnUrl = null;

    /**
     * @var string|null
     */
    public ?string $signatureType = null;

    /**
     * @var string|null
     */
    public ?string $uniqueMandateReference = null;

    /**
     * @return string|null
     */
    public function getAlias(): ?string
    {
        return $this->alias;
    }

    /**
     * @param string|null $value
     */
    public function setAlias(?string $value): void
    {
        $this->alias = $value;
    }

    /**
     * @return MandateCustomer|null
     */
    public function getCustomer(): ?MandateCustomer
    {
        return $this->customer;
    }

    /**
     * @param MandateCustomer|null $value
     */
    public function setCustomer(?MandateCustomer $value): void
    {
        $this->customer = $value;
    }

    /**
     * @return string|null
     */
    public function getCustomerReference(): ?string
    {
        return $this->customerReference;
    }

    /**
     * @param string|null $value
     */
    public function setCustomerReference(?string $value): void
    {
        $this->customerReference = $value;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param string|null $value
     */
    public function setLanguage(?string $value): void
    {
        $this->language = $value;
    }

    /**
     * @return string|null
     */
    public function getRecurrenceType(): ?string
    {
        return $this->recurrenceType;
    }

    /**
     * @param string|null $value
     */
    public function setRecurrenceType(?string $value): void
    {
        $this->recurrenceType = $value;
    }

    /**
     * @return string|null
     */
    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    /**
     * @param string|null $value
     */
    public function setReturnUrl(?string $value): void
    {
        $this->returnUrl = $value;
    }

    /**
     * @return string|null
     */
    public function getSignatureType(): ?string
    {
        return $this->signatureType;
    }

    /**
     * @param string|null $value
     */
    public function setSignatureType(?string $value): void
    {
        $this->signatureType = $value;
    }

    /**
     * @return string|null
     */
    public function getUniqueMandateReference(): ?string
    {
        return $this->uniqueMandateReference;
    }

    /**
     * @param string|null $value
     */
    public function setUniqueMandateReference(?string $value): void
    {
        $this->uniqueMandateReference = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->alias)) {
            $object->alias = $this->alias;
        }
        if (!is_null($this->customer)) {
            $object->customer = $this->customer->toObject();
        }
        if (!is_null($this->customerReference)) {
            $object->customerReference = $this->customerReference;
        }
        if (!is_null($this->language)) {
            $object->language = $this->language;
        }
        if (!is_null($this->recurrenceType)) {
            $object->recurrenceType = $this->recurrenceType;
        }
        if (!is_null($this->returnUrl)) {
            $object->returnUrl = $this->returnUrl;
        }
        if (!is_null($this->signatureType)) {
            $object->signatureType = $this->signatureType;
        }
        if (!is_null($this->uniqueMandateReference)) {
            $object->uniqueMandateReference = $this->uniqueMandateReference;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CreateMandateRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'alias')) {
            $this->alias = $object->alias;
        }
        if (property_exists($object, 'customer')) {
            if (!is_object($object->customer)) {
                throw new UnexpectedValueException('value \'' . print_r($object->customer, true) . '\' is not an object');
            }
            $value = new MandateCustomer();
            $this->customer = $value->fromObject($object->customer);
        }
        if (property_exists($object, 'customerReference')) {
            $this->customerReference = $object->customerReference;
        }
        if (property_exists($object, 'language')) {
            $this->language = $object->language;
        }
        if (property_exists($object, 'recurrenceType')) {
            $this->recurrenceType = $object->recurrenceType;
        }
        if (property_exists($object, 'returnUrl')) {
            $this->returnUrl = $object->returnUrl;
        }
        if (property_exists($object, 'signatureType')) {
            $this->signatureType = $object->signatureType;
        }
        if (property_exists($object, 'uniqueMandateReference')) {
            $this->uniqueMandateReference = $object->uniqueMandateReference;
        }
        return $this;
    }
}
