<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentDetailsResponse extends DataObject
{
    /**
     * @var OperationOutput[]|null
     */
    public ?array $Operations = null;

    /**
     * @var HostedCheckoutSpecificOutput|null
     */
    public ?HostedCheckoutSpecificOutput $hostedCheckoutSpecificOutput = null;

    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var PaymentOutput|null
     */
    public ?PaymentOutput $paymentOutput = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var PaymentStatusOutput|null
     */
    public ?PaymentStatusOutput $statusOutput = null;

    /**
     * @return OperationOutput[]|null
     */
    public function getOperations(): ?array
    {
        return $this->Operations;
    }

    /**
     * @param OperationOutput[]|null $value
     */
    public function setOperations(?array $value): void
    {
        $this->Operations = $value;
    }

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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->Operations)) {
            $object->Operations = [];
            foreach ($this->Operations as $element) {
                if (!is_null($element)) {
                    $object->Operations[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->hostedCheckoutSpecificOutput)) {
            $object->hostedCheckoutSpecificOutput = $this->hostedCheckoutSpecificOutput->toObject();
        }
        if (!is_null($this->id)) {
            $object->id = $this->id;
        }
        if (!is_null($this->paymentOutput)) {
            $object->paymentOutput = $this->paymentOutput->toObject();
        }
        if (!is_null($this->status)) {
            $object->status = $this->status;
        }
        if (!is_null($this->statusOutput)) {
            $object->statusOutput = $this->statusOutput->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentDetailsResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'Operations')) {
            if (!is_array($object->Operations) && !is_object($object->Operations)) {
                throw new UnexpectedValueException('value \'' . print_r($object->Operations, true) . '\' is not an array or object');
            }
            $this->Operations = [];
            foreach ($object->Operations as $element) {
                $value = new OperationOutput();
                $this->Operations[] = $value->fromObject($element);
            }
        }
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
        if (property_exists($object, 'paymentOutput')) {
            if (!is_object($object->paymentOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentOutput, true) . '\' is not an object');
            }
            $value = new PaymentOutput();
            $this->paymentOutput = $value->fromObject($object->paymentOutput);
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
