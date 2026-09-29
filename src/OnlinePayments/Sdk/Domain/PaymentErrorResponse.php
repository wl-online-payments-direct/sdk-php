<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentErrorResponse extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $errorId = null;

    /**
     * @var APIError[]|null
    */
    public ?array $errors = null;

    /**
     * @var CreatePaymentResponse|null
    */
    public ?CreatePaymentResponse $paymentResult = null;

    /**
     * @return string|null
    */
    public function getErrorId(): ?string
    {
        return $this->errorId;
    }

    /**
     * @param string|null $value
    */
    public function setErrorId(?string $value): void
    {
        $this->errorId = $value;
    }

    /**
     * @param string|null $value
     * @return PaymentErrorResponse
    */
    public function withErrorId(?string $value): PaymentErrorResponse
    {
        $this->errorId = $value;
        return $this;
    }

    /**
     * @return APIError[]|null
    */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * @param APIError[]|null $value
    */
    public function setErrors(?array $value): void
    {
        $this->errors = $value;
    }

    /**
     * @param APIError[]|null $value
     * @return PaymentErrorResponse
    */
    public function withErrors(?array $value): PaymentErrorResponse
    {
        $this->errors = $value;
        return $this;
    }

    /**
     * @return CreatePaymentResponse|null
    */
    public function getPaymentResult(): ?CreatePaymentResponse
    {
        return $this->paymentResult;
    }

    /**
     * @param CreatePaymentResponse|null $value
    */
    public function setPaymentResult(?CreatePaymentResponse $value): void
    {
        $this->paymentResult = $value;
    }

    /**
     * @param CreatePaymentResponse|null $value
     * @return PaymentErrorResponse
    */
    public function withPaymentResult(?CreatePaymentResponse $value): PaymentErrorResponse
    {
        $this->paymentResult = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->errorId)) {
            $object->errorId = $this->errorId;
        }
        if (!is_null($this->errors)) {
            $object->errors = [];
            foreach ($this->errors as $element) {
                if (!is_null($element)) {
                    $object->errors[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->paymentResult)) {
            $object->paymentResult = $this->paymentResult->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentErrorResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'errorId')) {
            $this->errorId = $object->errorId;
        }
        if (property_exists($object, 'errors')) {
            if (!is_array($object->errors) && !is_object($object->errors)) {
                throw new UnexpectedValueException('value \'' . print_r($object->errors, true) . '\' is not an array or object');
            }
            $this->errors = [];
            foreach ($object->errors as $element) {
                $value = new APIError();
                $this->errors[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'paymentResult')) {
            if (!is_object($object->paymentResult)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentResult, true) . '\' is not an object');
            }
            $value = new CreatePaymentResponse();
            $this->paymentResult = $value->fromObject($object->paymentResult);
        }
        return $this;
    }
}
