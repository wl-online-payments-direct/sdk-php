<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ValidateCredentialsRequest extends DataObject
{
    /**
     * @var string
     */
    public $key = null;

    /**
     * @var string
     */
    public $secret = null;

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string
     */
    public function setKey($value)
    {
        $this->key = $value;
    }

    /**
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @param string
     */
    public function setSecret($value)
    {
        $this->secret = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->key)) {
            $object->key = $this->key;
        }
        if (!is_null($this->secret)) {
            $object->secret = $this->secret;
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
        if (property_exists($object, 'key')) {
            $this->key = $object->key;
        }
        if (property_exists($object, 'secret')) {
            $this->secret = $object->secret;
        }
        return $this;
    }
}
