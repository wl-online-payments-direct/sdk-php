<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PayoutStatusOutput extends DataObject
{
    /**
     * @var bool
     */
    public $isCancellable = null;

    /**
     * @var string
     */
    public $statusCategory = null;

    /**
     * @var int
     */
    public $statusCode = null;

    /**
     * @return bool
     */
    public function getIsCancellable()
    {
        return $this->isCancellable;
    }

    /**
     * @param bool
     */
    public function setIsCancellable($value)
    {
        $this->isCancellable = $value;
    }

    /**
     * @return string
     */
    public function getStatusCategory()
    {
        return $this->statusCategory;
    }

    /**
     * @param string
     */
    public function setStatusCategory($value)
    {
        $this->statusCategory = $value;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param int
     */
    public function setStatusCode($value)
    {
        $this->statusCode = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->isCancellable)) {
            $object->isCancellable = $this->isCancellable;
        }
        if (!is_null($this->statusCategory)) {
            $object->statusCategory = $this->statusCategory;
        }
        if (!is_null($this->statusCode)) {
            $object->statusCode = $this->statusCode;
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
        if (property_exists($object, 'isCancellable')) {
            $this->isCancellable = $object->isCancellable;
        }
        if (property_exists($object, 'statusCategory')) {
            $this->statusCategory = $object->statusCategory;
        }
        if (property_exists($object, 'statusCode')) {
            $this->statusCode = $object->statusCode;
        }
        return $this;
    }
}
