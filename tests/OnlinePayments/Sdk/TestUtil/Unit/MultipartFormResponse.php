<?php

namespace OnlinePayments\Sdk\TestUtil\Unit;

use OnlinePayments\Sdk\Domain\DataObject;

class MultipartFormResponse extends DataObject
{
    private $form;
    private $files;

    /**
     * @return mixed
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * @return mixed
     */
    public function getFiles()
    {
        return $this->files;
    }

    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->form)) {
            $object->form = $this->form;
        }

        if (!is_null($this->files)) {
            $object->files = $this->files;
        }

        return $object;
    }

    public function fromObject(object $object): DataObject
    {
        parent::fromObject($object);
        if (property_exists($object, 'form')) {
            $this->form = $object->form;
        }

        if (property_exists($object, 'files')) {
            $this->files = $object->files;
        }

        return $this;
    }
}
