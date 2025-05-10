<?php
return [
    'id' => 'shiprockets',
    'folder' => 'core',
    'name' => 'Ship Provider',
    'desc' => 'Customize system interface',
    'icon' => 'typcn typcn-user',
    'color' => '#28abf5',
    'require' => true,
    'position' => 6000,
    'menu' => [
        'tab' => 1,
        'type' => 'top',
        'position' => 6000,
        'name' => 'Shiprockets',
        'sub_menu' => [
            [
                'id' => 'shiprockets',
                'name' => 'Setup Credentials',
                'position' => 1000,
                'icon' => 'typcn typcn-shopping-cart',
                'color' => '#28abf5',
                'require' => true,
            ],
        ]
    ]
];