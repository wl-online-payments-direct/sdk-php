<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct5412SpecificInput extends DataObject
{
    /**
     * @var bool|null
     */
    public ?bool $adjustableAmount = null;

    /**
     * @var string|null
     */
    public ?string $beneficiaryId = null;

    /**
     * @return bool|null
     */
    public function getAdjustableAmount(): ?bool
    {
        return $this->adjustableAmount;
    }

    /**
     * @param bool|null $value
     */
    public function setAdjustableAmount(?bool $value): void
    {
        $this->adjustableAmount = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function withAdjustableAmount(?bool $value): static
    {
        $this->adjustableAmount = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBeneficiaryId(): ?string
    {
        return $this->beneficiaryId;
    }

    /**
     * @param string|null $value
     */
    public function setBeneficiaryId(?string $value): void
    {
        $this->beneficiaryId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withBeneficiaryId(?string $value): static
    {
        $this->beneficiaryId = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->adjustableAmount !== null) {
            $object->adjustableAmount = $this->adjustableAmount;
        }
        if ($this->beneficiaryId !== null) {
            $object->beneficiaryId = $this->beneficiaryId;
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
        if (property_exists($object, 'adjustableAmount')) {
            $this->adjustableAmount = $object->adjustableAmount;
        }
        if (property_exists($object, 'beneficiaryId')) {
            $this->beneficiaryId = $object->beneficiaryId;
        }
        return $this;
    }
}
