<?php

namespace App\Models;

/**
 * Class Category
 * @package App\Models
 * @property string $title
 */
class Category
{

    static protected $schema =[
        'table' => 'categories',
        'columns' => [
            'title' => ['type' => 'string']
        ]
    ];

    static protected $extensions = ['tree'];

}