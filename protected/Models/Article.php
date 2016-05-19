<?php

namespace App\Models;

use T4\Orm\Model;

/**
 * Class Article
 * @package App\Models
 * Класс Article
 * Схема таблицы
 * @property string $title
 * @property string $text
 * @property string $dateTime
 */
class Article
    extends Model
{

    static protected $schema = [
        'columns' => [
            'title'     => ['type'  => 'string'],
            'text'      => ['type'  => 'text'],
            'dateTime'  => ['type'  => 'datetime']
        ]
    ];

}