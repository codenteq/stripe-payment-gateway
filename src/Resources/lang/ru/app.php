<?php

return [
    'stripe' => [
        'name'          => 'Stripe',
        'payment'       => 'Платежный шлюз Stripe',
        'title'         => 'Банк или кредитная карта',
        'description'   => 'Stripe',

        'system' => [
            'title'              => 'Заголовок',
            'description'        => 'Описание',
            'image'              => 'Логотип',
            'status'             => 'Статус',
            'client-secret'      => 'Секрет клиента',
            'client-secret-info' => 'Добавьте ваш секретный ключ здесь',
        ],
    ],

    'resources' => [
        'title'             => 'Платеж',
    ],
];
