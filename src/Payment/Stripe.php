<?php

namespace Webkul\Stripe\Payment;

use Illuminate\Support\Facades\Storage;
use Webkul\Checkout\Facades\Cart;
use Webkul\Payment\Payment\Payment;

class Stripe extends Payment
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $code = 'stripe';

    public function getRedirectUrl(): string
    {
        return route('stripe.process');
    }

    /**
     * Checks if the cart grand total is greater than 0.5.
     *
     * @return bool
     */
    public function isAvailable(): bool
    {
        return Cart::getCart()->grand_total >= 0.5;
    }

    /**
     * Returns payment method image.
     */
    public function getImage(): string
    {
        $url = $this->getConfigData('image');

        return $url ? Storage::url($url) : bagisto_asset('images/money-transfer.png', 'shop');
    }
}
