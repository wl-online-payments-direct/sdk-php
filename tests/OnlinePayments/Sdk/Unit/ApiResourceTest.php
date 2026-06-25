<?php

namespace OnlinePayments\Sdk\Unit;

use OnlinePayments\Sdk\ApiResource;
use OnlinePayments\Sdk\CommunicatorInterface;
use PHPUnit\Framework\TestCase;

class ApiResourceTest extends TestCase
{
    public function testApiResource_InstantiateUri_ContextId_ReturnsUriWithReplacedPlaceholder()
    {
        $parent = $this->createParentMock();

        $resource = new class($parent, ['id' => '123']) extends ApiResource {
            public function test(string $template): string
            {
                return $this->instantiateUri($template);
            }
        };

        $result = $resource->test('/payments/{id}/capture');

        $this->assertEquals('/payments/123/capture', $result);
    }

    public function testApiResource_GetCommunicator_ParentCommunicator_ReturnsSameInstance()
    {
        $communicator = $this->createMock(CommunicatorInterface::class);

        $parent = $this->getMockBuilder(ApiResource::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['getCommunicator'])
            ->getMock();

        $parent->method('getCommunicator')
            ->willReturn($communicator);

        $resource = new class($parent) extends ApiResource {
            public function expose(): CommunicatorInterface
            {
                return $this->getCommunicator();
            }
        };

        $this->assertSame($communicator, $resource->expose());
    }

    public function testApiResource_GetClientMetaInfo_ParentMetaInfo_ReturnsSameValue()
    {
        $parent = $this->createParentMock();

        $resource = new class($parent) extends ApiResource {
            public function expose(): string
            {
                return $this->getClientMetaInfo();
            }
        };

        $this->assertEquals('client-meta', $resource->expose());
    }

    public function testInstantiateUri_MultiplePlaceholders_AllReplaced(): void
    {
        $parent = $this->createParentMock();

        $resource = new class($parent, ['merchantId' => '100', 'paymentId' => 'PAY-42']) extends ApiResource {
            public function test(string $template): string
            {
                return $this->instantiateUri($template);
            }
        };

        $result = $resource->test('/v2/{merchantId}/payments/{paymentId}/capture');

        $this->assertEquals('/v2/100/payments/PAY-42/capture', $result);
    }

    public function testInstantiateUri_PlaceholderAppearsMultipleTimes_AllOccurrencesReplaced(): void
    {
        $parent = $this->createParentMock();

        $resource = new class($parent, ['id' => 'X1']) extends ApiResource {
            public function test(string $template): string
            {
                return $this->instantiateUri($template);
            }
        };

        $result = $resource->test('/items/{id}/related/{id}');

        $this->assertEquals('/items/X1/related/X1', $result);
    }

    public function testInstantiateUri_UnmappedPlaceholder_IsPreserved(): void
    {
        $parent = $this->createParentMock();

        $resource = new class($parent, ['merchantId' => '100']) extends ApiResource {
            public function test(string $template): string
            {
                return $this->instantiateUri($template);
            }
        };

        $result = $resource->test('/v2/{merchantId}/payments/{paymentId}');

        $this->assertEquals('/v2/100/payments/{paymentId}', $result);
    }

    public function testInstantiateUri_EmptyContext_LeavesPlaceholdersIntact(): void
    {
        $parent = $this->createParentMock();

        $resource = new class($parent, []) extends ApiResource {
            public function test(string $template): string
            {
                return $this->instantiateUri($template);
            }
        };

        $result = $resource->test('/v2/{merchantId}/payments');

        $this->assertEquals('/v2/{merchantId}/payments', $result);
    }

    public function testInstantiateUri_NoPlaceholders_ReturnsUnchanged(): void
    {
        $parent = $this->createParentMock();

        $resource = new class($parent, ['merchantId' => '100']) extends ApiResource {
            public function test(string $template): string
            {
                return $this->instantiateUri($template);
            }
        };

        $result = $resource->test('/v2/payments/list');

        $this->assertEquals('/v2/payments/list', $result);
    }

    public function testInstantiateUri_NumericContextValue_IsSubstituted(): void
    {
        $parent = $this->createParentMock();

        $resource = new class($parent, ['page' => 3]) extends ApiResource {
            public function test(string $template): string
            {
                return $this->instantiateUri($template);
            }
        };

        $result = $resource->test('/items?page={page}');

        $this->assertEquals('/items?page=3', $result);
    }

    private function createParentMock(): ApiResource
    {
        return new class(null) extends ApiResource {
            private CommunicatorInterface $communicator;

            public function setCommunicator(CommunicatorInterface $communicator): void
            {
                $this->communicator = $communicator;
            }

            public function getCommunicator(): CommunicatorInterface
            {
                return $this->communicator;
            }

            public function getClientMetaInfo(): string
            {
                return 'client-meta';
            }
        };
    }
}
