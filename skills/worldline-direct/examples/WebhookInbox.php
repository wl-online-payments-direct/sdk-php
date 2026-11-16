<?php

declare(strict_types=1);

namespace Examples;

use OnlinePayments\Sdk\Domain\WebhooksEvent;

/**
 * Stand-in for durable storage of received webhooks (the inbox): a database table or a persistent queue,
 * not memory. A background job reads the saved events and runs WebhookEventProcessor on them.
 */
interface WebhookInbox
{
    /**
     * Saves a verified event with its raw body. Ignore a duplicate: the platform can send the same event more
     * than once, and the webhooks guide identifies a duplicate by identical payment.id and type.
     */
    public function saveEvent(WebhooksEvent $webhooksEvent, string $rawBody): void;

    /**
     * Saves the raw body of an event that has a valid signature but that the SDK cannot read, so that it
     * can be replayed after an SDK upgrade.
     */
    public function saveUnreadableBody(string $rawBody, string $reason): void;
}
