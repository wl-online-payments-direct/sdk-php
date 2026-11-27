<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SubmitBatchRequestBody extends DataObject
{
    /**
     * @var CancelPaymentBatchRequest[]|null
     */
    public ?array $cancelPayments = null;

    /**
     * @var CapturePaymentBatchRequest[]|null
     */
    public ?array $capturePayments = null;

    /**
     * @var CreatePaymentLinkRequest[]|null
     */
    public ?array $createPaymentLinks = null;

    /**
     * @var CreatePaymentRequest[]|null
     */
    public ?array $createPayments = null;

    /**
     * @var CreatePayoutRequest[]|null
     */
    public ?array $createPayouts = null;

    /**
     * @var BatchMetadata|null
     */
    public ?BatchMetadata $header = null;

    /**
     * @var RefundPaymentBatchRequest[]|null
     */
    public ?array $refundPayments = null;

    /**
     * @var SubsequentPaymentBatchRequest[]|null
     */
    public ?array $subsequentPayments = null;

    /**
     * @return CancelPaymentBatchRequest[]|null
     */
    public function getCancelPayments(): ?array
    {
        return $this->cancelPayments;
    }

    /**
     * @param CancelPaymentBatchRequest[]|null $value
     */
    public function setCancelPayments(?array $value): void
    {
        $this->cancelPayments = $value;
    }

    /**
     * @param CancelPaymentBatchRequest[]|null $value
     * @return $this
     */
    public function withCancelPayments(?array $value): static
    {
        $this->cancelPayments = $value;
        return $this;
    }

    /**
     * @return CapturePaymentBatchRequest[]|null
     */
    public function getCapturePayments(): ?array
    {
        return $this->capturePayments;
    }

    /**
     * @param CapturePaymentBatchRequest[]|null $value
     */
    public function setCapturePayments(?array $value): void
    {
        $this->capturePayments = $value;
    }

    /**
     * @param CapturePaymentBatchRequest[]|null $value
     * @return $this
     */
    public function withCapturePayments(?array $value): static
    {
        $this->capturePayments = $value;
        return $this;
    }

    /**
     * @return CreatePaymentLinkRequest[]|null
     */
    public function getCreatePaymentLinks(): ?array
    {
        return $this->createPaymentLinks;
    }

    /**
     * @param CreatePaymentLinkRequest[]|null $value
     */
    public function setCreatePaymentLinks(?array $value): void
    {
        $this->createPaymentLinks = $value;
    }

    /**
     * @param CreatePaymentLinkRequest[]|null $value
     * @return $this
     */
    public function withCreatePaymentLinks(?array $value): static
    {
        $this->createPaymentLinks = $value;
        return $this;
    }

    /**
     * @return CreatePaymentRequest[]|null
     */
    public function getCreatePayments(): ?array
    {
        return $this->createPayments;
    }

    /**
     * @param CreatePaymentRequest[]|null $value
     */
    public function setCreatePayments(?array $value): void
    {
        $this->createPayments = $value;
    }

    /**
     * @param CreatePaymentRequest[]|null $value
     * @return $this
     */
    public function withCreatePayments(?array $value): static
    {
        $this->createPayments = $value;
        return $this;
    }

    /**
     * @return CreatePayoutRequest[]|null
     */
    public function getCreatePayouts(): ?array
    {
        return $this->createPayouts;
    }

    /**
     * @param CreatePayoutRequest[]|null $value
     */
    public function setCreatePayouts(?array $value): void
    {
        $this->createPayouts = $value;
    }

    /**
     * @param CreatePayoutRequest[]|null $value
     * @return $this
     */
    public function withCreatePayouts(?array $value): static
    {
        $this->createPayouts = $value;
        return $this;
    }

    /**
     * @return BatchMetadata|null
     */
    public function getHeader(): ?BatchMetadata
    {
        return $this->header;
    }

    /**
     * @param BatchMetadata|null $value
     */
    public function setHeader(?BatchMetadata $value): void
    {
        $this->header = $value;
    }

    /**
     * @param BatchMetadata|null $value
     * @return $this
     */
    public function withHeader(?BatchMetadata $value): static
    {
        $this->header = $value;
        return $this;
    }

    /**
     * @return RefundPaymentBatchRequest[]|null
     */
    public function getRefundPayments(): ?array
    {
        return $this->refundPayments;
    }

    /**
     * @param RefundPaymentBatchRequest[]|null $value
     */
    public function setRefundPayments(?array $value): void
    {
        $this->refundPayments = $value;
    }

    /**
     * @param RefundPaymentBatchRequest[]|null $value
     * @return $this
     */
    public function withRefundPayments(?array $value): static
    {
        $this->refundPayments = $value;
        return $this;
    }

    /**
     * @return SubsequentPaymentBatchRequest[]|null
     */
    public function getSubsequentPayments(): ?array
    {
        return $this->subsequentPayments;
    }

    /**
     * @param SubsequentPaymentBatchRequest[]|null $value
     */
    public function setSubsequentPayments(?array $value): void
    {
        $this->subsequentPayments = $value;
    }

    /**
     * @param SubsequentPaymentBatchRequest[]|null $value
     * @return $this
     */
    public function withSubsequentPayments(?array $value): static
    {
        $this->subsequentPayments = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->cancelPayments !== null) {
            $object->cancelPayments = [];
            foreach ($this->cancelPayments as $element) {
                if ($element !== null) {
                    $object->cancelPayments[] = $element->toObject();
                }
            }
        }
        if ($this->capturePayments !== null) {
            $object->capturePayments = [];
            foreach ($this->capturePayments as $element) {
                if ($element !== null) {
                    $object->capturePayments[] = $element->toObject();
                }
            }
        }
        if ($this->createPaymentLinks !== null) {
            $object->createPaymentLinks = [];
            foreach ($this->createPaymentLinks as $element) {
                if ($element !== null) {
                    $object->createPaymentLinks[] = $element->toObject();
                }
            }
        }
        if ($this->createPayments !== null) {
            $object->createPayments = [];
            foreach ($this->createPayments as $element) {
                if ($element !== null) {
                    $object->createPayments[] = $element->toObject();
                }
            }
        }
        if ($this->createPayouts !== null) {
            $object->createPayouts = [];
            foreach ($this->createPayouts as $element) {
                if ($element !== null) {
                    $object->createPayouts[] = $element->toObject();
                }
            }
        }
        if ($this->header !== null) {
            $object->header = $this->header->toObject();
        }
        if ($this->refundPayments !== null) {
            $object->refundPayments = [];
            foreach ($this->refundPayments as $element) {
                if ($element !== null) {
                    $object->refundPayments[] = $element->toObject();
                }
            }
        }
        if ($this->subsequentPayments !== null) {
            $object->subsequentPayments = [];
            foreach ($this->subsequentPayments as $element) {
                if ($element !== null) {
                    $object->subsequentPayments[] = $element->toObject();
                }
            }
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
        if (property_exists($object, 'cancelPayments')) {
            if (!is_array($object->cancelPayments) && !is_object($object->cancelPayments)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cancelPayments, true) . '\' is not an array or object');
            }
            $this->cancelPayments = [];
            foreach ($object->cancelPayments as $element) {
                $value = new CancelPaymentBatchRequest();
                $this->cancelPayments[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'capturePayments')) {
            if (!is_array($object->capturePayments) && !is_object($object->capturePayments)) {
                throw new UnexpectedValueException('value \'' . print_r($object->capturePayments, true) . '\' is not an array or object');
            }
            $this->capturePayments = [];
            foreach ($object->capturePayments as $element) {
                $value = new CapturePaymentBatchRequest();
                $this->capturePayments[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'createPaymentLinks')) {
            if (!is_array($object->createPaymentLinks) && !is_object($object->createPaymentLinks)) {
                throw new UnexpectedValueException('value \'' . print_r($object->createPaymentLinks, true) . '\' is not an array or object');
            }
            $this->createPaymentLinks = [];
            foreach ($object->createPaymentLinks as $element) {
                $value = new CreatePaymentLinkRequest();
                $this->createPaymentLinks[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'createPayments')) {
            if (!is_array($object->createPayments) && !is_object($object->createPayments)) {
                throw new UnexpectedValueException('value \'' . print_r($object->createPayments, true) . '\' is not an array or object');
            }
            $this->createPayments = [];
            foreach ($object->createPayments as $element) {
                $value = new CreatePaymentRequest();
                $this->createPayments[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'createPayouts')) {
            if (!is_array($object->createPayouts) && !is_object($object->createPayouts)) {
                throw new UnexpectedValueException('value \'' . print_r($object->createPayouts, true) . '\' is not an array or object');
            }
            $this->createPayouts = [];
            foreach ($object->createPayouts as $element) {
                $value = new CreatePayoutRequest();
                $this->createPayouts[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'header')) {
            if (!is_object($object->header)) {
                throw new UnexpectedValueException('value \'' . print_r($object->header, true) . '\' is not an object');
            }
            $value = new BatchMetadata();
            $this->header = $value->fromObject($object->header);
        }
        if (property_exists($object, 'refundPayments')) {
            if (!is_array($object->refundPayments) && !is_object($object->refundPayments)) {
                throw new UnexpectedValueException('value \'' . print_r($object->refundPayments, true) . '\' is not an array or object');
            }
            $this->refundPayments = [];
            foreach ($object->refundPayments as $element) {
                $value = new RefundPaymentBatchRequest();
                $this->refundPayments[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'subsequentPayments')) {
            if (!is_array($object->subsequentPayments) && !is_object($object->subsequentPayments)) {
                throw new UnexpectedValueException('value \'' . print_r($object->subsequentPayments, true) . '\' is not an array or object');
            }
            $this->subsequentPayments = [];
            foreach ($object->subsequentPayments as $element) {
                $value = new SubsequentPaymentBatchRequest();
                $this->subsequentPayments[] = $value->fromObject($element);
            }
        }
        return $this;
    }
}
