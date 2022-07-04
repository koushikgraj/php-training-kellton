<?php

return [
    'defaults' => [
        'guard' => 'api',
        'passwords' => 'users',
    ],



    'guards' => [
        'api' => [
            'driver' => 'jwt',
            'provider' => 'users',
        ],
    ],

    'providers' => [
        'users' => [
            'driiver' => 'eloquent',
            'modela' => \App\Models\User::class
        ]
    ]
];
