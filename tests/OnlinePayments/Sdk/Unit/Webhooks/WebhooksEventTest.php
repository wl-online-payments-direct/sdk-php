<?php

namespace OnlinePayments\Sdk\Unit\Webhooks;

use OnlinePayments\Sdk\Domain\GetBatchStatusResponse;
use OnlinePayments\Sdk\Domain\PaymentLinkResponse;
use OnlinePayments\Sdk\Domain\PaymentResponse;
use OnlinePayments\Sdk\Domain\PayoutResponse;
use OnlinePayments\Sdk\Domain\RefundResponse;
use OnlinePayments\Sdk\Domain\TokenResponse;
use OnlinePayments\Sdk\Domain\WebhooksEvent;
use PHPUnit\Framework\TestCase;
use UnexpectedValueException;

/**
 * @group webhooks
 */
class WebhooksEventTest extends TestCase
{
    public function testGettersAndSetters_ReturnSameValues(): void
    {
        $event = new WebhooksEvent();

        $directBatch = $this->createDirectBatchStub();
        $paymentLink = $this->createPaymentLinkStub();
        $payment = $this->createPaymentStub();
        $payout = $this->createPayoutStub();
        $refund = $this->createRefundStub();
        $token = $this->createTokenStub();

        $event->setDirectBatch($directBatch);
        $event->setPaymentLink($paymentLink);
        $event->setPayment($payment);
        $event->setPayout($payout);
        $event->setRefund($refund);
        $event->setToken($token);

        $this->assertSame($directBatch, $event->getDirectBatch());
        $this->assertSame($paymentLink, $event->getPaymentLink());
        $this->assertSame($payment, $event->getPayment());
        $this->assertSame($payout, $event->getPayout());
        $this->assertSame($refund, $event->getRefund());
        $this->assertSame($token, $event->getToken());
    }

    public function testToObject_WithScalarAndNestedValues_MapsAllFields(): void
    {
        $event = new WebhooksEvent();
        $event->apiVersion = 'v1';
        $event->created = '2026-04-16T10:00:00Z';
        $event->id = 'evt_123';
        $event->merchantId = 'merchant_456';
        $event->type = 'payment.created';

        $event->setDirectBatch($this->createDirectBatchStub());
        $event->setPaymentLink($this->createPaymentLinkStub());
        $event->setPayment($this->createPaymentStub());
        $event->setPayout($this->createPayoutStub());
        $event->setRefund($this->createRefundStub());
        $event->setToken($this->createTokenStub());

        $result = $event->toObject();

        $this->assertSame('v1', $result->apiVersion);
        $this->assertSame('2026-04-16T10:00:00Z', $result->created);
        $this->assertSame('evt_123', $result->id);
        $this->assertSame('merchant_456', $result->merchantId);
        $this->assertSame('payment.created', $result->type);

        $this->assertSame('directBatch', $result->directBatch->label);
        $this->assertSame('paymentLink', $result->paymentLink->label);
        $this->assertSame('payment', $result->payment->label);
        $this->assertSame('payout', $result->payout->label);
        $this->assertSame('refund', $result->refund->label);
        $this->assertSame('token', $result->token->label);
    }

    public function testFromObject_WithScalarAndNestedValues_MapsAllFields(): void
    {
        $event = new WebhooksEvent();

        $input = (object) [
            'apiVersion' => 'v1',
            'created' => '2026-04-16T10:00:00Z',
            'id' => 'evt_123',
            'merchantId' => 'merchant_456',
            'type' => 'payment.created',
            'directBatch' => (object) ['foo' => 'bar'],
            'paymentLink' => (object) ['foo' => 'bar'],
            'payment' => (object) ['foo' => 'bar'],
            'payout' => (object) ['foo' => 'bar'],
            'refund' => (object) ['foo' => 'bar'],
            'token' => (object) ['foo' => 'bar'],
        ];

        $result = $event->fromObject($input);

        $this->assertSame($event, $result);
        $this->assertSame('v1', $event->apiVersion);
        $this->assertSame('2026-04-16T10:00:00Z', $event->created);
        $this->assertSame('evt_123', $event->id);
        $this->assertSame('merchant_456', $event->merchantId);
        $this->assertSame('payment.created', $event->type);

        $this->assertIsObject($event->directBatch);
        $this->assertIsObject($event->paymentLink);
        $this->assertIsObject($event->payment);
        $this->assertIsObject($event->payout);
        $this->assertIsObject($event->refund);
        $this->assertIsObject($event->token);
    }

    /**
     * @dataProvider invalidNestedValueProvider
     */
    public function testFromObject_WithInvalidNestedValue_ThrowsException(string $propertyName): void
    {
        $event = new WebhooksEvent();

        $input = (object) [
            $propertyName => 'not-an-object',
        ];

        $this->expectException(UnexpectedValueException::class);
        $this->expectExceptionMessage('is not an object');

        $event->fromObject($input);
    }

    public function testToObject_WithNullFields_ReturnsEmptyObject(): void
    {
        $event = new WebhooksEvent();

        $result = $event->toObject();

        $this->assertInstanceOf(\stdClass::class, $result);
        $this->assertFalse(property_exists($result, 'apiVersion'));
    }

    public function testFromObject_WithMissingFields_DoesNotSetProperties(): void
    {
        $event = new WebhooksEvent();

        $input = (object) [
            'id' => '123'
        ];

        $event->fromObject($input);

        $this->assertSame('123', $event->id);
        $this->assertNull($event->payment);
    }

    public function testToObject_WithNullNestedObjects_SkipsThem(): void
    {
        $event = new WebhooksEvent();

        $result = $event->toObject();

        $this->assertInstanceOf(\stdClass::class, $result);
        $this->assertFalse(property_exists($result, 'payment'));
    }

    public function invalidNestedValueProvider(): array
    {
        return [
            ['directBatch'],
            ['paymentLink'],
            ['payment'],
            ['payout'],
            ['refund'],
            ['token'],
        ];
    }

    private function createDirectBatchStub(): GetBatchStatusResponse
    {
        return new class extends GetBatchStatusResponse {
            public function toObject(): object
            {
                return (object) ['label' => 'directBatch'];
            }
        };
    }

    private function createPaymentLinkStub(): PaymentLinkResponse
    {
        return new class extends PaymentLinkResponse {
            public function toObject(): object
            {
                return (object) ['label' => 'paymentLink'];
            }
        };
    }

    private function createPaymentStub(): PaymentResponse
    {
        return new class extends PaymentResponse {
            public function toObject(): object
            {
                return (object) ['label' => 'payment'];
            }
        };
    }

    private function createPayoutStub(): PayoutResponse
    {
        return new class extends PayoutResponse {
            public function toObject(): object
            {
                return (object) ['label' => 'payout'];
            }
        };
    }

    private function createRefundStub(): RefundResponse
    {
        return new class extends RefundResponse {
            public function toObject(): object
            {
                return (object) ['label' => 'refund'];
            }
        };
    }

    private function createTokenStub(): TokenResponse
    {
        return new class extends TokenResponse {
            public function toObject(): object
            {
                return (object) ['label' => 'token'];
            }
        };
    }
}
