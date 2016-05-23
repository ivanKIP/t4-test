<?php

namespace App\Models;


use T4\Orm\Model;

/**
 * Class Product
 * @package App\Models
 * @property string $name
 * @property int $price
 * @property \App\Models\Category $category
 */
class Product
    extends Model
{

    static protected $schema = [
        'columns'   => [
            'name'          => ['type' => 'string'],
            'price'         => ['type' => 'int'],
            '__category_id' => ['type' => 'link']
        ],
        'relations' => [
            'category' => ['type' => self::BELONGS_TO, 'model' => Category::class]
        ]
    ];

}