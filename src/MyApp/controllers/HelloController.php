<?php

/**
 * Neo Framework
 *
 * @link https://neo-framework.github.io
 * @copyright Copyright (c) 2016 YouniS Bensalah <younis.bensalah@gmail.com>
 * @license MIT
 */

namespace MyApp\controllers;

use \neo\controller\AbstractController;

class HelloController extends AbstractController
{

    public function index_action()
    {
        return '<h1>Hello</h1>';
    }

    public function about_action()
    {
        return '<h1>Neo Framework</h1>';
    }

}
