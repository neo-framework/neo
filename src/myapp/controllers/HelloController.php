<?php

namespace myapp\controllers;

use \neo\core\controller\Controller;

class HelloController extends Controller
{

    public function index_action()
    {
        // create a view from template
        $wakeup = $this->view('wakeup');

        // assign some data
        $wakeup->assign([ 'hacker' => 'Neo' ]);

        // render and return
        return $wakeup->render();
    }

}
