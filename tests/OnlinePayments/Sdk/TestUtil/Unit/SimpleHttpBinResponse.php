<?php

namespace OnlinePayments\Sdk\TestUtil\Unit;

use OnlinePayments\Sdk\Domain\DataObject;

class SimpleHttpBinResponse extends DataObject
{
    public mixed $url = null;

    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->url)) {
            $object->url = $this->url;
        }

        return $object;
    }

    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'url')) {
            $this->url = $object->url;
        }

        return $this;
    }
}
