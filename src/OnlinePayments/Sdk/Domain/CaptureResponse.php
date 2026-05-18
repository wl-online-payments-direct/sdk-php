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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->captureOutput)) {
            $object->captureOutput = $this->captureOutput->toObject();
        }
        if (!is_null($this->id)) {
            $object->id = $this->id;
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
    public function fromObject(object $object): CaptureResponse
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
