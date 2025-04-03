<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct3302SpecificInput extends DataObject
{
    /**
     * @var string
     */
    public $organizationEntityType = null;

    /**
     * @var string
     */
    public $organizationRegistrationId = null;

    /**
     * @var string
     */
    public $vatId = null;

    /**
     * @return string
     */
    public function getOrganizationEntityType()
    {
        return $this->organizationEntityType;
    }

    /**
     * @param string
     */
    public function setOrganizationEntityType($value)
    {
        $this->organizationEntityType = $value;
    }

    /**
     * @return string
     */
    public function getOrganizationRegistrationId()
    {
        return $this->organizationRegistrationId;
    }

    /**
     * @param string
     */
    public function setOrganizationRegistrationId($value)
    {
        $this->organizationRegistrationId = $value;
    }

    /**
     * @return string
     */
    public function getVatId()
    {
        return $this->vatId;
    }

    /**
     * @param string
     */
    public function setVatId($value)
    {
        $this->vatId = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->organizationEntityType)) {
            $object->organizationEntityType = $this->organizationEntityType;
        }
        if (!is_null($this->organizationRegistrationId)) {
            $object->organizationRegistrationId = $this->organizationRegistrationId;
        }
        if (!is_null($this->vatId)) {
            $object->vatId = $this->vatId;
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
        if (property_exists($object, 'organizationEntityType')) {
            $this->organizationEntityType = $object->organizationEntityType;
        }
        if (property_exists($object, 'organizationRegistrationId')) {
            $this->organizationRegistrationId = $object->organizationRegistrationId;
        }
        if (property_exists($object, 'vatId')) {
            $this->vatId = $object->vatId;
        }
        return $this;
    }
}
