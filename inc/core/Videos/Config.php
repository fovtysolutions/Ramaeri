<?php
return [
    'id' => 'videos',
    'folder' => 'core',
    'name' => 'Videos',
    'desc' => 'Customize system interface',
    'icon' => 'typcn typcn-user',
    'color' => '#28abf5',
    'require' => true,
    'position' => 5000,
    'menu' => [
        'tab' => 1,
        'type' => 'top',
        'position' => 5000,
        'name' => 'Videos',
        'sub_menu' => [
            [
                'id' => 'videos',
                'name' => 'All Videos',
                'position' => 1000,
                'icon' => 'typcn typcn-shopping-cart',
                'color' => '#28abf5',
                'require' => true,
            ],
        ]
    ]
];