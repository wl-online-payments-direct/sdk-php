<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductFieldValidators extends DataObject
{
    /**
     * @var EmptyValidator|null
     */
    public ?EmptyValidator $emailAddress = null;

    /**
     * @var EmptyValidator|null
     */
    public ?EmptyValidator $expirationDate = null;

    /**
     * @var FixedListValidator|null
     */
    public ?FixedListValidator $fixedList = null;

    /**
     * @var EmptyValidator|null
     */
    public ?EmptyValidator $iban = null;

    /**
     * @var LengthValidator|null
     */
    public ?LengthValidator $length = null;

    /**
     * @var EmptyValidator|null
     */
    public ?EmptyValidator $luhn = null;

    /**
     * @var RangeValidator|null
     */
    public ?RangeValidator $range = null;

    /**
     * @var RegularExpressionValidator|null
     */
    public ?RegularExpressionValidator $regularExpression = null;

    /**
     * @var EmptyValidator|null
     */
    public ?EmptyValidator $termsAndConditions = null;

    /**
     * @return EmptyValidator|null
     */
    public function getEmailAddress(): ?EmptyValidator
    {
        return $this->emailAddress;
    }

    /**
     * @param EmptyValidator|null $value
     */
    public function setEmailAddress(?EmptyValidator $value): void
    {
        $this->emailAddress = $value;
    }

    /**
     * @return EmptyValidator|null
     */
    public function getExpirationDate(): ?EmptyValidator
    {
        return $this->expirationDate;
    }

    /**
     * @param EmptyValidator|null $value
     */
    public function setExpirationDate(?EmptyValidator $value): void
    {
        $this->expirationDate = $value;
    }

    /**
     * @return FixedListValidator|null
     */
    public function getFixedList(): ?FixedListValidator
    {
        return $this->fixedList;
    }

    /**
     * @param FixedListValidator|null $value
     */
    public function setFixedList(?FixedListValidator $value): void
    {
        $this->fixedList = $value;
    }

    /**
     * @return EmptyValidator|null
     */
    public function getIban(): ?EmptyValidator
    {
        return $this->iban;
    }

    /**
     * @param EmptyValidator|null $value
     */
    public function setIban(?EmptyValidator $value): void
    {
        $this->iban = $value;
    }

    /**
     * @return LengthValidator|null
     */
    public function getLength(): ?LengthValidator
    {
        return $this->length;
    }

    /**
     * @param LengthValidator|null $value
     */
    public function setLength(?LengthValidator $value): void
    {
        $this->length = $value;
    }

    /**
     * @return EmptyValidator|null
     */
    public function getLuhn(): ?EmptyValidator
    {
        return $this->luhn;
    }

    /**
     * @param EmptyValidator|null $value
     */
    public function setLuhn(?EmptyValidator $value): void
    {
        $this->luhn = $value;
    }

    /**
     * @return RangeValidator|null
     */
    public function getRange(): ?RangeValidator
    {
        return $this->range;
    }

    /**
     * @param RangeValidator|null $value
     */
    public function setRange(?RangeValidator $value): void
    {
        $this->range = $value;
    }

    /**
     * @return RegularExpressionValidator|null
     */
    public function getRegularExpression(): ?RegularExpressionValidator
    {
        return $this->regularExpression;
    }

    /**
     * @param RegularExpressionValidator|null $value
     */
    public function setRegularExpression(?RegularExpressionValidator $value): void
    {
        $this->regularExpression = $value;
    }

    /**
     * @return EmptyValidator|null
     */
    public function getTermsAndConditions(): ?EmptyValidator
    {
        return $this->termsAndConditions;
    }

    /**
     * @param EmptyValidator|null $value
     */
    public function setTermsAndConditions(?EmptyValidator $value): void
    {
        $this->termsAndConditions = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->emailAddress)) {
            $object->emailAddress = $this->emailAddress->toObject();
        }
        if (!is_null($this->expirationDate)) {
            $object->expirationDate = $this->expirationDate->toObject();
        }
        if (!is_null($this->fixedList)) {
            $object->fixedList = $this->fixedList->toObject();
        }
        if (!is_null($this->iban)) {
            $object->iban = $this->iban->toObject();
        }
        if (!is_null($this->length)) {
            $object->length = $this->length->toObject();
        }
        if (!is_null($this->luhn)) {
            $object->luhn = $this->luhn->toObject();
        }
        if (!is_null($this->range)) {
            $object->range = $this->range->toObject();
        }
        if (!is_null($this->regularExpression)) {
            $object->regularExpression = $this->regularExpression->toObject();
        }
        if (!is_null($this->termsAndConditions)) {
            $object->termsAndConditions = $this->termsAndConditions->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProductFieldValidators
    {
        parent::fromObject($object);
        if (property_exists($object, 'emailAddress')) {
            if (!is_object($object->emailAddress)) {
                throw new UnexpectedValueException('value \'' . print_r($object->emailAddress, true) . '\' is not an object');
            }
            $value = new EmptyValidator();
            $this->emailAddress = $value->fromObject($object->emailAddress);
        }
        if (property_exists($object, 'expirationDate')) {
            if (!is_object($object->expirationDate)) {
                throw new UnexpectedValueException('value \'' . print_r($object->expirationDate, true) . '\' is not an object');
            }
            $value = new EmptyValidator();
            $this->expirationDate = $value->fromObject($object->expirationDate);
        }
        if (property_exists($object, 'fixedList')) {
            if (!is_object($object->fixedList)) {
                throw new UnexpectedValueException('value \'' . print_r($object->fixedList, true) . '\' is not an object');
            }
            $value = new FixedListValidator();
            $this->fixedList = $value->fromObject($object->fixedList);
        }
        if (property_exists($object, 'iban')) {
            if (!is_object($object->iban)) {
                throw new UnexpectedValueException('value \'' . print_r($object->iban, true) . '\' is not an object');
            }
            $value = new EmptyValidator();
            $this->iban = $value->fromObject($object->iban);
        }
        if (property_exists($object, 'length')) {
            if (!is_object($object->length)) {
                throw new UnexpectedValueException('value \'' . print_r($object->length, true) . '\' is not an object');
            }
            $value = new LengthValidator();
            $this->length = $value->fromObject($object->length);
        }
        if (property_exists($object, 'luhn')) {
            if (!is_object($object->luhn)) {
                throw new UnexpectedValueException('value \'' . print_r($object->luhn, true) . '\' is not an object');
            }
            $value = new EmptyValidator();
            $this->luhn = $value->fromObject($object->luhn);
        }
        if (property_exists($object, 'range')) {
            if (!is_object($object->range)) {
                throw new UnexpectedValueException('value \'' . print_r($object->range, true) . '\' is not an object');
            }
            $value = new RangeValidator();
            $this->range = $value->fromObject($object->range);
        }
        if (property_exists($object, 'regularExpression')) {
            if (!is_object($object->regularExpression)) {
                throw new UnexpectedValueException('value \'' . print_r($object->regularExpression, true) . '\' is not an object');
            }
            $value = new RegularExpressionValidator();
            $this->regularExpression = $value->fromObject($object->regularExpression);
        }
        if (property_exists($object, 'termsAndConditions')) {
            if (!is_object($object->termsAndConditions)) {
                throw new UnexpectedValueException('value \'' . print_r($object->termsAndConditions, true) . '\' is not an object');
            }
            $value = new EmptyValidator();
            $this->termsAndConditions = $value->fromObject($object->termsAndConditions);
        }
        return $this;
    }
}
