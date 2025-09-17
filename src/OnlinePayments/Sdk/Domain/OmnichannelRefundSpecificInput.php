<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class OmnichannelRefundSpecificInput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $operatorId = null;

    /**
     * @return string|null
     */
    public function getOperatorId(): ?string
    {
        return $this->operatorId;
    }

    /**
     * @param string|null $value
     */
    public function setOperatorId(?string $value): void
    {
        $this->operatorId = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->operatorId)) {
            $object->operatorId = $this->operatorId;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): OmnichannelRefundSpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'operatorId')) {
            $this->operatorId = $object->operatorId;
        }
        return $this;
    }
}
