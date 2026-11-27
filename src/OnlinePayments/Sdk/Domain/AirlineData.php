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
     *
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
     *
     * @deprecated Deprecated
     */
    public ?bool $isETicket = null;

    /**
     * @var bool|null
     */
    public ?bool $isRestrictedTicket = null;

    /**
     * @var bool|null
     *
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
     *
     * @deprecated This field is not used by any payment product Name of the airline
     */
    public ?string $name = null;

    /**
     * @var string|null
     *
     * @deprecated Use passengers instead Name of passenger
     */
    public ?string $passengerName = null;

    /**
     * @var AirlinePassenger[]|null
     */
    public ?array $passengers = null;

    /**
     * @var string|null
     *
     * @deprecated This field is not used by any payment product Place of issue For sales in the US the last two characters (pos 14-15) must be the US state code.
     */
    public ?string $placeOfIssue = null;

    /**
     * @var string|null
     *
     * @deprecated Use passengers instead.
     */
    public ?string $pnr = null;

    /**
     * @var string|null
     */
    public ?string $pointOfSale = null;

    /**
     * @var string|null
     *
     * @deprecated This field is not used by any payment product City code of the point of sale
     */
    public ?string $posCityCode = null;

    /**
     * @var string|null
     */
    public ?string $ticketCurrency = null;

    /**
     * @var string|null
     *
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
     * @param string|null $value
     * @return $this
     */
    public function withAgentNumericCode(?string $value): static
    {
        $this->agentNumericCode = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withCode(?string $value): static
    {
        $this->code = $value;
        return $this;
    }

    /**
     * @return string|null
     *
     * @deprecated This field is not used by any payment product Date of the Flight Format: YYYYMMDD
     */
    public function getFlightDate(): ?string
    {
        return $this->flightDate;
    }

    /**
     * @param string|null $value
     *
     * @deprecated This field is not used by any payment product Date of the Flight Format: YYYYMMDD
     */
    public function setFlightDate(?string $value): void
    {
        $this->flightDate = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     *
     * @deprecated This field is not used by any payment product Date of the Flight Format: YYYYMMDD
     */
    public function withFlightDate(?string $value): static
    {
        $this->flightDate = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withFlightIndicator(?string $value): static
    {
        $this->flightIndicator = $value;
        return $this;
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
     * @param AirlineFlightLeg[]|null $value
     * @return $this
     */
    public function withFlightLegs(?array $value): static
    {
        $this->flightLegs = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withInvoiceNumber(?string $value): static
    {
        $this->invoiceNumber = $value;
        return $this;
    }

    /**
     * @return bool|null
     *
     * @deprecated Deprecated
     */
    public function getIsETicket(): ?bool
    {
        return $this->isETicket;
    }

    /**
     * @param bool|null $value
     *
     * @deprecated Deprecated
     */
    public function setIsETicket(?bool $value): void
    {
        $this->isETicket = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     *
     * @deprecated Deprecated
     */
    public function withIsETicket(?bool $value): static
    {
        $this->isETicket = $value;
        return $this;
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
     * @param bool|null $value
     * @return $this
     */
    public function withIsRestrictedTicket(?bool $value): static
    {
        $this->isRestrictedTicket = $value;
        return $this;
    }

    /**
     * @return bool|null
     *
     * @deprecated This field is not used by any payment product  * true - The payer is the ticket holder  * false - The payer is not the ticket holder
     */
    public function getIsThirdParty(): ?bool
    {
        return $this->isThirdParty;
    }

    /**
     * @param bool|null $value
     *
     * @deprecated This field is not used by any payment product  * true - The payer is the ticket holder  * false - The payer is not the ticket holder
     */
    public function setIsThirdParty(?bool $value): void
    {
        $this->isThirdParty = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     *
     * @deprecated This field is not used by any payment product  * true - The payer is the ticket holder  * false - The payer is not the ticket holder
     */
    public function withIsThirdParty(?bool $value): static
    {
        $this->isThirdParty = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withIssueDate(?string $value): static
    {
        $this->issueDate = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withMerchantCustomerId(?string $value): static
    {
        $this->merchantCustomerId = $value;
        return $this;
    }

    /**
     * @return string|null
     *
     * @deprecated This field is not used by any payment product Name of the airline
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $value
     *
     * @deprecated This field is not used by any payment product Name of the airline
     */
    public function setName(?string $value): void
    {
        $this->name = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     *
     * @deprecated This field is not used by any payment product Name of the airline
     */
    public function withName(?string $value): static
    {
        $this->name = $value;
        return $this;
    }

    /**
     * @return string|null
     *
     * @deprecated Use passengers instead Name of passenger
     */
    public function getPassengerName(): ?string
    {
        return $this->passengerName;
    }

    /**
     * @param string|null $value
     *
     * @deprecated Use passengers instead Name of passenger
     */
    public function setPassengerName(?string $value): void
    {
        $this->passengerName = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     *
     * @deprecated Use passengers instead Name of passenger
     */
    public function withPassengerName(?string $value): static
    {
        $this->passengerName = $value;
        return $this;
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
     * @param AirlinePassenger[]|null $value
     * @return $this
     */
    public function withPassengers(?array $value): static
    {
        $this->passengers = $value;
        return $this;
    }

    /**
     * @return string|null
     *
     * @deprecated This field is not used by any payment product Place of issue For sales in the US the last two characters (pos 14-15) must be the US state code.
     */
    public function getPlaceOfIssue(): ?string
    {
        return $this->placeOfIssue;
    }

    /**
     * @param string|null $value
     *
     * @deprecated This field is not used by any payment product Place of issue For sales in the US the last two characters (pos 14-15) must be the US state code.
     */
    public function setPlaceOfIssue(?string $value): void
    {
        $this->placeOfIssue = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     *
     * @deprecated This field is not used by any payment product Place of issue For sales in the US the last two characters (pos 14-15) must be the US state code.
     */
    public function withPlaceOfIssue(?string $value): static
    {
        $this->placeOfIssue = $value;
        return $this;
    }

    /**
     * @return string|null
     *
     * @deprecated Use passengers instead.
     */
    public function getPnr(): ?string
    {
        return $this->pnr;
    }

    /**
     * @param string|null $value
     *
     * @deprecated Use passengers instead.
     */
    public function setPnr(?string $value): void
    {
        $this->pnr = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     *
     * @deprecated Use passengers instead.
     */
    public function withPnr(?string $value): static
    {
        $this->pnr = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withPointOfSale(?string $value): static
    {
        $this->pointOfSale = $value;
        return $this;
    }

    /**
     * @return string|null
     *
     * @deprecated This field is not used by any payment product City code of the point of sale
     */
    public function getPosCityCode(): ?string
    {
        return $this->posCityCode;
    }

    /**
     * @param string|null $value
     *
     * @deprecated This field is not used by any payment product City code of the point of sale
     */
    public function setPosCityCode(?string $value): void
    {
        $this->posCityCode = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     *
     * @deprecated This field is not used by any payment product City code of the point of sale
     */
    public function withPosCityCode(?string $value): static
    {
        $this->posCityCode = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withTicketCurrency(?string $value): static
    {
        $this->ticketCurrency = $value;
        return $this;
    }

    /**
     * @return string|null
     *
     * @deprecated This field is not used by any payment product Delivery method of the ticket
     */
    public function getTicketDeliveryMethod(): ?string
    {
        return $this->ticketDeliveryMethod;
    }

    /**
     * @param string|null $value
     *
     * @deprecated This field is not used by any payment product Delivery method of the ticket
     */
    public function setTicketDeliveryMethod(?string $value): void
    {
        $this->ticketDeliveryMethod = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     *
     * @deprecated This field is not used by any payment product Delivery method of the ticket
     */
    public function withTicketDeliveryMethod(?string $value): static
    {
        $this->ticketDeliveryMethod = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withTicketNumber(?string $value): static
    {
        $this->ticketNumber = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withTotalFare(?int $value): static
    {
        $this->totalFare = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withTotalFee(?int $value): static
    {
        $this->totalFee = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withTotalTaxes(?int $value): static
    {
        $this->totalTaxes = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withTravelAgencyName(?string $value): static
    {
        $this->travelAgencyName = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
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
