<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentStatusOutput extends DataObject
{
    /**
     * @var APIError[]|null
     */
    public ?array $errors = null;

    /**
     * @var bool|null
     */
    public ?bool $isAuthorized = null;

    /**
     * @var bool|null
     */
    public ?bool $isCancellable = null;

    /**
     * @var bool|null
     */
    public ?bool $isRefundable = null;

    /**
     * @var string|null
     */
    public ?string $statusCategory = null;

    /**
     * @var int|null
     */
    public ?int $statusCode = null;

    /**
     * @var string|null
     */
    public ?string $statusCodeChangeDateTime = null;

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
     * @return bool|null
     */
    public function getIsAuthorized(): ?bool
    {
        return $this->isAuthorized;
    }

    /**
     * @param bool|null $value
     */
    public function setIsAuthorized(?bool $value): void
    {
        $this->isAuthorized = $value;
    }

    /**
     * @return bool|null
     */
    public function getIsCancellable(): ?bool
    {
        return $this->isCancellable;
    }

    /**
     * @param bool|null $value
     */
    public function setIsCancellable(?bool $value): void
    {
        $this->isCancellable = $value;
    }

    /**
     * @return bool|null
     */
    public function getIsRefundable(): ?bool
    {
        return $this->isRefundable;
    }

    /**
     * @param bool|null $value
     */
    public function setIsRefundable(?bool $value): void
    {
        $this->isRefundable = $value;
    }

    /**
     * @return string|null
     */
    public function getStatusCategory(): ?string
    {
        return $this->statusCategory;
    }

    /**
     * @param string|null $value
     */
    public function setStatusCategory(?string $value): void
    {
        $this->statusCategory = $value;
    }

    /**
     * @return int|null
     */
    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    /**
     * @param int|null $value
     */
    public function setStatusCode(?int $value): void
    {
        $this->statusCode = $value;
    }

    /**
     * @return string|null
     */
    public function getStatusCodeChangeDateTime(): ?string
    {
        return $this->statusCodeChangeDateTime;
    }

    /**
     * @param string|null $value
     */
    public function setStatusCodeChangeDateTime(?string $value): void
    {
        $this->statusCodeChangeDateTime = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->errors)) {
            $object->errors = [];
            foreach ($this->errors as $element) {
                if (!is_null($element)) {
                    $object->errors[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->isAuthorized)) {
            $object->isAuthorized = $this->isAuthorized;
        }
        if (!is_null($this->isCancellable)) {
            $object->isCancellable = $this->isCancellable;
        }
        if (!is_null($this->isRefundable)) {
            $object->isRefundable = $this->isRefundable;
        }
        if (!is_null($this->statusCategory)) {
            $object->statusCategory = $this->statusCategory;
        }
        if (!is_null($this->statusCode)) {
            $object->statusCode = $this->statusCode;
        }
        if (!is_null($this->statusCodeChangeDateTime)) {
            $object->statusCodeChangeDateTime = $this->statusCodeChangeDateTime;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentStatusOutput
    {
        parent::fromObject($object);
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
        if (property_exists($object, 'isAuthorized')) {
            $this->isAuthorized = $object->isAuthorized;
        }
        if (property_exists($object, 'isCancellable')) {
            $this->isCancellable = $object->isCancellable;
        }
        if (property_exists($object, 'isRefundable')) {
            $this->isRefundable = $object->isRefundable;
        }
        if (property_exists($object, 'statusCategory')) {
            $this->statusCategory = $object->statusCategory;
        }
        if (property_exists($object, 'statusCode')) {
            $this->statusCode = $object->statusCode;
        }
        if (property_exists($object, 'statusCodeChangeDateTime')) {
            $this->statusCodeChangeDateTime = $object->statusCodeChangeDateTime;
        }
        return $this;
    }
}
