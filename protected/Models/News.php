<?php

namespace App\Models;

use T4\Core\Config;

class News
    extends Config
{

    protected $data = ROOT_PATH_PROTECTED . DIRECTORY_SEPARATOR . 'NewsDB.php';

    public function findAll():array
    {
        $news = include_once($this->data);
        return $news;
    }

    public function findOne($id):Article
    {
        return new Article($this->findAll()[$id]);
    }

    public function getLast()
    {
        return end($this->findAll());
    }

}