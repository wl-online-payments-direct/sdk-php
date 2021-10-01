<?php
namespace Ingenico\Direct\Sdk\Examples;

use Exception;
use Ingenico\Direct\Sdk\ApiException;
use Ingenico\Direct\Sdk\ClientTestCase;
use Ingenico\Direct\Sdk\Domain\Card;
use Ingenico\Direct\Sdk\Domain\CreateTokenRequest;
use Ingenico\Direct\Sdk\Domain\TokenCardSpecificInput;
use Ingenico\Direct\Sdk\Domain\TokenData;
use Ingenico\Direct\Sdk\ResourceLogger;

/**
 * @group examples
 *
 */
class TokenTest extends ClientTestCase
{
    /**
     * @return string
     * @throws ApiException|Exception
     */
    public function testCreateToken()
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();

        $logger = new ResourceLogger(STDOUT);
        $client->enableLogging($logger);
        $createTokenRequest = new CreateTokenRequest();
        $createTokenRequest->setPaymentProductId(705);

        $cardSpecificInput = new TokenCardSpecificInput();

        $data = new TokenData();

        $card = new Card();
        $card->setCardholderName("Wile E. Coyote");
        $card->setCardNumber("4567350000427977");
        $card->setCvv("123");
        $card->setExpiryDate("1230");
        $data->setCard($card);

        $cardSpecificInput->setData($data);

        $createTokenRequest->setCard($cardSpecificInput);

        $createTokenResponse = $client->merchant($merchantId)->tokens()->createToken($createTokenRequest);
        return $createTokenResponse->getToken();
    }

    /**
     * @param string $token
     * @return string
     * @throws ApiException|Exception
     * @depends testCreateToken
     */
    public function testRetrieveToken($token)
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();
        $client->merchant($merchantId)->tokens()->getToken($token);
        return $token;
    }

    /**
     * @depends testRetrieveToken
     * @param string $token
     * @throws ApiException|Exception
     */
    public function testDeleteToken($token)
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();
        $client->merchant($merchantId)->tokens()->deleteToken($token);
    }
}
