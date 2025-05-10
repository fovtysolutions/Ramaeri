<?php
return [
    'id' => 'blogcategorys',
    'folder' => 'core',
    'name' => 'Blogs',
    'desc' => 'Customize system interface',
    'icon' => 'typcn typcn-user',
    'color' => '#28abf5',
    'require' => true,
    'position' => 6000,
    'menu' => [
        'tab' => 1,
        'type' => 'top',
        'position' => 6000,
        'name' => 'Blog',
        'sub_menu' => [
            [
                'id' => 'blogcategorys',
                'name' => 'Categorys',
                'position' => 1000,
                'icon' => 'typcn typcn-shopping-cart',
                'color' => '#28abf5',
                'require' => true,
            ],
            [
                'id' => 'blogs',
                'name' => 'Blog',
                'position' => 2000,
                'icon' => 'typcn typcn-shopping-cart',
                'color' => '#28abf5',
                'require' => true,
            ]
        ]
    ]
];