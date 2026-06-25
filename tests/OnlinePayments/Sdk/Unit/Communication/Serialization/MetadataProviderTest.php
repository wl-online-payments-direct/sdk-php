<?php

namespace OnlinePayments\Sdk\Unit\Communication\Serialization;

use OnlinePayments\Sdk\Communication\MetadataProvider;
use OnlinePayments\Sdk\CommunicatorConfiguration;
use OnlinePayments\Sdk\Domain\ShoppingCartExtension;
use PHPUnit\Framework\TestCase;

/**
 * @group communication
 * @group serialization
 */
class MetadataProviderTest extends TestCase
{
    public function testMetadataProvider_GetServerMetaInfoValue_NoShoppingCartExtension_ReturnsBase64EncodedJson(): void
    {
        $configuration = $this->createMock(CommunicatorConfiguration::class);
        $configuration->method('getIntegrator')->willReturn('TestIntegrator');
        $configuration->method('getShoppingCartExtension')->willReturn(null);

        $provider = new MetadataProvider($configuration);

        $result = $provider->getServerMetaInfoValue();

        $decoded = json_decode(base64_decode($result));

        $this->assertNotNull($decoded);
        $this->assertEquals('TestIntegrator', $decoded->integrator);
        $this->assertEquals('OnlinePayments', $decoded->sdkCreator);
        $this->assertStringContainsString('PHPServerSDK/v', $decoded->sdkIdentifier);
        $this->assertNotEmpty($decoded->platformIdentifier);
    }

    public function testMetadataProvider_GetServerMetaInfoValue_WithShoppingCartExtension_IncludesExtension(): void
    {
        $extension = $this->createMock(ShoppingCartExtension::class);
        $extension->method('toObject')->willReturn((object)['name' => 'cart']);

        $configuration = $this->createMock(CommunicatorConfiguration::class);
        $configuration->method('getIntegrator')->willReturn('TestIntegrator');
        $configuration->method('getShoppingCartExtension')->willReturn($extension);

        $provider = new MetadataProvider($configuration);

        $result = $provider->getServerMetaInfoValue();

        $decoded = json_decode(base64_decode($result));

        $this->assertObjectHasProperty('shoppingCartExtension', $decoded);
        $this->assertEquals('cart', $decoded->shoppingCartExtension->name);
    }

    public function testMetadataProvider_GetServerMetaInfoValue_ReturnsValidBase64EncodedJson(): void
    {
        $configuration = $this->createMock(CommunicatorConfiguration::class);
        $configuration->method('getIntegrator')->willReturn('IntegratorX');
        $configuration->method('getShoppingCartExtension')->willReturn(null);

        $provider = new MetadataProvider($configuration);

        $result = $provider->getServerMetaInfoValue();

        $this->assertNotFalse(base64_decode($result, true));
        $this->assertJson(base64_decode($result));
    }
}
