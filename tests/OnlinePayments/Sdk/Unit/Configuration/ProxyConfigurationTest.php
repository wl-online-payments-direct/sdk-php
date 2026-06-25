<?php

namespace OnlinePayments\Sdk\Unit\Configuration;

use OnlinePayments\Sdk\ProxyConfiguration;
use PHPUnit\Framework\TestCase;

/**
 * @group configuration
 */
class ProxyConfigurationTest extends TestCase
{
    public function testGetCurlProxy_WithHostAndPort_ReturnsHostColonPort(): void
    {
        $proxy = new ProxyConfiguration('proxy.example.com', 8080);

        $this->assertSame('proxy.example.com:8080', $proxy->getCurlProxy());
    }

    public function testGetCurlProxy_WithHostOnly_ReturnsHostOnly(): void
    {
        $proxy = new ProxyConfiguration('proxy.example.com');

        $this->assertSame('proxy.example.com', $proxy->getCurlProxy());
    }

    public function testGetCurlProxy_WithEmptyHost_ReturnsEmptyString(): void
    {
        $proxy = new ProxyConfiguration('');

        $this->assertSame('', $proxy->getCurlProxy());
    }

    public function testGetCurlProxyUserPwd_WithUsernameAndPassword_ReturnsUserColonPassword(): void
    {
        $proxy = new ProxyConfiguration('proxy.example.com', null, 'user', 'pass');

        $this->assertSame('user:pass', $proxy->getCurlProxyUserPwd());
    }

    public function testGetCurlProxyUserPwd_WithUsernameOnly_ReturnsUsernameOnly(): void
    {
        $proxy = new ProxyConfiguration('proxy.example.com', null, 'user');

        $this->assertSame('user', $proxy->getCurlProxyUserPwd());
    }

    public function testGetCurlProxyUserPwd_WithoutCredentials_ReturnsEmptyString(): void
    {
        $proxy = new ProxyConfiguration('proxy.example.com');

        $this->assertSame('', $proxy->getCurlProxyUserPwd());
    }
}
