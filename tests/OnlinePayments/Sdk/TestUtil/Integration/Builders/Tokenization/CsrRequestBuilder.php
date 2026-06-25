<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Tokenization;

use OnlinePayments\Sdk\Domain\CsrRequest;

class CsrRequestBuilder
{
    private const VALID_CSR = "-----BEGIN CERTIFICATE REQUEST-----\n"
    . "MIICljCCAX4CAQAwDQYJKoZIhvcNAQEBBQAwDTELMAkGA1UEAwwCQ0EwggEiMA0G\n"
    . "CSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCQfbsVzv0L8pKH2l8q6EJf0fzxnDlW\n"
    . "-----END CERTIFICATE REQUEST-----";

    private string $csr = self::VALID_CSR;

    public static function create(): self
    {
        return new self();
    }

    public function withCsr(string $csr): self
    {
        $this->csr = $csr;
        return $this;
    }

    public function build(): CsrRequest
    {
        $request = new CsrRequest();
        $request->setCsr($this->csr);

        return $request;
    }
}
