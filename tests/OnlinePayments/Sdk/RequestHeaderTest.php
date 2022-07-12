<?php

namespace OnlinePayments\Sdk;

use Exception;
use OnlinePayments\Sdk\Domain\ShoppingCartExtension;

/**
 * @group request_header
 *
 */
class RequestHeaderTest extends OnlinePaymentsTestCase
{
    /**
     * @throws Exception
     */
    public function testV1HMAC()
    {
        foreach (array('GET', 'POST', 'PUT', 'DELETE') as $httpMethod) {
            $requestHeaderGenerator = new RequestHeaderGenerator(
                $this->getCommunicatorConfiguration(),
                $httpMethod,
                '/v2/consumer/ANDR%C3%89E/?q=na%20me'
            );
            $requestHeaders = $requestHeaderGenerator->generateRequestHeaders();
            $httpHeaderHelper = new HttpHeaderHelper();
            $curlHeaders = $httpHeaderHelper->generateRawHeaders($requestHeaders);

            $this->assertCount(4, $curlHeaders);

            $result = false;
            foreach ($curlHeaders as $curlHeader) {
                $result |= preg_match(
                    '/^Authorization: GCS v1HMAC:' . $this->getApiKey() . ':[a-zA-Z\d+\/]+={0,2}/',
                    $curlHeader
                );
            }
            $this->assertEquals(true, $result);
        }
    }

    /**
     * @throws Exception
     */
    public function testAddHeaderV1HMACAddHeaders()
    {
        foreach (array('GET', 'POST', 'PUT', 'DELETE') as $httpMethod) {
            $clientMetaInfo = base64_encode('{ "test": "test" }');
            $requestHeaderGenerator = new RequestHeaderGenerator(
                $this->getCommunicatorConfiguration(),
                $httpMethod,
                '/v2/consumer/ANDR%C3%89E/?q=na%20me',
                $clientMetaInfo
            );

            $requestHeaders = $requestHeaderGenerator->generateRequestHeaders();

            $this->assertCount(5, $requestHeaders);
            $result = false;
            foreach ($requestHeaders as $curlHeader) {
                $splitHeader = explode(':', $curlHeader);
                $result |= base64_encode(base64_decode(end($splitHeader))) == end($splitHeader);
            }
            if (!$result) {
                print_r($requestHeaders);
            }
            $this->assertEquals(true, $result);

            $xGcsHeaders = array_slice($requestHeaders, 1, 3, true);
            $xGcsHeadersSorted = $xGcsHeaders;
            ksort($xGcsHeadersSorted);
            $this->assertEquals($xGcsHeadersSorted, $xGcsHeaders);
        }
    }

    /**
     * @expectedException     Exception
     */
    public function testException()
    {
        new RequestHeaderGenerator(
            $this->getCommunicatorConfiguration(),
            'INVALID',
            '/v2/consumer/ANDR%C3%89E/?q=na%20me'
        );
    }

    public function testMultiLineHeader()
    {
        $gcsHeaderValue = " some value  \r\n \n with  some \r\n \t spaces ";
        $gcsEncodedHeaderValue = trim(preg_replace('/\r?\n\h*/', ' ', $gcsHeaderValue));
        $this->assertEquals('some value    with  some  spaces', $gcsEncodedHeaderValue);
    }

    /**
     * @throws Exception
     */
    public function testServerMetaInfoHeaderSimple()
    {
        $requestHeaderGenerator = new RequestHeaderGenerator(
            $this->getCommunicatorConfiguration(),
            'GET',
            '/v2/consumer/ANDR%C3%89E/?q=na%20me'
        );
        $requestHeaders = $requestHeaderGenerator->generateRequestHeaders();
        $serverMetaInfoJson = $requestHeaders['X-GCS-ServerMetaInfo'];
        $serverMetaInfo = json_decode(base64_decode($serverMetaInfoJson));
        $this->assertInstanceOf('\stdClass', $serverMetaInfo);

        $this->assertObjectHasAttribute('platformIdentifier', $serverMetaInfo);
        $this->assertContains(php_uname(), $serverMetaInfo->platformIdentifier);
        $this->assertContains(phpversion(), $serverMetaInfo->platformIdentifier);

        $this->assertObjectHasAttribute('sdkIdentifier', $serverMetaInfo);
        $this->assertEquals('PHPServerSDK/v' . RequestHeaderGenerator::SDK_VERSION, $serverMetaInfo->sdkIdentifier);

        $this->assertObjectHasAttribute('sdkCreator', $serverMetaInfo);
        $this->assertEquals('OnlinePayments', $serverMetaInfo->sdkCreator);

        $this->assertObjectHasAttribute('integrator', $serverMetaInfo);
        $this->assertEquals('OnlinePayments', $serverMetaInfo->integrator);

        $this->assertObjectNotHasAttribute('shoppingCartExtension', $serverMetaInfo);
    }

