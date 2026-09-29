<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ReattemptInstructionsConditions extends DataObject
{
    /**
     * @var int|null
    */
    public ?int $maxAttempts = null;

    /**
     * @var int|null
    */
    public ?int $maxDelay = null;

    /**
     * @return int|null
    */
    public function getMaxAttempts(): ?int
    {
        return $this->maxAttempts;
    }

    /**
     * @param int|null $value
    */
    public function setMaxAttempts(?int $value): void
    {
        $this->maxAttempts = $value;
    }

    /**
     * @param int|null $value
     * @return ReattemptInstructionsConditions
    */
    public function withMaxAttempts(?int $value): ReattemptInstructionsConditions
    {
        $this->maxAttempts = $value;
        return $this;
    }

    /**
     * @return int|null
    */
    public function getMaxDelay(): ?int
    {
        return $this->maxDelay;
    }

    /**
     * @param int|null $value
    */
    public function setMaxDelay(?int $value): void
    {
        $this->maxDelay = $value;
    }

    /**
     * @param int|null $value
     * @return ReattemptInstructionsConditions
    */
    public function withMaxDelay(?int $value): ReattemptInstructionsConditions
    {
        $this->maxDelay = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->maxAttempts)) {
            $object->maxAttempts = $this->maxAttempts;
        }
        if (!is_null($this->maxDelay)) {
            $object->maxDelay = $this->maxDelay;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ReattemptInstructionsConditions
    {
        parent::fromObject($object);
        if (property_exists($object, 'maxAttempts')) {
            $this->maxAttempts = $object->maxAttempts;
        }
        if (property_exists($object, 'maxDelay')) {
            $this->maxDelay = $object->maxDelay;
        }
        return $this;
    }
}
