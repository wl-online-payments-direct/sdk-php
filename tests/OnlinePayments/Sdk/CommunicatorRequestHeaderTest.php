<?php
namespace OnlinePayments\Sdk;

use ReflectionMethod;
use OnlinePayments\Sdk\Communication\MetadataProvider;
use OnlinePayments\Sdk\Domain\ShoppingCartExtension;
use OnlinePayments\Sdk\TestUtil\TestingAuthenticator;

/**
 * @group request_header
 *
 */
class CommunicatorRequestHeaderTest extends TestCase
{
    public function testMultiLineHeader()
    {
        $headerValue = " some value  \r\n \n with  some \r\n \t spaces ";
        $encodedHeaderValue = trim(preg_replace('/\r?\n[\h]*/', ' ', $headerValue));
        $this->assertEquals('some value    with  some  spaces', $encodedHeaderValue);
    }

    public function testServerMetaInfoHeaderSimple()
    {
        $requestHeaders = $this->getRequestHeaders(
            $this->getCommunicatorConfiguration(),
            'GET',
            '/v1/consumer/ANDR%C3%89E/?q=na%20me'
        );
        $serverMetaInfoJson = $requestHeaders['X-GCS-ServerMetaInfo'];
        $serverMetaInfo = json_decode(base64_decode($serverMetaInfoJson));
        $this->assertInstanceOf('\stdClass', $serverMetaInfo);

        $this->assertTrue(property_exists($serverMetaInfo, 'platformIdentifier'));
        $this->assertStringContainsString(php_uname(), $serverMetaInfo->platformIdentifier);
        $this->assertStringContainsString(phpversion(), $serverMetaInfo->platformIdentifier);

        $this->assertTrue(property_exists($serverMetaInfo, 'sdkIdentifier'));
        $this->assertEquals('PHPServerSDK/v' . MetadataProvider::SDK_VERSION, $serverMetaInfo->sdkIdentifier);

        $this->assertTrue(property_exists($serverMetaInfo, 'sdkCreator'));
        $this->assertEquals('OnlinePayments', $serverMetaInfo->sdkCreator);

        $this->assertTrue(property_exists($serverMetaInfo, 'integrator'));
        $this->assertEquals('OnlinePayments', $serverMetaInfo->integrator);

        $this->assertFalse(property_exists($serverMetaInfo, 'shoppingCartExtension'));
    }

    public function testServerMetaInfoHeaderFull()
    {
        // create a new CommunicatorConfiguration to not modify the field
        $communicatorConfiguration = new CommunicatorConfiguration(
            $this->getApiKey(),
            $this->getApiSecret(),
            $this->getApiEndpoint(),
            'OnlinePayments.Integrator'
        );
        $communicatorConfiguration->setShoppingCartExtension(new ShoppingCartExtension('OnlinePayments.Creator', 'Extension', '1.0', 'ExtensionId'));

        $requestHeaders = $this->getRequestHeaders(
            $communicatorConfiguration,
            'GET',
            '/v1/consumer/ANDR%C3%89E/?q=na%20me'
        );
        $serverMetaInfoJson = $requestHeaders['X-GCS-ServerMetaInfo'];
        $serverMetaInfo = json_decode(base64_decode($serverMetaInfoJson));
        $this->assertInstanceOf('\stdClass', $serverMetaInfo);

        $this->assertTrue(property_exists($serverMetaInfo, 'platformIdentifier'));
        $this->assertStringContainsString(php_uname(), $serverMetaInfo->platformIdentifier);
        $this->assertStringContainsString(phpversion(), $serverMetaInfo->platformIdentifier);

        $this->assertTrue(property_exists($serverMetaInfo, 'sdkIdentifier'));
        $this->assertEquals('PHPServerSDK/v' . MetadataProvider::SDK_VERSION, $serverMetaInfo->sdkIdentifier);

        $this->assertTrue(property_exists($serverMetaInfo, 'sdkCreator'));
        $this->assertEquals('OnlinePayments', $serverMetaInfo->sdkCreator);

        $this->assertTrue(property_exists($serverMetaInfo, 'integrator'));
        $this->assertEquals('OnlinePayments.Integrator', $serverMetaInfo->integrator);

        $this->assertTrue(property_exists($serverMetaInfo, 'shoppingCartExtension'));
        $this->assertInstanceOf('\stdClass', $serverMetaInfo->shoppingCartExtension);

        $this->assertTrue(property_exists($serverMetaInfo->shoppingCartExtension, 'extensionId'));
        $this->assertEquals('ExtensionId', $serverMetaInfo->shoppingCartExtension->extensionId);
        $this->assertTrue(property_exists($serverMetaInfo->shoppingCartExtension, 'creator'));
        $this->assertEquals('OnlinePayments.Creator', $serverMetaInfo->shoppingCartExtension->creator);
        $this->assertTrue(property_exists($serverMetaInfo->shoppingCartExtension, 'name'));
        $this->assertEquals('Extension', $serverMetaInfo->shoppingCartExtension->name);
        $this->assertTrue(property_exists($serverMetaInfo->shoppingCartExtension, 'version'));
        $this->assertEquals('1.0', $serverMetaInfo->shoppingCartExtension->version);
    }

