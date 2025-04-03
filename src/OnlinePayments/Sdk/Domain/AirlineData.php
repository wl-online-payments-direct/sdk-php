<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AirlineData extends DataObject
{
    /**
     * @var string
     */
    public $agentNumericCode = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     * @deprecated This field is not used by any payment product Date of the Flight Format: YYYYMMDD
     */
    public $flightDate = null;

    /**
     * @var string
     */
    public $flightIndicator = null;

    /**
     * @var AirlineFlightLeg[]
     */
    public $flightLegs = null;

    /**
     * @var string
     */
    public $invoiceNumber = null;

    /**
     * @var bool
     * @deprecated Deprecated
     */
    public $isETicket = null;

    /**
     * @var bool
     */
    public $isRestrictedTicket = null;

    /**
     * @var bool
     * @deprecated This field is not used by any payment product  * true - The payer is the ticket holder  * false - The payer is not the ticket holder
     */
    public $isThirdParty = null;

    /**
     * @var string
     */
    public $issueDate = null;

    /**
     * @var string
     */
    public $merchantCustomerId = null;

    /**
     * @var string
     * @deprecated This field is not used by any payment product Name of the airline
     */
    public $name = null;

    /**
     * @var string
     * @deprecated Use passengers instead Name of passenger
     */
    public $passengerName = null;

    /**
     * @var AirlinePassenger[]
     */
    public $passengers = null;

    /**
     * @var string
     * @deprecated This field is not used by any payment product Place of issue For sales in the US the last two characters (pos 14-15) must be the US state code.
     */
    public $placeOfIssue = null;

    /**
     * @var string
     * @deprecated Use passengers instead.
     */
    public $pnr = null;

    /**
     * @var string
     */
    public $pointOfSale = null;

    /**
     * @var string
     * @deprecated This field is not used by any payment product City code of the point of sale
     */
    public $posCityCode = null;

    /**
     * @var string
     */
    public $ticketCurrency = null;

    /**
     * @var string
     * @deprecated This field is not used by any payment product Delivery method of the ticket
     */
    public $ticketDeliveryMethod = null;

    /**
     * @var string
     */
    public $ticketNumber = null;

    /**
     * @var int
     */
    public $totalFare = null;

    /**
     * @var int
     */
    public $totalFee = null;

    /**
     * @var int
     */
    public $totalTaxes = null;

    /**
     * @var string
     */
    public $travelAgencyName = null;

    /**
     * @return string
     */
    public function getAgentNumericCode()
    {
        return $this->agentNumericCode;
    }

    /**
     * @param string
     */
    public function setAgentNumericCode($value)
    {
        $this->agentNumericCode = $value;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string
     */
    public function setCode($value)
    {
        $this->code = $value;
    }

    /**
     * @return string
     * @deprecated This field is not used by any payment product Date of the Flight Format: YYYYMMDD
     */
    public function getFlightDate()
    {
        return $this->flightDate;
    }

    /**
     * @param string
     * @deprecated This field is not used by any payment product Date of the Flight Format: YYYYMMDD
     */
    public function setFlightDate($value)
    {
        $this->flightDate = $value;
    }

    /**
     * @return string
     */
    public function getFlightIndicator()
    {
        return $this->flightIndicator;
    }

    /**
     * @param string
     */
    public function setFlightIndicator($value)
    {
        $this->flightIndicator = $value;
    }

    /**
     * @return AirlineFlightLeg[]
     */
    public function getFlightLegs()
    {
        return $this->flightLegs;
    }

    /**
     * @param AirlineFlightLeg[]
     */
    public function setFlightLegs($value)
    {
        $this->flightLegs = $value;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * @param string
     */
    public function setInvoiceNumber($value)
    {
        $this->invoiceNumber = $value;
    }

    /**
     * @return bool
     * @deprecated Deprecated
     */
    public function getIsETicket()
    {
        return $this->isETicket;
    }

    /**
     * @param bool
     * @deprecated Deprecated
     */
    public function setIsETicket($value)
    {
        $this->isETicket = $value;
    }

    /**
     * @return bool
     */
    public function getIsRestrictedTicket()
    {
        return $this->isRestrictedTicket;
    }

    /**
     * @param bool
     */
    public function setIsRestrictedTicket($value)
    {
        $this->isRestrictedTicket = $value;
    }

    /**
     * @return bool
     * @deprecated This field is not used by any payment product  * true - The payer is the ticket holder  * false - The payer is not the ticket holder
     */
    public function getIsThirdParty()
    {
        return $this->isThirdParty;
    }

    /**
     * @param bool
     * @deprecated This field is not used by any payment product  * true - The payer is the ticket holder  * false - The payer is not the ticket holder
     */
    public function setIsThirdParty($value)
    {
        $this->isThirdParty = $value;
    }

    /**
     * @return string
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * @param string
     */
    public function setIssueDate($value)
    {
        $this->issueDate = $value;
    }

    /**
     * @return string
     */
    public function getMerchantCustomerId()
    {
        return $this->merchantCustomerId;
    }

    /**
     * @param string
     */
    public function setMerchantCustomerId($value)
    {
        $this->merchantCustomerId = $value;
    }

    /**
     * @return string
     * @deprecated This field is not used by any payment product Name of the airline
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string
     * @deprecated This field is not used by any payment product Name of the airline
     */
    public function setName($value)
    {
        $this->name = $value;
    }

    /**
     * @return string
     * @deprecated Use passengers instead Name of passenger
     */
    public function getPassengerName()
    {
        return $this->passengerName;
    }

    /**
     * @param string
     * @deprecated Use passengers instead Name of passenger
     */
    public function setPassengerName($value)
    {
        $this->passengerName = $value;
    }

    /**
     * @return AirlinePassenger[]
     */
    public function getPassengers()
    {
        return $this->passengers;
    }

    /**
     * @param AirlinePassenger[]
     */
    public function setPassengers($value)
    {
        $this->passengers = $value;
    }

    /**
     * @return string
     * @deprecated This field is not used by any payment product Place of issue For sales in the US the last two characters (pos 14-15) must be the US state code.
     */
    public function getPlaceOfIssue()
    {
        return $this->placeOfIssue;
    }

    /**
     * @param string
     * @deprecated This field is not used by any payment product Place of issue For sales in the US the last two characters (pos 14-15) must be the US state code.
     */
    public function setPlaceOfIssue($value)
    {
        $this->placeOfIssue = $value;
    }

    /**
     * @return string
     * @deprecated Use passengers instead.
     */
    public function getPnr()
    {
        return $this->pnr;
    }

    /**
     * @param string
     * @deprecated Use passengers instead.
     */
    public function setPnr($value)
    {
        $this->pnr = $value;
    }

    /**
     * @return string
     */
    public function getPointOfSale()
    {
        return $this->pointOfSale;
    }

    /**
     * @param string
     */
    public function setPointOfSale($value)
    {
        $this->pointOfSale = $value;
    }

    /**
     * @return string
     * @deprecated This field is not used by any payment product City code of the point of sale
     */
    public function getPosCityCode()
    {
        return $this->posCityCode;
    }

    /**
     * @param string
     * @deprecated This field is not used by any payment product City code of the point of sale
     */
    public function setPosCityCode($value)
    {
        $this->posCityCode = $value;
    }

    /**
     * @return string
     */
    public function getTicketCurrency()
    {
        return $this->ticketCurrency;
    }

    /**
     * @param string
     */
    public function setTicketCurrency($value)
    {
        $this->ticketCurrency = $value;
    }

    /**
     * @return string
     * @deprecated This field is not used by any payment product Delivery method of the ticket
     */
    public function getTicketDeliveryMethod()
    {
        return $this->ticketDeliveryMethod;
    }

    /**
     * @param string
     * @deprecated This field is not used by any payment product Delivery method of the ticket
     */
    public function setTicketDeliveryMethod($value)
    {
        $this->ticketDeliveryMethod = $value;
    }

    /**
     * @return string
     */
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    /**
     * @param string
     */
    public function setTicketNumber($value)
    {
        $this->ticketNumber = $value;
    }

    /**
     * @return int
     */
    public function getTotalFare()
    {
        return $this->totalFare;
    }

    /**
     * @param int
     */
    public function setTotalFare($value)
    {
        $this->totalFare = $value;
    }

    /**
     * @return int
     */
    public function getTotalFee()
    {
        return $this->totalFee;
    }

    /**
     * @param int
     */
    public function setTotalFee($value)
    {
        $this->totalFee = $value;
    }

    /**
     * @return int
     */
    public function getTotalTaxes()
    {
        return $this->totalTaxes;
    }

    /**
     * @param int
     */
    public function setTotalTaxes($value)
    {
        $this->totalTaxes = $value;
    }

    /**
     * @return string
     */
    public function getTravelAgencyName()
    {
        return $this->travelAgencyName;
    }

    /**
     * @param string
     */
    public function setTravelAgencyName($value)
    {
        $this->travelAgencyName = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->agentNumericCode)) {
            $object->agentNumericCode = $this->agentNumericCode;
        }
        if (!is_null($this->code)) {
            $object->code = $this->code;
        }
        if (!is_null($this->flightDate)) {
            $object->flightDate = $this->flightDate;
        }
        if (!is_null($this->flightIndicator)) {
            $object->flightIndicator = $this->flightIndicator;
        }
        if (!is_null($this->flightLegs)) {
            $object->flightLegs = [];
            foreach ($this->flightLegs as $element) {
                if (!is_null($element)) {
                    $object->flightLegs[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->invoiceNumber)) {
            $object->invoiceNumber = $this->invoiceNumber;
        }
        if (!is_null($this->isETicket)) {
            $object->isETicket = $this->isETicket;
        }
        if (!is_null($this->isRestrictedTicket)) {
            $object->isRestrictedTicket = $this->isRestrictedTicket;
        }
        if (!is_null($this->isThirdParty)) {
            $object->isThirdParty = $this->isThirdParty;
        }
        if (!is_null($this->issueDate)) {
            $object->issueDate = $this->issueDate;
        }
        if (!is_null($this->merchantCustomerId)) {
            $object->merchantCustomerId = $this->merchantCustomerId;
        }
        if (!is_null($this->name)) {
            $object->name = $this->name;
        }
        if (!is_null($this->passengerName)) {
            $object->passengerName = $this->passengerName;
        }
        if (!is_null($this->passengers)) {
            $object->passengers = [];
            foreach ($this->passengers as $element) {
                if (!is_null($element)) {
                    $object->passengers[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->placeOfIssue)) {
            $object->placeOfIssue = $this->placeOfIssue;
        }
        if (!is_null($this->pnr)) {
            $object->pnr = $this->pnr;
        }
        if (!is_null($this->pointOfSale)) {
            $object->pointOfSale = $this->pointOfSale;
        }
        if (!is_null($this->posCityCode)) {
            $object->posCityCode = $this->posCityCode;
        }
        if (!is_null($this->ticketCurrency)) {
            $object->ticketCurrency = $this->ticketCurrency;
        }
        if (!is_null($this->ticketDeliveryMethod)) {
            $object->ticketDeliveryMethod = $this->ticketDeliveryMethod;
        }
        if (!is_null($this->ticketNumber)) {
            $object->ticketNumber = $this->ticketNumber;
        }
        if (!is_null($this->totalFare)) {
            $object->totalFare = $this->totalFare;
        }
        if (!is_null($this->totalFee)) {
            $object->totalFee = $this->totalFee;
        }
        if (!is_null($this->totalTaxes)) {
            $object->totalTaxes = $this->totalTaxes;
        }
        if (!is_null($this->travelAgencyName)) {
            $object->travelAgencyName = $this->travelAgencyName;
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
        if (property_exists($object, 'agentNumericCode')) {
            $this->agentNumericCode = $object->agentNumericCode;
        }
        if (property_exists($object, 'code')) {
            $this->code = $object->code;
        }
        if (property_exists($object, 'flightDate')) {
            $this->flightDate = $object->flightDate;
        }
        if (property_exists($object, 'flightIndicator')) {
            $this->flightIndicator = $object->flightIndicator;
        }
        if (property_exists($object, 'flightLegs')) {
            if (!is_array($object->flightLegs) && !is_object($object->flightLegs)) {
                throw new UnexpectedValueException('value \'' . print_r($object->flightLegs, true) . '\' is not an array or object');
            }
            $this->flightLegs = [];
            foreach ($object->flightLegs as $element) {
                $value = new AirlineFlightLeg();
                $this->flightLegs[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'invoiceNumber')) {
            $this->invoiceNumber = $object->invoiceNumber;
        }
        if (property_exists($object, 'isETicket')) {
            $this->isETicket = $object->isETicket;
        }
        if (property_exists($object, 'isRestrictedTicket')) {
            $this->isRestrictedTicket = $object->isRestrictedTicket;
        }
        if (property_exists($object, 'isThirdParty')) {
            $this->isThirdParty = $object->isThirdParty;
        }
        if (property_exists($object, 'issueDate')) {
            $this->issueDate = $object->issueDate;
        }
        if (property_exists($object, 'merchantCustomerId')) {
            $this->merchantCustomerId = $object->merchantCustomerId;
        }
        if (property_exists($object, 'name')) {
            $this->name = $object->name;
        }
        if (property_exists($object, 'passengerName')) {
            $this->passengerName = $object->passengerName;
        }
        if (property_exists($object, 'passengers')) {
            if (!is_array($object->passengers) && !is_object($object->passengers)) {
                throw new UnexpectedValueException('value \'' . print_r($object->passengers, true) . '\' is not an array or object');
            }
            $this->passengers = [];
            foreach ($object->passengers as $element) {
                $value = new AirlinePassenger();
                $this->passengers[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'placeOfIssue')) {
            $this->placeOfIssue = $object->placeOfIssue;
        }
        if (property_exists($object, 'pnr')) {
            $this->pnr = $object->pnr;
        }
        if (property_exists($object, 'pointOfSale')) {
            $this->pointOfSale = $object->pointOfSale;
        }
        if (property_exists($object, 'posCityCode')) {
            $this->posCityCode = $object->posCityCode;
        }
        if (property_exists($object, 'ticketCurrency')) {
            $this->ticketCurrency = $object->ticketCurrency;
        }
        if (property_exists($object, 'ticketDeliveryMethod')) {
            $this->ticketDeliveryMethod = $object->ticketDeliveryMethod;
        }
        if (property_exists($object, 'ticketNumber')) {
            $this->ticketNumber = $object->ticketNumber;
        }
        if (property_exists($object, 'totalFare')) {
            $this->totalFare = $object->totalFare;
        }
        if (property_exists($object, 'totalFee')) {
            $this->totalFee = $object->totalFee;
        }
        if (property_exists($object, 'totalTaxes')) {
            $this->totalTaxes = $object->totalTaxes;
        }
        if (property_exists($object, 'travelAgencyName')) {
            $this->travelAgencyName = $object->travelAgencyName;
        }
        return $this;
    }
}
