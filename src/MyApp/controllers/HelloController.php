<?php

namespace MyApp\controllers;

use \neo\controller\Controller;

class HelloController extends Controller
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
