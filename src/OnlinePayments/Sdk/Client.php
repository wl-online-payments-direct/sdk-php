<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk;

use OnlinePayments\Sdk\Logging\CommunicatorLogger;
use OnlinePayments\Sdk\Merchant\MerchantClient;

/**
 * Payment platform client.
 */
class Client extends ApiResource implements ClientInterface
{
    /** @var CommunicatorInterface */
    private $communicator;

    /** @var string */
    private $clientMetaInfo;

    /**
     * Construct a new Payment platform API client.
     *
     * @param CommunicatorInterface $communicator
     * @param string $clientMetaInfo
     */
    public function __construct(CommunicatorInterface $communicator, $clientMetaInfo = '')
    {
        parent::__construct();
        $this->communicator = $communicator;
        $this->setClientMetaInfo($clientMetaInfo);
        $this->context = array();
    }

    /**
     * @return CommunicatorInterface
     */
    protected function getCommunicator()
    {
        return $this->communicator;
    }

    /**
     * @inheritdoc
     */
    public function enableLogging(CommunicatorLogger $communicatorLogger)
    {
        $this->getCommunicator()->enableLogging($communicatorLogger);
    }

    /**
     * @inheritdoc
     */
    public function disableLogging()
    {
        $this->getCommunicator()->disableLogging();
    }

    /**
     * @inheritdoc
     */
    public function setClientMetaInfo($clientMetaInfo)
    {
        $this->clientMetaInfo = $clientMetaInfo ? base64_encode($clientMetaInfo) : '';
        return $this;
    }

    /**
     * @return string
     */
    protected function getClientMetaInfo()
    {
        return $this->clientMetaInfo;
    }

    /**
     * @inheritdoc
     */
    public function merchant($merchantId)
    {
        $newContext = $this->context;
        $newContext['merchantId'] = $merchantId;
        return new MerchantClient($this, $newContext);
    }
}
