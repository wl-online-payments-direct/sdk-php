<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Webhooks;

use OnlinePayments\Sdk\Domain\SendTestRequest;

class SendTestRequestBuilder
{
    private ?string $url = null;

    public static function create(): self
    {
        return new self();
    }

    public function withUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    public function build(): SendTestRequest
    {
        $request = new SendTestRequest();

        if ($this->url !== null) {
            $request->setUrl($this->url);
        }

        return $request;
    }
}
