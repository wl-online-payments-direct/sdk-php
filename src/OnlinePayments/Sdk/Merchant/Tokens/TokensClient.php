<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Merchant\Tokens;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Domain\CreateTokenRequest;
use OnlinePayments\Sdk\Resource;
use OnlinePayments\Sdk\ResponseClassMap;

class TokensClient extends Resource implements TokensClientInterface
{
    /**
     * {@inheritDoc}
     */
    public function createToken(CreateTokenRequest $body, CallContext $callContext = null)
    {
        $responseClassMap = new ResponseClassMap('\OnlinePayments\Sdk\Domain\CreatedTokenResponse');
        return $this->getCommunicator()->post(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/tokens'),
            $this->getClientMetaInfo(),
            $body,
            null,
            $callContext
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getToken($tokenId, CallContext $callContext = null)
    {
        $this->context['tokenId'] = $tokenId;
        $responseClassMap = new ResponseClassMap('\OnlinePayments\Sdk\Domain\TokenResponse');
        return $this->getCommunicator()->get(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/tokens/{tokenId}'),
            $this->getClientMetaInfo(),
            null,
            $callContext
        );
    }

    /**
     * {@inheritDoc}
     */
    public function deleteToken($tokenId, CallContext $callContext = null)
    {
        $this->context['tokenId'] = $tokenId;
        $responseClassMap = new ResponseClassMap('');
        return $this->getCommunicator()->delete(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/tokens/{tokenId}'),
            $this->getClientMetaInfo(),
            null,
            $callContext
        );
    }
}
