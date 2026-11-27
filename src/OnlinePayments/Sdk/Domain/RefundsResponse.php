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
     * @param RefundResponse[]|null $value
     * @return $this
     */
    public function withRefunds(?array $value): static
    {
        $this->refunds = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->refunds !== null) {
            $object->refunds = [];
            foreach ($this->refunds as $element) {
                if ($element !== null) {
                    $object->refunds[] = $element->toObject();
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
