<?php

return [
    'stripe' => [
        'info'          => 'ストライプ支払い方法 安全で迅速な支払いオプション。',
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
