<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PayoutCardPaymentMethodSpecificOutput extends DataObject
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
     * @var CardEssentials|null
    */
    public ?CardEssentials $card = null;

    /**
     * @var int|null
    */
    public ?int $paymentProductId = null;

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
     * @return PayoutCardPaymentMethodSpecificOutput
    */
    public function withAcceptance(?Acceptance $value): PayoutCardPaymentMethodSpecificOutput
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
     * @return PayoutCardPaymentMethodSpecificOutput
    */
    public function withAuthorisationCode(?string $value): PayoutCardPaymentMethodSpecificOutput
    {
        $this->authorisationCode = $value;
        return $this;
    }

    /**
     * @return CardEssentials|null
    */
    public function getCard(): ?CardEssentials
    {
        return $this->card;
    }

    /**
     * @param CardEssentials|null $value
    */
    public function setCard(?CardEssentials $value): void
    {
        $this->card = $value;
    }

    /**
     * @param CardEssentials|null $value
     * @return PayoutCardPaymentMethodSpecificOutput
    */
    public function withCard(?CardEssentials $value): PayoutCardPaymentMethodSpecificOutput
    {
        $this->card = $value;
        return $this;
    }

    /**
     * @return int|null
    */
    public function getPaymentProductId(): ?int
    {
        return $this->paymentProductId;
    }

    /**
     * @param int|null $value
    */
    public function setPaymentProductId(?int $value): void
    {
        $this->paymentProductId = $value;
    }

    /**
     * @param int|null $value
     * @return PayoutCardPaymentMethodSpecificOutput
    */
    public function withPaymentProductId(?int $value): PayoutCardPaymentMethodSpecificOutput
    {
        $this->paymentProductId = $value;
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
        if (!is_null($this->card)) {
            $object->card = $this->card->toObject();
        }
        if (!is_null($this->paymentProductId)) {
            $object->paymentProductId = $this->paymentProductId;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PayoutCardPaymentMethodSpecificOutput
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
        if (property_exists($object, 'card')) {
            if (!is_object($object->card)) {
                throw new UnexpectedValueException('value \'' . print_r($object->card, true) . '\' is not an object');
            }
            $value = new CardEssentials();
            $this->card = $value->fromObject($object->card);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        return $this;
    }
}
