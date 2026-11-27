<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentResponse extends DataObject
{
    /**
     * @var HostedCheckoutSpecificOutput|null
     */
    public ?HostedCheckoutSpecificOutput $hostedCheckoutSpecificOutput = null;

    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var OperationOutput|null
     */
    public ?OperationOutput $operationOutput = null;

    /**
     * @var PaymentOutput|null
     */
    public ?PaymentOutput $paymentOutput = null;

    /**
     * @var SessionDetails|null
     */
    public ?SessionDetails $sessionDetails = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var PaymentStatusOutput|null
     */
    public ?PaymentStatusOutput $statusOutput = null;

    /**
     * @return HostedCheckoutSpecificOutput|null
     */
    public function getHostedCheckoutSpecificOutput(): ?HostedCheckoutSpecificOutput
    {
        return $this->hostedCheckoutSpecificOutput;
    }

    /**
     * @param HostedCheckoutSpecificOutput|null $value
     */
    public function setHostedCheckoutSpecificOutput(?HostedCheckoutSpecificOutput $value): void
    {
        $this->hostedCheckoutSpecificOutput = $value;
    }

    /**
     * @param HostedCheckoutSpecificOutput|null $value
     * @return $this
     */
    public function withHostedCheckoutSpecificOutput(?HostedCheckoutSpecificOutput $value): static
    {
        $this->hostedCheckoutSpecificOutput = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $value
     */
    public function setId(?string $value): void
    {
        $this->id = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withId(?string $value): static
    {
        $this->id = $value;
        return $this;
    }

    /**
     * @return OperationOutput|null
     */
    public function getOperationOutput(): ?OperationOutput
    {
        return $this->operationOutput;
    }

    /**
     * @param OperationOutput|null $value
     */
    public function setOperationOutput(?OperationOutput $value): void
    {
        $this->operationOutput = $value;
    }

    /**
     * @param OperationOutput|null $value
     * @return $this
     */
    public function withOperationOutput(?OperationOutput $value): static
    {
        $this->operationOutput = $value;
        return $this;
    }

    /**
     * @return PaymentOutput|null
     */
    public function getPaymentOutput(): ?PaymentOutput
    {
        return $this->paymentOutput;
    }

    /**
     * @param PaymentOutput|null $value
     */
    public function setPaymentOutput(?PaymentOutput $value): void
    {
        $this->paymentOutput = $value;
    }

    /**
     * @param PaymentOutput|null $value
     * @return $this
     */
    public function withPaymentOutput(?PaymentOutput $value): static
    {
        $this->paymentOutput = $value;
        return $this;
    }

    /**
     * @return SessionDetails|null
     */
    public function getSessionDetails(): ?SessionDetails
    {
        return $this->sessionDetails;
    }

    /**
     * @param SessionDetails|null $value
     */
    public function setSessionDetails(?SessionDetails $value): void
    {
        $this->sessionDetails = $value;
    }

    /**
     * @param SessionDetails|null $value
     * @return $this
     */
    public function withSessionDetails(?SessionDetails $value): static
    {
        $this->sessionDetails = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $value
     */
    public function setStatus(?string $value): void
    {
        $this->status = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withStatus(?string $value): static
    {
        $this->status = $value;
        return $this;
    }

    /**
     * @return PaymentStatusOutput|null
     */
    public function getStatusOutput(): ?PaymentStatusOutput
    {
        return $this->statusOutput;
    }

    /**
     * @param PaymentStatusOutput|null $value
     */
    public function setStatusOutput(?PaymentStatusOutput $value): void
    {
        $this->statusOutput = $value;
    }

    /**
     * @param PaymentStatusOutput|null $value
     * @return $this
     */
    public function withStatusOutput(?PaymentStatusOutput $value): static
    {
        $this->statusOutput = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->hostedCheckoutSpecificOutput !== null) {
            $object->hostedCheckoutSpecificOutput = $this->hostedCheckoutSpecificOutput->toObject();
        }
        if ($this->id !== null) {
            $object->id = $this->id;
        }
        if ($this->operationOutput !== null) {
            $object->operationOutput = $this->operationOutput->toObject();
        }
        if ($this->paymentOutput !== null) {
            $object->paymentOutput = $this->paymentOutput->toObject();
        }
        if ($this->sessionDetails !== null) {
            $object->sessionDetails = $this->sessionDetails->toObject();
        }
        if ($this->status !== null) {
            $object->status = $this->status;
        }
        if ($this->statusOutput !== null) {
            $object->statusOutput = $this->statusOutput->toObject();
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
        if (property_exists($object, 'hostedCheckoutSpecificOutput')) {
            if (!is_object($object->hostedCheckoutSpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->hostedCheckoutSpecificOutput, true) . '\' is not an object');
            }
            $value = new HostedCheckoutSpecificOutput();
            $this->hostedCheckoutSpecificOutput = $value->fromObject($object->hostedCheckoutSpecificOutput);
        }
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'operationOutput')) {
            if (!is_object($object->operationOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->operationOutput, true) . '\' is not an object');
            }
            $value = new OperationOutput();
            $this->operationOutput = $value->fromObject($object->operationOutput);
        }
        if (property_exists($object, 'paymentOutput')) {
            if (!is_object($object->paymentOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentOutput, true) . '\' is not an object');
            }
            $value = new PaymentOutput();
            $this->paymentOutput = $value->fromObject($object->paymentOutput);
        }
        if (property_exists($object, 'sessionDetails')) {
            if (!is_object($object->sessionDetails)) {
                throw new UnexpectedValueException('value \'' . print_r($object->sessionDetails, true) . '\' is not an object');
            }
            $value = new SessionDetails();
            $this->sessionDetails = $value->fromObject($object->sessionDetails);
        }
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        if (property_exists($object, 'statusOutput')) {
            if (!is_object($object->statusOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->statusOutput, true) . '\' is not an object');
            }
            $value = new PaymentStatusOutput();
            $this->statusOutput = $value->fromObject($object->statusOutput);
        }
        return $this;
    }
}