    /**
     * @throws Exception
     */
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

        $requestHeaderGenerator = new RequestHeaderGenerator(
            $communicatorConfiguration,
            'GET',
            '/v2/consumer/ANDR%C3%89E/?q=na%20me'
        );
        $requestHeaders = $requestHeaderGenerator->generateRequestHeaders();
        $serverMetaInfoJson = $requestHeaders['X-GCS-ServerMetaInfo'];
        $serverMetaInfo = json_decode(base64_decode($serverMetaInfoJson));
        $this->assertInstanceOf('\stdClass', $serverMetaInfo);

        $this->assertObjectHasAttribute('platformIdentifier', $serverMetaInfo);
        $this->assertContains(php_uname(), $serverMetaInfo->platformIdentifier);
        $this->assertContains(phpversion(), $serverMetaInfo->platformIdentifier);

        $this->assertObjectHasAttribute('sdkIdentifier', $serverMetaInfo);
        $this->assertEquals('PHPServerSDK/v' . RequestHeaderGenerator::SDK_VERSION, $serverMetaInfo->sdkIdentifier);

        $this->assertObjectHasAttribute('sdkCreator', $serverMetaInfo);
        $this->assertEquals('OnlinePayments', $serverMetaInfo->sdkCreator);

        $this->assertObjectHasAttribute('integrator', $serverMetaInfo);
        $this->assertEquals('OnlinePayments.Integrator', $serverMetaInfo->integrator);

        $this->assertObjectHasAttribute('shoppingCartExtension', $serverMetaInfo);
        $this->assertInstanceOf('\stdClass', $serverMetaInfo->shoppingCartExtension);

        $this->assertObjectHasAttribute('extensionId', $serverMetaInfo->shoppingCartExtension);
        $this->assertEquals('ExtensionId', $serverMetaInfo->shoppingCartExtension->extensionId);
        $this->assertObjectHasAttribute('creator', $serverMetaInfo->shoppingCartExtension);
        $this->assertEquals('OnlinePayments.Creator', $serverMetaInfo->shoppingCartExtension->creator);
        $this->assertObjectHasAttribute('name', $serverMetaInfo->shoppingCartExtension);
        $this->assertEquals('Extension', $serverMetaInfo->shoppingCartExtension->name);
        $this->assertObjectHasAttribute('version', $serverMetaInfo->shoppingCartExtension);
        $this->assertEquals('1.0', $serverMetaInfo->shoppingCartExtension->version);
    }

    /**
     * @throws Exception
     */
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

        $requestHeaderGenerator = new RequestHeaderGenerator(
            $communicatorConfiguration,
            'GET',
            '/v2/consumer/ANDR%C3%89E/?q=na%20me'
        );
        $requestHeaders = $requestHeaderGenerator->generateRequestHeaders();
        $serverMetaInfoJson = $requestHeaders['X-GCS-ServerMetaInfo'];
        $serverMetaInfo = json_decode(base64_decode($serverMetaInfoJson));
        $this->assertInstanceOf('\stdClass', $serverMetaInfo);

        $this->assertObjectHasAttribute('platformIdentifier', $serverMetaInfo);
        $this->assertContains(php_uname(), $serverMetaInfo->platformIdentifier);
        $this->assertContains(phpversion(), $serverMetaInfo->platformIdentifier);

        $this->assertObjectHasAttribute('sdkIdentifier', $serverMetaInfo);
        $this->assertEquals('PHPServerSDK/v' . RequestHeaderGenerator::SDK_VERSION, $serverMetaInfo->sdkIdentifier);

        $this->assertObjectHasAttribute('sdkCreator', $serverMetaInfo);
        $this->assertEquals('OnlinePayments', $serverMetaInfo->sdkCreator);

        $this->assertObjectHasAttribute('integrator', $serverMetaInfo);
        $this->assertEquals('OnlinePayments.Integrator', $serverMetaInfo->integrator);

        $this->assertObjectHasAttribute('shoppingCartExtension', $serverMetaInfo);
        $this->assertInstanceOf('\stdClass', $serverMetaInfo->shoppingCartExtension);

        $this->assertObjectNotHasAttribute('extensionId', $serverMetaInfo->shoppingCartExtension);
        $this->assertObjectHasAttribute('creator', $serverMetaInfo->shoppingCartExtension);
        $this->assertEquals('OnlinePayments.Creator', $serverMetaInfo->shoppingCartExtension->creator);
        $this->assertObjectHasAttribute('name', $serverMetaInfo->shoppingCartExtension);
        $this->assertEquals('Extension', $serverMetaInfo->shoppingCartExtension->name);
        $this->assertObjectHasAttribute('version', $serverMetaInfo->shoppingCartExtension);
        $this->assertEquals('1.0', $serverMetaInfo->shoppingCartExtension->version);
    }
}
