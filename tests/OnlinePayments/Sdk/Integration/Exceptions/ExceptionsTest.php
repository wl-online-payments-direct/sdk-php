<?php
namespace OnlinePayments\Sdk\Integration\Exceptions;

use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\DeclinedPaymentException;
use OnlinePayments\Sdk\DeclinedPayoutException;
use OnlinePayments\Sdk\DeclinedRefundException;
use OnlinePayments\Sdk\Merchant\Payments\PaymentsClientInterface;
use OnlinePayments\Sdk\Merchant\Payouts\PayoutsClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Common\CreatePaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Payments\CapturePaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Payments\RefundRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Payouts\CreatePayoutRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class ExceptionsTest extends TestCase
{
    private const NON_EXISTING_PAYMENT_ID = '9999999999_0';
    private const INVALID_MERCHANT_ID = '000000';
    private const CURRENCY_CODE = 'EUR';
    private const DECLINED_REFUND_AMOUNT = 1500;

    private PaymentsClientInterface $paymentsClient;
    private PayoutsClientInterface $payoutsClient;
    private SdkTestHelper $sdkTestHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->paymentsClient = $this->client->merchant($this->getMerchantId())->payments();
        $this->payoutsClient = $this->client->merchant($this->getMerchantId())->payouts();

        $this->sdkTestHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testShouldThrowResponseExceptionWithErrorIdAndAPIError(): void
    {
        $request = CreatePaymentRequestBuilder::create()
            ->withCardNumber('123')
            ->build();

        try {
            $this->paymentsClient->createPayment($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertNotNull($e);
            $this->assertNotEmpty($e->getErrorId());
            $errors = $e->getErrors();
            $this->assertNotEmpty($errors);
            $this->assertCount(1, $errors);
            $error = $errors[0];
            $this->assertNotNull($error->getId());
            $this->assertNotNull($error->getHttpStatusCode());
        }
    }

    public function testShouldThrowValidationExceptionForInvalidCurrency(): void
    {
        $request = CreatePayoutRequestBuilder::create()
            ->withAmount(1000)
            ->withCurrencyCode('INVALID')
            ->build();

        try {
            $this->payoutsClient->createPayout($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertNotNull($e);
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrorId());
            $errors = $e->getErrors();
            $this->assertNotEmpty($errors);
            $this->assertSame('INVALID_VALUE', $errors[0]->getId());
            $this->assertSame(400, $errors[0]->getHttpStatusCode());
        }
    }

    public function testShouldThrowValidationExceptionWithMultipleAPIErrors(): void
    {
        $request = CreatePaymentRequestBuilder::create()
            ->withCardNumber('123')
            ->withCvv('')
            ->withExpiryDate('invalid')
            ->build();

        try {
            $this->paymentsClient->createPayment($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertNotNull($e);
            $this->assertSame(400, $e->getHttpStatusCode());
            $errors = $e->getErrors();
            $this->assertNotEmpty($errors);
            foreach ($errors as $error) {
                $this->assertNotNull($error->getId());
                $this->assertNotNull($error->getHttpStatusCode());
                $this->assertSame(400, $error->getHttpStatusCode());
            }
        }
    }

    public function testShouldThrowAuthorizationExceptionForInvalidMerchantId(): void
    {
        $request = CreatePaymentRequestBuilder::create()->build();
        $invalidPaymentsClient = $this->client->merchant(self::INVALID_MERCHANT_ID)->payments();

        try {
            $invalidPaymentsClient->createPayment($request);

            $this->fail('Expected AuthorizationException was not thrown');
        } catch (AuthorizationException $e) {
            $this->assertNotNull($e);
            $this->assertSame(403, $e->getHttpStatusCode());
            $this->assertNotNull($e->getResponse());
            $this->assertNotEmpty($e->getErrorId());
            $errors = $e->getErrors();
            $this->assertNotEmpty($errors);
            $this->assertNotNull($errors[0]->getId());
            $this->assertSame(403, $errors[0]->getHttpStatusCode());
        }
    }

    public function testShouldThrowDeclinedPaymentExceptionForPaymentCreate(): void
    {
        $request = CreatePaymentRequestBuilder::create()
            ->withCardNumber('4321456998744563')
            ->build();

        try {
            $this->paymentsClient->createPayment($request);

            $this->fail('Expected DeclinedPaymentException was not thrown');
        } catch (DeclinedPaymentException $e) {
            $this->assertNotNull($e);
            $this->assertGreaterThanOrEqual(400, $e->getHttpStatusCode());
            $this->assertNotNull($e->getResponse());
            $paymentResponse = $e->getCreatePaymentResponse();
            $this->assertNotNull($paymentResponse);
            $this->assertNotNull($paymentResponse->getPayment());
            $this->assertNotNull($paymentResponse->getPayment()->getId());
            $this->assertNotNull($paymentResponse->getPayment()->getStatus());
            $this->assertSame('REJECTED', $paymentResponse->getPayment()->getStatus());
        }
    }

    public function testShouldThrowDeclinedPayoutExceptionForInvalidPayout(): void
    {
        $request = CreatePayoutRequestBuilder::create()
            ->withCardNumber('4321456998744563')
            ->build();

        try {
            $this->payoutsClient->createPayout($request);

            $this->fail('Expected DeclinedPayoutException was not thrown');
        } catch (DeclinedPayoutException $e) {
            $this->assertNotNull($e);
            $this->assertGreaterThanOrEqual(400, $e->getHttpStatusCode());
            $this->assertNotNull($e->getResponse());
            $payoutResult = $e->getPayoutResult();
            $this->assertNotNull($payoutResult);
            $this->assertNotNull($payoutResult->getId());
            $this->assertNotNull($payoutResult->getStatus());
            $this->assertSame('REJECTED_CREDIT', $payoutResult->getStatus());
        }
    }

    public function testShouldThrowApiExceptionForUnknownStatusCode(): void
    {
        $request = CreatePaymentRequestBuilder::create()
            ->withCardNumber('123')
            ->build();

        try {
            $this->paymentsClient->createPayment($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertNotNull($e);
            $this->assertGreaterThanOrEqual(400, $e->getHttpStatusCode());
            $this->assertNotNull($e->getResponse());
            $this->assertNotEmpty($e->getErrorId());
            $this->assertNotEmpty($e->getErrors());
        }
    }

    public function testShouldThrowDeclinedPaymentExceptionAsParent(): void
    {
        $request = CreatePaymentRequestBuilder::create()
            ->withCardNumber('4321456998744563')
            ->build();

        try {
            $this->paymentsClient->createPayment($request);

            $this->fail('Expected DeclinedPaymentException was not thrown');
        } catch (DeclinedPaymentException $e) {
            $this->assertNotNull($e);
            $this->assertNotNull($e->getResponse());
        }
    }

    public function testShouldThrowDeclinedRefundException(): void
    {
        $this->markTestSkipped(
            'Test is skipped because the action could not be triggered in the current merchant setup.'
        );

        $paymentId = $this->sdkTestHelper->createPaymentAndGetId(self::DECLINED_REFUND_AMOUNT, self::CURRENCY_CODE);
        $this->paymentsClient->capturePayment($paymentId, CapturePaymentRequestBuilder::create()->build());

        try {
            $this->paymentsClient->refundPayment(
                $paymentId,
                RefundRequestBuilder::create()
                    ->withAmount(self::DECLINED_REFUND_AMOUNT)
                    ->withCurrency(self::CURRENCY_CODE)
                    ->build()
            );

            $this->fail('Expected DeclinedRefundException was not thrown');
        } catch (DeclinedRefundException $e) {
            $this->assertNotNull($e);
            $this->assertGreaterThanOrEqual(400, $e->getHttpStatusCode());
            $this->assertNotNull($e->getResponse());
            $refundResponse = $e->getRefundResponse();
            $this->assertNotNull($refundResponse);
            $this->assertNotNull($refundResponse->getId());
            $this->assertNotNull($refundResponse->getStatus());
        }
    }

    public function testShouldHaveErrorIdInValidationException(): void
    {
        $request = CreatePaymentRequestBuilder::create()
            ->withCardNumber('123')
            ->build();

        try {
            $this->paymentsClient->createPayment($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertNotEmpty($e->getErrorId());
        }
    }

    public function testShouldHaveErrorIdInReferenceException(): void
    {
        try {
            $this->paymentsClient->getPayment(self::NON_EXISTING_PAYMENT_ID);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertNotEmpty($e->getErrorId());
        }
    }

    public function testShouldHaveErrorIdInAuthorizationException(): void
    {
        $request = CreatePaymentRequestBuilder::create()->build();
        $invalidPaymentsClient = $this->client->merchant(self::INVALID_MERCHANT_ID)->payments();

        try {
            $invalidPaymentsClient->createPayment($request);

            $this->fail('Expected AuthorizationException was not thrown');
        } catch (AuthorizationException $e) {
            $this->assertNotEmpty($e->getErrorId());
        }
    }
}
