<?php

namespace App\Models;

use T4\Orm\Model;

/**
 * Class Article
 * @package App\Models
 * Класс Article
 * Схема таблицы
 */
class Article
    extends Model
{

    static protected $schema = [
        'columns' => [
            '__id'      => ['type'  => 'pk'],
            'title'     => ['type'  => 'string'],
            'text'      => ['type'  => 'text'],
            'dateTime'  => ['type'  => 'datetime']
        ]
    ];

}