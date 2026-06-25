<?php

namespace OnlinePayments\Sdk\TestUtil\Unit;

use OnlinePayments\Sdk\Webhooks\WebhooksHelper;

class ApiVersionMismatchTestingWebhooksHelper extends WebhooksHelper
{
    protected function getResponseFactory(): ApiVersionMismatchTestingResponseFactory
    {
        return new ApiVersionMismatchTestingResponseFactory();
    }
}
