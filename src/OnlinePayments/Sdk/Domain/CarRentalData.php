<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CarRentalData extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $agreementNumber = null;

    /**
     * @var bool|null
     */
    public ?bool $cardholderNotified = null;

    /**
     * @var int|null
     */
    public ?int $chargesAmount = null;

    /**
     * @var string|null
     */
    public ?string $chargesCategory = null;

    /**
     * @var int|null
     */
    public ?int $distanceMeasure = null;

    /**
     * @var string|null
     */
    public ?string $distanceUnit = null;

    /**
     * @var string|null
     */
    public ?string $driverIdentificationNumber = null;

    /**
     * @var string|null
     */
    public ?string $driverTaxNumber = null;

    /**
     * @var CarRentalPickupReturnData|null
     */
    public ?CarRentalPickupReturnData $pickupDetails = null;

    /**
     * @var int|null
     */
    public ?int $rentalRateAmount = null;

    /**
     * @var string|null
     */
    public ?string $rentalRateType = null;

    /**
     * @var string|null
     */
    public ?string $renterName = null;

    /**
     * @var CarRentalPickupReturnData|null
     */
    public ?CarRentalPickupReturnData $returnDetails = null;

    /**
     * @var bool|null
     */
    public ?bool $taxExemptIndicator = null;

    /**
     * @var string|null
     */
    public ?string $tollFreeNumber = null;

    /**
     * @var CarRentalVehicleData|null
     */
    public ?CarRentalVehicleData $vehicle = null;

    /**
     * @return string|null
     */
    public function getAgreementNumber(): ?string
    {
        return $this->agreementNumber;
    }

    /**
     * @param string|null $value
     */
    public function setAgreementNumber(?string $value): void
    {
        $this->agreementNumber = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withAgreementNumber(?string $value): static
    {
        $this->agreementNumber = $value;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCardholderNotified(): ?bool
    {
        return $this->cardholderNotified;
    }

    /**
     * @param bool|null $value
     */
    public function setCardholderNotified(?bool $value): void
    {
        $this->cardholderNotified = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function withCardholderNotified(?bool $value): static
    {
        $this->cardholderNotified = $value;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getChargesAmount(): ?int
    {
        return $this->chargesAmount;
    }

    /**
     * @param int|null $value
     */
    public function setChargesAmount(?int $value): void
    {
        $this->chargesAmount = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withChargesAmount(?int $value): static
    {
        $this->chargesAmount = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getChargesCategory(): ?string
    {
        return $this->chargesCategory;
    }

    /**
     * @param string|null $value
     */
    public function setChargesCategory(?string $value): void
    {
        $this->chargesCategory = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withChargesCategory(?string $value): static
    {
        $this->chargesCategory = $value;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDistanceMeasure(): ?int
    {
        return $this->distanceMeasure;
    }

    /**
     * @param int|null $value
     */
    public function setDistanceMeasure(?int $value): void
    {
        $this->distanceMeasure = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withDistanceMeasure(?int $value): static
    {
        $this->distanceMeasure = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDistanceUnit(): ?string
    {
        return $this->distanceUnit;
    }

    /**
     * @param string|null $value
     */
    public function setDistanceUnit(?string $value): void
    {
        $this->distanceUnit = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withDistanceUnit(?string $value): static
    {
        $this->distanceUnit = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDriverIdentificationNumber(): ?string
    {
        return $this->driverIdentificationNumber;
    }

    /**
     * @param string|null $value
     */
    public function setDriverIdentificationNumber(?string $value): void
    {
        $this->driverIdentificationNumber = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withDriverIdentificationNumber(?string $value): static
    {
        $this->driverIdentificationNumber = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDriverTaxNumber(): ?string
    {
        return $this->driverTaxNumber;
    }

    /**
     * @param string|null $value
     */
    public function setDriverTaxNumber(?string $value): void
    {
        $this->driverTaxNumber = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withDriverTaxNumber(?string $value): static
    {
        $this->driverTaxNumber = $value;
        return $this;
    }

    /**
     * @return CarRentalPickupReturnData|null
     */
    public function getPickupDetails(): ?CarRentalPickupReturnData
    {
        return $this->pickupDetails;
    }

    /**
     * @param CarRentalPickupReturnData|null $value
     */
    public function setPickupDetails(?CarRentalPickupReturnData $value): void
    {
        $this->pickupDetails = $value;
    }

    /**
     * @param CarRentalPickupReturnData|null $value
     * @return $this
     */
    public function withPickupDetails(?CarRentalPickupReturnData $value): static
    {
        $this->pickupDetails = $value;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRentalRateAmount(): ?int
    {
        return $this->rentalRateAmount;
    }

    /**
     * @param int|null $value
     */
    public function setRentalRateAmount(?int $value): void
    {
        $this->rentalRateAmount = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withRentalRateAmount(?int $value): static
    {
        $this->rentalRateAmount = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRentalRateType(): ?string
    {
        return $this->rentalRateType;
    }

    /**
     * @param string|null $value
     */
    public function setRentalRateType(?string $value): void
    {
        $this->rentalRateType = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withRentalRateType(?string $value): static
    {
        $this->rentalRateType = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRenterName(): ?string
    {
        return $this->renterName;
    }

    /**
     * @param string|null $value
     */
    public function setRenterName(?string $value): void
    {
        $this->renterName = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withRenterName(?string $value): static
    {
        $this->renterName = $value;
        return $this;
    }

    /**
     * @return CarRentalPickupReturnData|null
     */
    public function getReturnDetails(): ?CarRentalPickupReturnData
    {
        return $this->returnDetails;
    }

    /**
     * @param CarRentalPickupReturnData|null $value
     */
    public function setReturnDetails(?CarRentalPickupReturnData $value): void
    {
        $this->returnDetails = $value;
    }

    /**
     * @param CarRentalPickupReturnData|null $value
     * @return $this
     */
    public function withReturnDetails(?CarRentalPickupReturnData $value): static
    {
        $this->returnDetails = $value;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getTaxExemptIndicator(): ?bool
    {
        return $this->taxExemptIndicator;
    }

    /**
     * @param bool|null $value
     */
    public function setTaxExemptIndicator(?bool $value): void
    {
        $this->taxExemptIndicator = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function withTaxExemptIndicator(?bool $value): static
    {
        $this->taxExemptIndicator = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTollFreeNumber(): ?string
    {
        return $this->tollFreeNumber;
    }

    /**
     * @param string|null $value
     */
    public function setTollFreeNumber(?string $value): void
    {
        $this->tollFreeNumber = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withTollFreeNumber(?string $value): static
    {
        $this->tollFreeNumber = $value;
        return $this;
    }

    /**
     * @return CarRentalVehicleData|null
     */
    public function getVehicle(): ?CarRentalVehicleData
    {
        return $this->vehicle;
    }

    /**
     * @param CarRentalVehicleData|null $value
     */
    public function setVehicle(?CarRentalVehicleData $value): void
    {
        $this->vehicle = $value;
    }

    /**
     * @param CarRentalVehicleData|null $value
     * @return $this
     */
    public function withVehicle(?CarRentalVehicleData $value): static
    {
        $this->vehicle = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->agreementNumber !== null) {
            $object->agreementNumber = $this->agreementNumber;
        }
        if ($this->cardholderNotified !== null) {
            $object->cardholderNotified = $this->cardholderNotified;
        }
        if ($this->chargesAmount !== null) {
            $object->chargesAmount = $this->chargesAmount;
        }
        if ($this->chargesCategory !== null) {
            $object->chargesCategory = $this->chargesCategory;
        }
        if ($this->distanceMeasure !== null) {
            $object->distanceMeasure = $this->distanceMeasure;
        }
        if ($this->distanceUnit !== null) {
            $object->distanceUnit = $this->distanceUnit;
        }
        if ($this->driverIdentificationNumber !== null) {
            $object->driverIdentificationNumber = $this->driverIdentificationNumber;
        }
        if ($this->driverTaxNumber !== null) {
            $object->driverTaxNumber = $this->driverTaxNumber;
        }
        if ($this->pickupDetails !== null) {
            $object->pickupDetails = $this->pickupDetails->toObject();
        }
        if ($this->rentalRateAmount !== null) {
            $object->rentalRateAmount = $this->rentalRateAmount;
        }
        if ($this->rentalRateType !== null) {
            $object->rentalRateType = $this->rentalRateType;
        }
        if ($this->renterName !== null) {
            $object->renterName = $this->renterName;
        }
        if ($this->returnDetails !== null) {
            $object->returnDetails = $this->returnDetails->toObject();
        }
        if ($this->taxExemptIndicator !== null) {
            $object->taxExemptIndicator = $this->taxExemptIndicator;
        }
        if ($this->tollFreeNumber !== null) {
            $object->tollFreeNumber = $this->tollFreeNumber;
        }
        if ($this->vehicle !== null) {
            $object->vehicle = $this->vehicle->toObject();
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
        if (property_exists($object, 'agreementNumber')) {
            $this->agreementNumber = $object->agreementNumber;
        }
        if (property_exists($object, 'cardholderNotified')) {
            $this->cardholderNotified = $object->cardholderNotified;
        }
        if (property_exists($object, 'chargesAmount')) {
            $this->chargesAmount = $object->chargesAmount;
        }
        if (property_exists($object, 'chargesCategory')) {
            $this->chargesCategory = $object->chargesCategory;
        }
        if (property_exists($object, 'distanceMeasure')) {
            $this->distanceMeasure = $object->distanceMeasure;
        }
        if (property_exists($object, 'distanceUnit')) {
            $this->distanceUnit = $object->distanceUnit;
        }
        if (property_exists($object, 'driverIdentificationNumber')) {
            $this->driverIdentificationNumber = $object->driverIdentificationNumber;
        }
        if (property_exists($object, 'driverTaxNumber')) {
            $this->driverTaxNumber = $object->driverTaxNumber;
        }
        if (property_exists($object, 'pickupDetails')) {
            if (!is_object($object->pickupDetails)) {
                throw new UnexpectedValueException('value \'' . print_r($object->pickupDetails, true) . '\' is not an object');
            }
            $value = new CarRentalPickupReturnData();
            $this->pickupDetails = $value->fromObject($object->pickupDetails);
        }
        if (property_exists($object, 'rentalRateAmount')) {
            $this->rentalRateAmount = $object->rentalRateAmount;
        }
        if (property_exists($object, 'rentalRateType')) {
            $this->rentalRateType = $object->rentalRateType;
        }
        if (property_exists($object, 'renterName')) {
            $this->renterName = $object->renterName;
        }
        if (property_exists($object, 'returnDetails')) {
            if (!is_object($object->returnDetails)) {
                throw new UnexpectedValueException('value \'' . print_r($object->returnDetails, true) . '\' is not an object');
            }
            $value = new CarRentalPickupReturnData();
            $this->returnDetails = $value->fromObject($object->returnDetails);
        }
        if (property_exists($object, 'taxExemptIndicator')) {
            $this->taxExemptIndicator = $object->taxExemptIndicator;
        }
        if (property_exists($object, 'tollFreeNumber')) {
            $this->tollFreeNumber = $object->tollFreeNumber;
        }
        if (property_exists($object, 'vehicle')) {
            if (!is_object($object->vehicle)) {
                throw new UnexpectedValueException('value \'' . print_r($object->vehicle, true) . '\' is not an object');
            }
            $value = new CarRentalVehicleData();
            $this->vehicle = $value->fromObject($object->vehicle);
        }
        return $this;
    }
}
