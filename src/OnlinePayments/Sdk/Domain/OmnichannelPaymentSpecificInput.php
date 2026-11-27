<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class OmnichannelPaymentSpecificInput extends DataObject
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
     * @param string|null $value
     * @return $this
     */
    public function withOperatorId(?string $value): static
    {
        $this->operatorId = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->operatorId !== null) {
            $object->operatorId = $this->operatorId;
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
        if (property_exists($object, 'operatorId')) {
            $this->operatorId = $object->operatorId;
        }
        return $this;
    }
}
