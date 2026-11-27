<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CaptureResponse extends DataObject
{
    /**
     * @var CaptureOutput|null
     */
    public ?CaptureOutput $captureOutput = null;

    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var CaptureStatusOutput|null
     */
    public ?CaptureStatusOutput $statusOutput = null;

    /**
     * @return CaptureOutput|null
     */
    public function getCaptureOutput(): ?CaptureOutput
    {
        return $this->captureOutput;
    }

    /**
     * @param CaptureOutput|null $value
     */
    public function setCaptureOutput(?CaptureOutput $value): void
    {
        $this->captureOutput = $value;
    }

    /**
     * @param CaptureOutput|null $value
     * @return $this
     */
    public function withCaptureOutput(?CaptureOutput $value): static
    {
        $this->captureOutput = $value;
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
     * @return CaptureStatusOutput|null
     */
    public function getStatusOutput(): ?CaptureStatusOutput
    {
        return $this->statusOutput;
    }

    /**
     * @param CaptureStatusOutput|null $value
     */
    public function setStatusOutput(?CaptureStatusOutput $value): void
    {
        $this->statusOutput = $value;
    }

    /**
     * @param CaptureStatusOutput|null $value
     * @return $this
     */
    public function withStatusOutput(?CaptureStatusOutput $value): static
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
        if ($this->captureOutput !== null) {
            $object->captureOutput = $this->captureOutput->toObject();
        }
        if ($this->id !== null) {
            $object->id = $this->id;
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
        if (property_exists($object, 'captureOutput')) {
            if (!is_object($object->captureOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->captureOutput, true) . '\' is not an object');
            }
            $value = new CaptureOutput();
            $this->captureOutput = $value->fromObject($object->captureOutput);
        }
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        if (property_exists($object, 'statusOutput')) {
            if (!is_object($object->statusOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->statusOutput, true) . '\' is not an object');
            }
            $value = new CaptureStatusOutput();
            $this->statusOutput = $value->fromObject($object->statusOutput);
        }
        return $this;
    }
}
