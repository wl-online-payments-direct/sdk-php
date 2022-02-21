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
class PayoutStatusOutput extends DataObject
{
    // Properties
    /**
     * @var bool
     */
    private $isCancellable;

    /**
     * @var string
     */
    private $statusCategory;

    /**
     * @var int
     */
    private $statusCode;

    // Methods
    /**
     * @return bool
     */
    public function getIsCancellable()
    {
        return $this->isCancellable;
    }
    /**
     * @var bool
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
     * @var string
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
     * @var int
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
        if ($this->isCancellable !== null) {
            $object->isCancellable = $this->isCancellable;
        }
        if ($this->statusCategory !== null) {
            $object->statusCategory = $this->statusCategory;
        }
        if ($this->statusCode !== null) {
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
