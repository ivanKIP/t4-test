<?php

namespace App\Controllers;


use App\Models\Article;
use T4\Mvc\Controller;

class Admin
    extends Controller
{

    public function actionDefault()
    {
        $this->data->news = Article::findAll();
    }

    public function actionAdd()
    {

    }

}