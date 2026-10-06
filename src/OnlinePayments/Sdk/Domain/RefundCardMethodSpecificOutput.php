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
     * @return RefundCardMethodSpecificOutput
    */
    public function withAcceptance(?Acceptance $value): RefundCardMethodSpecificOutput
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
     * @return RefundCardMethodSpecificOutput
    */
    public function withAuthorisationCode(?string $value): RefundCardMethodSpecificOutput
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
     * @return RefundCardMethodSpecificOutput
    */
    public function withCurrencyConversion(?CurrencyConversion $value): RefundCardMethodSpecificOutput
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
     * @return RefundCardMethodSpecificOutput
    */
    public function withReattemptInstructions(?ReattemptInstructions $value): RefundCardMethodSpecificOutput
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
     * @return RefundCardMethodSpecificOutput
    */
    public function withTotalAmountPaid(?int $value): RefundCardMethodSpecificOutput
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
     * @return RefundCardMethodSpecificOutput
    */
    public function withTotalAmountRefunded(?int $value): RefundCardMethodSpecificOutput
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
        if (!is_null($this->acceptance)) {
            $object->acceptance = $this->acceptance->toObject();
        }
        if (!is_null($this->authorisationCode)) {
            $object->authorisationCode = $this->authorisationCode;
        }
        if (!is_null($this->currencyConversion)) {
            $object->currencyConversion = $this->currencyConversion->toObject();
        }
        if (!is_null($this->reattemptInstructions)) {
            $object->reattemptInstructions = $this->reattemptInstructions->toObject();
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
    public function fromObject(object $object): RefundCardMethodSpecificOutput
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
