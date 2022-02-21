<?php

namespace OnlinePayments\Sdk;

use Exception;
use OnlinePayments\Sdk\Merchant\Products\GetPaymentProductsParams;

/**
 * @group communicator
 *
 */
class CommunicatorTest extends OnlinePaymentsTestCase
{

    /** @var Communicator */
    protected $defaultCommunicator = null;

    /** @var ResponseClassMap */
    protected $defaultResponseClassMap = null;

    /**
     * @throws Exception
     */
    public function setUp()
    {
        $this->defaultCommunicator = new Communicator(
            new DefaultConnection(),
            $this->getCommunicatorConfiguration()
        );
        $this->defaultResponseClassMap = new ResponseClassMap('');
    }

    public function tearDown()
    {
    }

    public function testApiRequestNoop()
    {
        new Communicator(new DefaultConnection(), new CommunicatorConfiguration('', '', '', ''));
    }

    /**
     * @throws Exception
     */
    public function testConnectionSharing()
    {
        $sharedConnection = new DefaultConnection();
        $relativeUri = sprintf('/%s/%s/services/testconnection', Client::API_VERSION, $this->getMerchantId());
        $communicator1 = new Communicator($sharedConnection, $this->getCommunicatorConfiguration());
        $communicator1->get($this->defaultResponseClassMap, $relativeUri);
        $communicator2 = new Communicator($sharedConnection, $this->getCommunicatorConfiguration());
        $communicator2->get($this->defaultResponseClassMap, $relativeUri);
        $this->assertEquals($communicator1->getConnection(), $communicator2->getConnection());
    }

    /**
     * @throws Exception
     */
    public function testApiRequestGet()
    {
        $relativeUri = sprintf('/%s/%s/products', Client::API_VERSION, $this->getMerchantId());
        $findParams = new GetPaymentProductsParams();
        $findParams->setCountryCode('NL');
        $findParams->setCurrencyCode('EUR');
        $clientHeaders = [];
        $this->defaultCommunicator->get($this->defaultResponseClassMap, $relativeUri, $clientHeaders, $findParams);
    }

    /**
     * @throws Exception
     */
    public function testExceptionInvalidUrl()
    {
        try {
            $relativeUri = sprintf('/%s/%s/foo', Client::API_VERSION, $this->getMerchantId());
            $this->defaultCommunicator->get($this->defaultResponseClassMap, $relativeUri);
        } catch (InvalidResponseException $e) {
            $this->assertEquals(404, $e->getResponse()->getHttpStatusCode());
            return;
        }
        $this->fail('an expected exception has not been raised');
    }

    /**
     * @throws Exception
     */
    public function testApiRequestPost()
    {
        try {
            $relativeUri = sprintf('/%s/%s/payments/1/cancel', Client::API_VERSION, $this->getMerchantId());
            $this->defaultCommunicator->post($this->defaultResponseClassMap, $relativeUri);
        } catch (ReferenceException $e) {
            return;
        }
        $this->fail();
    }

    /**
     * @throws Exception
     */
    public function testApiRequestPut()
    {
        try {
            $relativeUri = sprintf('/%s/%s/tokens/1', Client::API_VERSION, $this->getMerchantId());
            $this->defaultCommunicator->put($this->defaultResponseClassMap, $relativeUri);
        } catch (InvalidResponseException $e) {
            return;
        }
        $this->fail();
    }

    /**
     * @throws Exception
     */
    public function testApiRequestDelete()
    {
        try {
            $relativeUri = sprintf('/%s/%s/tokens/1', Client::API_VERSION, $this->getMerchantId());
            $this->defaultCommunicator->delete($this->defaultResponseClassMap, $relativeUri);
        } catch (ReferenceException $e) {
            return;
        }
        $this->fail();
    }
}
