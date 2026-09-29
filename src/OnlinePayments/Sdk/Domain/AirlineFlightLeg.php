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
     * @var string|null
    */
    public ?string $airlineClass = null;

    /**
     * @var string|null
    */
    public ?string $arrivalAirport = null;

    /**
     * @var string|null
    */
    public ?string $arrivalTime = null;

    /**
     * @var string|null
    */
    public ?string $carrierCode = null;

    /**
     * @var string|null
    */
    public ?string $conjunctionTicket = null;

    /**
     * @var string|null
    */
    public ?string $couponNumber = null;

    /**
     * @var string|null
    */
    public ?string $date = null;

    /**
     * @var string|null
    */
    public ?string $departureTime = null;

    /**
     * @var string|null
    */
    public ?string $endorsementOrRestriction = null;

    /**
     * @var string|null
    */
    public ?string $exchangeTicket = null;

    /**
     * @var string|null
     *
     * @deprecated Use legFare instead. Fare of this leg
    */
    public ?string $fare = null;

    /**
     * @var string|null
    */
    public ?string $fareBasis = null;

    /**
     * @var int|null
    */
    public ?int $fee = null;

    /**
     * @var string|null
    */
    public ?string $flightCode = null;

    /**
     * @var string|null
    */
    public ?string $flightNumber = null;

    /**
     * @var int|null
    */
    public ?int $legFare = null;

    /**
     * @var int|null
     *
     * @deprecated This field is not used by any payment product Sequence number of the flight leg
    */
    public ?int $number = null;

    /**
     * @var string|null
    */
    public ?string $originAirport = null;

    /**
     * @var string|null
    */
    public ?string $passengerClass = null;

    /**
     * @var string|null
    */
    public ?string $stopoverCode = null;

    /**
     * @var int|null
    */
    public ?int $taxes = null;

    /**
     * @return string|null
    */
    public function getAirlineClass(): ?string
    {
        return $this->airlineClass;
    }

    /**
     * @param string|null $value
    */
    public function setAirlineClass(?string $value): void
    {
        $this->airlineClass = $value;
    }

    /**
     * @param string|null $value
     * @return AirlineFlightLeg
    */
    public function withAirlineClass(?string $value): AirlineFlightLeg
    {
        $this->airlineClass = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getArrivalAirport(): ?string
    {
        return $this->arrivalAirport;
    }

    /**
     * @param string|null $value
    */
    public function setArrivalAirport(?string $value): void
    {
        $this->arrivalAirport = $value;
    }

    /**
     * @param string|null $value
     * @return AirlineFlightLeg
    */
    public function withArrivalAirport(?string $value): AirlineFlightLeg
    {
        $this->arrivalAirport = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getArrivalTime(): ?string
    {
        return $this->arrivalTime;
    }

    /**
     * @param string|null $value
    */
    public function setArrivalTime(?string $value): void
    {
        $this->arrivalTime = $value;
    }

    /**
     * @param string|null $value
     * @return AirlineFlightLeg
    */
    public function withArrivalTime(?string $value): AirlineFlightLeg
    {
        $this->arrivalTime = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getCarrierCode(): ?string
    {
        return $this->carrierCode;
    }

    /**
     * @param string|null $value
    */
    public function setCarrierCode(?string $value): void
    {
        $this->carrierCode = $value;
    }

    /**
     * @param string|null $value
     * @return AirlineFlightLeg
    */
    public function withCarrierCode(?string $value): AirlineFlightLeg
    {
        $this->carrierCode = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getConjunctionTicket(): ?string
    {
        return $this->conjunctionTicket;
    }

    /**
     * @param string|null $value
    */
    public function setConjunctionTicket(?string $value): void
    {
        $this->conjunctionTicket = $value;
    }

    /**
     * @param string|null $value
     * @return AirlineFlightLeg
    */
    public function withConjunctionTicket(?string $value): AirlineFlightLeg
    {
        $this->conjunctionTicket = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getCouponNumber(): ?string
    {
        return $this->couponNumber;
    }

    /**
     * @param string|null $value
    */
    public function setCouponNumber(?string $value): void
    {
        $this->couponNumber = $value;
    }

    /**
     * @param string|null $value
     * @return AirlineFlightLeg
    */
    public function withCouponNumber(?string $value): AirlineFlightLeg
    {
        $this->couponNumber = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @param string|null $value
    */
    public function setDate(?string $value): void
    {
        $this->date = $value;
    }

    /**
     * @param string|null $value
     * @return AirlineFlightLeg
    */
    public function withDate(?string $value): AirlineFlightLeg
    {
        $this->date = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getDepartureTime(): ?string
    {
        return $this->departureTime;
    }

    /**
     * @param string|null $value
    */
    public function setDepartureTime(?string $value): void
    {
        $this->departureTime = $value;
    }

    /**
     * @param string|null $value
     * @return AirlineFlightLeg
    */
    public function withDepartureTime(?string $value): AirlineFlightLeg
    {
        $this->departureTime = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getEndorsementOrRestriction(): ?string
    {
        return $this->endorsementOrRestriction;
    }

    /**
     * @param string|null $value
    */
    public function setEndorsementOrRestriction(?string $value): void
    {
        $this->endorsementOrRestriction = $value;
    }

    /**
     * @param string|null $value
     * @return AirlineFlightLeg
    */
    public function withEndorsementOrRestriction(?string $value): AirlineFlightLeg
    {
        $this->endorsementOrRestriction = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getExchangeTicket(): ?string
    {
        return $this->exchangeTicket;
    }

    /**
     * @param string|null $value
    */
    public function setExchangeTicket(?string $value): void
    {
        $this->exchangeTicket = $value;
    }

    /**
     * @param string|null $value
     * @return AirlineFlightLeg
    */
    public function withExchangeTicket(?string $value): AirlineFlightLeg
    {
        $this->exchangeTicket = $value;
        return $this;
    }

    /**
     * @return string|null
     *
     * @deprecated Use legFare instead. Fare of this leg
    */
    public function getFare(): ?string
    {
        return $this->fare;
    }

    /**
     * @param string|null $value
     *
     * @deprecated Use legFare instead. Fare of this leg
    */
    public function setFare(?string $value): void
    {
        $this->fare = $value;
    }

    /**
     * @param string|null $value
     * @return AirlineFlightLeg
     *
     * @deprecated Use legFare instead. Fare of this leg
    */
    public function withFare(?string $value): AirlineFlightLeg
    {
        $this->fare = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getFareBasis(): ?string
    {
        return $this->fareBasis;
    }

    /**
     * @param string|null $value
    */
    public function setFareBasis(?string $value): void
    {
        $this->fareBasis = $value;
    }

    /**
     * @param string|null $value
     * @return AirlineFlightLeg
    */
    public function withFareBasis(?string $value): AirlineFlightLeg
    {
        $this->fareBasis = $value;
        return $this;
    }

    /**
     * @return int|null
    */
    public function getFee(): ?int
    {
        return $this->fee;
    }

    /**
     * @param int|null $value
    */
    public function setFee(?int $value): void
    {
        $this->fee = $value;
    }

    /**
     * @param int|null $value
     * @return AirlineFlightLeg
    */
    public function withFee(?int $value): AirlineFlightLeg
    {
        $this->fee = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getFlightCode(): ?string
    {
        return $this->flightCode;
    }

    /**
     * @param string|null $value
    */
    public function setFlightCode(?string $value): void
    {
        $this->flightCode = $value;
    }

    /**
     * @param string|null $value
     * @return AirlineFlightLeg
    */
    public function withFlightCode(?string $value): AirlineFlightLeg
    {
        $this->flightCode = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getFlightNumber(): ?string
    {
        return $this->flightNumber;
    }

    /**
     * @param string|null $value
    */
    public function setFlightNumber(?string $value): void
    {
        $this->flightNumber = $value;
    }

    /**
     * @param string|null $value
     * @return AirlineFlightLeg
    */
    public function withFlightNumber(?string $value): AirlineFlightLeg
    {
        $this->flightNumber = $value;
        return $this;
    }

    /**
     * @return int|null
    */
    public function getLegFare(): ?int
    {
        return $this->legFare;
    }

    /**
     * @param int|null $value
    */
    public function setLegFare(?int $value): void
    {
        $this->legFare = $value;
    }

    /**
     * @param int|null $value
     * @return AirlineFlightLeg
    */
    public function withLegFare(?int $value): AirlineFlightLeg
    {
        $this->legFare = $value;
        return $this;
    }

    /**
     * @return int|null
     *
     * @deprecated This field is not used by any payment product Sequence number of the flight leg
    */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * @param int|null $value
     *
     * @deprecated This field is not used by any payment product Sequence number of the flight leg
    */
    public function setNumber(?int $value): void
    {
        $this->number = $value;
    }

    /**
     * @param int|null $value
     * @return AirlineFlightLeg
     *
     * @deprecated This field is not used by any payment product Sequence number of the flight leg
    */
    public function withNumber(?int $value): AirlineFlightLeg
    {
        $this->number = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getOriginAirport(): ?string
    {
        return $this->originAirport;
    }

    /**
     * @param string|null $value
    */
    public function setOriginAirport(?string $value): void
    {
        $this->originAirport = $value;
    }

    /**
     * @param string|null $value
     * @return AirlineFlightLeg
    */
    public function withOriginAirport(?string $value): AirlineFlightLeg
    {
        $this->originAirport = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getPassengerClass(): ?string
    {
        return $this->passengerClass;
    }

    /**
     * @param string|null $value
    */
    public function setPassengerClass(?string $value): void
    {
        $this->passengerClass = $value;
    }

    /**
     * @param string|null $value
     * @return AirlineFlightLeg
    */
    public function withPassengerClass(?string $value): AirlineFlightLeg
    {
        $this->passengerClass = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getStopoverCode(): ?string
    {
        return $this->stopoverCode;
    }

    /**
     * @param string|null $value
    */
    public function setStopoverCode(?string $value): void
    {
        $this->stopoverCode = $value;
    }

    /**
     * @param string|null $value
     * @return AirlineFlightLeg
    */
    public function withStopoverCode(?string $value): AirlineFlightLeg
    {
        $this->stopoverCode = $value;
        return $this;
    }

    /**
     * @return int|null
    */
    public function getTaxes(): ?int
    {
        return $this->taxes;
    }

    /**
     * @param int|null $value
    */
    public function setTaxes(?int $value): void
    {
        $this->taxes = $value;
    }

    /**
     * @param int|null $value
     * @return AirlineFlightLeg
    */
    public function withTaxes(?int $value): AirlineFlightLeg
    {
        $this->taxes = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
        if (!is_null($this->flightCode)) {
            $object->flightCode = $this->flightCode;
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): AirlineFlightLeg
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
        if (property_exists($object, 'flightCode')) {
            $this->flightCode = $object->flightCode;
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
