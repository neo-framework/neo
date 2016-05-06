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
    'global' => [

        // PHP timezone
        // Possible values: http://php.net/manual/en/timezones.php
        'timezone' => 'Europe/Paris',

        // Whether or not to enable logging.
        'logging' => true,

        // Write log messages to this file.
        'log_file' => 'log/neo.log',

        // Log level threshold (i.e., any messages below that level will not be logged)
        // Possible values: DEBUG, INFO, NOTICE, WARNING, ERROR, CRITICAL, ALERT, EMERGENCY
        'log_level' => 'DEBUG',

        // Whether or not to enable debug mode.
        // In debug mode any errors/exceptions are printed.
        // You better disable this in production!
        'debug' => false

    ]
];