    public function testServerMetaInfoHeaderFullNoShoppingCartExtensionId()
    {
        // create a new CommunicatorConfiguration to not modify the field
        $communicatorConfiguration = new CommunicatorConfiguration(
            $this->getApiKey(),
            $this->getApiSecret(),
            $this->getApiEndpoint(),
            'OnlinePayments.Integrator'
        );
        $communicatorConfiguration->setShoppingCartExtension(new ShoppingCartExtension('OnlinePayments.Creator', 'Extension', '1.0'));

        $requestHeaders = $this->getRequestHeaders(
            $communicatorConfiguration,
            'GET',
            '/v1/consumer/ANDR%C3%89E/?q=na%20me',
            ''
        );
        $serverMetaInfoJson = $requestHeaders['X-GCS-ServerMetaInfo'];
        $serverMetaInfo = json_decode(base64_decode($serverMetaInfoJson));
        $this->assertInstanceOf('\stdClass', $serverMetaInfo);

        $this->assertTrue(property_exists($serverMetaInfo, 'platformIdentifier'));
        $this->assertStringContainsString(php_uname(), $serverMetaInfo->platformIdentifier);
        $this->assertStringContainsString(phpversion(), $serverMetaInfo->platformIdentifier);

        $this->assertTrue(property_exists($serverMetaInfo, 'sdkIdentifier'));
        $this->assertEquals('PHPServerSDK/v' . MetadataProvider::SDK_VERSION, $serverMetaInfo->sdkIdentifier);

        $this->assertTrue(property_exists($serverMetaInfo, 'sdkCreator'));
        $this->assertEquals('OnlinePayments', $serverMetaInfo->sdkCreator);

        $this->assertTrue(property_exists($serverMetaInfo, 'integrator'));
        $this->assertEquals('OnlinePayments.Integrator', $serverMetaInfo->integrator);

        $this->assertTrue(property_exists($serverMetaInfo, 'shoppingCartExtension'));
        $this->assertInstanceOf('\stdClass', $serverMetaInfo->shoppingCartExtension);

        $this->assertFalse(property_exists($serverMetaInfo->shoppingCartExtension, 'extensionId'));
        $this->assertTrue(property_exists($serverMetaInfo->shoppingCartExtension, 'creator'));
        $this->assertEquals('OnlinePayments.Creator', $serverMetaInfo->shoppingCartExtension->creator);
        $this->assertTrue(property_exists($serverMetaInfo->shoppingCartExtension, 'name'));
        $this->assertEquals('Extension', $serverMetaInfo->shoppingCartExtension->name);
        $this->assertTrue(property_exists($serverMetaInfo->shoppingCartExtension, 'version'));
        $this->assertEquals('1.0', $serverMetaInfo->shoppingCartExtension->version);
    }

    private function getRequestHeaders(
        CommunicatorConfiguration $communicatorConfiguration,
        $httpMethod,
        $relativeUri,
        $contentType = ''
    ) {
        $authenticator = new TestingAuthenticator();
        $communicator = new Communicator($communicatorConfiguration, $authenticator);
        $method = new ReflectionMethod($communicator, 'getRequestHeaders');
        $method->setAccessible(true);
        return $method->invoke($communicator, $httpMethod, $relativeUri, $contentType);
    }
}
