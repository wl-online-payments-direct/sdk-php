<?php

declare(strict_types=1);

namespace Examples;

final readonly class StoredHostedCheckout
{
    public function __construct(
        public string $hostedCheckoutId,
        public string $returnMac,
    ) {
    }
}
