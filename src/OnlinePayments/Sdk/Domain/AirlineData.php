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
class AirlineData extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $agentNumericCode;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $flightDate;

    /**
     * @var string
     */
    private $flightIndicator;

    /**
     * @var AirlineFlightLeg[]
     */
    private $flightLegs;

    /**
     * @var string
     */
    private $invoiceNumber;

    /**
     * @var bool
     */
    private $isETicket;

    /**
     * @var bool
     */
    private $isRestrictedTicket;

    /**
     * @var bool
     */
    private $isThirdParty;

    /**
     * @var string
     */
    private $issueDate;

    /**
     * @var string
     */
    private $merchantCustomerId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $passengerName;

    /**
     * @var AirlinePassenger[]
     */
    private $passengers;

    /**
     * @var string
     */
    private $placeOfIssue;

    /**
     * @var string
     */
    private $pnr;

    /**
     * @var string
     */
    private $pointOfSale;

    /**
     * @var string
     */
    private $posCityCode;

    /**
     * @var string
     */
    private $ticketCurrency;

    /**
     * @var string
     */
    private $ticketDeliveryMethod;

    /**
     * @var string
     */
    private $ticketNumber;

    /**
     * @var int
     */
    private $totalFare;

    /**
     * @var int
     */
    private $totalFee;

    /**
     * @var int
     */
    private $totalTaxes;

    /**
     * @var string
     */
    private $travelAgencyName;

    // Methods
    /**
     * @return string
     */
    public function getAgentNumericCode()
    {
        return $this->agentNumericCode;
    }
    /**
     * @var string
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
     * @var string
     */
    public function setCode($value)
    {
        $this->code = $value;
    }

    /**
     * @return string
     */
    public function getFlightDate()
    {
        return $this->flightDate;
    }
    /**
     * @var string
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
     * @var string
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
     * @var AirlineFlightLeg[]
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
     * @var string
     */
    public function setInvoiceNumber($value)
    {
        $this->invoiceNumber = $value;
    }

    /**
     * @return bool
     */
    public function getIsETicket()
    {
        return $this->isETicket;
    }
    /**
     * @var bool
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
     * @var bool
     */
    public function setIsRestrictedTicket($value)
    {
        $this->isRestrictedTicket = $value;
    }

    /**
     * @return bool
     */
    public function getIsThirdParty()
    {
        return $this->isThirdParty;
    }
    /**
     * @var bool
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
     * @var string
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
     * @var string
     */
    public function setMerchantCustomerId($value)
    {
        $this->merchantCustomerId = $value;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var string
     */
    public function setName($value)
    {
        $this->name = $value;
    }

    /**
     * @return string
     */
    public function getPassengerName()
    {
        return $this->passengerName;
    }
    /**
     * @var string
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
     * @var AirlinePassenger[]
     */
    public function setPassengers($value)
    {
        $this->passengers = $value;
    }

    /**
     * @return string
     */
    public function getPlaceOfIssue()
    {
        return $this->placeOfIssue;
    }
    /**
     * @var string
     */
    public function setPlaceOfIssue($value)
    {
        $this->placeOfIssue = $value;
    }

    /**
     * @return string
     */
    public function getPnr()
    {
        return $this->pnr;
    }
    /**
     * @var string
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
     * @var string
     */
    public function setPointOfSale($value)
    {
        $this->pointOfSale = $value;
    }

    /**
     * @return string
     */
    public function getPosCityCode()
    {
        return $this->posCityCode;
    }
    /**
     * @var string
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
     * @var string
     */
    public function setTicketCurrency($value)
    {
        $this->ticketCurrency = $value;
    }

    /**
     * @return string
     */
    public function getTicketDeliveryMethod()
    {
        return $this->ticketDeliveryMethod;
    }
    /**
     * @var string
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
     * @var string
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
     * @var int
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
     * @var int
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
     * @var int
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
     * @var string
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
        if ($this->agentNumericCode !== null) {
            $object->agentNumericCode = $this->agentNumericCode;
        }
        if ($this->code !== null) {
            $object->code = $this->code;
        }
        if ($this->flightDate !== null) {
            $object->flightDate = $this->flightDate;
        }
        if ($this->flightIndicator !== null) {
            $object->flightIndicator = $this->flightIndicator;
        }
        if ($this->flightLegs !== null) {
            $object->flightLegs = [];
            foreach ($this->flightLegs as $element) {
                if ($element !== null) {
                    $object->flightLegs[] = $element->toObject();
                }
            }
        }
        if ($this->invoiceNumber !== null) {
            $object->invoiceNumber = $this->invoiceNumber;
        }
        if ($this->isETicket !== null) {
            $object->isETicket = $this->isETicket;
        }
        if ($this->isRestrictedTicket !== null) {
            $object->isRestrictedTicket = $this->isRestrictedTicket;
        }
        if ($this->isThirdParty !== null) {
            $object->isThirdParty = $this->isThirdParty;
        }
        if ($this->issueDate !== null) {
            $object->issueDate = $this->issueDate;
        }
        if ($this->merchantCustomerId !== null) {
            $object->merchantCustomerId = $this->merchantCustomerId;
        }
        if ($this->name !== null) {
            $object->name = $this->name;
        }
        if ($this->passengerName !== null) {
            $object->passengerName = $this->passengerName;
        }
        if ($this->passengers !== null) {
            $object->passengers = [];
            foreach ($this->passengers as $element) {
                if ($element !== null) {
                    $object->passengers[] = $element->toObject();
                }
            }
        }
        if ($this->placeOfIssue !== null) {
            $object->placeOfIssue = $this->placeOfIssue;
        }
        if ($this->pnr !== null) {
            $object->pnr = $this->pnr;
        }
        if ($this->pointOfSale !== null) {
            $object->pointOfSale = $this->pointOfSale;
        }
        if ($this->posCityCode !== null) {
            $object->posCityCode = $this->posCityCode;
        }
        if ($this->ticketCurrency !== null) {
            $object->ticketCurrency = $this->ticketCurrency;
        }
        if ($this->ticketDeliveryMethod !== null) {
            $object->ticketDeliveryMethod = $this->ticketDeliveryMethod;
        }
        if ($this->ticketNumber !== null) {
            $object->ticketNumber = $this->ticketNumber;
        }
        if ($this->totalFare !== null) {
            $object->totalFare = $this->totalFare;
        }
        if ($this->totalFee !== null) {
            $object->totalFee = $this->totalFee;
        }
        if ($this->totalTaxes !== null) {
            $object->totalTaxes = $this->totalTaxes;
        }
        if ($this->travelAgencyName !== null) {
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
