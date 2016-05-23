<?php

namespace App\Controllers;


use App\Models\Category;
use T4\Mvc\Controller;

class Categories
    extends Controller
{

    public function actionDefault()
    {
        $this->data->tree = Category::findAllTree();
    }

    public function actionAdd()
    {
        $this->data->tree = Category::findAllTree();
    }

    public function actionSave($category)
    {
        $newCategory = new Category();
        $newCategory->fill($category);
        $newCategory->save();
        $this->redirect('/categories');
    }

    public function actionDelete($id)
    {
        $item = Category::findByPK($id);
        if ($item) {
            $item->delete();
        }
        $this->redirect('/categories');
    }

    public function actionUp($id)
    {
        $item = Category::findByPK($id);
        if (empty($item)) {
            $this->redirect('/categories');
        }
        $sibling = $item->getPrevSibling();
        if (!empty($sibling)) {
            $item->insertBefore($sibling);
        }
        $this->redirect('/categories');
    }
    public function actionDown($id)
    {
        $item = Category::findByPK($id);
        if (empty($item))
            $this->redirect('/categories');
        $sibling = $item->getNextSibling();
        if (!empty($sibling)) {
            $item->insertAfter($sibling);
        }
        $this->redirect('/categories');
    }

}