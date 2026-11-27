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
     * @param APIError[]|null $value
     * @return $this
     */
    public function withErrors(?array $value): static
    {
        $this->errors = $value;
        return $this;
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
     * @param bool|null $value
     * @return $this
     */
    public function withIsAuthorized(?bool $value): static
    {
        $this->isAuthorized = $value;
        return $this;
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
     * @param bool|null $value
     * @return $this
     */
    public function withIsCancellable(?bool $value): static
    {
        $this->isCancellable = $value;
        return $this;
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
     * @param bool|null $value
     * @return $this
     */
    public function withIsRefundable(?bool $value): static
    {
        $this->isRefundable = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withStatusCategory(?string $value): static
    {
        $this->statusCategory = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withStatusCode(?int $value): static
    {
        $this->statusCode = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withStatusCodeChangeDateTime(?string $value): static
    {
        $this->statusCodeChangeDateTime = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->errors !== null) {
            $object->errors = [];
            foreach ($this->errors as $element) {
                if ($element !== null) {
                    $object->errors[] = $element->toObject();
                }
            }
        }
        if ($this->isAuthorized !== null) {
            $object->isAuthorized = $this->isAuthorized;
        }
        if ($this->isCancellable !== null) {
            $object->isCancellable = $this->isCancellable;
        }
        if ($this->isRefundable !== null) {
            $object->isRefundable = $this->isRefundable;
        }
        if ($this->statusCategory !== null) {
            $object->statusCategory = $this->statusCategory;
        }
        if ($this->statusCode !== null) {
            $object->statusCode = $this->statusCode;
        }
        if ($this->statusCodeChangeDateTime !== null) {
            $object->statusCodeChangeDateTime = $this->statusCodeChangeDateTime;
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
