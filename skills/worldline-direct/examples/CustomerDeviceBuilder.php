<?php

declare(strict_types=1);

namespace Examples;

use OnlinePayments\Sdk\Domain\BrowserData;
use OnlinePayments\Sdk\Domain\CustomerDevice;

final class CustomerDeviceBuilder
{
    // [START customer-device]
    // 3-D Secure needs details about the customer's browser. Collect the browser values with
    // JavaScript on the checkout page and read the rest from the HTTP request
    // (e.g. $_SERVER['HTTP_ACCEPT'], $_SERVER['HTTP_USER_AGENT'], $_SERVER['REMOTE_ADDR']).
    public static function build(string $acceptHeader, string $userAgent, string $ipAddress, BrowserInfo $browser): CustomerDevice
    {
        return (new CustomerDevice())
            ->withAcceptHeader($acceptHeader)
            ->withUserAgent($userAgent)
            ->withIpAddress($ipAddress)
            ->withLocale($browser->locale)
            ->withTimezoneOffsetUtcMinutes((string) $browser->timezoneOffsetUtcMinutes)
            ->withBrowserData((new BrowserData())
                ->withColorDepth($browser->colorDepth)
                ->withJavaEnabled($browser->javaEnabled)
                ->withJavaScriptEnabled(true)
                ->withScreenHeight((string) $browser->screenHeight)
                ->withScreenWidth((string) $browser->screenWidth));
    }
    // [END customer-device]
}
