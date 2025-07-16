<?php
use Apie\DoctrineEntityDatalayer\DoctrineEntityDatalayer;

return [
    'cms' => [
        'dashboard_template' => 'apie/dashboard',
    ],
    'doctrine' => [
        //'build_once' => true,
        'connection_params' => [
            'driver' => 'pdo_sqlite',
            'path' => base_path("db.sqlite"),
        ]
    ],
    'datalayers' => [
        'default_datalayer' => DoctrineEntityDatalayer::class,
    ],
    'bounded_contexts' => [],
    'scan_bounded_contexts' => [
        'search_path' => base_path('domains/'),
        'search_namespace' => 'Domains\\',
    ],
    'maker' => [
        'target_path' => base_path('domains/'),
        'target_namespace' => 'Domains\\',
    ],
];
