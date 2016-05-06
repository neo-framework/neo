<?php

/*!
 * Neo Framework (https://neo-framework.github.io)
 *
 * Copyright (c) 2016 YouniS Bensalah <younis.bensalah@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'services' => [

        'database_connection' => function ($c) {
            $config = $c['config']['mysql'];
            try {
                $pdo = new \PDO(
                    \sprintf('mysql:host=%s;port=%s;dbname=%s;charset=%s',
                        $config['host'],
                        $config['port'],
                        $config['dbname'],
                        $config['charset']),
                    $config['username'],
                    $config['password'],
                    [
                        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
                    ]);
            } catch (\PDOException $e) {
                throw new \neo\exceptions\CoreException(
                    \sprintf('PDOException: (%s) %s', $e->getCode(), $e->getMessage()));
            }
            return $pdo;
        },

        'config' => function ($c) {
            $global = require __DIR__ . '/global.config.php';
            $mysql = require __DIR__ . '/mysql.config.php';
            $routes = require __DIR__ . '/routes.config.php';
            return \array_merge($global, $mysql, $routes);
        },

        'neo/router' => function ($c) {
            // TODO
        },

        'neo/controller_factory' => function ($c) {
            // TODO
        },

        'neo/view_factory' => function ($c) {
            // TODO
        },

        'neo/model_factory' => function ($c) {
            // TODO
        },

        'vendor/klein' => function ($c) {
            return new \Klein\Klein();
        },

        'vendor/endobox' => function ($c) {
            return \endobox\endobox::get();
        }

    ]
];
