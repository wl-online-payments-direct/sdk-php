<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class Capture extends DataObject
{
    // Properties
    /**
     * @var CaptureOutput
     */
    private $captureOutput;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $status;

    /**
     * @var CaptureStatusOutput
     */
    private $statusOutput;

    // Methods
    /**
     * @return CaptureOutput
     */
    public function getCaptureOutput()
    {
        return $this->captureOutput;
    }
    /**
     * @var CaptureOutput
     */
    public function setCaptureOutput($value)
    {
        $this->captureOutput = $value;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string
     */
    public function setId($value)
    {
        $this->id = $value;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * @var string
     */
    public function setStatus($value)
    {
        $this->status = $value;
    }

    /**
     * @return CaptureStatusOutput
     */
    public function getStatusOutput()
    {
        return $this->statusOutput;
    }
    /**
     * @var CaptureStatusOutput
     */
    public function setStatusOutput($value)
    {
        $this->statusOutput = $value;
    }

    /**
     * @return object
     */
    public function toObject()
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
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
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
