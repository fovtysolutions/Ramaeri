<?php
return [
    'id' => 'banners',
    'folder' => 'core',
    'name' => 'Banners',
    'desc' => 'Customize system interface',
    'icon' => 'typcn typcn-user',
    'color' => '#28abf5',
    'require' => true,
    'position' => 2000,
    'menu' => [
        'tab' => 1,
        'type' => 'top',
        'position' => 2000,
        'name' => 'Banners',
        'sub_menu' => [
            [
                'id' => 'banners',
                'name' => 'Home Banners',
                'position' => 1000,
                'icon' => 'typcn typcn-shopping-cart',
                'color' => '#28abf5',
                'require' => true,
            ],
            [
                'id' => 'productBanners',
                'name' => 'Product Banners',
                'position' => 2000,
                'icon' => 'typcn typcn-shopping-cart',
                'color' => '#28abf5',
                'require' => true,
            ]
        ]
    ]
];