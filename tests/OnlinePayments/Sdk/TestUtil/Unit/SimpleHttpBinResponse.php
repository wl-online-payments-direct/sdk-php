<?php

namespace OnlinePayments\Sdk\TestUtil\Unit;

use OnlinePayments\Sdk\Domain\DataObject;

class SimpleHttpBinResponse extends DataObject
{
    public $url;

    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->url)) {
            $object->url = $this->url;
        }

        return $object;
    }

    public function fromObject(object $object): DataObject
    {
        parent::fromObject($object);
        if (property_exists($object, 'url')) {
            $this->url = $object->url;
        }

        return $this;
    }
}
