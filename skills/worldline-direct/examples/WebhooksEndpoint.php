<?php

declare(strict_types=1);

namespace Examples;

use OnlinePayments\Sdk\Communication\InvalidResponseException;
use OnlinePayments\Sdk\Webhooks\ApiVersionMismatchException;
use OnlinePayments\Sdk\Webhooks\SignatureValidationException;
use OnlinePayments\Sdk\Webhooks\WebhooksHelper;

final class WebhooksEndpoint
{
    public function __construct(
        private readonly WebhooksHelper $webhooksHelper,
        private readonly WebhookInbox $inbox,
    ) {
    }

    // [START webhooks-receive]
    // Call this from your HTTP endpoint with the raw body and the request headers, e.g.
    // plain PHP: file_get_contents('php://input') and getallheaders();
    // Laravel/Symfony: $request->getContent() and $request->headers->all().
    // Returns the HTTP status to answer with.
    /**
     * @param array<string, string|list<string>> $headers
     */
    public function receive(string $body, array $headers): int
    {
        try {
            // Pass headers as received; the helper rejects multiple X-GCS-Signature or X-GCS-KeyId values.
            $webhooksEvent = $this->webhooksHelper->unmarshal($body, $headers);
        } catch (SignatureValidationException) {
            // Missing header, wrong signature or unknown key ID: not sent by the platform, or the wrong
            // secret is configured. Do nothing with it.
            return 401;
        } catch (ApiVersionMismatchException | InvalidResponseException $e) {
            // The signature is valid, so the platform sent this; an error status would only make it send the same
            // body again. The SDK cannot read it: other API version, malformed JSON, a non-object JSON value, or
            // an unsupported event shape. Keep the body for a replay after an SDK upgrade, alert, and answer 2xx.
            $this->inbox->saveUnreadableBody($body, $e->getMessage());
            error_log('ALERT: webhook with a valid signature could not be read: ' . $e->getMessage());
            return 200;
        }

        // Save first, process later. Do not count on the platform sending the event again after a 2xx, so an
        // event that is only in memory when the process dies can be lost. If saving fails, let the error become
        // a 5xx: then the platform sends the event again.
        $this->inbox->saveEvent($webhooksEvent, $body);
        return 200;
    }
    // [END webhooks-receive]
}
