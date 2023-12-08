<?php
return [
    'backend' => [
        'frontName' => 'admin_rv652c'
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'b5b7da31093e79137e96db89a131a73f'
    ],
    'db' => [
        'table_prefix' => 'm2_',
        'connection' => [
            'default' => [
                'host' => 'mysql',
                'dbname' => 'magento_db',
                'username' => 'magento_user',
                'password' => 'dB1{_zF-S=ku:W@l',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '69d_'
            ],
            'page_cache' => [
                'id_prefix' => '69d_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'test.local'
    ],
    'install' => [
        'date' => 'Fri, 08 Dec 2023 16:58:57 +0000'
    ]
];
