<?php

namespace OnlinePayments\Sdk\Unit;

use InvalidArgumentException;
use OnlinePayments\Sdk\ApiResource;
use OnlinePayments\Sdk\CommunicatorInterface;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class ApiResourceTest extends TestCase
{
    public function testApiResource_InstantiateUri_ContextId_ReturnsUriWithReplacedPlaceholder(): void
    {
        $parent = $this->createParentMock();

        $resource = new class ($parent, ['id' => '123']) extends ApiResource {
            public function test(string $template): string
            {
                return $this->instantiateUri($template);
            }
        };

        $result = $resource->test('/payments/{id}/capture');

        $this->assertEquals('/payments/123/capture', $result);
    }

    public function testApiResource_GetCommunicator_ParentCommunicator_ReturnsSameInstance(): void
    {
        $communicator = $this->createStub(CommunicatorInterface::class);

        $parent = $this->getMockBuilder(ApiResource::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['getCommunicator'])
            ->getMock();

        $parent->expects($this->once())
            ->method('getCommunicator')
            ->willReturn($communicator);

        $resource = new class ($parent) extends ApiResource {
            public function expose(): CommunicatorInterface
            {
                return $this->getCommunicator();
            }
        };

        $this->assertSame($communicator, $resource->expose());
    }

    public function testApiResource_GetClientMetaInfo_ParentMetaInfo_ReturnsSameValue(): void
    {
        $parent = $this->createParentMock();

        $resource = new class ($parent) extends ApiResource {
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

        $resource = new class ($parent, ['merchantId' => '100', 'paymentId' => 'PAY-42']) extends ApiResource {
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

        $resource = new class ($parent, ['id' => 'X1']) extends ApiResource {
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

        $resource = new class ($parent, ['merchantId' => '100']) extends ApiResource {
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

        $resource = new class ($parent, []) extends ApiResource {
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

        $resource = new class ($parent, ['merchantId' => '100']) extends ApiResource {
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

        $resource = new class ($parent, ['page' => 3]) extends ApiResource {
            public function test(string $template): string
            {
                return $this->instantiateUri($template);
            }
        };

        $result = $resource->test('/items?page={page}');

        $this->assertEquals('/items?page=3', $result);
    }

    #[DataProvider('pathSegmentEncodingProvider')]
    public function testInstantiateUri_SpecialCharactersInContextValue_AreEncoded(string $value, string $expected): void
    {
        $parent = $this->createParentMock();

        $resource = new class ($parent, ['paymentId' => $value]) extends ApiResource {
            public function test(string $template): string
            {
                return $this->instantiateUri($template);
            }
        };

        $result = $resource->test('/v2/payments/{paymentId}');

        $this->assertSame('/v2/payments/' . $expected, $result);
    }

    #[DataProvider('dotSegmentProvider')]
    public function testInstantiateUri_DotSegmentContextValue_ThrowsInvalidArgumentException(string $value): void
    {
        $parent = $this->createParentMock();

        $resource = new class ($parent, ['paymentId' => $value]) extends ApiResource {
            public function test(string $template): string
            {
                return $this->instantiateUri($template);
            }
        };

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("paymentId must not be '" . $value . "'");

        $resource->test('/v2/payments/{paymentId}');
    }

    public function testInstantiateUri_EmptyContextValue_ThrowsInvalidArgumentException(): void
    {
        $parent = $this->createParentMock();

        $resource = new class ($parent, ['paymentId' => '']) extends ApiResource {
            public function test(string $template): string
            {
                return $this->instantiateUri($template);
            }
        };

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('paymentId is required');

        $resource->test('/v2/payments/{paymentId}');
    }

    public function testInstantiateUri_ContextValueContainingPlaceholder_IsNotReplacedAgain(): void
    {
        $parent = $this->createParentMock();

        $resource = new class ($parent, ['merchantId' => 'm1', 'paymentId' => '{merchantId}']) extends ApiResource {
            public function test(string $template): string
            {
                return $this->instantiateUri($template);
            }
        };

        $result = $resource->test('/v2/{merchantId}/payments/{paymentId}');

        $this->assertSame('/v2/m1/payments/%7BmerchantId%7D', $result);
    }

    /**
     * @return array<int, array{0: string, 1: string}>
     */
    public static function pathSegmentEncodingProvider(): array
    {
        return [
            ['../x?y=1#z', '..%2Fx%3Fy%3D1%23z'],
            ['a/b', 'a%2Fb'],
            ['a?b', 'a%3Fb'],
            ['a#b', 'a%23b'],
            ['100%', '100%25'],
            ['a b', 'a%20b'],
            ['ü€', '%C3%BC%E2%82%AC'],
        ];
    }

    /**
     * @return array<int, array{0: string}>
     */
    public static function dotSegmentProvider(): array
    {
        return [
            ['.'],
            ['..'],
        ];
    }

    private function createParentMock(): ApiResource
    {
        return new class (null) extends ApiResource {
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
