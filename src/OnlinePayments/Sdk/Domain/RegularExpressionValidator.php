<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RegularExpressionValidator extends DataObject
{
    /**
     * @var string
     */
    public $regularExpression = null;

    /**
     * @return string
     */
    public function getRegularExpression()
    {
        return $this->regularExpression;
    }

    /**
     * @param string
     */
    public function setRegularExpression($value)
    {
        $this->regularExpression = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->regularExpression)) {
            $object->regularExpression = $this->regularExpression;
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
        if (property_exists($object, 'regularExpression')) {
            $this->regularExpression = $object->regularExpression;
        }
        return $this;
    }
}
