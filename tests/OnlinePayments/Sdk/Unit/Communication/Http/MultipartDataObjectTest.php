<?php

namespace OnlinePayments\Sdk\Unit\Communication\Http;

use Exception;
use OnlinePayments\Sdk\Communication\MultipartDataObject;
use OnlinePayments\Sdk\Communication\MultipartFormDataObject;
use PHPUnit\Framework\TestCase;

/**
 * @group communication
 */

class MultipartDataObjectTest extends TestCase
{
    public function testMultipartDataObject_SetUnknownProperty_ThrowsExceptionWhenAddingNewProperty(): void
    {
        $object = new class extends MultipartDataObject {
            public function toMultipartFormDataObject(): MultipartFormDataObject
            {
                return new MultipartFormDataObject();
            }
        };

        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Cannot add new property');

        $object->__set('randomProperty', 'value');
    }
}
