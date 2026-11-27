<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentAccountOnFile extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $createDate = null;

    /**
     * @var int|null
     */
    public ?int $numberOfCardOnFileCreationAttemptsLast24Hours = null;

    /**
     * @return string|null
     */
    public function getCreateDate(): ?string
    {
        return $this->createDate;
    }

    /**
     * @param string|null $value
     */
    public function setCreateDate(?string $value): void
    {
        $this->createDate = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withCreateDate(?string $value): static
    {
        $this->createDate = $value;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfCardOnFileCreationAttemptsLast24Hours(): ?int
    {
        return $this->numberOfCardOnFileCreationAttemptsLast24Hours;
    }

    /**
     * @param int|null $value
     */
    public function setNumberOfCardOnFileCreationAttemptsLast24Hours(?int $value): void
    {
        $this->numberOfCardOnFileCreationAttemptsLast24Hours = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withNumberOfCardOnFileCreationAttemptsLast24Hours(?int $value): static
    {
        $this->numberOfCardOnFileCreationAttemptsLast24Hours = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->createDate !== null) {
            $object->createDate = $this->createDate;
        }
        if ($this->numberOfCardOnFileCreationAttemptsLast24Hours !== null) {
            $object->numberOfCardOnFileCreationAttemptsLast24Hours = $this->numberOfCardOnFileCreationAttemptsLast24Hours;
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
        if (property_exists($object, 'createDate')) {
            $this->createDate = $object->createDate;
        }
        if (property_exists($object, 'numberOfCardOnFileCreationAttemptsLast24Hours')) {
            $this->numberOfCardOnFileCreationAttemptsLast24Hours = $object->numberOfCardOnFileCreationAttemptsLast24Hours;
        }
        return $this;
    }
}
