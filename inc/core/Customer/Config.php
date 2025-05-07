<?php
return [
    'id' => 'customer',
    'folder' => 'core',
    'name' => 'Customer',
    'desc' => 'Customize system interface',
    'icon' => 'typcn typcn-user',
    'color' => '#28abf5',
    'require' => true,
    'position' => 3000,
    'menu' => [
        'tab' => 1,
        'type' => 'top',
        'position' => 3000,
        'name' => 'Customer',
        'sub_menu' => [
            [
                'id' => 'product',
                'name' => 'Product',
                'position' => 1000,
                'icon' => 'typcn typcn-shopping-cart',
                'color' => '#28abf5',
                'require' => true,
            ]
        ]
    ]
];