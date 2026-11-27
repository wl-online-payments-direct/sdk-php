<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RefundMobileMethodSpecificOutput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $network = null;

    /**
     * @var int|null
     */
    public ?int $totalAmountPaid = null;

    /**
     * @var int|null
     */
    public ?int $totalAmountRefunded = null;

    /**
     * @return string|null
     */
    public function getNetwork(): ?string
    {
        return $this->network;
    }

    /**
     * @param string|null $value
     */
    public function setNetwork(?string $value): void
    {
        $this->network = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withNetwork(?string $value): static
    {
        $this->network = $value;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotalAmountPaid(): ?int
    {
        return $this->totalAmountPaid;
    }

    /**
     * @param int|null $value
     */
    public function setTotalAmountPaid(?int $value): void
    {
        $this->totalAmountPaid = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withTotalAmountPaid(?int $value): static
    {
        $this->totalAmountPaid = $value;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotalAmountRefunded(): ?int
    {
        return $this->totalAmountRefunded;
    }

    /**
     * @param int|null $value
     */
    public function setTotalAmountRefunded(?int $value): void
    {
        $this->totalAmountRefunded = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withTotalAmountRefunded(?int $value): static
    {
        $this->totalAmountRefunded = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->network !== null) {
            $object->network = $this->network;
        }
        if ($this->totalAmountPaid !== null) {
            $object->totalAmountPaid = $this->totalAmountPaid;
        }
        if ($this->totalAmountRefunded !== null) {
            $object->totalAmountRefunded = $this->totalAmountRefunded;
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
        if (property_exists($object, 'network')) {
            $this->network = $object->network;
        }
        if (property_exists($object, 'totalAmountPaid')) {
            $this->totalAmountPaid = $object->totalAmountPaid;
        }
        if (property_exists($object, 'totalAmountRefunded')) {
            $this->totalAmountRefunded = $object->totalAmountRefunded;
        }
        return $this;
    }
}
