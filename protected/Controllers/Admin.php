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

    public function actionSave($article)
    {
        if (empty($article['__id'])) {
            $newArticle = new Article();
            $newArticle
                ->fill($article)
                ->save();
        } else {
            $editArticle = Article::findByPK($article['__id']);
            $editArticle->title = $article['title'];
            $editArticle->text = $article['text'];
            $editArticle->save();
        }
        $this->redirect('/admin');
    }

    public function actionAdd()
    {

    }

    public function actionEdit($id)
    {
        $this->data->article = Article::findByPK($id);

    }

    /**
     * @param int $id
     */
    public function actionDelete($id)
    {
        $article = Article::findByPK($id);
        if (!empty($article)) {
            $article->delete();
        }
        $this->redirect('/admin');
    }
}