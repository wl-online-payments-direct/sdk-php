<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RefundsResponse extends DataObject
{
    /**
     * @var RefundResponse[]
     */
    public $refunds = null;

    /**
     * @return RefundResponse[]
     */
    public function getRefunds()
    {
        return $this->refunds;
    }

    /**
     * @param RefundResponse[]
     */
    public function setRefunds($value)
    {
        $this->refunds = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->refunds)) {
            $object->refunds = [];
            foreach ($this->refunds as $element) {
                if (!is_null($element)) {
                    $object->refunds[] = $element->toObject();
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
        if (property_exists($object, 'refunds')) {
            if (!is_array($object->refunds) && !is_object($object->refunds)) {
                throw new UnexpectedValueException('value \'' . print_r($object->refunds, true) . '\' is not an array or object');
            }
            $this->refunds = [];
            foreach ($object->refunds as $element) {
                $value = new RefundResponse();
                $this->refunds[] = $value->fromObject($element);
            }
        }
        return $this;
    }
}
