<?php
return [
    'id' => 'allProducts',
    'folder' => 'core',
    'name' => 'Products',
    'desc' => 'Customize system interface',
    'icon' => 'typcn typcn-user',
    'color' => '#28abf5',
    'require' => true,
    'position' => 2000,
    'menu' => [
        'tab' => 1,
        'type' => 'top',
        'position' => 2000,
        'name' => 'Products',
        'sub_menu' => [
            [
                'id' => 'allProducts',
                'name' => 'All Products',
                'position' => 1000,
                'icon' => 'typcn typcn-shopping-cart',
                'color' => '#28abf5',
                'require' => true,
            ],
            [
                'id' => 'categories',
                'name' => 'All Categories',
                'position' => 2000,
                'icon' => 'typcn typcn-shopping-cart',
                'color' => '#28abf5',
                'require' => true,
            ],
        ]
    ]
];