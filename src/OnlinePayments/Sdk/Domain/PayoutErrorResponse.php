<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PayoutErrorResponse extends DataObject
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
     * @var PayoutResult|null
     */
    public ?PayoutResult $payoutResult = null;

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
     * @return $this
     */
    public function withErrorId(?string $value): static
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
     * @return $this
     */
    public function withErrors(?array $value): static
    {
        $this->errors = $value;
        return $this;
    }

    /**
     * @return PayoutResult|null
     */
    public function getPayoutResult(): ?PayoutResult
    {
        return $this->payoutResult;
    }

    /**
     * @param PayoutResult|null $value
     */
    public function setPayoutResult(?PayoutResult $value): void
    {
        $this->payoutResult = $value;
    }

    /**
     * @param PayoutResult|null $value
     * @return $this
     */
    public function withPayoutResult(?PayoutResult $value): static
    {
        $this->payoutResult = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->errorId !== null) {
            $object->errorId = $this->errorId;
        }
        if ($this->errors !== null) {
            $object->errors = [];
            foreach ($this->errors as $element) {
                if ($element !== null) {
                    $object->errors[] = $element->toObject();
                }
            }
        }
        if ($this->payoutResult !== null) {
            $object->payoutResult = $this->payoutResult->toObject();
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
        if (property_exists($object, 'payoutResult')) {
            if (!is_object($object->payoutResult)) {
                throw new UnexpectedValueException('value \'' . print_r($object->payoutResult, true) . '\' is not an object');
            }
            $value = new PayoutResult();
            $this->payoutResult = $value->fromObject($object->payoutResult);
        }
        return $this;
    }
}
