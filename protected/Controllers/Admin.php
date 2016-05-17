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

    /**
     * @param int $id
     */
    public function actionOne($id)
    {
        $this->data->article = Article::findByPK($id);
    }

    public function actionSave()
    {

    }

    public function actionAdd()
    {

    }

    /**
     * @param int $id
     */
    public function actionDelete($id)
    {
        Article::findByPK($id)->delete();
        $this->redirect('/admin');
    }
}