<?php

namespace OnlinePayments\Sdk\Unit;

use OnlinePayments\Sdk\Domain\ShoppingCartExtension;
use PHPUnit\Framework\TestCase;

class ShoppingCartExtensionTest extends TestCase
{
    public function testShoppingCartExtension_Construct_SetsAllPropertiesCorrectly(): void
    {
        $obj = new ShoppingCartExtension(
            'creator-1',
            'name-1',
            'v1',
            'ext-123'
        );

        $this->assertSame('creator-1', $obj->creator);
        $this->assertSame('name-1', $obj->name);
        $this->assertSame('v1', $obj->version);
        $this->assertSame('ext-123', $obj->extensionId);
    }

    public function testShoppingCartExtension_ToObject_ReturnsAllFieldsCorrectly(): void
    {
        $obj = new ShoppingCartExtension(
            'creator-1',
            'name-1',
            'v1',
            'ext-123'
        );

        $result = $obj->toObject();

        $this->assertObjectHasProperty('creator', $result);
        $this->assertObjectHasProperty('name', $result);
        $this->assertObjectHasProperty('version', $result);
        $this->assertObjectHasProperty('extensionId', $result);

        $this->assertSame('creator-1', $result->creator);
        $this->assertSame('name-1', $result->name);
        $this->assertSame('v1', $result->version);
        $this->assertSame('ext-123', $result->extensionId);
    }

    public function testShoppingCartExtension_ToObject_WithNullExtensionId_DoesNotIncludeExtensionId(): void
    {
        $shoppingCartExtension = new ShoppingCartExtension(
            'creator-1',
            'name-1',
            'v1',
            null
        );

        $result = $shoppingCartExtension->toObject();

        $this->assertObjectHasProperty('creator', $result);
        $this->assertObjectHasProperty('name', $result);
        $this->assertObjectHasProperty('version', $result);

        $this->assertFalse(property_exists($result, 'extensionId'));
    }

    public function testShoppingCartExtension_FromObject_WithFullObject_UpdatesAllProperties(): void
    {
        $shoppingCartExtension = new ShoppingCartExtension(
            'init',
            'init',
            'init'
        );

        $input = (object)[
            'creator' => 'creator-x',
            'name' => 'name-x',
            'version' => 'v2',
            'extensionId' => 'ext-x'
        ];

        $result = $shoppingCartExtension->fromObject($input);

        $this->assertSame($shoppingCartExtension, $result);
        $this->assertSame('creator-x', $shoppingCartExtension->creator);
        $this->assertSame('name-x', $shoppingCartExtension->name);
        $this->assertSame('v2', $shoppingCartExtension->version);
        $this->assertSame('ext-x', $shoppingCartExtension->extensionId);
    }

    public function testShoppingCartExtension_FromObject_WithPartialObject_UpdatesOnlyProvidedFields(): void
    {
        $shoppingCartExtension = new ShoppingCartExtension(
            'a',
            'b',
            'c',
            'd'
        );

        $input = (object)[
            'name' => 'new-name'
        ];

        $shoppingCartExtension->fromObject($input);

        $this->assertSame('a', $shoppingCartExtension->creator);
        $this->assertSame('new-name', $shoppingCartExtension->name);
        $this->assertSame('c', $shoppingCartExtension->version);
        $this->assertSame('d', $shoppingCartExtension->extensionId);
    }

    public function testShoppingCartExtension_FromObject_WithEmptyObject_KeepsExistingValues(): void
    {
        $shoppingCartExtension = new ShoppingCartExtension(
            'creator',
            'name',
            'v1',
            'ext'
        );

        $shoppingCartExtension->fromObject(new \stdClass());

        $this->assertSame('creator', $shoppingCartExtension->creator);
        $this->assertSame('name', $shoppingCartExtension->name);
        $this->assertSame('v1', $shoppingCartExtension->version);
        $this->assertSame('ext', $shoppingCartExtension->extensionId);
    }
}
