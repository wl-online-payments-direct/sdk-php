<?php

namespace OnlinePayments\Sdk\TestUtil\Unit;

use OnlinePayments\Sdk\Domain\DataObject;

class TestErrorResponse extends DataObject
{
    /** @var string */
    public string $errorId;

    /** @var string */
    public string $errorMessage;

    public function toObject(): object
    {
        $object = parent::toObject();
        $object->errorId = $this->errorId;
        $object->errorMessage = $this->errorMessage;

        return $object;
    }

    public function fromObject(object $object): DataObject
    {
        parent::fromObject($object);
        $this->errorId = $object->errorId;
        $this->errorMessage = $object->errorMessage;

        return $this;
    }
}
