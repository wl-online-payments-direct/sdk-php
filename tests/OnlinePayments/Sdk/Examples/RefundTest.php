<?php

namespace OnlinePayments\Sdk\Examples;

use Exception;
use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\ClientTestCase;
use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\RefundRequest;
use OnlinePayments\Sdk\Domain\RefundResponse;

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

    /*
     * TODO No refund endpoints are defined in the spec at the moment. Re-enable and fix the test once they are.
     */

//    /**
//     * @depends testCreateRefund
//     * @param string $refundId
//     * @return string
//     * @throws ApiException
//     * @throws \Exception
//     */
//    public function testRetrieveRefund($refundId)
//    {
//        $client = $this->getClient();
//        $merchantId = $this->getMerchantId();
//        /** @var RefundResponse $refundResponse */
//        $refundResponse = $client->merchant($merchantId)->refunds()->get($refundId);
//        return $refundResponse->getId();
//    }
}
