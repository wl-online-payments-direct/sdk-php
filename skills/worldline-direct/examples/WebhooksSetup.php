<?php

declare(strict_types=1);

namespace Examples;

use OnlinePayments\Sdk\Webhooks\InMemorySecretKeyStore;
use OnlinePayments\Sdk\Webhooks\WebhooksHelper;

final class WebhooksSetup
{
    // [START webhooks-setup]
    // Create the helper once, at startup. The key ID and secret come from the Merchant Portal
    // (Developer > Webhooks). requireEnv() (see client setup) fails with the name of a missing setting.
    // Keep the secret in a secret store or the local environment, never in the repository. In production,
    // implement SecretKeyStore on top of your secret storage.
    public static function createHelper(): WebhooksHelper
    {
        $secretKeyStore = new InMemorySecretKeyStore([
            ClientSetup::requireEnv('ONLINEPAYMENTS_WEBHOOK_KEY_ID') => ClientSetup::requireEnv('ONLINEPAYMENTS_WEBHOOK_SECRET'),
        ]);
        return new WebhooksHelper($secretKeyStore);
    }
    // [END webhooks-setup]
}
