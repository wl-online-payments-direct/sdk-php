<?php
namespace Ingenico\Direct\Sdk\Examples;

use Exception;
use Ingenico\Direct\Sdk\ApiException;
use Ingenico\Direct\Sdk\ClientTestCase;
use Ingenico\Direct\Sdk\Domain\AmountOfMoney;
use Ingenico\Direct\Sdk\Domain\RefundRequest;
use Ingenico\Direct\Sdk\Domain\RefundResponse;

/**
 * @group examples
 *
 */
class RefundTest extends ClientTestCase
{
    /**
     * @return string
     * @return string
     * @throws ApiException*@throws \Exception
     * @throws Exception
     */
    public function testCreateRefund()
    {
        $this->markTestSkipped('No refundable payment is available at this time');

        $client = $this->getClient();
        $merchantId = $this->getMerchantId();
        $paymentId = "1_1";

        $refundRequest = new RefundRequest();

        $amountOfMoney = new AmountOfMoney();
        $amountOfMoney->setCurrencyCode("EUR");
        $amountOfMoney->setAmount(1);
        $refundRequest->setAmountOfMoney($amountOfMoney);

        /** @var RefundResponse $refundResponse * */
        $refundResponse = $client->merchant($merchantId)->payments()->refundPayment($paymentId, $refundRequest);
        return $refundResponse->getId();
    }
}
