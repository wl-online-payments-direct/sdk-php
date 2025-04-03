<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class HostedCheckoutSpecificOutput extends DataObject
{
    /**
     * @var string
     */
    public $hostedCheckoutId = null;

    /**
     * @var string
     */
    public $variant = null;

    /**
     * @return string
     */
    public function getHostedCheckoutId()
    {
        return $this->hostedCheckoutId;
    }

    /**
     * @param string
     */
    public function setHostedCheckoutId($value)
    {
        $this->hostedCheckoutId = $value;
    }

    /**
     * @return string
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * @param string
     */
    public function setVariant($value)
    {
        $this->variant = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->hostedCheckoutId)) {
            $object->hostedCheckoutId = $this->hostedCheckoutId;
        }
        if (!is_null($this->variant)) {
            $object->variant = $this->variant;
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
        if (property_exists($object, 'hostedCheckoutId')) {
            $this->hostedCheckoutId = $object->hostedCheckoutId;
        }
        if (property_exists($object, 'variant')) {
            $this->variant = $object->variant;
        }
        return $this;
    }
}
