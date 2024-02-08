<?php

use Illuminate\Support\Facades\Route;
use Webkul\Stripe\Http\Controllers\PaymentController;

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency']], function () {

    /**
     * Stripe payment routes
     */
    Route::get('/stripe-redirect', [PaymentController::class, 'redirect'])->name('stripe.process');

    Route::get('/stripe-success', [PaymentController::class, 'success'])->name('stripe.success');

    Route::post('/stripe-cancel', [PaymentController::class, 'failure'])->name('stripe.cancel');
});
