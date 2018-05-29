<?php

use neo\core\Neo;
use neo\core\controller\Controller;
use neo\core\controller\ControllerFactory;

session_start();

define('ROOT_DIR', realpath(__DIR__ . '/..'));

require ROOT_DIR . '/vendor/autoload.php';


$app = Neo::create(ROOT_DIR);


// Poor Man's DI
//
// This wiring method should be enough for simple projects where dependencies can be newed up without too much effort.
$app->registerControllerFactory(new class implements ControllerFactory {
    public function create(string $type) : Controller {
        switch ($type) {

            // ...

            default:
                // fallback to default constructor
                return new $type();
        }
    }
});


// PHP-DI container
//
// Use this wiring method when things are getting nasty and you want to use the cool features of a DI container.
// Don't forget to run "composer require php-di/php-di" in that case!
/*
$container = DI\ContainerBuilder::buildDevContainer();
$neo->registerControllerFactory(new class($container) implements ControllerFactory {
    private $container;

    public function __construct($container) {
        $this->container = $container;
    }

    public function create(string $type) : Controller {
        return $this->container->get($type);
    }
});
*/


$app->run();
