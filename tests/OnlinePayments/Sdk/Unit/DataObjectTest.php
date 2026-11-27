<?php

namespace OnlinePayments\Sdk\Unit;

use OnlinePayments\Sdk\Domain\Card;
use OnlinePayments\Sdk\Domain\DataObject;
use PHPUnit\Framework\TestCase;

class DataObjectTest extends TestCase
{
    public function testDataObject_PrintR_MasksSensitiveValues(): void
    {
        $card = (new Card())->withCardNumber('4567350000427977')->withCvv('123');

        $output = print_r($card, true);

        $this->assertStringNotContainsString('4567350000427977', $output);
        $this->assertStringContainsString('************7977', $output);
        $this->assertStringNotContainsString('123', $output);
        $this->assertSame('4567350000427977', $card->getCardNumber());
    }

    public function testDataObject_ToJson_ReturnsEmptyObject(): void
    {
        $object = new class extends DataObject {};

        $this->assertSame('{}', $object->toJson());
    }

    public function testDataObject_ToObject_ReturnsStdClassInstance(): void
    {
        $object = new class extends DataObject {};

        $result = $object->toObject();

        $this->assertInstanceOf(\stdClass::class, $result);
    }

    public function testDataObject_FromJson_ReturnsSameInstance(): void
    {
        $object = new class extends DataObject {};

        $result = $object->fromJson('{}');

        $this->assertSame($object, $result);
    }

    public function testDataObject_FromObject_WithValidObject_ReturnsSameInstance(): void
    {
        $object = new class extends DataObject {};

        $result = $object->fromObject(new \stdClass());

        $this->assertSame($object, $result);
    }

    public function testDataObject_FromObject_WithInvalidType_ThrowsTypeError(): void
    {
        $object = new class extends DataObject {};

        $this->expectException(\TypeError::class);

        /** @var mixed $invalid */
        $invalid = 'not-an-object';

        $object->fromObject($invalid);
    }

    public function testDataObject_SetUnknownProperty_ThrowsExceptionWhenAddingNewProperty(): void
    {
        $object = new class extends DataObject {};

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Cannot add new property');

        $object->__set('randomProperty', 'value');
    }
}
