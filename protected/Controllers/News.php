<?php

namespace App\Controllers;


use T4\Core\Config;
use T4\Mvc\Controller;

class News
    extends Controller
{
    public function actionDefault()
    {
        return $this->actionAll();
    }

    public function actionAll()
    {
        $news = new \App\Models\News();
        $this->data->news = new Config($news->findAll());
    }

    public function actionOne($id)
    {
        $article = new \App\Models\News();
        $this->data->article = $article->findOne($id);
    }

    public function actionLast()
    {
        $atricle = new \App\Models\News();
        $this->data->article = $atricle->getLast();
    }

}