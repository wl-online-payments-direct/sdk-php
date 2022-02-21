<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class GetPaymentProductGroupsResponse extends DataObject
{
    // Properties
    /**
     * @var PaymentProductGroup[]
     */
    private $paymentProductGroups;

    // Methods
    /**
     * @return PaymentProductGroup[]
     */
    public function getPaymentProductGroups()
    {
        return $this->paymentProductGroups;
    }
    /**
     * @var PaymentProductGroup[]
     */
    public function setPaymentProductGroups($value)
    {
        $this->paymentProductGroups = $value;
    }

    /**
     * @return object
     */
    public function toObject()
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
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
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
