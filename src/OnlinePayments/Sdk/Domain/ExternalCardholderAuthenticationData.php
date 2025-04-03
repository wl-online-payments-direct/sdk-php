<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ExternalCardholderAuthenticationData extends DataObject
{
    /**
     * @var string
     */
    public $acsTransactionId = null;

    /**
     * @var string
     */
    public $appliedExemption = null;

    /**
     * @var string
     */
    public $cavv = null;

    /**
     * @var string
     */
    public $cavvAlgorithm = null;

    /**
     * @var string
     */
    public $directoryServerTransactionId = null;

    /**
     * @var int
     */
    public $eci = null;

    /**
     * @var string
     */
    public $flow = null;

    /**
     * @var int
     */
    public $schemeRiskScore = null;

    /**
     * @var string
     */
    public $threeDSecureVersion = null;

    /**
     * @var string
     */
    public $xid = null;

    /**
     * @return string
     */
    public function getAcsTransactionId()
    {
        return $this->acsTransactionId;
    }

    /**
     * @param string
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
     * @param string
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
     * @param string
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
     * @param string
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
     * @param string
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
     * @param int
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
     * @param string
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
     * @param int
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
     * @param string
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
     * @param string
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
        if (!is_null($this->acsTransactionId)) {
            $object->acsTransactionId = $this->acsTransactionId;
        }
        if (!is_null($this->appliedExemption)) {
            $object->appliedExemption = $this->appliedExemption;
        }
        if (!is_null($this->cavv)) {
            $object->cavv = $this->cavv;
        }
        if (!is_null($this->cavvAlgorithm)) {
            $object->cavvAlgorithm = $this->cavvAlgorithm;
        }
        if (!is_null($this->directoryServerTransactionId)) {
            $object->directoryServerTransactionId = $this->directoryServerTransactionId;
        }
        if (!is_null($this->eci)) {
            $object->eci = $this->eci;
        }
        if (!is_null($this->flow)) {
            $object->flow = $this->flow;
        }
        if (!is_null($this->schemeRiskScore)) {
            $object->schemeRiskScore = $this->schemeRiskScore;
        }
        if (!is_null($this->threeDSecureVersion)) {
            $object->threeDSecureVersion = $this->threeDSecureVersion;
        }
        if (!is_null($this->xid)) {
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
