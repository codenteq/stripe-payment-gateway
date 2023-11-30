<?php

return [
    'stripe' => [
        'name'              => 'Stripe',
        'payment'           => 'Stripe-betalingsgateway',
        'title'             => 'Debet- of creditcard',
        'description'       => 'Stripe',

        'system' => [
            'title'         => 'Titel',
            'description'   => 'Beschrijving',
            'status'        => 'Status',
            'client-secret' => 'Client Geheim',
            'client-secret-info' => 'Voeg hier je geheime sleutel toe',
        ],
    ],

    'resources' => [
        'title'             => 'Betaling',
    ],
];
