<?php

declare(strict_types=1);

namespace Examples;

/**
 * The payment state of an order in your application.
 */
enum OrderPaymentState: string
{
    case Pending = 'pending';
    case Authorized = 'authorized';
    case Paid = 'paid';
    case Failed = 'failed';
    case Cancelled = 'cancelled';
    case Refunded = 'refunded';
    case Reversed = 'reversed';
}
