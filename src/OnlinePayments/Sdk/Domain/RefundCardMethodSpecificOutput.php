<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RefundCardMethodSpecificOutput extends DataObject
{
    /**
     * @var Acceptance|null
     */
    public ?Acceptance $acceptance = null;

    /**
     * @var string|null
     */
    public ?string $authorisationCode = null;

    /**
     * @var CurrencyConversion|null
     */
    public ?CurrencyConversion $currencyConversion = null;

    /**
     * @var ReattemptInstructions|null
     */
    public ?ReattemptInstructions $reattemptInstructions = null;

    /**
     * @var int|null
     */
    public ?int $totalAmountPaid = null;

    /**
     * @var int|null
     */
    public ?int $totalAmountRefunded = null;

    /**
     * @return Acceptance|null
     */
    public function getAcceptance(): ?Acceptance
    {
        return $this->acceptance;
    }

    /**
     * @param Acceptance|null $value
     */
    public function setAcceptance(?Acceptance $value): void
    {
        $this->acceptance = $value;
    }

    /**
     * @param Acceptance|null $value
     * @return $this
     */
    public function withAcceptance(?Acceptance $value): static
    {
        $this->acceptance = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthorisationCode(): ?string
    {
        return $this->authorisationCode;
    }

    /**
     * @param string|null $value
     */
    public function setAuthorisationCode(?string $value): void
    {
        $this->authorisationCode = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withAuthorisationCode(?string $value): static
    {
        $this->authorisationCode = $value;
        return $this;
    }

    /**
     * @return CurrencyConversion|null
     */
    public function getCurrencyConversion(): ?CurrencyConversion
    {
        return $this->currencyConversion;
    }

    /**
     * @param CurrencyConversion|null $value
     */
    public function setCurrencyConversion(?CurrencyConversion $value): void
    {
        $this->currencyConversion = $value;
    }

    /**
     * @param CurrencyConversion|null $value
     * @return $this
     */
    public function withCurrencyConversion(?CurrencyConversion $value): static
    {
        $this->currencyConversion = $value;
        return $this;
    }

    /**
     * @return ReattemptInstructions|null
     */
    public function getReattemptInstructions(): ?ReattemptInstructions
    {
        return $this->reattemptInstructions;
    }

    /**
     * @param ReattemptInstructions|null $value
     */
    public function setReattemptInstructions(?ReattemptInstructions $value): void
    {
        $this->reattemptInstructions = $value;
    }

    /**
     * @param ReattemptInstructions|null $value
     * @return $this
     */
    public function withReattemptInstructions(?ReattemptInstructions $value): static
    {
        $this->reattemptInstructions = $value;
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
        if ($this->acceptance !== null) {
            $object->acceptance = $this->acceptance->toObject();
        }
        if ($this->authorisationCode !== null) {
            $object->authorisationCode = $this->authorisationCode;
        }
        if ($this->currencyConversion !== null) {
            $object->currencyConversion = $this->currencyConversion->toObject();
        }
        if ($this->reattemptInstructions !== null) {
            $object->reattemptInstructions = $this->reattemptInstructions->toObject();
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
        if (property_exists($object, 'acceptance')) {
            if (!is_object($object->acceptance)) {
                throw new UnexpectedValueException('value \'' . print_r($object->acceptance, true) . '\' is not an object');
            }
            $value = new Acceptance();
            $this->acceptance = $value->fromObject($object->acceptance);
        }
        if (property_exists($object, 'authorisationCode')) {
            $this->authorisationCode = $object->authorisationCode;
        }
        if (property_exists($object, 'currencyConversion')) {
            if (!is_object($object->currencyConversion)) {
                throw new UnexpectedValueException('value \'' . print_r($object->currencyConversion, true) . '\' is not an object');
            }
            $value = new CurrencyConversion();
            $this->currencyConversion = $value->fromObject($object->currencyConversion);
        }
        if (property_exists($object, 'reattemptInstructions')) {
            if (!is_object($object->reattemptInstructions)) {
                throw new UnexpectedValueException('value \'' . print_r($object->reattemptInstructions, true) . '\' is not an object');
            }
            $value = new ReattemptInstructions();
            $this->reattemptInstructions = $value->fromObject($object->reattemptInstructions);
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
