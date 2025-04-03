<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AirlineFlightLeg extends DataObject
{
    /**
     * @var string
     */
    public $airlineClass = null;

    /**
     * @var string
     */
    public $arrivalAirport = null;

    /**
     * @var string
     */
    public $arrivalTime = null;

    /**
     * @var string
     */
    public $carrierCode = null;

    /**
     * @var string
     */
    public $conjunctionTicket = null;

    /**
     * @var string
     */
    public $couponNumber = null;

    /**
     * @var string
     */
    public $date = null;

    /**
     * @var string
     */
    public $departureTime = null;

    /**
     * @var string
     */
    public $endorsementOrRestriction = null;

    /**
     * @var string
     */
    public $exchangeTicket = null;

    /**
     * @var string
     * @deprecated Use legFare instead. Fare of this leg
     */
    public $fare = null;

    /**
     * @var string
     */
    public $fareBasis = null;

    /**
     * @var int
     */
    public $fee = null;

    /**
     * @var string
     */
    public $flightNumber = null;

    /**
     * @var int
     */
    public $legFare = null;

    /**
     * @var int
     * @deprecated This field is not used by any payment product Sequence number of the flight leg
     */
    public $number = null;

    /**
     * @var string
     */
    public $originAirport = null;

    /**
     * @var string
     */
    public $passengerClass = null;

    /**
     * @var string
     */
    public $stopoverCode = null;

    /**
     * @var int
     */
    public $taxes = null;

    /**
     * @return string
     */
    public function getAirlineClass()
    {
        return $this->airlineClass;
    }

    /**
     * @param string
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
     * @param string
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
     * @param string
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
     * @param string
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
     * @param string
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
     * @param string
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
     * @param string
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
     * @param string
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
     * @param string
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
     * @param string
     */
    public function setExchangeTicket($value)
    {
        $this->exchangeTicket = $value;
    }

    /**
     * @return string
     * @deprecated Use legFare instead. Fare of this leg
     */
    public function getFare()
    {
        return $this->fare;
    }

    /**
     * @param string
     * @deprecated Use legFare instead. Fare of this leg
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
     * @param string
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
     * @param int
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
     * @param string
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
     * @param int
     */
    public function setLegFare($value)
    {
        $this->legFare = $value;
    }

    /**
     * @return int
     * @deprecated This field is not used by any payment product Sequence number of the flight leg
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int
     * @deprecated This field is not used by any payment product Sequence number of the flight leg
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
     * @param string
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
     * @param string
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
     * @param string
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
     * @param int
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
        if (!is_null($this->airlineClass)) {
            $object->airlineClass = $this->airlineClass;
        }
        if (!is_null($this->arrivalAirport)) {
            $object->arrivalAirport = $this->arrivalAirport;
        }
        if (!is_null($this->arrivalTime)) {
            $object->arrivalTime = $this->arrivalTime;
        }
        if (!is_null($this->carrierCode)) {
            $object->carrierCode = $this->carrierCode;
        }
        if (!is_null($this->conjunctionTicket)) {
            $object->conjunctionTicket = $this->conjunctionTicket;
        }
        if (!is_null($this->couponNumber)) {
            $object->couponNumber = $this->couponNumber;
        }
        if (!is_null($this->date)) {
            $object->date = $this->date;
        }
        if (!is_null($this->departureTime)) {
            $object->departureTime = $this->departureTime;
        }
        if (!is_null($this->endorsementOrRestriction)) {
            $object->endorsementOrRestriction = $this->endorsementOrRestriction;
        }
        if (!is_null($this->exchangeTicket)) {
            $object->exchangeTicket = $this->exchangeTicket;
        }
        if (!is_null($this->fare)) {
            $object->fare = $this->fare;
        }
        if (!is_null($this->fareBasis)) {
            $object->fareBasis = $this->fareBasis;
        }
        if (!is_null($this->fee)) {
            $object->fee = $this->fee;
        }
        if (!is_null($this->flightNumber)) {
            $object->flightNumber = $this->flightNumber;
        }
        if (!is_null($this->legFare)) {
            $object->legFare = $this->legFare;
        }
        if (!is_null($this->number)) {
            $object->number = $this->number;
        }
        if (!is_null($this->originAirport)) {
            $object->originAirport = $this->originAirport;
        }
        if (!is_null($this->passengerClass)) {
            $object->passengerClass = $this->passengerClass;
        }
        if (!is_null($this->stopoverCode)) {
            $object->stopoverCode = $this->stopoverCode;
        }
        if (!is_null($this->taxes)) {
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
