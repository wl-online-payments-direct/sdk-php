<?php

declare(strict_types=1);

namespace Examples;

/**
 * What the web layer must do after a create payment call.
 */
final readonly class PaymentStep
{
    private function __construct(
        public ?string $redirectUrl,
        public OrderPaymentState $state,
    ) {
    }

    public static function redirect(string $url): self
    {
        return new self($url, OrderPaymentState::Pending);
    }

    public static function done(OrderPaymentState $state): self
    {
        return new self(null, $state);
    }

    public function isRedirect(): bool
    {
        return $this->redirectUrl !== null;
    }
}
