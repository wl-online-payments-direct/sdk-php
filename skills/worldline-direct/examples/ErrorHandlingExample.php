<?php

declare(strict_types=1);

namespace Examples;

use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\CommunicationException;
use OnlinePayments\Sdk\DeclinedPaymentException;
use OnlinePayments\Sdk\Domain\APIError;
use OnlinePayments\Sdk\Domain\CreatePaymentRequest;
use OnlinePayments\Sdk\IdempotenceException;
use OnlinePayments\Sdk\Merchant\MerchantClientInterface;
use OnlinePayments\Sdk\ValidationException;

final class ErrorHandlingExample
{
    public function __construct(
        private readonly MerchantClientInterface $merchantClient,
        private readonly OrderStore $orders,
    ) {
    }

    // [START error-handling]
    // $idempotenceKey is the stored key of the payment attempt (PaymentAttempt::keyFor()). Reuse it when a request
    // got no answer; replace it, stored again, only when the platform answered with an error marked retriable.
    public function createPayment(string $orderId, CreatePaymentRequest $request, string $idempotenceKey): PaymentStep
    {
        $context = new CallContext();
        $context->setIdempotenceKey($idempotenceKey);
        for ($attempt = 1; ; $attempt++) {
            try {
                $response = $this->merchantClient->payments()->createPayment($request, $context);
                return CreatePaymentResponseHandler::handle($response, $orderId, $this->orders);
            } catch (DeclinedPaymentException $e) {
                // The payment exists but was declined. Read its status before deciding anything.
                $paymentId = $e->getCreatePaymentResponse()->getPayment()?->getId();
                if ($paymentId === null) {
                    $this->orders->saveState($orderId, OrderPaymentState::Failed);
                    return PaymentStep::done(OrderPaymentState::Failed);
                }
                $this->orders->savePaymentId($orderId, $paymentId);
                $details = $this->merchantClient->payments()->getPaymentDetails($paymentId);
                $state = PaymentStatusExample::toOrderState($details->getStatus(), $details->getStatusOutput());
                $this->orders->saveState($orderId, $state);
                return PaymentStep::done($state);
            } catch (IdempotenceException $e) {
                // The first request with this key is still running. Wait, then send the same request again.
                if ($attempt >= 3) {
                    throw $e;
                }
                sleep(2 * $attempt);
            } catch (ValidationException $e) {
                // 400: the request is invalid. Fix the request; retrying does not help.
                // Log the error codes and the error ID, never the request (it can hold card data).
                $codes = array_map(
                    static fn (APIError $error): string => $error->getErrorCode() . ' ' . $error->getPropertyName(),
                    $e->getErrors(),
                );
                error_log('createPayment rejected, errorId ' . $e->getErrorId() . ': ' . implode('; ', $codes));
                throw $e;
            } catch (ApiException $e) {
                // A technical error marked retriable: the request was not processed.
                // Send it again with a new key, stored before the call like the first one.
                // Other errors are not retried: AuthorizationException (403, wrong API key, secret or merchant ID),
                // ReferenceException (404, 409, 410), PlatformException without a retriable error, other ApiException.
                if ($attempt >= 3 || !self::isRetriable($e)) {
                    throw $e;
                }
                $context = new CallContext();
                $context->setIdempotenceKey(PaymentAttempt::start($orderId, $this->orders));
                sleep(2 * $attempt);
            } catch (CommunicationException $e) {
                // Timeout or connection error (cURL): the payment may or may not exist. Retry with the same key;
                // the platform returns the original result instead of creating a second payment.
                if ($attempt >= 3) {
                    throw $e;
                }
                sleep(2 * $attempt);
            }
        }
    }

    private static function isRetriable(ApiException $e): bool
    {
        foreach ($e->getErrors() as $error) {
            if ($error->getRetriable() === true) {
                return true;
            }
        }
        return false;
    }
    // [END error-handling]
}
