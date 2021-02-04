<?php
namespace Ingenico\Direct\Sdk\Examples;

use Exception;
use Ingenico\Direct\Sdk\ApiException;
use Ingenico\Direct\Sdk\ClientTestCase;
use Ingenico\Direct\Sdk\Domain\AmountOfMoney;
use Ingenico\Direct\Sdk\Domain\Card;
use Ingenico\Direct\Sdk\Domain\CardPayoutMethodSpecificInput;
use Ingenico\Direct\Sdk\Domain\CreatePayoutRequest;
use Ingenico\Direct\Sdk\Domain\PaymentReferences;

/**
 * @group examples
 *
 */
class PayoutTest extends ClientTestCase
{
    /**
     * @return string
     * @throws Exception
     */
    public function testCreatePayout()
    {
        $this->markTestSkipped('Payouts are not available for all merchants');

        $client = $this->getClient();
        $merchantId = $this->getMerchantId();

        $createPayoutRequest = new CreatePayoutRequest();

        $amountOfMoney = new AmountOfMoney();
        $amountOfMoney->setAmount(2345);
        $amountOfMoney->setCurrencyCode("EUR");
        $createPayoutRequest->setAmountOfMoney($amountOfMoney);

        $cardPayoutMethodSpecificInput = new CardPayoutMethodSpecificInput();
        $cardPayoutMethodSpecificInput->setPaymentProductId(1);

        $card = new Card();
        $card->setCardholderName("Wile E. Coyote");
        $card->setCardNumber("4567350000427977");
        $card->setCvv("123");
        $card->setExpiryDate("1230");
        $cardPayoutMethodSpecificInput->setCard($card);

        $payoutReferences = new PaymentReferences();
        $payoutReferences->setMerchantReference("AcmeOrder0001");
        $createPayoutRequest->setReferences($payoutReferences);

        $payoutResponse = $client->merchant($merchantId)->payouts()->createPayout($createPayoutRequest);

        return $payoutResponse->getId();
    }

    /**
     * @depends testCreatePayout
     * @param string $payoutId
     * @return string
     * @throws ApiException|Exception
     */
    public function testRetrievePayout($payoutId)
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();

        $payoutResponse = $client->merchant($merchantId)->payouts()->getPayout($payoutId);
        return $payoutResponse->getId();
    }
}
