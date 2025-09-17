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
    private CommunicatorInterface $communicator;

    /** @var string */
    private string $clientMetaInfo;

    /**
     * Construct a new Payment platform API client.
     *
     * @param CommunicatorInterface $communicator
     * @param string $clientMetaInfo
     */
    public function __construct(CommunicatorInterface $communicator, string $clientMetaInfo = '')
    {
        parent::__construct();
        $this->communicator = $communicator;
        $this->setClientMetaInfo($clientMetaInfo);
        $this->context = array();
    }

    /**
     * @return CommunicatorInterface
     */
    protected function getCommunicator(): CommunicatorInterface
    {
        return $this->communicator;
    }

    /**
     * @inheritdoc
     */
    public function enableLogging(CommunicatorLogger $communicatorLogger): void
    {
        $this->getCommunicator()->enableLogging($communicatorLogger);
    }

    /**
     * @inheritdoc
     */
    public function disableLogging(): void
    {
        $this->getCommunicator()->disableLogging();
    }

    /**
     * @inheritdoc
     */
    public function setClientMetaInfo(string $clientMetaInfo): ClientInterface
    {
        $this->clientMetaInfo = $clientMetaInfo ? base64_encode($clientMetaInfo) : '';
        return $this;
    }

    /**
     * @return string
     */
    protected function getClientMetaInfo(): string
    {
        return $this->clientMetaInfo;
    }

    /**
     * @inheritdoc
     */
    public function merchant(string $merchantId): MerchantClient
    {
        $newContext = $this->context;
        $newContext['merchantId'] = $merchantId;
        return new MerchantClient($this, $newContext);
    }
}
