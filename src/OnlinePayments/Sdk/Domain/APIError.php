<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class APIError extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $category = null;

    /**
     * @var string|null
     *
     * @deprecated Use errorCode instead. Error code
    */
    public ?string $code = null;

    /**
     * @var string|null
    */
    public ?string $errorCode = null;

    /**
     * @var int|null
    */
    public ?int $httpStatusCode = null;

    /**
     * @var string|null
    */
    public ?string $id = null;

    /**
     * @var string|null
    */
    public ?string $message = null;

    /**
     * @var string|null
    */
    public ?string $propertyName = null;

    /**
     * @var bool|null
    */
    public ?bool $retriable = null;

    /**
     * @return string|null
    */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * @param string|null $value
    */
    public function setCategory(?string $value): void
    {
        $this->category = $value;
    }

    /**
     * @param string|null $value
     * @return APIError
    */
    public function withCategory(?string $value): APIError
    {
        $this->category = $value;
        return $this;
    }

    /**
     * @return string|null
     *
     * @deprecated Use errorCode instead. Error code
    */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $value
     *
     * @deprecated Use errorCode instead. Error code
    */
    public function setCode(?string $value): void
    {
        $this->code = $value;
    }

    /**
     * @param string|null $value
     * @return APIError
     *
     * @deprecated Use errorCode instead. Error code
    */
    public function withCode(?string $value): APIError
    {
        $this->code = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    /**
     * @param string|null $value
    */
    public function setErrorCode(?string $value): void
    {
        $this->errorCode = $value;
    }

    /**
     * @param string|null $value
     * @return APIError
    */
    public function withErrorCode(?string $value): APIError
    {
        $this->errorCode = $value;
        return $this;
    }

    /**
     * @return int|null
    */
    public function getHttpStatusCode(): ?int
    {
        return $this->httpStatusCode;
    }

    /**
     * @param int|null $value
    */
    public function setHttpStatusCode(?int $value): void
    {
        $this->httpStatusCode = $value;
    }

    /**
     * @param int|null $value
     * @return APIError
    */
    public function withHttpStatusCode(?int $value): APIError
    {
        $this->httpStatusCode = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $value
    */
    public function setId(?string $value): void
    {
        $this->id = $value;
    }

    /**
     * @param string|null $value
     * @return APIError
    */
    public function withId(?string $value): APIError
    {
        $this->id = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $value
    */
    public function setMessage(?string $value): void
    {
        $this->message = $value;
    }

    /**
     * @param string|null $value
     * @return APIError
    */
    public function withMessage(?string $value): APIError
    {
        $this->message = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getPropertyName(): ?string
    {
        return $this->propertyName;
    }

    /**
     * @param string|null $value
    */
    public function setPropertyName(?string $value): void
    {
        $this->propertyName = $value;
    }

    /**
     * @param string|null $value
     * @return APIError
    */
    public function withPropertyName(?string $value): APIError
    {
        $this->propertyName = $value;
        return $this;
    }

    /**
     * @return bool|null
    */
    public function getRetriable(): ?bool
    {
        return $this->retriable;
    }

    /**
     * @param bool|null $value
    */
    public function setRetriable(?bool $value): void
    {
        $this->retriable = $value;
    }

    /**
     * @param bool|null $value
     * @return APIError
    */
    public function withRetriable(?bool $value): APIError
    {
        $this->retriable = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->category)) {
            $object->category = $this->category;
        }
        if (!is_null($this->code)) {
            $object->code = $this->code;
        }
        if (!is_null($this->errorCode)) {
            $object->errorCode = $this->errorCode;
        }
        if (!is_null($this->httpStatusCode)) {
            $object->httpStatusCode = $this->httpStatusCode;
        }
        if (!is_null($this->id)) {
            $object->id = $this->id;
        }
        if (!is_null($this->message)) {
            $object->message = $this->message;
        }
        if (!is_null($this->propertyName)) {
            $object->propertyName = $this->propertyName;
        }
        if (!is_null($this->retriable)) {
            $object->retriable = $this->retriable;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): APIError
    {
        parent::fromObject($object);
        if (property_exists($object, 'category')) {
            $this->category = $object->category;
        }
        if (property_exists($object, 'code')) {
            $this->code = $object->code;
        }
        if (property_exists($object, 'errorCode')) {
            $this->errorCode = $object->errorCode;
        }
        if (property_exists($object, 'httpStatusCode')) {
            $this->httpStatusCode = $object->httpStatusCode;
        }
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'message')) {
            $this->message = $object->message;
        }
        if (property_exists($object, 'propertyName')) {
            $this->propertyName = $object->propertyName;
        }
        if (property_exists($object, 'retriable')) {
            $this->retriable = $object->retriable;
        }
        return $this;
    }
}
