<?php

namespace awesome\controllers;

use \neo\core\controller\Controller;
use \awesome\models\ArticleRepository;

class IndexController extends Controller
{

    private $article_repo;

    public function __construct(ArticleRepository $article_repo)
    {
        $this->article_repo = $article_repo;
    }

    public function indexAction()
    {
        return $this->view('layout')
                ->assign(['article' => $this->view('article')
                    ->assign($this->article_repo->getArticle())])
                ->render();
    }

}
