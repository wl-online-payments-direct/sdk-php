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
     * @var string|null
     */
    public ?string $agentNumericCode = null;

    /**
     * @var string|null
     */
    public ?string $code = null;

    /**
     * @var string|null
     * @deprecated This field is not used by any payment product Date of the Flight Format: YYYYMMDD
     */
    public ?string $flightDate = null;

    /**
     * @var string|null
     */
    public ?string $flightIndicator = null;

    /**
     * @var AirlineFlightLeg[]|null
     */
    public ?array $flightLegs = null;

    /**
     * @var string|null
     */
    public ?string $invoiceNumber = null;

    /**
     * @var bool|null
     * @deprecated Deprecated
     */
    public ?bool $isETicket = null;

    /**
     * @var bool|null
     */
    public ?bool $isRestrictedTicket = null;

    /**
     * @var bool|null
     * @deprecated This field is not used by any payment product  * true - The payer is the ticket holder  * false - The payer is not the ticket holder
     */
    public ?bool $isThirdParty = null;

    /**
     * @var string|null
     */
    public ?string $issueDate = null;

    /**
     * @var string|null
     */
    public ?string $merchantCustomerId = null;

    /**
     * @var string|null
     * @deprecated This field is not used by any payment product Name of the airline
     */
    public ?string $name = null;

    /**
     * @var string|null
     * @deprecated Use passengers instead Name of passenger
     */
    public ?string $passengerName = null;

    /**
     * @var AirlinePassenger[]|null
     */
    public ?array $passengers = null;

    /**
     * @var string|null
     * @deprecated This field is not used by any payment product Place of issue For sales in the US the last two characters (pos 14-15) must be the US state code.
     */
    public ?string $placeOfIssue = null;

    /**
     * @var string|null
     * @deprecated Use passengers instead.
     */
    public ?string $pnr = null;

    /**
     * @var string|null
     */
    public ?string $pointOfSale = null;

    /**
     * @var string|null
     * @deprecated This field is not used by any payment product City code of the point of sale
     */
    public ?string $posCityCode = null;

    /**
     * @var string|null
     */
    public ?string $ticketCurrency = null;

    /**
     * @var string|null
     * @deprecated This field is not used by any payment product Delivery method of the ticket
     */
    public ?string $ticketDeliveryMethod = null;

    /**
     * @var string|null
     */
    public ?string $ticketNumber = null;

    /**
     * @var int|null
     */
    public ?int $totalFare = null;

    /**
     * @var int|null
     */
    public ?int $totalFee = null;

    /**
     * @var int|null
     */
    public ?int $totalTaxes = null;

    /**
     * @var string|null
     */
    public ?string $travelAgencyName = null;

    /**
     * @return string|null
     */
    public function getAgentNumericCode(): ?string
    {
        return $this->agentNumericCode;
    }

    /**
     * @param string|null $value
     */
    public function setAgentNumericCode(?string $value): void
    {
        $this->agentNumericCode = $value;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $value
     */
    public function setCode(?string $value): void
    {
        $this->code = $value;
    }

    /**
     * @return string|null
     * @deprecated This field is not used by any payment product Date of the Flight Format: YYYYMMDD
     */
    public function getFlightDate(): ?string
    {
        return $this->flightDate;
    }

    /**
     * @param string|null $value
     * @deprecated This field is not used by any payment product Date of the Flight Format: YYYYMMDD
     */
    public function setFlightDate(?string $value): void
    {
        $this->flightDate = $value;
    }

    /**
     * @return string|null
     */
    public function getFlightIndicator(): ?string
    {
        return $this->flightIndicator;
    }

    /**
     * @param string|null $value
     */
    public function setFlightIndicator(?string $value): void
    {
        $this->flightIndicator = $value;
    }

    /**
     * @return AirlineFlightLeg[]|null
     */
    public function getFlightLegs(): ?array
    {
        return $this->flightLegs;
    }

    /**
     * @param AirlineFlightLeg[]|null $value
     */
    public function setFlightLegs(?array $value): void
    {
        $this->flightLegs = $value;
    }

    /**
     * @return string|null
     */
    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }

    /**
     * @param string|null $value
     */
    public function setInvoiceNumber(?string $value): void
    {
        $this->invoiceNumber = $value;
    }

    /**
     * @return bool|null
     * @deprecated Deprecated
     */
    public function getIsETicket(): ?bool
    {
        return $this->isETicket;
    }

    /**
     * @param bool|null $value
     * @deprecated Deprecated
     */
    public function setIsETicket(?bool $value): void
    {
        $this->isETicket = $value;
    }

    /**
     * @return bool|null
     */
    public function getIsRestrictedTicket(): ?bool
    {
        return $this->isRestrictedTicket;
    }

    /**
     * @param bool|null $value
     */
    public function setIsRestrictedTicket(?bool $value): void
    {
        $this->isRestrictedTicket = $value;
    }

    /**
     * @return bool|null
     * @deprecated This field is not used by any payment product  * true - The payer is the ticket holder  * false - The payer is not the ticket holder
     */
    public function getIsThirdParty(): ?bool
    {
        return $this->isThirdParty;
    }

    /**
     * @param bool|null $value
     * @deprecated This field is not used by any payment product  * true - The payer is the ticket holder  * false - The payer is not the ticket holder
     */
    public function setIsThirdParty(?bool $value): void
    {
        $this->isThirdParty = $value;
    }

    /**
     * @return string|null
     */
    public function getIssueDate(): ?string
    {
        return $this->issueDate;
    }

    /**
     * @param string|null $value
     */
    public function setIssueDate(?string $value): void
    {
        $this->issueDate = $value;
    }

    /**
     * @return string|null
     */
    public function getMerchantCustomerId(): ?string
    {
        return $this->merchantCustomerId;
    }

    /**
     * @param string|null $value
     */
    public function setMerchantCustomerId(?string $value): void
    {
        $this->merchantCustomerId = $value;
    }

    /**
     * @return string|null
     * @deprecated This field is not used by any payment product Name of the airline
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $value
     * @deprecated This field is not used by any payment product Name of the airline
     */
    public function setName(?string $value): void
    {
        $this->name = $value;
    }

    /**
     * @return string|null
     * @deprecated Use passengers instead Name of passenger
     */
    public function getPassengerName(): ?string
    {
        return $this->passengerName;
    }

    /**
     * @param string|null $value
     * @deprecated Use passengers instead Name of passenger
     */
    public function setPassengerName(?string $value): void
    {
        $this->passengerName = $value;
    }

    /**
     * @return AirlinePassenger[]|null
     */
    public function getPassengers(): ?array
    {
        return $this->passengers;
    }

    /**
     * @param AirlinePassenger[]|null $value
     */
    public function setPassengers(?array $value): void
    {
        $this->passengers = $value;
    }

    /**
     * @return string|null
     * @deprecated This field is not used by any payment product Place of issue For sales in the US the last two characters (pos 14-15) must be the US state code.
     */
    public function getPlaceOfIssue(): ?string
    {
        return $this->placeOfIssue;
    }

    /**
     * @param string|null $value
     * @deprecated This field is not used by any payment product Place of issue For sales in the US the last two characters (pos 14-15) must be the US state code.
     */
    public function setPlaceOfIssue(?string $value): void
    {
        $this->placeOfIssue = $value;
    }

    /**
     * @return string|null
     * @deprecated Use passengers instead.
     */
    public function getPnr(): ?string
    {
        return $this->pnr;
    }

    /**
     * @param string|null $value
     * @deprecated Use passengers instead.
     */
    public function setPnr(?string $value): void
    {
        $this->pnr = $value;
    }

    /**
     * @return string|null
     */
    public function getPointOfSale(): ?string
    {
        return $this->pointOfSale;
    }

    /**
     * @param string|null $value
     */
    public function setPointOfSale(?string $value): void
    {
        $this->pointOfSale = $value;
    }

    /**
     * @return string|null
     * @deprecated This field is not used by any payment product City code of the point of sale
     */
    public function getPosCityCode(): ?string
    {
        return $this->posCityCode;
    }

    /**
     * @param string|null $value
     * @deprecated This field is not used by any payment product City code of the point of sale
     */
    public function setPosCityCode(?string $value): void
    {
        $this->posCityCode = $value;
    }

    /**
     * @return string|null
     */
    public function getTicketCurrency(): ?string
    {
        return $this->ticketCurrency;
    }

    /**
     * @param string|null $value
     */
    public function setTicketCurrency(?string $value): void
    {
        $this->ticketCurrency = $value;
    }

    /**
     * @return string|null
     * @deprecated This field is not used by any payment product Delivery method of the ticket
     */
    public function getTicketDeliveryMethod(): ?string
    {
        return $this->ticketDeliveryMethod;
    }

    /**
     * @param string|null $value
     * @deprecated This field is not used by any payment product Delivery method of the ticket
     */
    public function setTicketDeliveryMethod(?string $value): void
    {
        $this->ticketDeliveryMethod = $value;
    }

    /**
     * @return string|null
     */
    public function getTicketNumber(): ?string
    {
        return $this->ticketNumber;
    }

    /**
     * @param string|null $value
     */
    public function setTicketNumber(?string $value): void
    {
        $this->ticketNumber = $value;
    }

    /**
     * @return int|null
     */
    public function getTotalFare(): ?int
    {
        return $this->totalFare;
    }

    /**
     * @param int|null $value
     */
    public function setTotalFare(?int $value): void
    {
        $this->totalFare = $value;
    }

    /**
     * @return int|null
     */
    public function getTotalFee(): ?int
    {
        return $this->totalFee;
    }

    /**
     * @param int|null $value
     */
    public function setTotalFee(?int $value): void
    {
        $this->totalFee = $value;
    }

    /**
     * @return int|null
     */
    public function getTotalTaxes(): ?int
    {
        return $this->totalTaxes;
    }

    /**
     * @param int|null $value
     */
    public function setTotalTaxes(?int $value): void
    {
        $this->totalTaxes = $value;
    }

    /**
     * @return string|null
     */
    public function getTravelAgencyName(): ?string
    {
        return $this->travelAgencyName;
    }

    /**
     * @param string|null $value
     */
    public function setTravelAgencyName(?string $value): void
    {
        $this->travelAgencyName = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): AirlineData
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
