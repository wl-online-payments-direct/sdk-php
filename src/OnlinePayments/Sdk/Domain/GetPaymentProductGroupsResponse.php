<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class GetPaymentProductGroupsResponse extends DataObject
{
    /**
     * @var PaymentProductGroup[]|null
     */
    public ?array $paymentProductGroups = null;

    /**
     * @return PaymentProductGroup[]|null
     */
    public function getPaymentProductGroups(): ?array
    {
        return $this->paymentProductGroups;
    }

    /**
     * @param PaymentProductGroup[]|null $value
     */
    public function setPaymentProductGroups(?array $value): void
    {
        $this->paymentProductGroups = $value;
    }

    /**
     * @param PaymentProductGroup[]|null $value
     * @return $this
     */
    public function withPaymentProductGroups(?array $value): static
    {
        $this->paymentProductGroups = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->paymentProductGroups !== null) {
            $object->paymentProductGroups = [];
            foreach ($this->paymentProductGroups as $element) {
                if ($element !== null) {
                    $object->paymentProductGroups[] = $element->toObject();
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
        if (property_exists($object, 'paymentProductGroups')) {
            if (!is_array($object->paymentProductGroups) && !is_object($object->paymentProductGroups)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProductGroups, true) . '\' is not an array or object');
            }
            $this->paymentProductGroups = [];
            foreach ($object->paymentProductGroups as $element) {
                $value = new PaymentProductGroup();
                $this->paymentProductGroups[] = $value->fromObject($element);
            }
        }
        return $this;
    }
}
