<?php

namespace OnlinePayments\Sdk\TestUtil\Unit;

use OnlinePayments\Sdk\Communication\MultipartDataObject;
use OnlinePayments\Sdk\Communication\MultipartFormDataObject;

class MultipartFormDataWrapper extends MultipartDataObject
{
    private MultipartFormDataObject $multipart;

    public function __construct(MultipartFormDataObject $multipart)
    {
        $this->multipart = $multipart;
    }

    public function toMultipartFormDataObject(): MultipartFormDataObject
    {
        return $this->multipart;
    }
}
