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
class AirlineFlightLeg extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $airlineClass;

    /**
     * @var string
     */
    private $arrivalAirport;

    /**
     * @var string
     */
    private $arrivalTime;

    /**
     * @var string
     */
    private $carrierCode;

    /**
     * @var string
     */
    private $conjunctionTicket;

    /**
     * @var string
     */
    private $couponNumber;

    /**
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $departureTime;

    /**
     * @var string
     */
    private $endorsementOrRestriction;

    /**
     * @var string
     */
    private $exchangeTicket;

    /**
     * @var string
     */
    private $fare;

    /**
     * @var string
     */
    private $fareBasis;

    /**
     * @var int
     */
    private $fee;

    /**
     * @var string
     */
    private $flightNumber;

    /**
     * @var int
     */
    private $legFare;

    /**
     * @var int
     */
    private $number;

    /**
     * @var string
     */
    private $originAirport;

    /**
     * @var string
     */
    private $passengerClass;

    /**
     * @var string
     */
    private $stopoverCode;

    /**
     * @var int
     */
    private $taxes;

    // Methods
    /**
     * @return string
     */
    public function getAirlineClass()
    {
        return $this->airlineClass;
    }
    /**
     * @var string
     */
    public function setAirlineClass($value)
    {
        $this->airlineClass = $value;
    }

    /**
     * @return string
     */
    public function getArrivalAirport()
    {
        return $this->arrivalAirport;
    }
    /**
     * @var string
     */
    public function setArrivalAirport($value)
    {
        $this->arrivalAirport = $value;
    }

    /**
     * @return string
     */
    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }
    /**
     * @var string
     */
    public function setArrivalTime($value)
    {
        $this->arrivalTime = $value;
    }

    /**
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->carrierCode;
    }
    /**
     * @var string
     */
    public function setCarrierCode($value)
    {
        $this->carrierCode = $value;
    }

    /**
     * @return string
     */
    public function getConjunctionTicket()
    {
        return $this->conjunctionTicket;
    }
    /**
     * @var string
     */
    public function setConjunctionTicket($value)
    {
        $this->conjunctionTicket = $value;
    }

    /**
     * @return string
     */
    public function getCouponNumber()
    {
        return $this->couponNumber;
    }
    /**
     * @var string
     */
    public function setCouponNumber($value)
    {
        $this->couponNumber = $value;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * @var string
     */
    public function setDate($value)
    {
        $this->date = $value;
    }

    /**
     * @return string
     */
    public function getDepartureTime()
    {
        return $this->departureTime;
    }
    /**
     * @var string
     */
    public function setDepartureTime($value)
    {
        $this->departureTime = $value;
    }

    /**
     * @return string
     */
    public function getEndorsementOrRestriction()
    {
        return $this->endorsementOrRestriction;
    }
    /**
     * @var string
     */
    public function setEndorsementOrRestriction($value)
    {
        $this->endorsementOrRestriction = $value;
    }

    /**
     * @return string
     */
    public function getExchangeTicket()
    {
        return $this->exchangeTicket;
    }
    /**
     * @var string
     */
    public function setExchangeTicket($value)
    {
        $this->exchangeTicket = $value;
    }

    /**
     * @return string
     */
    public function getFare()
    {
        return $this->fare;
    }
    /**
     * @var string
     */
    public function setFare($value)
    {
        $this->fare = $value;
    }

    /**
     * @return string
     */
    public function getFareBasis()
    {
        return $this->fareBasis;
    }
    /**
     * @var string
     */
    public function setFareBasis($value)
    {
        $this->fareBasis = $value;
    }

    /**
     * @return int
     */
    public function getFee()
    {
        return $this->fee;
    }
    /**
     * @var int
     */
    public function setFee($value)
    {
        $this->fee = $value;
    }

    /**
     * @return string
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }
    /**
     * @var string
     */
    public function setFlightNumber($value)
    {
        $this->flightNumber = $value;
    }

    /**
     * @return int
     */
    public function getLegFare()
    {
        return $this->legFare;
    }
    /**
     * @var int
     */
    public function setLegFare($value)
    {
        $this->legFare = $value;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * @var int
     */
    public function setNumber($value)
    {
        $this->number = $value;
    }

    /**
     * @return string
     */
    public function getOriginAirport()
    {
        return $this->originAirport;
    }
    /**
     * @var string
     */
    public function setOriginAirport($value)
    {
        $this->originAirport = $value;
    }

    /**
     * @return string
     */
    public function getPassengerClass()
    {
        return $this->passengerClass;
    }
    /**
     * @var string
     */
    public function setPassengerClass($value)
    {
        $this->passengerClass = $value;
    }

    /**
     * @return string
     */
    public function getStopoverCode()
    {
        return $this->stopoverCode;
    }
    /**
     * @var string
     */
    public function setStopoverCode($value)
    {
        $this->stopoverCode = $value;
    }

    /**
     * @return int
     */
    public function getTaxes()
    {
        return $this->taxes;
    }
    /**
     * @var int
     */
    public function setTaxes($value)
    {
        $this->taxes = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->airlineClass !== null) {
            $object->airlineClass = $this->airlineClass;
        }
        if ($this->arrivalAirport !== null) {
            $object->arrivalAirport = $this->arrivalAirport;
        }
        if ($this->arrivalTime !== null) {
            $object->arrivalTime = $this->arrivalTime;
        }
        if ($this->carrierCode !== null) {
            $object->carrierCode = $this->carrierCode;
        }
        if ($this->conjunctionTicket !== null) {
            $object->conjunctionTicket = $this->conjunctionTicket;
        }
        if ($this->couponNumber !== null) {
            $object->couponNumber = $this->couponNumber;
        }
        if ($this->date !== null) {
            $object->date = $this->date;
        }
        if ($this->departureTime !== null) {
            $object->departureTime = $this->departureTime;
        }
        if ($this->endorsementOrRestriction !== null) {
            $object->endorsementOrRestriction = $this->endorsementOrRestriction;
        }
        if ($this->exchangeTicket !== null) {
            $object->exchangeTicket = $this->exchangeTicket;
        }
        if ($this->fare !== null) {
            $object->fare = $this->fare;
        }
        if ($this->fareBasis !== null) {
            $object->fareBasis = $this->fareBasis;
        }
        if ($this->fee !== null) {
            $object->fee = $this->fee;
        }
        if ($this->flightNumber !== null) {
            $object->flightNumber = $this->flightNumber;
        }
        if ($this->legFare !== null) {
            $object->legFare = $this->legFare;
        }
        if ($this->number !== null) {
            $object->number = $this->number;
        }
        if ($this->originAirport !== null) {
            $object->originAirport = $this->originAirport;
        }
        if ($this->passengerClass !== null) {
            $object->passengerClass = $this->passengerClass;
        }
        if ($this->stopoverCode !== null) {
            $object->stopoverCode = $this->stopoverCode;
        }
        if ($this->taxes !== null) {
            $object->taxes = $this->taxes;
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
        if (property_exists($object, 'airlineClass')) {
            $this->airlineClass = $object->airlineClass;
        }
        if (property_exists($object, 'arrivalAirport')) {
            $this->arrivalAirport = $object->arrivalAirport;
        }
        if (property_exists($object, 'arrivalTime')) {
            $this->arrivalTime = $object->arrivalTime;
        }
        if (property_exists($object, 'carrierCode')) {
            $this->carrierCode = $object->carrierCode;
        }
        if (property_exists($object, 'conjunctionTicket')) {
            $this->conjunctionTicket = $object->conjunctionTicket;
        }
        if (property_exists($object, 'couponNumber')) {
            $this->couponNumber = $object->couponNumber;
        }
        if (property_exists($object, 'date')) {
            $this->date = $object->date;
        }
        if (property_exists($object, 'departureTime')) {
            $this->departureTime = $object->departureTime;
        }
        if (property_exists($object, 'endorsementOrRestriction')) {
            $this->endorsementOrRestriction = $object->endorsementOrRestriction;
        }
        if (property_exists($object, 'exchangeTicket')) {
            $this->exchangeTicket = $object->exchangeTicket;
        }
        if (property_exists($object, 'fare')) {
            $this->fare = $object->fare;
        }
        if (property_exists($object, 'fareBasis')) {
            $this->fareBasis = $object->fareBasis;
        }
        if (property_exists($object, 'fee')) {
            $this->fee = $object->fee;
        }
        if (property_exists($object, 'flightNumber')) {
            $this->flightNumber = $object->flightNumber;
        }
        if (property_exists($object, 'legFare')) {
            $this->legFare = $object->legFare;
        }
        if (property_exists($object, 'number')) {
            $this->number = $object->number;
        }
        if (property_exists($object, 'originAirport')) {
            $this->originAirport = $object->originAirport;
        }
        if (property_exists($object, 'passengerClass')) {
            $this->passengerClass = $object->passengerClass;
        }
        if (property_exists($object, 'stopoverCode')) {
            $this->stopoverCode = $object->stopoverCode;
        }
        if (property_exists($object, 'taxes')) {
            $this->taxes = $object->taxes;
        }
        return $this;
    }
}
