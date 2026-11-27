<?php

declare(strict_types=1);

namespace Examples;

use OnlinePayments\Sdk\Client;
use OnlinePayments\Sdk\Factory;
use OnlinePayments\Sdk\Merchant\MerchantClientInterface;
use RuntimeException;

final class ClientSetup
{
    // [START client-setup]
    // Read a setting and fail at startup, with its name, when it is missing or blank. Do not cast getenv() to a
    // string: that turns a missing setting into an empty value and the error shows up later, in a payment.
    // Locally keep the values in your environment or your platform's secret store, never in a file in the
    // repository; in production read them from a secret store (cloud secret manager, Vault, framework secrets).
    public static function requireEnv(string $name): string
    {
        $value = getenv($name);
        if ($value === false || trim($value) === '') {
            throw new RuntimeException("Missing configuration: $name");
        }
        return $value;
    }

    // The absolute public URL of your shop, e.g. https://shop.example. The return URL is built from it, never
    // from the Host header of a request, which the sender controls.
    public static function publicBaseUrl(): string
    {
        $url = self::requireEnv('SHOP_PUBLIC_BASE_URL');
        $parts = parse_url($url);
        if (!is_array($parts) || !in_array($parts['scheme'] ?? '', ['https', 'http'], true)
            || ($parts['host'] ?? '') === '' || isset($parts['query']) || isset($parts['fragment'])) {
            throw new RuntimeException('SHOP_PUBLIC_BASE_URL must be an absolute URL such as https://shop.example');
        }
        return rtrim($url, '/');
    }

    // Create the client once per request (or once per worker in long-running processes) and reuse it
    // for every call, e.g. register it as a shared service in your dependency injection container.
    public static function createClient(): Client
    {
        return Factory::createClient(
            apiEndpoint: self::requireEnv('ONLINEPAYMENTS_API_ENDPOINT'),
            apiKeyId: self::requireEnv('ONLINEPAYMENTS_API_KEY_ID'),
            apiSecret: self::requireEnv('ONLINEPAYMENTS_API_SECRET'),
            // Your company or application name; it identifies your requests in the platform logs.
            integrator: self::requireEnv('ONLINEPAYMENTS_INTEGRATOR'),
            connectTimeout: 5,
            readTimeout: 300,
        );
    }

    // The merchant ID is your PSPID. Every API call goes through the merchant client.
    public static function createMerchantClient(Client $client): MerchantClientInterface
    {
        return $client->merchant(self::requireEnv('ONLINEPAYMENTS_MERCHANT_ID'));
    }
    // [END client-setup]
}
