<?php
namespace OnlinePayments\Sdk\Unit\Communication\Http;

use OnlinePayments\Sdk\Communication\ConnectionResponse;
use OnlinePayments\Sdk\Communication\ConnectionResponseInterface;
use OnlinePayments\Sdk\Communication\InvalidResponseException;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Communication\ResponseFactory;
use OnlinePayments\Sdk\Domain\DataObject;
use OnlinePayments\Sdk\TestUtil\Unit\SimpleHttpBinResponse;
use PHPUnit\Framework\TestCase;

/**
 * @group communication
 * @group http
 */
class ResponseFactoryTest extends TestCase
{
    private ResponseFactory $factory;
    private ResponseClassMap $classMap;

    protected function setUp(): void
    {
        $this->factory = new ResponseFactory();

        $this->classMap = new ResponseClassMap();
        $this->classMap->defaultSuccessResponseClassName = SimpleHttpBinResponse::class;
        $this->classMap->defaultErrorResponseClassName = SimpleHttpBinResponse::class;
    }

    public function testCreateResponse_WithValidJson_ReturnsDataObject()
    {
        $response = $this->createMockConnectionResponse(200);

        $result = $this->factory->createResponse($response, $this->classMap);

        $this->assertInstanceOf(DataObject::class, $result);
    }

    public function testCreateResponse_WithNoContent_ReturnsDataObject()
    {
        $response = $this->createMockConnectionResponse(204);

        $result = $this->factory->createResponse($response, $this->classMap);

        $this->assertInstanceOf(DataObject::class, $result);
    }

    public function testCreateResponse_WithInvalidJson_ThrowsInvalidResponseException()
    {
        $this->expectException(InvalidResponseException::class);

        $response = new ConnectionResponse(
            200,
            ['Content-Type' => 'application/json'],
            '{invalid json}'
        );

        $this->factory->createResponse($response, $this->classMap);
    }
    public function testCreateResponse_WithMissingContentType_ThrowsInvalidResponseException()
    {
        $this->expectException(InvalidResponseException::class);

        $response = new ConnectionResponse(
            200,
            [],
            '{}'
        );

        $this->factory->createResponse($response, $this->classMap);
    }

    public function testCreateResponse_WithUnknownClassName_ThrowsInvalidResponseException()
    {
        $this->expectException(InvalidResponseException::class);

        $classMap = new ResponseClassMap();
        $classMap->defaultSuccessResponseClassName = 'NonExistentClass';

        $response = new ConnectionResponse(
            200,
            ['Content-Type' => 'application/json'],
            '{}'
        );

        $this->factory->createResponse($response, $classMap);
    }

    public function testCreateResponse_WithValidClassButNotDataObject_ThrowsInvalidResponseException(): void
    {
        $classMap = new ResponseClassMap();
        $classMap->defaultSuccessResponseClassName = \stdClass::class;

        $response = new ConnectionResponse(
            200,
            ['Content-Type' => 'application/json'],
            '{}'
        );

        $this->expectException(InvalidResponseException::class);

        $this->factory->createResponse($response, $classMap);
    }

    private function createMockConnectionResponse(int $status): ConnectionResponseInterface
    {
        $mock = $this->getMockBuilder(ConnectionResponseInterface::class)
            ->onlyMethods(['getHttpStatusCode', 'getHeaderValue', 'getBody'])
            ->getMockForAbstractClass();

        $mock->method('getHttpStatusCode')->willReturn($status);
        $mock->method('getHeaderValue')->with('Content-Type')->willReturn('application/json');
        $mock->method('getBody')->willReturn('{}');

        return $mock;
    }
}
