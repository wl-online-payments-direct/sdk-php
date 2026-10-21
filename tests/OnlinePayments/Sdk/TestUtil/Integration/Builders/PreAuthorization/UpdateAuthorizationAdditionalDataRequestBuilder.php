<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\PreAuthorization;

use OnlinePayments\Sdk\Domain\CarRentalData;
use OnlinePayments\Sdk\Domain\CarRentalPickupReturnData;
use OnlinePayments\Sdk\Domain\CarRentalVehicleData;
use OnlinePayments\Sdk\Domain\UpdateAuthorizationAdditionalDataRequest;

class UpdateAuthorizationAdditionalDataRequestBuilder
{
    private string $chargesCategory = 'gas';
    private bool $minimal = false;

    public static function create(): self
    {
        return new self();
    }

    public function withChargesCategory(string $chargesCategory): self
    {
        $this->chargesCategory = $chargesCategory;
        return $this;
    }

    public function withMinimalCarRentalData(): self
    {
        $this->minimal = true;
        return $this;
    }

    public function build(): UpdateAuthorizationAdditionalDataRequest
    {
        $request = new UpdateAuthorizationAdditionalDataRequest();
        $request->setCarRentalData($this->minimal ? $this->buildMinimalCarRentalData() : $this->buildFullCarRentalData());

        return $request;
    }

    private function buildMinimalCarRentalData(): CarRentalData
    {
        $carRentalData = new CarRentalData();
        $carRentalData->setAgreementNumber('A1234567');
        $carRentalData->setChargesAmount(0);
        $carRentalData->setChargesCategory($this->chargesCategory);
        $carRentalData->setPickupDetails($this->buildPickupReturnDetails('2026-09-28T090000.000Z'));
        $carRentalData->setReturnDetails($this->buildPickupReturnDetails('2026-09-30T090000.000Z'));
        $carRentalData->setRentalRateAmount(1000);
        $carRentalData->setRentalRateType('daily');
        $carRentalData->setRenterName('Wile E. Coyote');

        return $carRentalData;
    }

    private function buildFullCarRentalData(): CarRentalData
    {
        $vehicle = new CarRentalVehicleData();
        $vehicle->setClassId('CDMR');
        $vehicle->setIdentificationNumber('VIN123456');

        $carRentalData = $this->buildMinimalCarRentalData();
        $carRentalData->setCardholderNotified(true);
        $carRentalData->setDistanceMeasure(250);
        $carRentalData->setDistanceUnit('kilometers');
        $carRentalData->setDriverIdentificationNumber('DRV123456');
        $carRentalData->setDriverTaxNumber('BE0123456789');
        $carRentalData->setTaxExemptIndicator(false);
        $carRentalData->setTollFreeNumber('0800123456');
        $carRentalData->setVehicle($vehicle);

        return $carRentalData;
    }

    private function buildPickupReturnDetails(string $date): CarRentalPickupReturnData
    {
        $details = new CarRentalPickupReturnData();
        $details->setAddress('Da Vincilaan 3');
        $details->setCity('Brussels');
        $details->setCountry(56);
        $details->setDate($date);
        $details->setLocation('Brussels Airport');
        $details->setPostcode('1930');
        $details->setState('Flemish Brabant');

        return $details;
    }
}
