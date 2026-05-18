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
     * @var RefundResponse[]|null
     */
    public ?array $refunds = null;

    /**
     * @return RefundResponse[]|null
     */
    public function getRefunds(): ?array
    {
        return $this->refunds;
    }

    /**
     * @param RefundResponse[]|null $value
     */
    public function setRefunds(?array $value): void
    {
        $this->refunds = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): RefundsResponse
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
