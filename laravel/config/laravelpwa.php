<?php

return [
    'name' => 'SOPyFIVE',
    'manifest' => [
        'name' => env('APP_NAME', 'SOPyFIVE'),
        'short_name' => 'SOP&FIVE',
        'start_url' => '/',
        'background_color' => '#ffffff',
        'theme_color' => '#7D525E',
        'display' => 'standalone',
        'orientation'=> 'any',
        'status_bar'=> '#7D525E',
        'icons' => [
            '32x32' => [
                'path' => '/pwa/32.png',
                'purpose' => 'any'
            ],
            '72x72' => [
                'path' => '/pwa/72.png',
                'purpose' => 'any'
            ],
            '96x96' => [
                'path' => '/pwa/96.png',
                'purpose' => 'any'
            ],
            '128x128' => [
                'path' => '/pwa/128.png',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => '/pwa/144.png',
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => '/pwa/152.png',
                'purpose' => 'any'
            ],
            '192x192' => [
                'path' => '/pwa/192.png',
                'purpose' => 'any maskable'
            ],
            '384x384' => [
                'path' => '/pwa/384.png',
                'purpose' => 'any maskable'
            ],
            '512x512' => [
                'path' => '/pwa/512.png',
                'purpose' => 'any maskable'
            ],
        ],
        'splash' => [
            '640x1136' => '/pwa/640x1136.png',
            '750x1334' => '/pwa/750x1334.png',
            '828x1792' => '/pwa/828x1792.png',
            '1125x2436' => '/pwa/1125x2436.png',
            '1242x2208' => '/pwa/1242x2208.png',
            '1242x2688' => '/pwa/1242x2688.png',
            '1536x2048' => '/pwa/1536x2048.png',
            '1668x2224' => '/pwa/1668x2224.png',
            '1668x2388' => '/pwa/1668x2388.png',
            '2048x2732' => '/pwa/2048x2732.png',
        ],
        'shortcuts' => [
            [
                'name' => 'Mercado',
                'description' => 'Compra suplementos para el SOP',
                'url' => '/market/home',
                'icons' => [
                    "src" => "/images/icons/icon-72x72.png",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Entrar',
                'description' => 'Autenticarse',
                'url' => '/login'
            ],
            [
                'name' => 'Encuesta',
                'description' => 'Participa en el sorteo',
                'url' => '/encuesta'
            ]
        ],
        'custom' => []
    ]
];
