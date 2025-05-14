<?php
namespace OnlinePayments\Sdk\Communication;

use stdClass;
use OnlinePayments\Sdk\CommunicatorConfiguration;
use OnlinePayments\Sdk\Domain\ShoppingCartExtension;

/**
 * Class MetadataProvider
 *
 * @package OnlinePayments\Sdk\Communication
 */
class MetadataProvider implements MetadataProviderInterface
{
    const SDK_VERSION = '6.1.0';

    /** @var string */
    private $integrator;

    /** @var ShoppingCartExtension|null */
    private $shoppingCartExtension;

    /**
     * @param CommunicatorConfiguration $communicatorConfiguration
     */
    public function __construct(CommunicatorConfiguration $communicatorConfiguration) {
        $this->integrator = $communicatorConfiguration->getIntegrator();
        $this->shoppingCartExtension = $communicatorConfiguration->getShoppingCartExtension();
    }

    /**
     * @return string
     */
    public function getServerMetaInfoValue()
    {
        // use a stdClass instead of specific class to keep out null properties
        $serverMetaInfo = new stdClass();
        $serverMetaInfo->platformIdentifier = sprintf('%s; php version %s', php_uname(), phpversion());
        $serverMetaInfo->sdkIdentifier = 'PHPServerSDK/v' . static::SDK_VERSION;
        $serverMetaInfo->sdkCreator = 'OnlinePayments';
        $serverMetaInfo->integrator = $this->integrator;
        if (!is_null($this->shoppingCartExtension)) {
            $serverMetaInfo->shoppingCartExtension = $this->shoppingCartExtension->toObject();
        }
        // the sdkIdentifier contains a /. Without the JSON_UNESCAPED_SLASHES, this is turned to \/ in JSON.
        return base64_encode(json_encode($serverMetaInfo, JSON_UNESCAPED_SLASHES));
    }
}
