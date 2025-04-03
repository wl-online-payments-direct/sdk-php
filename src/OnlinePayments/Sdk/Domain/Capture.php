<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class Capture extends DataObject
{
    /**
     * @var CaptureOutput
     */
    public $captureOutput = null;

    /**
     * @var string
     */
    public $id = null;

    /**
     * @var string
     */
    public $status = null;

    /**
     * @var CaptureStatusOutput
     */
    public $statusOutput = null;

    /**
     * @return CaptureOutput
     */
    public function getCaptureOutput()
    {
        return $this->captureOutput;
    }

    /**
     * @param CaptureOutput
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
     * @param string
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
     * @param string
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
     * @param CaptureStatusOutput
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
