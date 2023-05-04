# Stripe Payment Gateway
[![License](https://poser.pugx.org/ahmetarsiv/stripe-payment-gateway/license)](https://github.com/ahmetarsiv/stripe-payment-gateway/blob/master/LICENSE)
<a href="https://packagist.org/packages/ahmetarsiv/stripe-payment-gateway"><img src="https://poser.pugx.org/ahmetarsiv/stripe-payment-gateway/d/total" alt="Total Downloads"></a>

## 1. Introduction:

Install this package now to receive secure payments in your online store. Stripe offers an easy and secure payment gateway

## 2. Requirements:

* **PHP**: 8.0 or higher.
* **Bagisto**: v1.4.*
* **Composer**: 1.6.5 or higher.

## 3. Installation:

- Run the following command
```
composer require ahmetarsiv/stripe-payment-gateway
```

- Run these commands below to complete the setup
```
composer dump-autoload
```

- Run these commands below to complete the setup
```
php artisan optimize
```

- Go to the Bagisto admin panel, find the Stripe payment gateway, enter your API key and start receiving payments.
```
http://localhost:8000/admin/configuration/sales/paymentmethods
```

- To use the demo API key, paste the key into the Stripe Client Secret section.
```
sk_test_4eC39HqLyjWDarjtT1zdp7dc
```

## Installation without composer:

- Unzip the respective extension zip and then merge "packages" and "storage" folders into project root directory.
- Goto config/app.php file and add following line under 'providers'

```
Webkul\Stripe\Providers\StripeServiceProvider::class,
```

- Goto composer.json file and add following line under 'psr-4'

```
"Webkul\\Stripe\\": "packages/Webkul/Stripe/src"
```

- Run these commands below to complete the setup

```
composer dump-autoload
```

```
php artisan optimize
```

- Go to the Bagisto admin panel, find the Stripe payment gateway, enter your API key and start receiving payments.
```
http://localhost:8000/admin/configuration/sales/paymentmethods
```

- To use the demo API key, paste the key into the Stripe Client Secret section.
```
sk_test_4eC39HqLyjWDarjtT1zdp7dc
```

> That's it, now just execute the project on your specified domain.
