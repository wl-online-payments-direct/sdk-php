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
class ExternalCardholderAuthenticationData extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $acsTransactionId;

    /**
     * @var string
     */
    private $appliedExemption;

    /**
     * @var string
     */
    private $cavv;

    /**
     * @var string
     */
    private $cavvAlgorithm;

    /**
     * @var string
     */
    private $directoryServerTransactionId;

    /**
     * @var int
     */
    private $eci;

    /**
     * @var string
     */
    private $flow;

    /**
     * @var int
     */
    private $schemeRiskScore;

    /**
     * @var string
     */
    private $threeDSecureVersion;

    /**
     * @var string
     */
    private $xid;

    // Methods
    /**
     * @return string
     */
    public function getAcsTransactionId()
    {
        return $this->acsTransactionId;
    }
    /**
     * @var string
     */
    public function setAcsTransactionId($value)
    {
        $this->acsTransactionId = $value;
    }

    /**
     * @return string
     */
    public function getAppliedExemption()
    {
        return $this->appliedExemption;
    }
    /**
     * @var string
     */
    public function setAppliedExemption($value)
    {
        $this->appliedExemption = $value;
    }

    /**
     * @return string
     */
    public function getCavv()
    {
        return $this->cavv;
    }
    /**
     * @var string
     */
    public function setCavv($value)
    {
        $this->cavv = $value;
    }

    /**
     * @return string
     */
    public function getCavvAlgorithm()
    {
        return $this->cavvAlgorithm;
    }
    /**
     * @var string
     */
    public function setCavvAlgorithm($value)
    {
        $this->cavvAlgorithm = $value;
    }

    /**
     * @return string
     */
    public function getDirectoryServerTransactionId()
    {
        return $this->directoryServerTransactionId;
    }
    /**
     * @var string
     */
    public function setDirectoryServerTransactionId($value)
    {
        $this->directoryServerTransactionId = $value;
    }

    /**
     * @return int
     */
    public function getEci()
    {
        return $this->eci;
    }
    /**
     * @var int
     */
    public function setEci($value)
    {
        $this->eci = $value;
    }

    /**
     * @return string
     */
    public function getFlow()
    {
        return $this->flow;
    }
    /**
     * @var string
     */
    public function setFlow($value)
    {
        $this->flow = $value;
    }

    /**
     * @return int
     */
    public function getSchemeRiskScore()
    {
        return $this->schemeRiskScore;
    }
    /**
     * @var int
     */
    public function setSchemeRiskScore($value)
    {
        $this->schemeRiskScore = $value;
    }

    /**
     * @return string
     */
    public function getThreeDSecureVersion()
    {
        return $this->threeDSecureVersion;
    }
    /**
     * @var string
     */
    public function setThreeDSecureVersion($value)
    {
        $this->threeDSecureVersion = $value;
    }

    /**
     * @return string
     */
    public function getXid()
    {
        return $this->xid;
    }
    /**
     * @var string
     */
    public function setXid($value)
    {
        $this->xid = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->acsTransactionId !== null) {
            $object->acsTransactionId = $this->acsTransactionId;
        }
        if ($this->appliedExemption !== null) {
            $object->appliedExemption = $this->appliedExemption;
        }
        if ($this->cavv !== null) {
            $object->cavv = $this->cavv;
        }
        if ($this->cavvAlgorithm !== null) {
            $object->cavvAlgorithm = $this->cavvAlgorithm;
        }
        if ($this->directoryServerTransactionId !== null) {
            $object->directoryServerTransactionId = $this->directoryServerTransactionId;
        }
        if ($this->eci !== null) {
            $object->eci = $this->eci;
        }
        if ($this->flow !== null) {
            $object->flow = $this->flow;
        }
        if ($this->schemeRiskScore !== null) {
            $object->schemeRiskScore = $this->schemeRiskScore;
        }
        if ($this->threeDSecureVersion !== null) {
            $object->threeDSecureVersion = $this->threeDSecureVersion;
        }
        if ($this->xid !== null) {
            $object->xid = $this->xid;
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
        if (property_exists($object, 'acsTransactionId')) {
            $this->acsTransactionId = $object->acsTransactionId;
        }
        if (property_exists($object, 'appliedExemption')) {
            $this->appliedExemption = $object->appliedExemption;
        }
        if (property_exists($object, 'cavv')) {
            $this->cavv = $object->cavv;
        }
        if (property_exists($object, 'cavvAlgorithm')) {
            $this->cavvAlgorithm = $object->cavvAlgorithm;
        }
        if (property_exists($object, 'directoryServerTransactionId')) {
            $this->directoryServerTransactionId = $object->directoryServerTransactionId;
        }
        if (property_exists($object, 'eci')) {
            $this->eci = $object->eci;
        }
        if (property_exists($object, 'flow')) {
            $this->flow = $object->flow;
        }
        if (property_exists($object, 'schemeRiskScore')) {
            $this->schemeRiskScore = $object->schemeRiskScore;
        }
        if (property_exists($object, 'threeDSecureVersion')) {
            $this->threeDSecureVersion = $object->threeDSecureVersion;
        }
        if (property_exists($object, 'xid')) {
            $this->xid = $object->xid;
        }
        return $this;
    }
}
