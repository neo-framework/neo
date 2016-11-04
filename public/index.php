<?php

session_start();

define('ROOT_DIR', realpath(__DIR__ . '/..'));

require ROOT_DIR . '/vendor/autoload.php';

try {
    neo\App::instance(ROOT_DIR)->run();
} catch (Exception $e) {
    die(neo\App::format_exception($e));
}
