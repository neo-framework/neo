<?php

namespace MyApp\controllers;

use \neo\controller\Controller;

class HelloController extends Controller
{

    public function index_action()
    {
        return '<h1>Wake up, Neo...</h1>';
    }

}
