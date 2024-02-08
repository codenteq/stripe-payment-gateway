<?php

return [
    'stripe' => [
        'name'          => 'Stripe',
        'payment'       => 'Stripe支払いゲートウェイ',
        'title'         => '銀行またはクレジットカード',
        'description'   => 'Stripe',

        'system' => [
            'title'              => 'タイトル',
            'description'        => '説明',
            'image'              => 'ロゴ',
            'status'             => 'ステータス',
            'client-secret'      => 'クライアントシークレット',
            'client-secret-info' => 'ここに秘密鍵を追加してください',
        ],
    ],

    'resources' => [
        'title'             => '支払い',
    ],
];
