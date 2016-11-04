<?php

return [
    'routes' => [

        '/' => [
            'method' => 'GET',
            'action' => 'index_action',
            'controller' => '\\MyApp\\controllers\\HelloController'
        ],

        '/about' => [
            'method' => 'GET',
            'action' => 'about_action',
            'controller' => '\\MyApp\\controllers\\HelloController'
        ]

    ]
];
