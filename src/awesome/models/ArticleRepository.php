<?php

namespace awesome\models;

class ArticleRepository
{

    public function getArticle() : array
    {
        // this could come from your database - use your imagination ^^
        return [
            'title' => "How to cook a meal",
            'subtitle' => "Burn your house down in 45 seconds.",
            'author' => "Thomas A. Anderson",
            'date' => "2018-05-29",
            'body' => "Microwaving is a very convenient cooking method which requires little skill..."
        ];
    }

}
