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
     * @return RefundMobileMethodSpecificOutput
    */
    public function withNetwork(?string $value): RefundMobileMethodSpecificOutput
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
     * @return RefundMobileMethodSpecificOutput
    */
    public function withTotalAmountPaid(?int $value): RefundMobileMethodSpecificOutput
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
     * @return RefundMobileMethodSpecificOutput
    */
    public function withTotalAmountRefunded(?int $value): RefundMobileMethodSpecificOutput
    {
        $this->totalAmountRefunded = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->network)) {
            $object->network = $this->network;
        }
        if (!is_null($this->totalAmountPaid)) {
            $object->totalAmountPaid = $this->totalAmountPaid;
        }
        if (!is_null($this->totalAmountRefunded)) {
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
    public function fromObject(object $object): RefundMobileMethodSpecificOutput
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
