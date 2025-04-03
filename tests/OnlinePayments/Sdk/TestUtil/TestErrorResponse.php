<?php
namespace OnlinePayments\Sdk\TestUtil;

use OnlinePayments\Sdk\Domain\DataObject;

class TestErrorResponse extends DataObject
{
    /** @var string */
    public $errorId;

    /** @var string */
    public $errorMessage;

    public function toObject()
    {
        $object = parent::toObject();
        $object->errorId = $this->errorId;
        $object->errorMessage = $this->errorMessage;
        return $object;
    }

    public function fromObject($object)
    {
        parent::fromObject($object);
        $this->errorId = $object->errorId;
        $this->errorMessage = $object->errorMessage;
        return $this;
    }
}
