<?php

namespace OnlinePayments\Sdk\Communication;

use JsonException;
use stdClass;
use UnexpectedValueException;
use OnlinePayments\Sdk\CommunicatorConfiguration;
use OnlinePayments\Sdk\Domain\ShoppingCartExtension;

/**
 * Class MetadataProvider
 *
 * @package OnlinePayments\Sdk\Communication
 */
class MetadataProvider implements MetadataProviderInterface
{
    public const string SDK_VERSION = '14.0.0';

    /** @var string */
    private readonly string $integrator;

    /** @var ShoppingCartExtension|null */
    private readonly ?ShoppingCartExtension $shoppingCartExtension;

    /**
     * @param CommunicatorConfiguration $communicatorConfiguration
     */
    public function __construct(CommunicatorConfiguration $communicatorConfiguration)
    {
        $this->integrator = $communicatorConfiguration->getIntegrator();
        $this->shoppingCartExtension = $communicatorConfiguration->getShoppingCartExtension();
    }

    /**
     * @return string
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function getServerMetaInfoValue(): string
    {
        // use a stdClass instead of specific class to keep out null properties
        $serverMetaInfo = new stdClass();
        $serverMetaInfo->platformIdentifier = sprintf('%s %s; php version %s', php_uname('s'), php_uname('r'), phpversion());
        $serverMetaInfo->sdkIdentifier = 'PHPServerSDK/v' . static::SDK_VERSION;
        $serverMetaInfo->sdkCreator = 'OnlinePayments';
        $serverMetaInfo->integrator = $this->integrator;
        if ($this->shoppingCartExtension !== null) {
            $serverMetaInfo->shoppingCartExtension = $this->shoppingCartExtension->toObject();
        }
        try {
            // the sdkIdentifier contains a /. Without the JSON_UNESCAPED_SLASHES, this is turned to \/ in JSON.
            return base64_encode(json_encode($serverMetaInfo, JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR));
        } catch (JsonException $e) {
            throw new UnexpectedValueException('Could not encode the server meta info as JSON: ' . $e->getMessage(), 0, $e);
        }
    }
}
