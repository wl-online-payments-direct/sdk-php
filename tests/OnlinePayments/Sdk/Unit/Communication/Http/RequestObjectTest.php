<?php

namespace OnlinePayments\Sdk\Unit\Communication\Http;

use Exception;
use OnlinePayments\Sdk\Communication\RequestObject;
use PHPUnit\Framework\TestCase;

/**
 * @group communication
 * @group http
 */
class RequestObjectTest extends TestCase
{
    public function testRequestObject_SetUndefinedProperty_ThrowsExceptionWhenAddingNewProperty(): void
    {
        $object = new class extends RequestObject {};

        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Cannot add new property');

        $object->__set('randomProperty', 'value');
    }
}
