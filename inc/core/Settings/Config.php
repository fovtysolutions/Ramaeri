<?php
return [
    'id' => 'settings',
    'folder' => 'core',
    'name' => 'Settings',
    'desc' => 'Customize system interface',
    'icon' => 'typcn typcn-user',
    'color' => '#28abf5',
    'require' => true,
    'position' => 7000,
    'menu' => [
        'tab' => 1,
        'type' => 'top',
        'position' => 7000,
        'name' => 'Settings',
        'sub_menu' => [
            [
                'id' => 'settings',
                'name' => 'Order Settings',
                'position' => 1000,
                'icon' => 'typcn typcn-shopping-cart',
                'color' => '#28abf5',
                'require' => true,
            ],
            [
                'id' => 'smtpsettings',
                'name' => 'SMTP Settings',
                'position' => 2000,
                'icon' => 'typcn typcn-shopping-cart',
                'color' => '#28abf5',
                'require' => true,
            ],
            [
                'id' => 'generalsettings',
                'name' => 'General Settings',
                'position' => 3000,
                'icon' => 'typcn typcn-shopping-cart',
                'color' => '#28abf5',
                'require' => true,
            ],
            [
                'id' => 'paymentmethods',
                'name' => 'Payment Methods',
                'position' => 4000,
                'icon' => 'typcn typcn-shopping-cart',
                'color' => '#28abf5',
                'require' => true,
            ],
            [
                'id' => 'socialmedias',
                'name' => 'Social Media Login',
                'position' => 5000,
                'icon' => 'typcn typcn-shopping-cart',
                'color' => '#28abf5',
                'require' => true,
            ],
        ]
    ]
];