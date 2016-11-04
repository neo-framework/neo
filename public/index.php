<?php

session_start();

define('ROOT_DIR', realpath(__DIR__ . '/..'));

require ROOT_DIR . '/vendor/autoload.php';

neo\App::instance(ROOT_DIR)->run();
