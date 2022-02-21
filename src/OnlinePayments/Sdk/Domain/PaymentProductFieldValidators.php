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
class PaymentProductFieldValidators extends DataObject
{
    // Properties
    /**
     * @var EmptyValidator
     */
    private $emailAddress;

    /**
     * @var EmptyValidator
     */
    private $expirationDate;

    /**
     * @var FixedListValidator
     */
    private $fixedList;

    /**
     * @var EmptyValidator
     */
    private $iban;

    /**
     * @var LengthValidator
     */
    private $length;

    /**
     * @var EmptyValidator
     */
    private $luhn;

    /**
     * @var RangeValidator
     */
    private $range;

    /**
     * @var RegularExpressionValidator
     */
    private $regularExpression;

    /**
     * @var EmptyValidator
     */
    private $termsAndConditions;

    // Methods
    /**
     * @return EmptyValidator
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
    /**
     * @var EmptyValidator
     */
    public function setEmailAddress($value)
    {
        $this->emailAddress = $value;
    }

    /**
     * @return EmptyValidator
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
    /**
     * @var EmptyValidator
     */
    public function setExpirationDate($value)
    {
        $this->expirationDate = $value;
    }

    /**
     * @return FixedListValidator
     */
    public function getFixedList()
    {
        return $this->fixedList;
    }
    /**
     * @var FixedListValidator
     */
    public function setFixedList($value)
    {
        $this->fixedList = $value;
    }

    /**
     * @return EmptyValidator
     */
    public function getIban()
    {
        return $this->iban;
    }
    /**
     * @var EmptyValidator
     */
    public function setIban($value)
    {
        $this->iban = $value;
    }

    /**
     * @return LengthValidator
     */
    public function getLength()
    {
        return $this->length;
    }
    /**
     * @var LengthValidator
     */
    public function setLength($value)
    {
        $this->length = $value;
    }

    /**
     * @return EmptyValidator
     */
    public function getLuhn()
    {
        return $this->luhn;
    }
    /**
     * @var EmptyValidator
     */
    public function setLuhn($value)
    {
        $this->luhn = $value;
    }

    /**
     * @return RangeValidator
     */
    public function getRange()
    {
        return $this->range;
    }
    /**
     * @var RangeValidator
     */
    public function setRange($value)
    {
        $this->range = $value;
    }

    /**
     * @return RegularExpressionValidator
     */
    public function getRegularExpression()
    {
        return $this->regularExpression;
    }
    /**
     * @var RegularExpressionValidator
     */
    public function setRegularExpression($value)
    {
        $this->regularExpression = $value;
    }

    /**
     * @return EmptyValidator
     */
    public function getTermsAndConditions()
    {
        return $this->termsAndConditions;
    }
    /**
     * @var EmptyValidator
     */
    public function setTermsAndConditions($value)
    {
        $this->termsAndConditions = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->emailAddress !== null) {
            $object->emailAddress = $this->emailAddress->toObject();
        }
        if ($this->expirationDate !== null) {
            $object->expirationDate = $this->expirationDate->toObject();
        }
        if ($this->fixedList !== null) {
            $object->fixedList = $this->fixedList->toObject();
        }
        if ($this->iban !== null) {
            $object->iban = $this->iban->toObject();
        }
        if ($this->length !== null) {
            $object->length = $this->length->toObject();
        }
        if ($this->luhn !== null) {
            $object->luhn = $this->luhn->toObject();
        }
        if ($this->range !== null) {
            $object->range = $this->range->toObject();
        }
        if ($this->regularExpression !== null) {
            $object->regularExpression = $this->regularExpression->toObject();
        }
        if ($this->termsAndConditions !== null) {
            $object->termsAndConditions = $this->termsAndConditions->toObject();
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
