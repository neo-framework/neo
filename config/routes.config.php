<?php

/**
 * Neo Framework
 *
 * @link https://neo-framework.github.io
 * @copyright Copyright (c) 2016 YouniS Bensalah <younis.bensalah@gmail.com>
 * @license MIT
 */

return [
    'routes' => [

        '/' => [
            'method' => 'GET',
            'action' => 'index',
            'controller' => 'HelloWorld'
        ],

        '/about' => [
            'method' => 'GET',
            'action' => 'about',
            'controller' => 'HelloWorld'
        ]

    ]
];
