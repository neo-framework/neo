<?php

session_start();

define('ROOT_DIR', realpath(__DIR__ . '/..'));

require ROOT_DIR . '/vendor/autoload.php';

try {
    neo\core\App::instance(ROOT_DIR)->run();
} catch (Exception $e) {
    die(neo\core\App::format_exception($e));
}
